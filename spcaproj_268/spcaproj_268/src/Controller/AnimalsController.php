<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;
/**
 * Animals Controller
 *
 * @property \App\Model\Table\AnimalsTable $Animals
 * @method \App\Model\Entity\Animal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnimalsController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {

        $this->viewBuilder()->setLayout('nativeadmin');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $animals = $this->paginate($this->Animals);

        $this->set(compact('animals'));
    }

    /**
     * View method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $animal = $this->Animals->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('animal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $animal = $this->Animals->newEmptyEntity();
        if ($this->request->is('post')) {
            $animal = $this->Animals->patchEntity($animal, $this->request->getData());
            if ($this->Animals->save($animal)) {
                $this->Flash->success(__('The animal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animal could not be saved. Please, try again.'));
        }
        $this->set(compact('animal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $animal = $this->Animals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $animal = $this->Animals->patchEntity($animal, $this->request->getData());
            if ($this->Animals->save($animal)) {
                $this->Flash->success(__('The animal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animal could not be saved. Please, try again.'));
        }
        $this->set(compact('animal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $animal = $this->Animals->get($id);
        if ($this->Animals->delete($animal)) {
            $this->Flash->success(__('The animal has been deleted.'));
        } else {
            $this->Flash->error(__('The animal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
