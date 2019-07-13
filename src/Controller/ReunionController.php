<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reunion Controller
 *
 * @property \App\Model\Table\ReunionTable $Reunion
 */
class ReunionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $reunion = $this->paginate($this->Reunion);

        $this->set(compact('reunion'));
        $this->set('_serialize', ['reunion']);
    }

    /**
     * View method
     *
     * @param string|null $id Reunion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reunion = $this->Reunion->get($id, [
            'contain' => []
        ]);

        $this->set('reunion', $reunion);
        $this->set('_serialize', ['reunion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reunion = $this->Reunion->newEntity();
        if ($this->request->is('post')) {
            $reunion = $this->Reunion->patchEntity($reunion, $this->request->data);
            if ($this->Reunion->save($reunion)) {
                $this->Flash->success(__('The {0} has been saved.', 'Reunion'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Reunion'));
            }
        }
        $this->set(compact('reunion'));
        $this->set('_serialize', ['reunion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Reunion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reunion = $this->Reunion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reunion = $this->Reunion->patchEntity($reunion, $this->request->data);
            if ($this->Reunion->save($reunion)) {
                $this->Flash->success(__('The {0} has been saved.', 'Reunion'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Reunion'));
            }
        }
        $this->set(compact('reunion'));
        $this->set('_serialize', ['reunion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Reunion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reunion = $this->Reunion->get($id);
        if ($this->Reunion->delete($reunion)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Reunion'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Reunion'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
