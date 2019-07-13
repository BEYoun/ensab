<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;



class HeaderController extends AppController {
    public function index() {
    	$connection = ConnectionManager::get('default');
        $res2 = $connection
                            ->execute(
                                'SELECT * FROM personnalisation'
                            )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole=$this->Auth->user('role');
        $this->set('role',$usrole);
        $this->render('/Espaces/Admin/home');
    }




}

?>