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
        $token = $this->app['config']['slack-inviter.oauth_token'];

        $base_uri = $this->app['config']['slack-inviter.url'];

        $team_id = $this->app['config']['slack-inviter.app_id'];

        $channels = $this->app['config']['slack-inviter.channels'];

        $client = new SlackInviterApiClient($token, $base_uri, $team_id, $channels);

        return new SlackInviter($client);
    }

    public function __call($method, $parameters)
    {
        return $this->slack()->$method(...$parameters);
    }
}
