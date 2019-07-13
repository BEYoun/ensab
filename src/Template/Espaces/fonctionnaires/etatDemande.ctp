<ol class="breadcrumb">
    <li>
        <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
</ol>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php foreach ($FonctionnairesDocuments as $documentsFonctionnaire)
        {
            $nom=$documentsFonctionnaire->fonctionnaire->nom_fct;
            $prenom=$documentsFonctionnaire->fonctionnaire->prenom_fct;
            break;
        }
        ?>

       Liste des documents déposés:

    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Demandes Déposées</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th><?= $this->Paginator->sort('somme') ?></th>
                            <th><?= $this->Paginator->sort('Date Demande') ?></th>
                            <th><?= $this->Paginator->sort('Document') ?></th>
                            <th><?= $this->Paginator->sort('Etat Demande') ?></th>
                        </tr>

                        <?php foreach ($FonctionnairesDocuments as $documentsFonctionnaire): ?>
                        <tr>
                            <td><?= h($documentsFonctionnaire->fonctionnaire->somme)?></td>
                            <td><?= h($documentsFonctionnaire->dateDemande)?></td>
                            <td ><?= h($documentsFonctionnaire->document->nomDocument)?></td>
                            <td><?= h($documentsFonctionnaire->etatdemande)?></td>
                            <td class="actions" style="white-space:nowrap">
                                                 <?php
                                                 if($documentsFonctionnaire->etatdemande=='Delivré')
                                                 {
                                                 echo $this->Html->link(__('Imprimer'), ['action' => 'imprimerDocumentt', $documentsFonctionnaire->document_id,$documentsFonctionnaire->fonctionnaire_id], ['class'=>'btn btn-warning btn-xs']  ) ;
                                                 echo " ";
                                                 echo $this->Html->link(__('Supprimer'), ['action' => 'supprimerDocument', $documentsFonctionnaire->id], ['class'=>'btn btn-danger btn-xs']  ) ;
                                                  }
                                                 ?>
                            </td>
                        </tr>
                         <?php
                         endforeach; ?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?php echo $this->Paginator->numbers(); ?>
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- /.content -->

