<?php

use App\Modules\MrBot\Http\Controllers\GitlabEventController;
use App\Modules\MrBot\Http\Middleware\GitlabAppKeyMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'api',
    GitlabAppKeyMiddleware::class
])
    ->post('/gitlab-event', GitlabEventController::class);
