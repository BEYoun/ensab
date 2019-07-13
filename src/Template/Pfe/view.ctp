<section class="content-header">
  <h1>
    <?php echo __('Pfe'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Intitule') ?></dt>
                                        <dd>
                                            <?= h($pfe->intitule) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Societe') ?></dt>
                                        <dd>
                                            <?= h($pfe->societe) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Filiere') ?></dt>
                                <dd>
                                    <?= $pfe->has('filiere') ? $pfe->filiere->libile : '' ?>
                                </dd>
                                                                                                                <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $pfe->has('user') ? $pfe->user->username : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Encadrant Externe') ?></dt>
                                        <dd>
                                            <?= h($pfe->encadrant_externe) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Type') ?></dt>
                                        <dd>
                                            <?= h($pfe->type) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('User Id') ?></dt>
                                <dd>
                                    <?= $this->Number->format($pfe->user_id) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Date Debut') ?></dt>
                                <dd>
                                    <?= h($pfe->date_debut) ?>
                                </dd>
                                                                                                                    <dt><?= __('Date Fin') ?></dt>
                                <dd>
                                    <?= h($pfe->date_fin) ?>
                                </dd>
                                                                                                    
                                            
                                    </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
