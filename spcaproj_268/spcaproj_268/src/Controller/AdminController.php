<?php

namespace App\Controller;
use Cake\Event\EventInterface;
class AdminController extends AppController{

    public function beforeFilter(EventInterface $event)
    {

        $this->viewBuilder()->setLayout('nativeadmin');
    }

    public function test()
    {

    }

    public function testtwo()
    {
        
    }
}