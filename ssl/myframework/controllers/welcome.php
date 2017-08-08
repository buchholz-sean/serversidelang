<?php

class welcome extends AppController
{
    public function __construct()
    {
    }

    public function index()
    {
        // default method
        $this->getView('header');
        $this->getView('navigation');
        $this->getView('welcome');
        $this->getView('modal');
        $this->getView('footer');
    }
}
