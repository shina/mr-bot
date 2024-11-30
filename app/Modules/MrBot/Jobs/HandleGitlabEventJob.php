<?php declare(strict_types=1);

namespace App\Modules\MrBot\Jobs;

use App\Modules\MrBot\Jobs\HandleGitlabEventJob\MergeRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;

class HandleGitlabEventJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    public function __construct(public array $payload) {}

    public function handle(): void
    {
        $mr = new MergeRequest();
        $mr->setFromGitlabEvent($this->payload);

        $mr->id = MergeRequest::query()
            ->where('mr_id', $mr->mr_id)
            ->first(['id'])
            ?->id;
        $mr->exists = $mr->id !== null;

        $mr->save();
    }
}
