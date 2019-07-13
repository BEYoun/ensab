<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Parascolaire
    <div class="pull-right"><?= $this->Html->link(__('Ajouter'), ['action' => 'ajouterClubs'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Liste des') ?> Clubs</h3>
          <div class="box-tools">
           
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              
              <th><?= $this->Paginator->sort('nom',array('label'=>"Nom")) ?></th>
              <th><?= $this->Paginator->sort('mission',array('label'=>"Mission")) ?></th>
              <th><?= $this->Paginator->sort('datePost',array('label'=>"Date")) ?></th>
              <th><?= $this->Paginator->sort('logo',array('label'=>"Logo")) ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($clubs as $club): ?>
              <tr>
                
                <td><?= h($club->nom) ?></td>
                <td><?= h($club->mission) ?></td>
                <td><?= h($club->datePost) ?></td>
                <td><?= h($club->logo) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Afficher'), ['action' => 'viewClubs', $club->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Modifier'), ['action' => 'modifierClubs', $club->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Supprimer'), ['action' => 'supprimerClubs', $club->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
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
