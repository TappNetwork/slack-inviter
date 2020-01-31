<?php

namespace Tapp\SlackInviter\Api;

use GuzzleHttp\Client;

class SlackInviterApiClient
{
    private $client;
    private $access_token;
    private $team_id;
    private $channels;

    public function __construct($access_token, $base_uri, $team_id, $channels)
    {
        $this->access_token = $access_token;

        $this->team_id = $team_id;

        $this->channels = $channels;

        $this->client = new Client([
            'base_uri' => "https://{$base_uri}/api/",
        ]);
    }

    public function invite($email)
    {
        $response = $this->client->request('POST', 'admin.users.invite', [
            'form_params' => [
                'token' => $this->access_token,
                'channels' => $this->channels,
                'team_id' => $this->team_id,
                'email' => $email,
                'set_active' => true
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
