<?php

function is_client()
{
    $logged_in = get_logged_in_user();
    return $logged_in && $logged_in->isClient() ? $logged_in->client->id : NULL;
}

function get_logged_in_user($guard = null)
{
    return auth($guard)->user();
}

function is_user_logged_id()
{
    $logged_in = get_logged_in_user();
    return $logged_in ? $logged_in->id : NULL;
}

function belongs_to_logged_in_user($user_id)
{
    $logged_in = get_logged_in_user();
    return $logged_in && $user_id == $logged_in->id;
}