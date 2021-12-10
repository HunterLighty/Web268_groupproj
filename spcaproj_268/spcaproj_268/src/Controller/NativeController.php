<?php

namespace App\Controller;
use Cake\Event\EventInterface;
class NativeController extends AppController{

    public function beforeFilter(EventInterface $event)
    {

        $this->viewBuilder()->setLayout('nativeuser');
    }

    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
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