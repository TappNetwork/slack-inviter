<?php

namespace Tapp\SlackInviter\Api;

use GuzzleHttp\Client;

class SlackInviterApiClient
{
    private $client;
    private $access_token;

    public function __construct($access_token, $base_uri)
    {
        $this->access_token = $access_token;

        $this->client = new Client([
            'base_uri' => "https://{$base_uri}/api/",
        ]);
    }

    public function invite($email)
    {
        $response = $this->client->json('POST', 'users.admin.invite', [
            'form_params' => [
                'token' => $this->access_token,
                'email' => $email,
            ]
        ]);

        $x = json_decode($response->getBody()->getContents());
        dd($x);
    }
}
