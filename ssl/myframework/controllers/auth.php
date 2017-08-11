<?php

class auth extends AppController
{
    public function __construct()
    {
    }

    public function login()
    {
        if (@$_REQUEST["username"] && @$_REQUEST["password"]) {
            if (@$_REQUEST["username"]=="sean" && @$_REQUEST["password"]=="root") {
                $_SESSION["loggedin"] = 1;
                header("Location:/users");
            } else {
                header("Location:/welcome?msg=Invalid Login");
            }
        } else {
            header("Location:/welcome?msg=Invalid Login");
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location:/welcome");
    }
}
