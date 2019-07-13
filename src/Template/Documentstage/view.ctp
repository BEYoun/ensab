<section class="content-header">
  <h1>
    <?php echo __('Documentstage'); ?>
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
                                                                                                                <dt><?= __('Nom') ?></dt>
                                        <dd>
                                            <?= h($documentstage->nom) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Lien') ?></dt>
                                        <dd>
                                            <?= h($documentstage->lien) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('ID PFE') ?></dt>
                                <dd>
                                    <?= $this->Number->format($documentstage->ID_PFE) ?>
                                </dd>
                                                                                                
                                            
                                            
                                    </dl>
            </div>
          

          <embed src="<?php  echo $baseUrl.$documentstage->lien;  ?>" width="800px" height="1000px" />


            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
