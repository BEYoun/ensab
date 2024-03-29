
  <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Articles
    <div class="pull-right"><?= $this->Html->link(__('Nouveau'), ['action' => 'add_articles'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Liste des') ?> Articles</h3>
          <div class="box-tools">
            <form method="POST" action="export_articles">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="cat" class="form-control" placeholder="<?= __('Rechercher') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" name="afficher" type="submit"><?= __('Rechercher')  ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('stock_categorie_id') ?></th>
              <th><?= $this->Paginator->sort('label_article') ?></th>
              <th><?= $this->Paginator->sort('quantite_min') ?></th>
              <th><?= $this->Paginator->sort('marque') ?></th>
              <th><?= $this->Paginator->sort('quantite') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
			<?php foreach ($articles as $article): ?>
			<?php if ($this->Number->format($article->quantite) - $this->Number->format($article->quantite_min)  <=5  ){ ?>
				
			 
              <tr>
                <td><?= $this->Number->format($article->id) ?></td>
                <td><?= $article->has('stock_category') ? $this->Html->link($article->stock_category->label_cat, ['controller' => 'Respostocks', 'action' => 'view_stockcategories', $article->stock_category->label_cat]) : '' ?></td>
                <td><?= h($article->label_article) ?></td>
                <td><?= $this->Number->format($article->quantite_min) ?></td>
                <td><?= h($article->marque) ?></td>
                <td><?= $this->Number->format($article->quantite) ?></td>
                <td class="commander" style="white-space:nowrap">
                   <?= $this->Html->link(__('Afficher'), ['action' => 'view_articles', $article->id], ['class'=>'btn btn-success btn-xs']) ?>
                  
                </td>
              </tr>
			  <?php } ?> 
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
</section>

<!-- /.content -->

 