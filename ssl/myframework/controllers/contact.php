<?php

class contact extends AppController
{
    public function __construct()
    {
    }

    public function index()
    {
        // default method
        $this->getView('header');
        $this->getView('navigation', array("pagename"=>"contact"));
        $this->getView('contact');
        $this->getView('footer');
    }

    public function formRecv()
    {
        $this->getView('header');
        $this->getView('navigation', array("pagename"=>"contact"));
        $this->getView('formRecv');
        $this->getView('footer');
    }
}
