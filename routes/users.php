<?php

Route::get('users', function()
{
    $users = BBS\User::all();

    return View::make('users')->with('users', $users);
});
