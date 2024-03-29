﻿Vous etes connécté en tant que <?= $role ?>

<!DOCTYPE html>
<html>

<body class="hold-transition skin-blue sidebar-mini">
<div >



    <!-- Content Wrapper. Contains page content -->
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Boites aux lettres
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Boîte de réception</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo $this->Url->build('/profpermanents/boiteRecPer'); ?>" class="btn btn-primary btn-block margin-bottom">Retour à la Boîte de réception</a>

                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Dossiers</h3>

                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo $this->Url->build('/profpermanents/boiteRecPer'); ?>"><i class="fa fa-inbox"></i> Boîte de réception
                                <li><a href="<?php echo $this->Url->build('/profpermanents/getMsgsEnvoye'); ?>"><i class="fa fa-envelope-o"></i> Messages envoyés</a></li>
                           <!--     <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                                <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>-->
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Labels</h3>

                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Composer un nouveau message</h3>
                        </div>
                        <!-- /.box-header -->
                        <form method="post" action="<?php echo $this->Url->build('/profpermanents/envoyermsg');?>" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <!--   <table>
                                          <tr>
                                              <td><label>Effectuer votre choix: </label></td><td>&nbsp;</td> <td>&nbsp;</td><td>&nbsp;</td> <td>&nbsp;</td>
                                               <td><label>Responsable scolarité</label></td><td><input type="radio" name="desti" value="scolarite" checked onclick=""></td>
                                                <td>&nbsp;</td> <td>&nbsp;</td><td>&nbsp;</td> <td>&nbsp;</td>
                                               <td><label>Responsable finance</label></td><td><input type="radio" name="desti" value="finance"></td>
                                                <td>&nbsp;</td> <td>&nbsp;</td><td>&nbsp;</td> <td>&nbsp;</td>
                                               <td><label>Mes etudiants</label></td><td><input type="radio" name="desti" value="etudiants"></td>
                                          </tr>
                                       </table>-->


                                    <div class="form-group">                       
                                        <select required class="form-control" name="typeDest" onChange="top.location.href='<?php echo $this->Url->build('/profpermanents/getDestinataire/');?>'+this.options[selectedIndex].value">
                                            <option selected disabled>Type destinataire</option>
                                            <option value="scolarite" <?php if(strcmp($selected, 'scolarite') == 0) : ?> selected <?php endif ?> >Responsable scolarité</option>
                                            <option value="etudiants" <?php if(strcmp($selected, 'etudiants') == 0) : ?> selected <?php endif ?> >Mes etudiants</option>
                                            <option value="etudiantSpecifie" <?php if(strcmp($selected, 'etudiantSpecifie') == 0) : ?> selected <?php endif ?> >Spécifier un seul etudiant</option>
                                          <!--  <option value="finance"  >Responsable finance</option> -->
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <?php if(strcmp($selected, 'etudiantSpecifie') == 0) : ?>
                                    <table width="80%">
                                        <tr>
                                            <td>                                                 
                                                <select  required class="form-control" name="filiereEtudiant" onChange="top.location.href='<?php echo $this->Url->build('/profpermanents/getEtudiantsParFiliere/');?>'+this.options[selectedIndex].value">
                                                <option selected disabled>---Filière de l'étudiant---</option>
                                                <?php foreach ($typeDest as $dest): ?>
                                                <option value="<?php echo $dest['id']?> "  <?php if($filierID == $dest['id']) : ?> selected <?php endif ?> ><?php echo "Filière: ".$dest['niveau']." ".$dest['filiere']." ".$dest['semestre']; ?></option>
                                                <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select  required class="form-control" name="destinataire">
                                                    <option selected disabled>---Nom et Prénom---</option>
                                                    <?php foreach ($listE as $dest): ?>
                                                    <option value="<?php echo $dest['id']?> " ><?php echo " ".$dest['nom']." ".$dest['prenom']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <?php endif ?>

                                    <?php if(strcmp($selected, 'scolarite') == 0) : ?>
                                    <select class="form-control" name="destinataire" >
                                        <?php foreach ($typeDest as $dest): ?>
                                        <option value="<?php echo $dest['id']; ?>" ><?php echo $dest['username']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php endif ?>

                                    <?php if(strcmp($selected, 'etudiants') == 0) : ?>
                                    <select required class="form-control" name="destinataire">
                                        <option value="">---Filière du groupe---</option>
                                        <?php foreach ($typeDest as $dest): ?>
                                        <option value="<?php echo 'etudiants*'.$dest['filiere'].'*'.$dest['niveau'].'*'.$dest['semestre']; ?> " ><?php echo "Etudiants: ".$dest['niveau']." ".$dest['filiere']." ".$dest['semestre']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <input required class="form-control" placeholder="Sujet:" name="sujet" >
                                </div>
                                <div class="form-group">
                    <textarea required id="compose-textarea" class="form-control" style="height: 300px" name="contenu" >

                    </textarea>
                                </div>
                                <div class="form-group">
                                    <div >

                                        <input type="file" name="attachment" id="file" onchange="checkfile(this);">
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <div class="pull-right">

                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Envoyer</button>
                                </div>
                                <button type="reset" class="btn btn-default" id="btn-reset"><i class="fa fa-times"></i>
                                    Réinitialiser</button>
                            </div>
                        </form>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script type="text/javascript" language="javascript">
    function checkfile(sender) {
        var validExts = new Array(".pdf", ".docx", ".PNG");
        var fileExt = sender.value;
        fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
        if (validExts.indexOf(fileExt) < 0) {
            alert("Sélection non valide, les fichiers valide sont de type:  " +
                validExts.toString());

            var $el = $('#file');
            $el.wrap('<form>').closest('form').get(0).reset();
            $el.unwrap();

            return false;
        }
        else return true;
    }
</script>

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
    $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
    });
</script>
</body>
</html>

