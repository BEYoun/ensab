<section class="content-header">
  <h1>
    Pfe
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($pfe, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('user_id');
            echo $this->Form->input('intitule');
            echo $this->Form->input('societe');
            echo $this->Form->input('filiere_id', ['options' => $filieres, 'empty' => true]);
            echo $this->Form->input('encadrant_interne_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('encadrant_externe');
            echo $this->Form->input('date_debut', ['empty' => true, 'default' => '']);
            echo $this->Form->input('date_fin', ['empty' => true, 'default' => '']);
            echo $this->Form->input('type');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
