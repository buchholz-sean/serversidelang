<?php

class users extends AppController
{
    public function __construct()
    {
    }

    public function index()
    {
        // default method
        $this->getView('header');
        $this->getView('navigation', array("pagename"=>"users"));
        $this->getView('login');
        $this->getView('footer');
    }

    public function ajaxParams()
    {
        if (@$_REQUEST["username"]=="sean" && @$_REQUEST["password"]=="root") {
            echo "welcome";
        } else {
            echo "wrong login";
        }
    }

    public function userHome()
    {
        $this->getView('header');
        $this->getView('navigation');
        $this->getView('userHome');
        $this->getView('footer');
    }

    public function invalidLogin()
    {
        $this->getView('header');
        $this->getView('navigation');
        $this->getView('invalidLogin');
        $this->getView('footer');
    }
}
