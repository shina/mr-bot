<?php

namespace App\Modules\MrBot\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\MrBot\Jobs\HandleGitlabEventJob;
use Illuminate\Http\Request;

class GitlabEventController extends Controller
{
    public function __invoke(Request $request)
    {
        dispatch(new HandleGitlabEventJob($request->post()));
    }
}
