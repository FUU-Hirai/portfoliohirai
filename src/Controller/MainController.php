<?php


namespace App\Controller;


class MainController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
    }

    public function index()
    {
        $a = 'a';
        $this->set($a,'a');
    }

    public function about()
    {

    }

    public function contact()
    {

    }
}
