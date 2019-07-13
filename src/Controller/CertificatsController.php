<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
/**
 * Certificats Controller
 *
 * @property \App\Model\Table\CertificatsTable $Certificats
 */
class CertificatsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
                            ->execute(
                                'SELECT * FROM personnalisation'
                            )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $certificats = $this->paginate($this->Certificats);

        $this->set(compact('certificats'));
        $this->set('_serialize', ['certificats']);
        $this->render('/Espaces/resposcolarites/Certificats/index');
    }

    public function search()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
                            ->execute(
                                'SELECT * FROM personnalisation'
                            )->fetch('assoc');
        $this->set('personnalisation',$res2);
       $certificat = $this->Certificats->get($this->request->data['search'], [
            'contain' => ['Etudiants']
        ]);

        $this->set('certificat', $certificat);
        $this->set('_serialize', ['certificat']);

        $this->render('/Espaces/resposcolarites/Certificats/view');    
    }
    /**
     * View method
     *
     * @param string|null $id Certificat id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
                            ->execute(
                                'SELECT * FROM personnalisation'
                            )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $certificat = $this->Certificats->get($id, [
            'contain' => ['Etudiants']
        ]);

        

        $this->set('certificat', $certificat);
        $this->set('_serialize', ['certificat']);

        $this->render('/Espaces/resposcolarites/Certificats/view');
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
                            ->execute(
                                'SELECT * FROM personnalisation'
                            )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $certificat = $this->Certificats->newEntity();
        if ($this->request->is('post')) {
            $certificat = $this->Certificats->patchEntity($certificat, $this->request->data);
            if ($this->Certificats->save($certificat)) {
                $this->Flash->success(__('The {0} has been saved.', 'Certificat'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Certificat'));
            }
        }
        $etudiants = $this->Certificats->Etudiants->find('list', ['limit' => 200]);
        $this->set(compact('certificat', 'etudiants'));
        $this->set('_serialize', ['certificat']);
        $this->render('/Espaces/resposcolarites/Certificats/add');
    }

    /**
     * Edit method
     *
     * @param string|null $id Certificat id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
                            ->execute(
                                'SELECT * FROM personnalisation'
                            )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $certificat = $this->Certificats->get($id, [
            'contain' => ['Etudiants']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $certificat = $this->Certificats->patchEntity($certificat, $this->request->data);
            if ($this->Certificats->save($certificat)) {
                $this->Flash->success(__('The {0} has been saved.', 'Certificat'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Certificat'));
            }
        }
        $etudiants = $this->Certificats->Etudiants->find('list', ['limit' => 200]);
        $this->set(compact('certificat', 'etudiants'));
        $this->set('_serialize', ['certificat']);
        $this->render('/Espaces/resposcolarites/Certificats/edit');
    }

    /**
     * Delete method
     *
     * @param string|null $id Certificat id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
                            ->execute(
                                'SELECT * FROM personnalisation'
                            )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $this->request->allowMethod(['post', 'delete']);
        $certificat = $this->Certificats->get($id);
        if ($this->Certificats->delete($certificat)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Certificat'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Certificat'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
