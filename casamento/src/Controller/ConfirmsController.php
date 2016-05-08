<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Confirms Controller
 *
 * @property \App\Model\Table\ConfirmsTable $Confirms
 */
class ConfirmsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $confirms = $this->paginate($this->Confirms);

        $this->set(compact('confirms'));
        $this->set('_serialize', ['confirms']);
    }

    /**
     * View method
     *
     * @param string|null $id Confirm id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $confirm = $this->Confirms->get($id, [
            'contain' => []
        ]);

        $this->set('confirm', $confirm);
        $this->set('_serialize', ['confirm']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $confirm = $this->Confirms->newEntity();
        if ($this->request->is('post')) {
            $confirm = $this->Confirms->patchEntity($confirm, $this->request->data);
            if ($this->Confirms->save($confirm)) {
                $this->Flash->success(__('The confirm has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The confirm could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('confirm'));
        $this->set('_serialize', ['confirm']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Confirm id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $confirm = $this->Confirms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $confirm = $this->Confirms->patchEntity($confirm, $this->request->data);
            if ($this->Confirms->save($confirm)) {
                $this->Flash->success(__('The confirm has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The confirm could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('confirm'));
        $this->set('_serialize', ['confirm']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Confirm id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $confirm = $this->Confirms->get($id);
        if ($this->Confirms->delete($confirm)) {
            $this->Flash->success(__('The confirm has been deleted.'));
        } else {
            $this->Flash->error(__('The confirm could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
