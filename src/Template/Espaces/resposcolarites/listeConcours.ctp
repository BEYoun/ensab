
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Concours</h1>
  <?= $this->Html->link('Nouveau', '/resposcolarites/liste-concours?add=1', ['class'=>'btn btn-success', 'style'=>'float: right; margin: 5px 10px']) ?>
</section>

<style type="text/css">
	#addConcours {
		width: 80%;
		margin: auto;
	}
	.i {
		margin: 20px;
	}
</style><?= $this->Form->create(null, ['url'=>['action'=>'addConcours']]) ?>

<?php if (isset($_GET['add'])) { ?>
	<div id="addConcours">
		<h1>Ajouter concours</h1>
		<div class="concours form large-9 medium-8 columns content">
		    <?= $this->Form->create(null, ['url'=>['action'=>'addConcours']]) ?>    
		    <fieldset>
		        <legend><?= __('Add Concour') ?></legend>
		        <?php
            
		            echo $this->Form->control('niveaus_id', ['options' => $niveausOption]);
		            echo $this->Form->control('filiere_id', ['options' => $filieresOption]);
		            echo $this->Form->control('etat', ['options' => ['Lance', 'Ferme']]);
		            echo '<b>Date debut</b><br>';
		            echo $this->Form->date('date_debut', [
				        'minYear' => 2018,
				        'monthNames' => false,
				        'day' => []
				    ]);
				    echo '<br>';
				    echo '<br>';
				    echo '<b>Date fin</b><br>';
		            echo $this->Form->date('date_fin', [
				        'minYear' => 2018,
				        'monthNames' => false,
				        'day' => []
				    ]);
				    echo '<br>';
				    echo '<br>';
		        ?>
		    </fieldset>
		    <?= $this->Form->button(__('Submit')) ?>
		    <?= $this->Form->end() ?>
		</div>
	</div>
<?php } else { ?>

<!-- Main content -->
<section class="content" id="main" style="display: block">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List des') ?> Concours</h3>
        	
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('niveaus') ?></th>
              <th><?= $this->Paginator->sort('filiere') ?></th>
              <th><?= $this->Paginator->sort('etat') ?></th>
              <th><?= $this->Paginator->sort('date debut') ?></th>
              <th><?= $this->Paginator->sort('date fin') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($concours as $concour): ?>
              <tr>
                <?php if($this->Number->format($concour->etat) == 0){
                  $etta = 'fermé';
                }else{
                  $etta = 'lancé';
                } ?>
                <td><?= $this->Number->format($concour->id) ?></td>
                <td><?= $concour->has('niveau') ? $this->Html->link($concour->niveau->libile, ['controller' => 'Niveaus', 'action' => 'view', $concour->niveau->libile]) : '' ?></td>
                <td><?= $concour->has('filiere') ? $this->Html->link($concour->filiere->libile, ['controller' => 'Filieres', 'action' => 'view', $concour->filiere->libile]) : '' ?></td>
                <td><?= $etta ?></td>
                <td><?= h($concour->date_debut) ?></td>
                <td><?= h($concour->date_fin) ?></td>
                <td class="actions" style="white-space:nowrap">
                 
                  <?php 
                  if ($concour->etat == 0) {
                      echo $this->Html->link(__('Lancer'), ['action' => 'lancerConcours', $concour->id], ['class'=>'btn btn-success btn-xs']);
                      echo $this->Form->postLink(__('Fermer'), ['action' => 'fermer', $concour->id], ['confirm' => __('Confirmer?'), 'class'=>'btn btn-danger btn-xs', 'style'=> 'pointer-events: none; cursor: default; background-color: #555; margin-left:5px;']); 
                  }else{
                      echo $this->Html->link(__('Lancer'), ['action' => 'lancerConcours', $concour->id], ['class'=>'btn btn-success btn-xs', 'style'=> 'pointer-events: none; cursor: default; background-color: #555; margin-right:5px;']);
                      echo $this->Form->postLink(__('Fermer'), ['action' => 'fermer', $concour->id], ['confirm' => __('Confirmer?'), 'class'=>'btn btn-danger btn-xs']);
                     }

                  ?>
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

<?php } ?>


