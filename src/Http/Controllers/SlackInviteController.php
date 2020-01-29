<?php

namespace Tapp\SlackInviter\Http\Controllers;

use Tapp\SlackInviter\Http\Requests\SlackInviteRequest;
use Illuminate\Routing\Controller;

class SlackInviteController extends Controller
{
    public function store(SlackInviteRequest $request)
    {
        dd($request->input('email'));
    }
}
