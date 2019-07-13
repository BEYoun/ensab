<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pfe Controller
 *
 * @property \App\Model\Table\PfeTable $Pfe
 */
class PfeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Filieres', 'Users']
        ];
        $pfe = $this->paginate($this->Pfe);

        $this->set(compact('pfe'));
        $this->set('_serialize', ['pfe']);

        $user_id = $this->Auth->user('id');
        $role = $this->Auth->user('role');
        $this->set(compact('user_id'));
        $this->set(compact('role'));
        
    }

    /**
     * View method
     *
     * @param string|null $id Pfe id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pfe = $this->Pfe->get($id, [
            'contain' => ['Filieres', 'Users']
        ]);

        $this->set('pfe', $pfe);
        $this->set('_serialize', ['pfe']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pfe = $this->Pfe->newEntity();
        if ($this->request->is('post')) {
            $pfe = $this->Pfe->patchEntity($pfe, $this->request->data);
            if ($this->Pfe->save($pfe)) {
                $this->Flash->success(__('The {0} has been saved.', 'Pfe'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Pfe'));
            }
        }
        $filieres = $this->Pfe->Filieres->find('list', ['limit' => 200]);
        $users = $this->Pfe->Users->find('list', ['limit' => 200]);
        $this->set(compact('pfe', 'filieres', 'users'));
        $this->set('_serialize', ['pfe']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pfe id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pfe = $this->Pfe->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pfe = $this->Pfe->patchEntity($pfe, $this->request->data);
            if ($this->Pfe->save($pfe)) {
                $this->Flash->success(__('The {0} has been saved.', 'Pfe'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Pfe'));
            }
        }
        $filieres = $this->Pfe->Filieres->find('list', ['limit' => 200]);
        $users = $this->Pfe->Users->find('list', ['limit' => 200]);
        $this->set(compact('pfe', 'filieres', 'users'));
        $this->set('_serialize', ['pfe']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pfe id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pfe = $this->Pfe->get($id);
        if ($this->Pfe->delete($pfe)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Pfe'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Pfe'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
