<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
use Cake\Mailer\Email;



class SuperadminController extends AppController {
    public function beforeFilter(Event $event)
    {
        // allow only login, forgotpassword
        $this->Auth->authorize = 'controller';
        $usrole = $this->Auth->user('role');
        if($usrole!='superadmin')
        {

            $this->Flash->error(__('Vous ne pouvez pas acceder a ce lien'));
            return $this->redirect(
                ['controller' => 'Users', 'action' => 'logout']
            );
        }
        $this->Auth->deny();

    }
    public function home()
    {
        $connection = ConnectionManager::get('default');
        $res2 = $connection
                            ->execute(
                                'SELECT * FROM personnalisation'
                            )->fetchAll();
                   
                    if (count($res2)>0) {
                        $this->set('disabeld',"false");
                    }else{
                        $this->set('disabeld',"true");
                    }
        if ($this->request->is('post')) {
                $extensionUV=pathinfo($this->request->data['logoUV']['name'] , PATHINFO_EXTENSION);
                $extensionET=pathinfo($this->request->data['logoET']['name'] , PATHINFO_EXTENSION);
                move_uploaded_file($this->request->data['logoUV']['tmp_name'],  WWW_ROOT . 'logo/' . DS . 'logoUV.'. $extensionUV);
                move_uploaded_file($this->request->data['logoET']['tmp_name'],  WWW_ROOT . 'logo/' . DS .'logoET.'. $extensionET);
                    $result1 = $connection
                            ->execute(
                                'SELECT count(*) FROM personnalisation'
                            )->fetch();
                   
                    if ($result1[0]>0) {
                        if ($this->request->getData('theme')=='custom') {
                            $result2 = $connection
                            ->execute(
                                'UPDATE personnalisation SET nomUV = ? , nomET = ? , annee_scolaire = ? , nav_color = ? , side_color = ? , logoUV = ? , logoET = ? , email = ? , theme = ? WHERE ID=1',
                                [$this->request->getData('universite'),$this->request->getData('etablissement'),date('Y'),$this->request->getData('NavColor'),$this->request->getData('SideColor'),'logoUV.'.$extensionUV,'logoET.'.$extensionET,$this->request->getData('email'),NULL]
                            );
                        }else{
                            
                            $result2 = $connection
                            ->execute(
                                'UPDATE personnalisation SET nomUV = ? , nomET = ? , annee_scolaire = ? , nav_color = ? , side_color = ? , logoUV = ? , logoET = ? , email = ? , theme = ? WHERE ID=1',
                                [$this->request->getData('universite'),$this->request->getData('etablissement'),date('Y'),NULL,NULL,'logoUV.'.$extensionUV,'logoET.'.$extensionET,$this->request->getData('email'),$this->request->getData('theme')]
                            );
                        }
                        
                    }else{
                        $resultup1 = $connection
                                                    ->execute(
                                                        'ALTER TABLE personnalisation AUTO_INCREMENT = 1'
                                                    ); 
                        if ($this->request->getData('theme')=='custom') {
                                   

                        $result = $connection
                            ->execute(
                                'INSERT INTO personnalisation (nomUV,nomET,annee_scolaire,nav_color,side_color,logoUV,logoET,email,theme) VALUES (:UV,:ET,:annee,:nav,:side,:logouv,:logoet,:mail,:theme)',
                                ['UV' => $this->request->getData('universite'),
                                 'ET' => $this->request->getData('etablissement'),
                                 'annee' => date('Y'),
                                 'nav' => $this->request->getData('NavColor'),
                                 'side' => $this->request->getData('SideColor'),
                                 'logouv' => 'logoUV.'.$extensionUV,
                                 'logoet' => 'logoET.'.$extensionET,
                                 'mail' => $this->request->getData('email'),
                                 'theme' => NULL
                                ]
                            );
                        }else{
                            $result = $connection
                            ->execute(
                                'INSERT INTO personnalisation (nomUV,nomET,annee_scolaire,nav_color,side_color,logoUV,logoET,email,theme) VALUES (:UV,:ET,:annee,:nav,:side,:logouv,:logoet,:mail,:theme)',
                                ['UV' => $this->request->getData('universite'),
                                 'ET' => $this->request->getData('etablissement'),
                                 'annee' => date('Y'),
                                 'nav' => NULL,
                                 'side' => NULL,
                                 'logouv' => 'logoUV.'.$extensionUV,
                                 'logoet' => 'logoET.'.$extensionET,
                                 'mail' => $this->request->getData('email'),
                                 'theme' => $this->request->getData('theme')
                                ]
                            );
                        }

                    }
                    if ($this->request->getData('validate')=='true') {
                        return $this->redirect(['action'=>'depart']);
                    }else{
                        $data = file_get_contents('./Universite.json'); 
                        $universites = json_decode($data, true); 
                        
                       foreach ($universites as $universite) {

                            if ($universite['nameUV']==$this->request->getData('universite')) {
                                foreach ($universite['etablissements'] as $etablissement) {
                                    if ($etablissement['nameET']==$this->request->getData('etablissement')) {
                                        $i=0;
                                        $resultdel1 = $connection
                                                    ->execute(
                                                        'DELETE FROM modules'
                                                    );
                                        $resultdel1 = $connection
                                                    ->execute(
                                                        'DELETE FROM groupes'
                                                    );
                                        $resultdel1 = $connection
                                                    ->execute(
                                                        'DELETE FROM semestres'
                                                    );
                                        $resultdel2 = $connection
                                                    ->execute(
                                                        'DELETE FROM niveaus'
                                                    );
                                        $resultdel3 = $connection
                                                    ->execute(
                                                        'DELETE FROM filieres'
                                                    );
                                        $resultdel1 = $connection
                                                    ->execute(
                                                        'DELETE FROM departements'
                                                    );
                                        $resultdel2 = $connection
                                                    ->execute(
                                                        'DELETE FROM sitedepartements'
                                                    );
                                         
                                         $resultup1 = $connection
                                                                ->execute(
                                                                    'ALTER TABLE groupes AUTO_INCREMENT = 1'
                                                                );
                                         $resultup1 = $connection
                                                    ->execute(
                                                        'ALTER TABLE semestres AUTO_INCREMENT = 1'
                                                    );
                                        $resultup2 = $connection
                                                    ->execute(
                                                        'ALTER TABLE niveaus AUTO_INCREMENT = 1'
                                                    );
                                        $resultup1 = $connection
                                                    ->execute(
                                                        'ALTER TABLE modules AUTO_INCREMENT = 1'
                                                    );
                                        $resultup1 = $connection
                                                    ->execute(
                                                        'ALTER TABLE departements AUTO_INCREMENT = 1'
                                                    );
                                        $resultup2 = $connection
                                                    ->execute(
                                                        'ALTER TABLE sitedepartements AUTO_INCREMENT = 1'
                                                    );
                                        $resultup3 = $connection
                                                    ->execute(
                                                        'ALTER TABLE filieres AUTO_INCREMENT = 1'
                                                    );
                                        
                                        foreach ($etablissement['departement'] as $departement) {
                                            $i++;
                                            echo(sizeof($departement['filiere']));
                                            $result4 = $connection
                                                        ->execute(
                                                            'INSERT INTO departements (nom_departement,nb_filiere,refer_depart) VALUES (:nd,:nb,:rd)',
                                                            ['nd' => $departement['nom'],
                                                             'nb' => sizeof($departement['filiere']),
                                                             'rd' => $i 
                                                            ]
                                                        );
                                            $result5 = $connection
                                                        ->execute(
                                                            'INSERT INTO sitedepartements (nom,chefDepartement) VALUES (:nd,:cd)',
                                                            ['nd' => $departement['nom'],
                                                             'cd' => $departement['chef']
                                                            ]
                                                        );
                                            
                                            foreach ($departement['filiere'] as $filiere) {
                                                $result6 = $connection
                                                        ->execute(
                                                            'INSERT INTO filieres (libile,refer_depart) VALUES (:l,:rd)',
                                                            ['l' => $filiere['nom'],
                                                             'rd' => $i
                                                            ]
                                                        );

                                                foreach ($filiere['niveaux'] as $fil) {
                                                    $result7 = $connection
                                                        ->execute(
                                                            'INSERT INTO niveaus (libile) VALUES (:l)',
                                                            ['l' => $fil['libelle']]
                                                        );

                                                    $resu3 = $connection
                                                            ->execute(
                                                            'SELECT id FROM niveaus WHERE libile = :l',
                                                            ['l' => $fil['libelle']]
                                                        )->fetch('assoc');

                                                    
                                                    foreach ($fil['Semestre'] as $semestre) {
                                                       $resu9 = $connection
                                                                ->execute(
                                                                            'INSERT INTO semestres (libile,niveaus_id) VALUES (:l,:n)',
                                                                            [   'l' => $semestre['libelle'],
                                                                                'n' => $resu3['id']
                                                                            ]
                                                                        );
                                                        foreach ($semestre['module'] as $module) {

                                                            $res11 = $connection
                                                                        ->execute('
                                                                                SELECT id FROM groupes WHERE niveaus_id = :n AND filiere_id = :f',
                                                                            [   'n' => $resu3['id'],
                                                                                'f' => $resu3['id']
                                                                            ]
                                                                        )->fetch('assoc');
                                                               $res12 = $connection
                                                                        ->execute('
                                                                                SELECT id FROM semestres WHERE niveaus_id = :n
                                                                            ',
                                                                            [   'n' => $resu3['id']
                                                                            ]
                                                                        )->fetch('assoc');        
                                                             $resu10 = $connection
                                                                    ->execute(
                                                                                'INSERT INTO modules (libile,groupe_id,semestre_id) VALUES (:l,:g,:s)',
                                                                                [   'l' => $module['libelle'],
                                                                                    'g' => $res11['id'],
                                                                                    's' => $res12['id']
                                                                                ]
                                                                            );
                                                        }
                                                       
                                                    }
                                                }
                                               
                                            }
                                            
                                        }
                                    }
                                
                                }
                            }
                        }  
                        return $this->redirect(['action'=>'home']);
                    }
            
        }
    }

    public function login()
    {
        
    }

    public function service()
    {
        if ($this->request->is('post')) {
            $arr_data = array();
            $data=array(
                'bibliotheque' => $this->request->getData('biblio'),
                'bureau' => $this->request->getData('bo'),
                'finance' => $this->request->getData('finance'),
                'personnel' => $this->request->getData('personnel'),
                'scolarite' => $this->request->getData('scolarite'),
                'stock' => $this->request->getData('stock'),
                'stage' => $this->request->getData('stage'),
                'ingenieur' => $this->request->getData('ingenieur')

            );
            array_push($arr_data,$data);
            $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
            file_put_contents('./Services.json', $jsondata);           
        }
    }

    public function email()
    {
        $connection = ConnectionManager::get('default');
        if ($this->request->is('post')) {
                            $resultdir = $connection
                                                    ->execute(
                                                        'DELETE FROM mail_smtp'
                                                    );
                            $result = $connection
                                        ->execute(
                                            'INSERT INTO mail_smtp (host,port,username,password) VALUES (:host,:port,:user,:pass)',
                                            ['host' => $this->request->getData('hostSmtp'),
                                             'port' => $this->request->getData('portSmtp'),
                                             'user' => $this->request->getData('usernameSmtp'),
                                             'pass' => $this->request->getData('mdpSmtp') 
                                            ]
                                        );
            Email::configTransport('pers', [
                'host' => $this->request->getData('hostSmtp'),
                'port' => $this->request->getData('portSmtp'),
                'username' => $this->request->getData('usernameSmtp'),
                'password' => $this->request->getData('mdpSmtp'),
                'className' => 'Smtp'
            ]);
            $this->set('modify','true');
        }
    }
    public function site()
    {
        $connection = ConnectionManager::get('default');
         $res = $connection
                        ->execute(
                            'SELECT nomET FROM personnalisation WHERE ID=1'
                        )->fetch('assoc');
        $this->set('nometab',$res['nomET']);

        if ($this->request->is('post')) {
             if (!empty($this->request->getData('pres')) and !empty($this->request->getData('mission')) and !empty($this->request->getData('admission'))) {
                            $resultdir = $connection
                                                    ->execute(
                                                        'DELETE FROM presentation_site'
                                                    );
                            $result = $connection
                                        ->execute(
                                            'INSERT INTO presentation_site
                                             (presentation,missions,admission) VALUES (:pres,:miss,:admiss)',
                                            ['pres' => $this->request->getData('pres'),
                                             'miss' => $this->request->getData('mission'),
                                             'admiss' => $this->request->getData('admission') 
                                            ]
                                        );
            }
            if (!empty($this->request->getData('nDir')) and !empty($this->request->getData('pDir')) and !empty($this->request->getData('motDir'))) {
                            $resultdir = $connection
                                                    ->execute(
                                                        'DELETE FROM direction'
                                                    );
                            $result = $connection
                                        ->execute(
                                            'INSERT INTO direction (nom,prenom,mot_direction) VALUES (:nom,:pre,:mot)',
                                            ['nom' => $this->request->getData('nDir'),
                                             'pre' => $this->request->getData('pDir'),
                                             'mot' => $this->request->getData('motDir') 
                                            ]
                                        );
            }
            if (!empty($this->request->getData('facebook')) and !empty($this->request->getData('twitter')) and !empty($this->request->getData('google')) and !empty($this->request->getData('linkedin')) ) {
                            $resultrs = $connection
                                                    ->execute(
                                                        'DELETE FROM reseaux_sociaux'
                                                    );
                            $result = $connection
                                        ->execute(
                                            'INSERT INTO reseaux_sociaux (facebook,twitter,google,linkedin) VALUES (:f,:t,:g,:l)',
                                            ['f' => $this->request->getData('facebook'),
                                             't' => $this->request->getData('twitter'),
                                             'g' => $this->request->getData('google'), 
                                             'l' => $this->request->getData('linkedin')
                                            ]
                                        );
            }
            if (!empty($this->request->getData('info')) ) {
                $infos=$this->request->getData('info');
                            $resultrs = $connection
                                                    ->execute(
                                                        'DELETE FROM formations'
                                                    );

                            foreach ($infos as $info) {
                                
                                $result = $connection
                                        ->execute(
                                            'INSERT INTO formations (titre,presentation,objectif,debouchet,condidat,processus,organisation) VALUES (:titre,:presentation,:objectif,:debouchet,:condidat,:processus,:organisation)',
                                            ['titre' => $info['fname'],
                                             'presentation' => $info['presentation'],
                                             'objectif' => $info['objectif'], 
                                             'debouchet' => $info['debouchet'],
                                             'condidat' => $info['condidat'],
                                             'processus' => $info['processus'],
                                             'organisation' => $info['organisation']
                                            ]
                                        );
                            }
            }
            if (!empty($this->request->getData('Adresse')) and !empty($this->request->getData('emailAddress')) and !empty($this->request->getData('phone')) and !empty($this->request->getData('phone2')) and !empty($this->request->getData('faxe')) ) {
                            $resultrs = $connection 
                                                    ->execute(
                                                        'DELETE FROM contacts'
                                                    );
                            $result = $connection
                                        ->execute(
                                            'INSERT INTO contacts (telephone1,telephone2,telephone3,mail,adresse) VALUES (:tel1,:tel2,:tel3,:mail,:add)',
                                            ['tel1' => $this->request->getData('phone'),
                                             'tel2' => $this->request->getData('phone2'),
                                             'tel3' => $this->request->getData('faxe'), 
                                             'mail' => $this->request->getData('emailAddress'),
                                             'add'  => $this->request->getData('Adresse')
                                            ]
                                        );
            } 
            $this->set('modify','true');   
            return $this->redirect(['action'=>'site']);
        }
    }
    public function filiere()
    {
        $connection = ConnectionManager::get('default');
        $departements=$this->request->session()->read('departements');
        $dep_nom=array();
        foreach ($departements as $dep) {
            array_push($dep_nom, $dep['nom']);
        }
                        
        $this->set('dep_nom',$dep_nom);
                                                       
                            
                            
                        $resultup3 = $connection
                                                    ->execute(
                                                        'SELECT refer_depart FROM departements'
                                                    )->fetchAll();
                            $dep_ref= array();
                            foreach ($resultup3 as $ref) {
                                array_push($dep_ref, $ref[0]);
                            }
                            $this->set('refer_depart',$dep_ref); 
        if ($this->request->is('post')) {

            if (!empty($this->request->getData('filiere')) ) {
                                            
                $filieres=$this->request->getData('filiere');
                $this->request->session()->write('fil',$filieres);
                            
                                    foreach ($filieres as $filiere) {
                                        
                                        $resu = $connection
                                                ->execute(
                                                            'INSERT INTO filieres (libile,refer_depart) VALUES (:l,:rd)',
                                                            ['l' => $filiere['nom'],
                                                             'rd' => intval($filiere['departe'])]
                                                        );


                            }
                            $j=0;
                            
                                        $result11 = $connection
                                                ->execute(
                                                            'SELECT count(*) as cmpt, refer_depart FROM filieres GROUP BY refer_depart'
                                                        )->fetchAll('assoc');

                                        var_dump($result11);
                                         
                            foreach ($result11 as $fil) {
                                $resup = $connection
                                    ->execute(
                                        'UPDATE departements SET nb_filiere = ?  WHERE refer_depart=?',
                                        [$fil['cmpt'],$fil['refer_depart']]
                                    );                                
                                     
                             } 
                           
                            
            }
            return $this->redirect(['action'=>'niveau']);
        }
    }
    public function depart()
    {
        $connection = ConnectionManager::get('default');
        if ($this->request->is('post')) {
            if (!empty($this->request->getData('departement')) ) {
                $this->request->session()->write('departements',$this->request->getData('departement'));
                $departements=$this->request->getData('departement');
                                        $resultdel1 = $connection
                                                    ->execute(
                                                        'DELETE FROM modules'
                                                    );
                                        $resultdel1 = $connection
                                                    ->execute(
                                                        'DELETE FROM groupes'
                                                    );
                                        $resultdel1 = $connection
                                                    ->execute(
                                                        'DELETE FROM semestres'
                                                    );
                                        $resultdel2 = $connection
                                                    ->execute(
                                                        'DELETE FROM niveaus'
                                                    );
                                        $resultdel3 = $connection
                                                    ->execute(
                                                        'DELETE FROM filieres'
                                                    );
                                        $resultdel1 = $connection
                                                    ->execute(
                                                        'DELETE FROM departements'
                                                    );
                                        $resultdel2 = $connection
                                                    ->execute(
                                                        'DELETE FROM sitedepartements'
                                                    );
                                         
                                         $resultup1 = $connection
                                                                ->execute(
                                                                    'ALTER TABLE groupes AUTO_INCREMENT = 1'
                                                                );
                                         $resultup1 = $connection
                                                    ->execute(
                                                        'ALTER TABLE semestres AUTO_INCREMENT = 1'
                                                    );
                                        $resultup2 = $connection
                                                    ->execute(
                                                        'ALTER TABLE niveaus AUTO_INCREMENT = 1'
                                                    );
                                        $resultup1 = $connection
                                                    ->execute(
                                                        'ALTER TABLE modules AUTO_INCREMENT = 1'
                                                    );
                                        $resultup1 = $connection
                                                    ->execute(
                                                        'ALTER TABLE departements AUTO_INCREMENT = 1'
                                                    );
                                        $resultup2 = $connection
                                                    ->execute(
                                                        'ALTER TABLE sitedepartements AUTO_INCREMENT = 1'
                                                    );
                                        $resultup3 = $connection
                                                    ->execute(
                                                        'ALTER TABLE filieres AUTO_INCREMENT = 1'
                                                    );
                                        $i=0;
                                        
                            foreach ($departements as $departement) {
                                            $i++;

                                            $result4 = $connection
                                                        ->execute(
                                                            'INSERT INTO departements (nom_departement,nb_filiere,refer_depart) VALUES (:nd,:nb,:rd)',
                                                            ['nd' => $departement['nom'],
                                                             'nb' => 0,
                                                             'rd' => $i 
                                                            ]
                                                        );
                                            $result5 = $connection
                                                        ->execute(
                                                            'INSERT INTO sitedepartements (nom,chefDepartement) VALUES (:nd,:cd)',
                                                            ['nd' => $departement['nom'],
                                                             'cd' => $departement['chef']
                                                            ]
                                                        );

                                        }
                return $this->redirect(['action'=>'filiere']);            
                                        
            }
        }
    }
    public function module()
    {
        $connection = ConnectionManager::get('default');
        $filieres=$this->request->session()->read('fil');
        $niveaux=$this->request->session()->read('niveaux');
        $res1 = $connection
                                                ->execute(
                                                            'SELECT * FROM groupes'
                                                        )->fetchAll('assoc');
        $this->set('groupes',$res1);
        $this->set('filieres',$filieres);
        $this->set('niveaux',$niveaux);
        if ($this->request->is('post')) {
            $modules=$this->request->getData('module');
            foreach ($modules as $module) {
                
                                    $resu1 = $connection
                                                ->execute(
                                                            'SELECT niveaus_id FROM groupes WHERE id = ?',
                                                            [$module['groupes']]
                                                        )->fetch('assoc');
                                    $resu2 = $connection
                                                ->execute(
                                                            'INSERT INTO semestres (libile,niveaus_id) VALUES (:l,:n)',
                                                            [   'l' => $module['semestre'],
                                                                'n' => $resu1['niveaus_id']
                                                            ]
                                                        );
                                    $resu12 = $connection
                                                ->execute(
                                                            'SELECT id FROM semestres WHERE libile=?',
                                                            [$module['semestre']]
                                                        )->fetch('assoc');
                                    $resu2 = $connection
                                                ->execute(
                                                            'INSERT INTO modules (libile,groupe_id,semestre_id) VALUES (:l,:g,:s)',
                                                            [   'l' => $module['nom'],
                                                                'g' => $module['groupes'],
                                                                's' => $resu12['id']
                                                            ]
                                                        );

            }
        return $this->redirect(['action'=>'home']);            

        }
    }
    public function niveau()
    {
        $connection = ConnectionManager::get('default');
        $filieres=$this->request->session()->read('fil');
        $this->set('filieres',$filieres);
        if ($this->request->is('post')) {
                $niveaux=$this->request->getData('niveau');
                $this->request->session()->write('niveaux',$niveaux);
                            $resultdel1 = $connection
                                                    ->execute(
                                                        'DELETE FROM groupes'
                                                    );
                            $resultdel2 = $connection
                                                    ->execute(
                                                        'DELETE FROM niveaus'
                                                    );

                                
                            $resultup1 = $connection
                                                    ->execute(
                                                        'ALTER TABLE groupes AUTO_INCREMENT = 1'
                                                    );
                            $resultup2 = $connection
                                                    ->execute(
                                                        'ALTER TABLE niveaus AUTO_INCREMENT = 1'
                                                    );
                $i=0;
                foreach ($niveaux as $niveau) {
                    
                    
                    $i++;
                    $extension=pathinfo($niveau['emploi'] , PATHINFO_EXTENSION);
                    move_uploaded_file($niveau['emploi'],  WWW_ROOT . 'niveaux/' . DS . 'emploi'.$i.'.'.$extension);
                    
                            $resu = $connection
                                                ->execute(
                                                            'INSERT INTO niveaus (libile) VALUES (:l)',
                                                            ['l' => $niveau['nom']]
                                                        );
                            $resu1 = $connection
                                                ->execute(
                                                            'SELECT id FROM filieres WHERE libile=?',
                                                            [$niveau['fil']]
                                                        )->fetch('assoc');
                            
                            
                            $resu2 = $connection
                                                ->execute(
                                                            'INSERT INTO groupes (niveaus_id,filiere_id,photo_emploi) VALUES (:n,:f,:p)',
                                                            [   'n' => $i,
                                                                'f' => $resu1['id'],
                                                                'p' => 'emploi'.$i.'.'.$extension
                                                            ]
                                                        );

                }
               
        return $this->redirect(['action'=>'module']);
        }
    }


}

?>