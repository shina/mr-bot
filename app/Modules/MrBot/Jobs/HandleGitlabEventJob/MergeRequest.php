<?php
declare(strict_types=1);

namespace App\Modules\MrBot\Jobs\HandleGitlabEventJob;

class MergeRequest extends \App\Modules\MrBot\MergeRequest
{

    public function setFromGitlabEvent(array $data): static
    {
        $this->mr_id = $data['object_attributes']['id'] ?? null;

        return $this;
    }

}
