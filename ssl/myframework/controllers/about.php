<?php

class about extends AppController
{
    public function __construct()
    {
    }

    public function index()
    {
        // default method
        $this->getView('header');
        $this->getView('navigation');
        $this->getView('about');
        $this->getView('footer');
    }
    public function mission()
    {
    }
}
