<?php $this->layout = false; ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Super Admin
  </title>
  <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/ui/prism.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/file-uploaders/dropzone.min.css">

  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-compact-menu.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/file-uploaders/dropzone.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/icheck/custom.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/checkboxes-radios.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert.css">

  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <!-- END Custom CSS-->

  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/wizard.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/pickers/daterange/daterange.css">
  <!-- END Page Level CSS-->
  <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<script type="text/javascript">
    function servicesuccess() {
      swal({
        title: "Enregistré!",
        text: "Les Services de l'Application ont été modifié!",
        type: "success",
        icon:"success",
        timer: 10000,
        button: false
    });
    }
    
      
  
    
  </script>
</head>
<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark bg-cyan navbar-shadow navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="#">
             
              <h3 class="brand-text">Super Admin</h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            
            
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Bonjour,
                  <span class="user-name text-bold-700">Super Admin</span>
                </span>
                <span class="avatar avatar-online">
                  <img src="../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-divider"></div><a class="dropdown-item" href="../users/login"><i class="ft-power"></i> Déconnexion</a>
              </div>
            </li>
  
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" style="width: auto;">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="home"><i class="la la-desktop"></i><span class="menu-title" data-i18n="nav.dash.main">Personnalisation <br> App</span></a>
        </li>
        <li class=" nav-item"><a href="email"><i class="la la-at"></i><span class="menu-title" data-i18n="nav.templates.main">Configuration <br> d'Email</span></a>
         
        </li>
        <li class=" nav-item active"><a href="service"><i class="la la-cog"></i><span class="menu-title" data-i18n="nav.templates.main">Contrôle <br>des Services d'App</span></a>
         
        </li>
        <li class=" nav-item"><a href="site"><i class="la la-edit"></i><span class="menu-title" data-i18n="nav.templates.main">Gestion <br> de Site Web</span></a>
         
        </li>
        
        
        
      </ul>
    </div>
  </div>
  <div class="app-content content" style="padding-left: 10px;">
    <div class="content-wrapper">
      
      <div class="content-body">
        <section id="validation">
          <div class="row">
            <div class="col-md-6 m-auto">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Gestion des services</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    
                    <form class="form form-horizontal row-separator" method="post">
                      <!-- Step 1 -->
                      <div class="form-body">
                        <div class="form-group row">
                          <?php 
                                $data = file_get_contents('./Services.json'); 
                                $serv = json_decode($data, true); 
                          ?>
                          <label for="switch1" class="col-md-6 label-control">
                                Service Bibliothèque :
                              
                                
                              </label>
                              <div class="col-md-6">
                                 <label class="switch">
                                  <?php if ($serv[0]['bibliotheque']=="on") {?>
                                    
                                    <input type="checkbox" id="switch1" name="biblio" checked>
                                  <?php } else{ ?>
                                    <input type="checkbox" id="switch1" name="biblio">
                                 <?php } ?>
                                    <span class="slider round"></span>
                                  </label>
                                </div>  
                        </div>
                        <div class="form-group row">
                          <label for="switch3" class="col-md-6 label-control">

                                Service Bureau d'ordre :
                              
                                
                              </label>
                              <div class="col-md-6">
                                 <label class="switch">
                                    <?php if ($serv[0]['bureau']=="on") {?>
                                    <input type="checkbox" id="switch3" name="bo" checked>
                                  <?php } else {?>
                                    <input type="checkbox" id="switch3" name="bo">
                                  <?php }?>
                                    <span class="slider round"></span>
                                  </label>
                                </div>  
                        </div>
                        <div class="form-group row">
                          <label for="switch2" class="col-md-6 label-control">
                                Service Finance :
                              
                                
                              </label>
                              <div class="col-md-6">
                                 <label class="switch">
                                  <?php if ($serv[0]['finance']=="on") {?>
                                    <input type="checkbox" id="switch2" name="finance" checked>
                                  <?php } else { ?>
                                    <input type="checkbox" id="switch2" name="finance">
                                  <?php } ?>
                                    <span class="slider round"></span>
                                  </label>
                                </div>  
                        </div>
                        <div class="form-group row">
                          <label for="switch4" class="col-md-6 label-control">
                                Service Personnel :
                              
                                
                              </label>
                              <div class="col-md-6">
                                 <label class="switch">
                                  <?php if ($serv[0]['personnel']=="on") {?>
                                    <input type="checkbox" id="switch4" name="personnel" checked>
                                  <?php } else {?>
                                    <input type="checkbox" id="switch4" name="personnel">
                                  <?php } ?>
                                    <span class="slider round"></span>
                                  </label>
                                </div>  
                        </div>
                        <div class="form-group row">
                          <label for="switch5" class="col-md-6 label-control">
                                Service Scolarité :
                              
                                
                              </label>
                              <div class="col-md-6">
                                 <label class="switch">
                                  <?php if ($serv[0]['scolarite']=="on") {?>
                                    <input type="checkbox" id="switch5" name="scolarite" checked>
                                  <?php } else {?>
                                    <input type="checkbox" id="switch5" name="scolarite">
                                  <?php } ?>
                                    <span class="slider round"></span>
                                  </label>
                                </div>  
                        </div>
                        <div class="form-group row">
                          <label for="switch6" class="col-md-6 label-control">

                                Service Stock :
                              
                                
                              </label>
                              <div class="col-md-6">
                                 <label class="switch">
                                  <?php if ($serv[0]['stock']=="on") {?>
                                    <input type="checkbox" id="switch6" name="stock" checked>
                                  <?php } else {?>
                                    <input type="checkbox" id="switch6" name="stock">
                                    <?php } ?>
                                    <span class="slider round"></span>
                                  </label>
                                </div>  
                        </div>
                        <div class="form-group row">
                          <label for="switch7" class="col-md-6 label-control">
                                Service Stage :
                              
                                
                              </label>
                              <div class="col-md-6">
                                 <label class="switch">
                                  <?php if ($serv[0]['stage']=="on") {?>
                                    <input type="checkbox" id="switch7" name="stage" checked>
                                  <?php } else {?>
                                    <input type="checkbox" id="switch7" name="stage">
                                    <?php } ?>
                                    <span class="slider round"></span>
                                  </label>
                                </div>  
                        </div>
                        <div class="form-group row last">
                          <label for="switch8" class="col-md-6 label-control">
                                Service Ingénierie :
                              
                                
                              </label>
                              <div class="col-md-6">
                                 <label class="switch">
                                  <?php if ($serv[0]['ingenieur']=="on") {?>
                                    <input type="checkbox" id="switch8" name="ingenieur" checked>
                                  <?php } else {?>
                                    <input type="checkbox" id="switch8" name="ingenieur">
                                  <?php } ?>
                                    <span class="slider round"></span>
                                  </label>
                                </div>  
                        </div>
                      </div>
                      <div class="form-actions">
                        <br>
                        <button type="submit" class="btn btn-success float-right" name="save" onclick="servicesuccess()">
                          <i class="la la-check"></i> Enregistrer
                        </button>
                        <br>
                        <br>
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
 
  <!-- BEGIN VENDOR JS-->
  <script src="../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/extensions/dropzone.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/ui/prism.min.js" type="text/javascript"></script>
  <script src="../app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../app-assets/js/scripts/pages/dashboard-sales.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/pickers/daterange/daterangepicker.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/forms/validation/jquery.validate.min.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->

  <script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/extensions/dropzone.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>