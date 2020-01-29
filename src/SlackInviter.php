<?php

namespace Tapp\SlackInviter;

use GuzzleHttp\Client;

class SlackInviter
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = new Client([
            'base_uri' => 'https://'.config('slack-inviter.team_url').'/api/',
        ]);
    }

    public function invite($email)
    {
        $inviteResponse = $this->client->request('POST', 'users.admin.invite', [
            'form_params' => [
                'token' => config('slack-inviter.oauth_token'),
                'email' => $email,
                'set_active' => true
            ]
        ]);

        return json_decode($inviteResponse->getBody()->getContents());
    }
}
