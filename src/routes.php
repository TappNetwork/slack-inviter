<?php

Route::post('/', 'SlackInviteController@store')
    ->name('slack-invite.store');
