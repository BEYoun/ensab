<section class="content-header">
  <h1>
    <?php echo __('Concours: '); ?>
    
  </h1>
 <div class="pull-right">
    <?= $this->Html->link(__('Imprimer Fiche'), ['action' => 'printViewPreinscription',$preinscription['id']], ['class'=>'btn btn-info btn-xs']) 
    ?>
  </div> 
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Informations'); ?></h3>
                <div class="box-tools">
                     

                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div style="padding-bottom: 30px; font-size: 16px;">
                <fieldset > 
                    <legend>Informations Personnelles</legend>
                    <div class="form-inline">
                        <?php $image = ltrim(str_replace("\\", "/", $preinscription['image']),'/img'); ?>
                        <?= $this->Html->image($image, ['alt' => 'Image','width'=>'150px','height'=>'150px']); ?>
                    </div>
                    <br>
                    <div class="form-inline">
                            <label class="control-label"><?= __('CNE : ') ?></label>
                            <div class="form-group"><?= $preinscription['cne'] ?></div>
                    </div> 
                    <div class="form-inline">
                                <label class="control-label"><?= __('CIN : ') ?></label>
                                <div class="form-group"><?=h($preinscription['cin'])  ?></div>
                    </div>       
                     <div class="form-inline">   
                             <label class="control-label"><?= __('Nom: ') ?></label>
                              <div class="form-group"><?= h($preinscription['nom_fr']) ?></div>
                    </div>     
                     <div class="form-inline" style="text-align: right;display: block;">
                            <div class="form-group"><?= h($preinscription['nom_ar']) ?></div>
                            <label class="control-label"><?= __(': الاسم العائلي') ?></label>
                                
                     </div>
                     <div class="form-inline">    
                             <label class="control-label"><?= __('Prénom: ') ?></label>
                              <div class="form-group"><?= h($preinscription['prenom_fr']) ?></div>
                        
                     </div> 
                    <div class="form-inline" style="text-align: right;display: block;">  
                            <div class="form-group"><?= h($preinscription['prenom_fr'])?> </div> 
                             <label class="control-label"><?= __(':الاسم الشخصي') ?></label>  
                    </div>
                    <div class="form-inline">    
                             <label class="control-label"><?= __('Email: ') ?></label>
                              <div class="form-group"><?= h($preinscription['email']) ?></div>
                        
                     </div>
                     <div class="form-inline">    
                             <label class="control-label"><?= __('Num de téléphone: ') ?></label>
                              <div class="form-group"><?= h($preinscription['tel']) ?></div>
                        
                     </div>
                    <div class="form-inline">

                                <label class="control-label"><?= __('Handicap: ') ?></label>
                                <div class="form-group">
                                    <?= h($preinscription['type_handicap']) ?>
                                </div>
                    </div>
                    <div class="form-inline">
                                <label class="control-label"><?= __('Type d\'hébergement: ') ?></label>
                                <div class="form-group">
                                    <?= h($preinscription['type_hebergement']) ?>
                                </div>
                    </div>
                    <div class="form-inline">
                                <label class="control-label"><?= __('Situation Familiale: ') ?></label>
                                <div class="form-group">
                                    <?= h($preinscription['situation_familiale']) ?>
                                </div>
                    </div>
                    <div class="form-inline">
                                <label class="control-label"><?= __('Situation Militaire: ') ?></label>
                                <div class="form-group">
                                    <?= h($preinscription['situation_militaire']) ?>
                                </div>
                    </div>
                    <div class="form-inline">              
                                <label class="control-label"><?= __('Date de Naissance: ') ?></label>
                                <div class="form-group">
                                    <?= h($preinscription['date_naissance']) ?>
                                </div>
                    </div>


                    <div class="form-inline">
                                <label class="control-label"><?= __('Ville de Naissance :') ?></label>
                                <div class="form-group">
                                    <?= h($preinscription['ville_naissance_fr']) ?>
                                </div>
                    </div>
                    <div class="form-inline" style="text-align: right;display: block;">
                                <div class="form-group">
                                    <?= h($preinscription['ville_naissance_ar']) ?>
                                </div>
                                <label class="control-label"><?= __(': مكان الأزدياد') ?></label>
                    </div>
                    <div class="form-inline">
                                <label class="control-label"><?= __('Pays de Naissance :') ?></label>
                                <div class="form-group">
                                    <?= h($preinscription['pays_naissance_fr']) ?>
                                </div>
                    </div>
                    <div class="form-inline" style="text-align: right;display: block;">
                                <div class="form-group">
                                    <?= h($preinscription['pays_naissance_ar']) ?>
                                </div>
                                <label class="control-label"><?= __(' : البلد') ?></label>
                    </div>
                    <div class="form-inline">
                                <label class="control-label"><?= __('Sexe :') ?></label>
                                <div class="form-group">
                                    <?= h($preinscription['sexe_fr']) ?>
                                </div>
                    </div>
                    <div class="form-inline" style="text-align: right;display: block;">
                                <div class="form-group">
                                    <?= h($preinscription['sexe_ar']) ?>
                                </div>
                                <label class="control-label"><?= __(' : الجنس') ?></label>
                    </div>
                    <div class="form-inline" >
                                <label class="control-label"><?= __('Série Bac :') ?></label>
                                <div class="form-group">
                                <?= h($preinscription['serie_bac']); ?>
                                </div>
                                 
                    </div>
                    <div class="form-inline">
                                <label class="control-label"><?= __('Etablissement Bac :') ?></label>
                                <div class="form-group">
                                <?= h($preinscription['etablissement_bac']); ?>
                                </div>
                    </div>
                    <div class="form-inline">
                                <label class="control-label"><?= __('Année d\'obtention') ?></label>
                                <div class="form-group">
                                <?= h($preinscription['annee_obtention_bac']); ?>
                                </div>
                                
                    </div>
                    <div class="form-inline">
                                <label class="control-label"><?= __('Adresse Fix :') ?></label>
                                <div class="form-group">
                                <?= $this->Text->autoParagraph(h($preinscription['adresse_fix_fr'])); ?>
                                </div>
                    </div>
                    <div class="form-inline" style="text-align: right;display: block;">
                                <div class="form-group">
                                <?= $this->Text->autoParagraph(h($preinscription['adresse_fix_ar'])); ?>
                                </div>
                                 <label class="control-label"><?= __(' : العنوان') ?></label>
                    </div>
                    <div class="form-inline">
                                <label class="control-label"><?= __('Adresse Annulle :') ?></label>
                                <div class="form-group">
                                <?= $this->Text->autoParagraph(h($preinscription['adresse_annulle_fr'])); ?>
                                </div>
                    </div>
                    <div class="form-inline" style="text-align: right;display: block;">
                                <div class="form-group">
                                <?= $this->Text->autoParagraph(h($preinscription['adresse_annulle_ar'])); ?>
                                </div>
                                <label class="control-label"><?= __(': العنوان السنوي') ?></label>
                    </div>


                    

                </fieldset>
            </div>
            <div style="padding-bottom: 30px; font-size: 16px;">
                 <fieldset>
                    <legend>AFFILIATION</legend>
                   
                        <div class="form-inline">
                            <label class="control-label"><?= __('Profession du Père:') ?></label>
                            <div class="form-group"> <?= h($preinscription['profession_pere_fr']) ?></div>
                        </div>
                        <div class="form-inline" style="text-align: right;display: block;">
                            <div class="form-group">  <?= h($preinscription['profession_pere_ar']) ?></div>
                            <label class="control-label"><?= __(': مهنة الأب ') ?></label>
                        </div>
                        <div class="form-inline">
                            <label class="control-label"><?= __('Profession du Mère: ') ?></label>
                            <div class="form-group"> <?= h($preinscription['profession_mere_fr']) ?></div>
                        </div>  
                        <div class="form-inline" style="text-align: right;display: block;">
                            <div class="form-group"> <?= h($preinscription['profession_mere_ar']) ?></div>
                            <label class="control-label"><?= __(': مهنة الأم ') ?></label>
                        </div>
                        <div class="form-inline">
                                 <label class="control-label"><?= __('Province des Parents: ') ?></label>
                                <div class="form-group"><?= h($preinscription['province_parents_fr']) ?></div>
                        </div>
                        <div class="form-inline" style="text-align: right;display: block;"> 
                                <div class="form-group"><?= h($preinscription['province_parents_ar']) ?></div>
                                <label class="control-label"><?= __(' : الولاية') ?></label>
                        </div>
                        <div class="form-inline">
                                 <label class="control-label"><?= __('Nom Tuteur: ') ?></label>
                                <div class="form-group"><?= h($preinscription['nom_tuteur']) ?></div>
                        </div>
                        <div class="form-inline">
                                 <label class="control-label"><?= __('Nom Tuteur: ') ?></label>
                                <div class="form-group"><?= h($preinscription['nom_tuteur']) ?></div>
                        </div>
                        <div class="form-inline">
                                 <label class="control-label"><?= __('Prenom Tuteur: ') ?></label>
                                <div class="form-group"><?= h($preinscription['prenom_tuteur']) ?></div>
                        </div>
                        <div class="form-inline">
                                 <label class="control-label"><?= __('Profession Tuteur: ') ?></label>
                                <div class="form-group"><?= h($preinscription['profession_tuteur']) ?></div>
                        </div>
                        <div class="form-inline">
                                 <label class="control-label"><?= __('Mail Tuteur: ') ?></label>
                                <div class="form-group"><?= h($preinscription['mail_tuteur']) ?></div>
                        </div>
                        <div class="form-inline">
                                 <label class="control-label"><?= __('Adresse Annulle: ') ?></label>
                                <div class="form-group"><?= h($preinscription['adresse_annulle_fr']) ?></div>
                        </div>
                        <div class="form-inline">
                                 <label class="control-label"><?= __('العنوان السنوي : ') ?></label>
                                <div class="form-group"><?= h($preinscription['adresse_annulle_ar']) ?></div>
                        </div>
                         <div class="form-inline">
                                 <label class="control-label"><?= __('Adresse Fix : ') ?></label>
                                <div class="form-group"><?= h($preinscription['adresse_fix_fr']) ?></div>
                        </div>
                         <div class="form-inline">
                                 <label class="control-label"><?= __('العنوان : ') ?></label>
                                <div class="form-group"><?= h($preinscription['adresse_fix_ar']) ?></div>
                        </div>
                   
                </fieldset>
            </div>
            <div style="padding-bottom: 30px; font-size: 16px;">
               <fieldset > 
                    <legend>CURSUS DES ETUDES & BOURSE</legend>
                   
                    <div class="form-inline">
                                <label class="control-label"><?= __('Bourse: ') ?></label>
                                <div class="form-group"><?= h($preinscription['bourse']) ?></div>
                    </div>
                    <div class="form-inline">
                            <label class="control-label"><?= __('Série Bac: ') ?></label>
                            <div class="form-group"><?= h($preinscription['serie_bac']) ?></div>
                    </div> 
                     <div class="form-inline">
                            <label class="control-label"><?= __('Mention BAC: ') ?></label>
                            <div class="form-group"><?= h($preinscription['mention_bac']) ?></div>
                    </div>    
                     <div class="form-inline">   
                             <label class="control-label"><?= __('Moyen Régional: ') ?></label>
                              <div class="form-group"><?= h($preinscription['moyen_reg']) ?></div>
                     </div>    
                     <div class="form-inline">   
                             <label class="control-label"><?= __('Moyen National: ') ?></label>
                              <div class="form-group"><?= h($preinscription['math_nat']) ?></div>
                    </div>     
                    
                     <div class="form-inline">    
                             <label class="control-label"><?= __('Physique National: ') ?></label>
                               <div class="form-group"><?= h($preinscription['phy_nat']) ?></div> 
                     </div> 
                     <div class="form-inline">    
                             <label class="control-label"><?= __('Etablissement Bac: ') ?></label>
                               <div class="form-group"><?= h($preinscription['etablissement_bac']) ?></div> 
                     </div> 
                     <div class="form-inline">    
                             <label class="control-label"><?= __('Année d\'obtention de Bac: ') ?></label>
                               <div class="form-group"><?= h($preinscription['annee_obtention_bac']) ?></div> 
                     </div> 
                     <div class="form-inline">    
                             <label class="control-label"><?= __('Académie: ') ?></label>
                               <div class="form-group"><?= h($preinscription['academie']) ?></div> 
                     </div> 
                     <div class="form-inline">    
                             <label class="control-label"><?= __('Province: ') ?></label>
                               <div class="form-group"><?= h($preinscription['province']) ?></div> 
                     </div> 
                     <div class="form-inline">    
                             <label class="control-label"><?= __('Filière: ') ?></label>
                               <div class="form-group"><?= h($preinscription['filiere_bac']) ?></div> 
                     </div>
                </fieldset> 
            </div>


            <div style="padding-bottom: 30px; font-size: 16px;">
                 <fieldset > 
                    <legend>Activités & Loisirs</legend>
                     <div class="form-inline">    
                             <label class="control-label"><?= __('Activités: ') ?></label>
                               <div class="form-group"><?= h($preinscription['activite']) ?></div> 
                     </div> 
                </fieldset>
            </div>

            </div>
            <!-- /.box-body
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

  
   <!--  <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Les acrivités {0}', ['Parascolaires']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($preinscription->activitesdespreinscriptions)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    libeller
                                    </th>
                                        
                                                                    
                                
                            </tr>

                            <?php foreach ($preinscription->activitesdespreinscriptions as $activitesdespreinscriptions): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($activitesdespreinscriptions->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($activitesdespreinscriptions->libile) ?>
                                    </td>
                                    
                                                                        
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div> -->
</section>
