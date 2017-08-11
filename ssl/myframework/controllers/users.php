<?php

class users extends AppController
{
    public function __construct()
    {
        if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) {
        } else {
            header("Location:/welcome");
        }
    }

    public function index()
    {
        // default method
        $this->getView('header');
        $this->getView('navigation', array("pagename"=>"profile"));
        $this->getView('userHome');
        $this->getView('footer');
    }
}
