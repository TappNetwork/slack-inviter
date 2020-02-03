<?php

namespace Tapp\SlackInviter\Http\Controllers;

use SlackInviter;
use Tapp\SlackInviter\Http\Requests\SlackInviteRequest;
use Illuminate\Routing\Controller;

class SlackInviteController extends Controller
{
    public function store(SlackInviteRequest $request)
    {
        $response = SlackInviter::invite($request->input('email'));

        return $response;
    }
}
