<?php

namespace Tapp\SlackInviter\Api;

use GuzzleHttp\Client;

class SlackInviterApiClient
{
    private $client;

    public function __construct($access_token, $base_uri)
    {
        $this->client = new Client([
            'base_uri' => "https://{$base_uri}/api/",
            'headers' => [
                'Authorization' => "Bearer $access_token",
            ],
        ]);
    }

    public function invite($email)
    {
        $response = $this->client->request('POST', "users.admin.invite?email={$email}", [
            'headers' => [
                'Content-Type' => "application/json; charset=utf-8",
            ],
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
