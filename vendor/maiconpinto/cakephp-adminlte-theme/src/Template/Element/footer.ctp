<?php
$file = $theme['folder'] . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'footer.ctp';

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<?php if(!empty($personnalisation)){ ?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Site Administratif d'<?php echo $personnalisation['nomET']; ?></b>
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> <em>Promo GI 4 eme annee 2018-2019</em>.</strong> Toutes les droits réservés.
</footer>
<?php }else{?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Site Administratif</b>
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> <em>Promo GI 4 eme annee 2018-2019</em>.</strong> Toutes les droits réservés.
</footer>
<?php
	}
}
?>
