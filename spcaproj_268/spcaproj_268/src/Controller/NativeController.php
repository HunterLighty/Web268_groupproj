<?php

namespace App\Controller;
use Cake\Event\EventInterface;
class NativeController extends AppController{

    public function beforeFilter(EventInterface $event)
    {

        $this->viewBuilder()->setLayout('nativeuser');
    }

    public function test()
    {

    }

    public function testtwo()
    {
        
    }

    public function index()
    {

    }

    public function aboutus()
    {
        
    }
}