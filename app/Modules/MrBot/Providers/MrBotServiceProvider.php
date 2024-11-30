<?php

namespace App\Modules\MrBot\Providers;

use App\Modules\MrBot\Http\Controllers\GitlabEventController;
use App\Modules\MrBot\Http\Middleware\GitlabAppKeyMiddleware;
use Illuminate\Support\ServiceProvider;

class MrBotServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'mr-bot');
        $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');

        $this->app->bind(GitlabAppKeyMiddleware::class, function() {
            return new GitlabAppKeyMiddleware(config('mr-bot.gitlab-app-key'));
        });
    }

    public function boot(): void
    {

    }
}
