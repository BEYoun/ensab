<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Security;
use Cake\Routing\Router;

/**
 * Documentstage Controller
 *
 * @property \App\Model\Table\DocumentstageTable $Documentstage
 */
class DocumentstageController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $documentstage = $this->paginate($this->Documentstage);

        $this->set(compact('documentstage'));
       
        $this->set('_serialize', ['documentstage']);
    }

    /**
     * View method
     *
     * @param string|null $id Documentstage id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentstage = $this->Documentstage->get($id, [
            'contain' => []
        ]);

        $this->set('documentstage', $documentstage);
        $this->set('_serialize', ['documentstage']);

       
        $baseUrl = Router::url('/', true);
        $this->set('baseUrl', $baseUrl);

    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentstage = $this->Documentstage->newEntity();
        if ($this->request->is('post')) {
            $myname = $this->request->getData()['file']['name'];
			$mytmp = $this->request->getData()['file']['tmp_name'];
			$myext = substr(strchr($myname, "."), 1);
            $mypath = "uploads".DS."documentstages".DS.Security::hash($myname).".".$myext;
            $documentstage->nom = $myname;
			$documentstage->lien = $mypath;

            $documentstage = $this->Documentstage->patchEntity($documentstage, $this->request->data);
          //  if ($this->Documentstage->save($documentstage)) {
            if(move_uploaded_file($mytmp, WWW_ROOT.$mypath)){
                $this->Documentstage->save($documentstage);
                $this->Flash->success(__('The {0} has been saved.', 'Documentstage'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Documentstage'));
            }
        }
        $this->set(compact('documentstage'));
        $this->set('_serialize', ['documentstage']);
    }
/*

    public function upload()
	{
		if($this->request->is('post')){
        //    $ID_patient = $this->request->getData();
			$myname = $this->request->getData()['file']['name'];
			$mytmp = $this->request->getData()['file']['tmp_name'];
			$myext = substr(strchr($myname, "."), 1);
			$mypath = "uploads".DS."documentstages".DS.Security::hash($myname).".".$myext;
			$file = $this->Documentstage->newEntity();
			 $file->nom = $myname;
			$file->lien = $mypath;
      $file = $this->Documentstage->patchEntity($file, $this->request->getData());		
    	$file->cree_le = date('Y-m-d H:i:s');
			if(move_uploaded_file($mytmp, WWW_ROOT.$mypath)){
				$this->Documentstage->save($file);
				return $this->redirect(['action' => 'index']);
			}
		}
    }
    
*/
    /**
     * Edit method
     *
     * @param string|null $id Documentstage id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentstage = $this->Documentstage->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentstage = $this->Documentstage->patchEntity($documentstage, $this->request->data);
            if ($this->Documentstage->save($documentstage)) {
                $this->Flash->success(__('The {0} has been saved.', 'Documentstage'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Documentstage'));
            }
        }
        $this->set(compact('documentstage'));
        $this->set('_serialize', ['documentstage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Documentstage id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentstage = $this->Documentstage->get($id);
        if ($this->Documentstage->delete($documentstage)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Documentstage'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Documentstage'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
