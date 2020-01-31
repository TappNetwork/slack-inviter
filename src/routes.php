<?php

Route::post('/invite', 'SlackInviteController@store')
    ->name('slack-invite.store');
