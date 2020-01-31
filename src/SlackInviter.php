<?php

namespace Tapp\SlackInviter;

class SlackInviter
{
    private $api;

    public function __construct($client)
    {
        $this->api = $client;
    }

    public function invite($email)
    {
        $invite = $this->api->invite($email);
    }
}
