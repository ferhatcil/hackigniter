<?php

function userIsActive()
{
    $t = &get_instance();
    $user = $t->session->userdata("UserSession");

    if ($user)
        return $user;
    else
        return false;
}

function idorUserIsActive()
{
    $t = &get_instance();
    $user = $t->session->userdata("user_session_idor");

    if ($user)
        return $user;
    else
        return false;

}

function csrfUserIsActive()
{
    $t = &get_instance();
    $user = $t->session->userdata("user_session_csrf");

    if ($user)
        return $user;
    else
        return false;

}

function xssUserIsActive()
{
    $t = &get_instance();
    $user = $t->session->userdata("user_session_xss");

    if ($user)
        return $user;
    else
        return false;

}

function missingFunctionIsActive()
{
    $t = &get_instance();
    $user = $t->session->userdata("user_session_missingFunction");

    if ($user)
        return $user;
    else
        return false;

}