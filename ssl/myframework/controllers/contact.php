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
        $this->getView('navigation');
        $this->getView('contact');
        $this->getView('footer');
    }
}
