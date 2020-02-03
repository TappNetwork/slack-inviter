<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'prefix' => env('SLACK_INVITER_ROUTE_PREFIX', 'slack-invite'),
    'community_name' => env('SLACK_COMMUNITY_NAME', 'Slack Inviter'),
    'legacy_token' => env('SLACK_LEGACY_TOKEN'),
    'url' => env('SLACK_TEAM_URL'),
];
