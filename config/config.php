<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'prefix' => env('SLACK_INVITER_ROUTE_PREFIX', 'slack-invite'),
    'community_name' => env('SLACK_COMMUNITY_NAME', 'Slack Inviter'),
    'oauth_token' => env('SLACK_OAUTH_TOKEN'),
    'app_id' => env('SLACK_APP_ID'),
    'url' => env('SLACK_TEAM_URL'),
    'channels' => env('SLACK_CHANNELS'),
];
