<?php

namespace App\Controller;
use Cake\Event\EventInterface;
class NativeController extends AppController{

    public function beforeFilter(EventInterface $event)
    {

        $this->viewBuilder()->setLayout('nativeuser');
    }
    

    public function gallery()
    {

    }

    public function grooming()
    {
        
    }

    public function index()
    {

    }

    public function humane()
    {
        
    }
	public function training()
	{
		
	}
	public function locations()
	{
		
	}
}