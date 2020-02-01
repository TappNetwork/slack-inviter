<?php

namespace Tapp\SlackInviter;

use Tapp\SlackInviter\Api\SlackInviterApiClient;

class SlackInviterManager
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function slack()
    {
        return $this->resolve();
    }

    protected function resolve()
    {
        $token = $this->app['config']['slack-inviter.legacy_token'];

        $base_uri = $this->app['config']['slack-inviter.url'];

        $client = new SlackInviterApiClient($token, $base_uri);

        return new SlackInviter($client);
    }

    public function __call($method, $parameters)
    {
        return $this->slack()->$method(...$parameters);
    }
}
