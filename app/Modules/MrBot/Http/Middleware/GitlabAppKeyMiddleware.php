<?php

namespace App\Modules\MrBot\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GitlabAppKeyMiddleware
{

    public function __construct(public string $appKey) {}

    public function handle(Request $request, Closure $next)
    {
        if ($request->header('X-Gitlab-Token') !== $this->appKey) {
            abort(403);
        }

        return $next($request);
    }
}
