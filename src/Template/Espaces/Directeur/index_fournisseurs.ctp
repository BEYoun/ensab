<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Fournisseurs
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Liste des') ?> Fournisseurs</h3>
          <div class="box-tools">
            <form method="POST" action="export_fournisseurs">
              <div class="input-group input-group-sm"  style="width: 200px;">
                <input type="text" name="cat" class="form-control" placeholder="<?= __('Lister Par catégorie') ?>">
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
              <th><?= $this->Paginator->sort('nom_fournisseur') ?></th>
              <th><?= $this->Paginator->sort('prenom_fournisseur') ?></th>
              <th><?= $this->Paginator->sort('label_fournisseur') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fournisseurs as $fournisseur): ?>
              <tr>
                <td><?= $this->Number->format($fournisseur->id) ?></td>
                <td><?= $fournisseur->has('stock_category') ? $this->Html->link($fournisseur->stock_category->id, ['controller' => 'Respostocks', 'action' => 'view_stockcategories', $fournisseur->stock_category->id]) : '' ?></td>
                <td><?= h($fournisseur->nom_fournisseur) ?></td>
                <td><?= h($fournisseur->prenom_fournisseur) ?></td>
                <td><?= h($fournisseur->label_fournisseur) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Afficher'), ['action' => 'view_fournisseurs', $fournisseur->id], ['class'=>'btn btn-info btn-xs']) ?>
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
