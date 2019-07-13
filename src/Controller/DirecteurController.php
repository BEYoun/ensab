<?php

namespace App\Controller;
use Cake\Datasource\ConnectionManager;

use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Event\Event;



class DirecteurController extends AppController {
    public function beforeFilter(Event $event)
    {
        // allow only login, forgotpassword
        $this->Auth->authorize = 'controller';
        $usrole = $this->Auth->user('role');
        if($usrole!='directeur')
        {

            $this->Flash->error(__('Vous ne pouvez pas acceder a ce lien'));
            return $this->redirect(
                ['controller' => 'Users', 'action' => 'logout']
            );
        }
        $this->Auth->deny();

    }
    public function index() {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole=$this->Auth->user('role');
        if($usrole=='directeur') {
            $this->set('role', $usrole);
            $this->render('/Espaces/Directeur/home');
        }
    }



    /////////////////////////// scolarite /////////////////////////

    public function preinscriptionStat()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        return $this->redirect(
                ['controller' => 'resposcolarites', 'action' => 'statistiquesPreinscriptions']
            );
    }

    public function scolariteStat()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {
            return $this->redirect(
                ['controller' => 'resposcolarites', 'action' => 'index']
            );
        }


    }

    public function scolariteGenStat()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {
             return $this->redirect(
                ['controller' => 'resposcolarites', 'action' => 'aitsaidTableauDeBord']
            );
           }
    }

    public function scolariteClasseStat()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {

            return $this->redirect(
                ['controller' => 'resposcolarites', 'action' => 'classetableauDeBord']
            );
        }        
    }

    ////////////////////////////////////////////////////////////////


    //////////////////// finance (suivi commandes) ////////////////

    public function suiviCommandes()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {

            return $this->redirect(
                ['controller' => 'respofinances', 'action' => 'suivicommandes']
            );
        }

    }

    ////////////////////////////////////////////////////////////////


    /////////////////////////// personnel //////////////////////////


    ////// professeurs permanents /////////////////////////////
    public function profPermStat()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {

            return $this->redirect(
                ['controller' => 'respopersonels', 'action' => 'index']
            );
        }
    }

    public function profPermListe()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {

            return $this->redirect(
                ['controller' => 'respopersonels', 'action' => 'permanentsliste']
            );
        }
    }

    public function profPermDepar()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {

            return $this->redirect(
                ['controller' => 'respopersonels', 'action' => 'listerProfsParDepar']
            );
        }        
    }

    ////// professeurs vacataires /////////////////////////////

    public function profVacatListe()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {

            return $this->redirect(
                ['controller' => 'respopersonels', 'action' => 'vacatairesliste']
            );
        }   
    }

    ////// fonctionnaires //////////////////////////////////

    public function fontionnaireListe()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {

            return $this->redirect(
                ['controller' => 'respopersonels', 'action' => 'fonctionnairesliste']
            );
        }         
    }

    public function fonctionnaireServiceListe()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {

            return $this->redirect(
                ['controller' => 'respopersonels', 'action' => 'mouvementService']
            );
        }           
    }
 
    public function fonctionnaireBiblioListe()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {
            
            return $this->redirect(
                                   ['controller' => 'respobiblios', 'action' => 'badrStatistique']
                                   );
        }
    }
    public function stockarticle()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
            $this->paginate = [
            'contain' => ['StockCategories']
            ];
            
            $articles = $this->paginate(TableRegistry::get('Articles')); // WORKING !!!!!!!
            /*  $articles = $this->paginate($this->Articles); */
            
            $this->set(compact('articles'));
            $this->set('_serialize', ['articles']);
            $this->render('/Espaces/Directeur/stockarticle');
    }
    /////////////////////////////////////////////////////////////////
    public function stockcommande()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $connection = ConnectionManager::get('default');
        $commande=$connection->execute('SELECT commandes.id, commandes.delai_limite, commandes.nom, stock_categories.label_cat FROM commandes JOIN stock_categories ON commandes.stock_categorie_id = stock_categories.id')->fetchAll('assoc');
        $this->set('commande',$commande);
        $this->render('/Espaces/Directeur/index_commandes');
    }
    public function viewCommandes($id = null)
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $connection = ConnectionManager::get('default');
        $Atest=TableRegistry::get('commandes');
        $atest = $connection->execute('SELECT commandes.id, commandes.delai_limite, commandes.nom, stock_categories.label_cat FROM commandes JOIN stock_categories ON commandes.stock_categorie_id = stock_categories.id WHERE commandes.id='.$id.' ')->fetchAll('assoc');
        $comm= $connection->execute('SELECT * FROM commande_articles where commande_id="'.$id.'"')->fetchAll('assoc');
        if (!empty($comm)){
            foreach ($comm as  $valeur)
            {
                $var[]=$connection->execute('SELECT label_article FROM articles where id="'.$valeur['article_id'].'"')->fetchAll('assoc');
            }
            $this->set('var', $var);
        }
        $this->set('atest', $atest);
        $this->set('comm', $comm);
        $this->set('_serialize', ['atest']);
        $this->render('/Espaces/Directeur/viewCom');
    }
    
    public function stockfournisseur()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $this->paginate = [
        'contain' => ['StockCategories']
        ];
        $fournisseurs = $this->paginate(TableRegistry::get('Fournisseurs'));
        
        $this->set(compact('fournisseurs'));
        $this->set('_serialize', ['fournisseurs']);
        $this->render('/Espaces/Directeur/index_fournisseurs');
    }
    
    public function viewFournisseurs($id = null)
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $fournisseur = TableRegistry::get('Fournisseurs')->get($id);
        
        $this->set('fournisseur', $fournisseur);
        $this->set('_serialize', ['fournisseur']);
        $this->render('/Espaces/Directeur/view_fournisseurs');
    }
    
    public function stockmagasin()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $magasins = $this->paginate(TableRegistry::get('Magasins'));
        
        $this->set(compact('magasins'));
        $this->set('_serialize', ['magasins']);
        $this->render('/Espaces/Directeur/index_magasins');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * View method
     *
     * @param string|null $id Magasin id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewMagasins($id = null)
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $magasin = TableRegistry::get('Magasins')->get($id, [
                                                       'contain' => ['Mouvements']
                                                       ]);
        
        $this->set('magasin', $magasin);
        $this->set('_serialize', ['magasin']);
        $this->render('/Espaces/Directeur/view_magasins');
    }
    
    public function stockcategorie()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $stockCategories = $this->paginate(TableRegistry::get('StockCategories'));
        
        $this->set(compact('stockCategories'));
        $this->set('_serialize', ['stockCategories']);
        $this->render('/Espaces/Directeur/index_stockcategories');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * View method
     *
     * @param string|null $id Stock Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewStockCategories($id = null)
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $stockCategory = TableRegistry::get('StockCategories')->get($id, [
                                                                    'contain' => []
                                                                    ]);
        
        $this->set('stockCategory', $stockCategory);
        $this->set('_serialize', ['stockCategory']);
        $this->render('/Espaces/Directeur/view_stockcategories');
    }
    
    public function stockmouvement()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $this->paginate = [
        'contain' => ['Magasins', 'Articles']
        ];
        $mouvements = $this->paginate(TableRegistry::get('Mouvements'));
        
        $this->set(compact('mouvements'));
        $this->set('_serialize', ['mouvements']);
        $this->render('/Espaces/Directeur/index_mouvements');
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * View method
     *
     * @param string|null $id Mouvement id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewMouvements($id = null)
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $mouvement = TableRegistry::get('Mouvements')->get($id, [
                                                           'contain' => []
                                                           ]);
        
        $this->set('mouvement', $mouvement);
        $this->set('_serialize', ['mouvement']);
        $this->render('/Espaces/Directeur/view_mouvements');
    }
    
    public function fonctionnaireStage()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $usrole = $this->Auth->user('role');
        if($usrole=='directeur') {
            
            return $this->redirect(
                                   ['controller' => 'respostages', 'action' => 'statiqtiquesCertificatsEtudiants']
                                   );
        }
    }
    
    public function ingenieurListe()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $Laureats=TableRegistry::get('Laureats');
        $laureats = $this->paginate($Laureats);
        
        $this->set(compact('laureats'));
        $this->set('_serialize', ['laureats']);
        $this->render('/Espaces/Directeur/afficherLaureats');
        
    }
    
    public function etatDemandeFctListe()
    {    $ide= null;
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $idUser = $this->Auth->user('id');
        $Foncts = TableRegistry::get('Fonctionnaires');
        $query = $Foncts->find('all')->select('id')->where(['user_id' => $idUser]);
        foreach ($query as $ligne) {
            $ide = $ligne->id;
            break;
        }
        $this->paginate = [
        'contain' => ['Fonctionnaires', 'Documents']
        ];
        $FonctionnairesDocuments = TableRegistry::get('FonctionnairesDocuments');
        $FonctionnairesDocuments = $this->paginate($FonctionnairesDocuments->find("all", array(
                                                                                               "joins" => array(
                                                                                                                array(
                                                                                                                      "table" => "Fonctionnaires",
                                                                                                                      "conditions" => array(
                                                                                                                                            "FonctionnairesDocuments.fonctionnaire_id = Fonctionnaires.id"
                                                                                                                                            )
                                                                                                                      ),
                                                                                                                array(
                                                                                                                      "table" => "Documents",
                                                                                                                      "conditions" => array(
                                                                                                                                            "FonctionnairesDocuments.document_id = Documents.id"
                                                                                                                                            )
                                                                                                                      )
                                                                                                                ),
                                                                                               'conditions' => array(
                                                                                                                     'FonctionnairesDocuments.fonctionnaire_id' => $ide)
                                                                                               )
                                                                                  ));
        $this->set(compact('FonctionnairesDocuments'));
        $this->set('_serialize', ['FonctionnairesDocuments']);
        $this->render('/Espaces/Directeur/etatDemandeFct');
        
    }
    
    function liste2()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
        ->execute(
                  'SELECT * FROM personnalisation'
                  )->fetch('assoc');
        $this->set('personnalisation',$res2);
        $this->render("/Espaces/Directeur/liste2");
    }
    
  
    
    
    }

?>
