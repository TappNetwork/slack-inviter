<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'prefix' => env('SLACK_INVITER_ROUTE_PREFIX', 'slack-invite'),
    'community_name' => env('SLACK_COMMUNITY_NAME', 'Slack Inviter'),
    'oauth_token' => env('SLACK_OAUTH_TOKEN'),
    'client_id' => env('SLACK_CLIENT_ID'),
    'client_secret' => env('SLACK_CLIENT_SECRET'),
    'signing_secret' => env('SLACK_SIGNING_SECRET'),
    'verification_token' => env('SLACK_VERIFICATION_TOKEN'),
    'app_id' => env('SLACK_APP_ID'),
    'team_url '=> env('SLACK_TEAM_URL'),
];
