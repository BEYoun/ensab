<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Pfe
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Pfe</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('Pfe_ID') ?></th>
              <th><?= $this->Paginator->sort('user_id') ?></th>
              <th><?= $this->Paginator->sort('intitule') ?></th>
              <th><?= $this->Paginator->sort('societe') ?></th>
              <th><?= $this->Paginator->sort('filiere_id') ?></th>
              <th><?= $this->Paginator->sort('encadrant_interne_id') ?></th>
              <th><?= $this->Paginator->sort('encadrant_externe') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pfe as $pfe): 
              
              
              if($role=="etudiant" && $user_id!=$pfe->Pfe_ID){
                continue;
                
              }
              
              ?>
              <tr>
                <td><?= $this->Number->format($pfe->Pfe_ID) ?></td>
                <td><?= $this->Number->format($pfe->user_id) ?></td>
                <td><?= h($pfe->intitule) ?></td>
                <td><?= h($pfe->societe) ?></td>
                <td><?= $pfe->has('filiere') ? $this->Html->link($pfe->filiere->libile, ['controller' => 'Filieres', 'action' => 'view', $pfe->filiere->id]) : '' ?></td>
                <td><?= $pfe->has('user') ? $this->Html->link($pfe->user->username, ['controller' => 'Users', 'action' => 'view', $pfe->user->id]) : '' ?></td>
                <td><?= h($pfe->encadrant_externe) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $pfe->Pfe_ID], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pfe->Pfe_ID], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pfe->Pfe_ID], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                  <?= $this->Html->link(__('+ RDV'), ['controller' => 'reunion' , 'action' => 'add?id_pfe='.$pfe->Pfe_ID], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('+ Document'), ['controller' => 'documentstage' , 'action' => 'add?id_pfe='.$pfe->Pfe_ID], ['class'=>'btn btn-info btn-xs']) ?>
               
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
