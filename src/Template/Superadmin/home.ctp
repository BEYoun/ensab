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
  <script type="text/javascript">
    function show() {
    if (document.getElementById('custom').checked) {
        document.getElementById('hid').style.display = 'block';
    }
    else document.getElementById('hid').style.display = 'none';

}
  </script>
  <script type="text/javascript">
    var etablissement=new Array(11);
    
    fetch('../Universite.json').then(response => {
      return response.json();
    }).then(data => {
      for (var i = 0; i < data.length; i++) {
        var content=new Array();
        for (var j = 0; j < data[i].etablissements.length; j++) {
          content.push(data[i].etablissements[j].nameET); 
        }
        console.log(content);
        etablissement[data[i].nameUV]=content;
      }

      //console.log(data);
    }).catch(err => {
      // Do something for an error here
    });
     function universityChange(selectObj) { 
       // get the index of the selected option 
       var idx = selectObj.selectedIndex; 
       // get the value of the selected option 
       var which = selectObj.options[idx].value; 
       cList = etablissement[which]; 
       var cSelect = document.getElementById("etablissement3"); 
       var len=cSelect.options.length; 
       while (cSelect.options.length > 0) { 
          cSelect.remove(0); 
       } 
       var newOption; 
       // create new options 
       for (var i=0; i<cList.length; i++) { 
         newOption = document.createElement("option"); 
         newOption.value = cList[i];  // assumes option string and value are the same 
         newOption.text=cList[i]; 
         // add the new option 
         try { 
            cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
         }catch (e) { 
            cSelect.appendChild(newOption); 
         } 
       } 
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
        <li class=" nav-item active"><a href="home"><i class="la la-desktop"></i><span class="menu-title" data-i18n="nav.dash.main">Personnalisation <br> App</span></a>
        </li>
        <?php if($disabeld=="false"){?>
        <li class=" nav-item"><a href="email"><i class="la la-at"></i><span class="menu-title" data-i18n="nav.templates.main">Configuration <br> d'Email</span></a>
         
        </li>
        <li class=" nav-item"><a href="service"><i class="la la-cog"></i><span class="menu-title" data-i18n="nav.templates.main">Contrôle <br>des Services d'App</span></a>
         
        </li>
        <li class=" nav-item"><a href="site"><i class="la la-edit"></i><span class="menu-title" data-i18n="nav.templates.main">Gestion <br> de Site Web</span></a>
         
        </li>
      <?php }else{?>
        <li class=" disabled nav-item"><a href="#"><i class="la la-at"></i><span class="menu-title" data-i18n="nav.templates.main">Configuration <br> d'Email</span></a>
         
        </li>
        <li class=" disabled nav-item"><a href="#"><i class="la la-cog"></i><span class="menu-title" data-i18n="nav.templates.main">Contrôle <br>des Services d'App</span></a>
         
        </li>
        <li class=" disabled nav-item"><a href="#"><i class="la la-edit"></i><span class="menu-title" data-i18n="nav.templates.main">Gestion <br> de Site Web</span></a>
         
        </li>
        
        <?php } ?>
        
      </ul>
    </div>
  </div>
  <div class="app-content content" style="padding-left: 10px;">
    <div class="content-wrapper">
      
      <div class="content-body">
        <section id="validation">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Personnalisation d'application</h4>
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
                    
                    <form class="form form-horizontal row-separator" method="post" enctype="multipart/form-data">

                      <!-- Step 1 -->
                      <div class="form-body">
                        <h4 class="form-section"><i class="la la-mortar-board"></i>
                      Information Générale</h4>
                      <div class="form-group row">
                          <label for="universite3" class="col-md-3 label-control">
                                Université :               
                                <span class="danger">*</span>                 
                            </label>
                          <div class="col-md-9">
                            <select class="form-control border-primary" required data-validation-required-message="Veuillez compléter ce champ" id="universite3" name="universite" onchange="universityChange(this);">
                                <option value="empty">Choisir Université</option>
                              <?php 
                                $data = file_get_contents('./Universite.json');
                                $wizards = json_decode($data, true);
                                foreach ($wizards as $wizard) {
                                  echo '<option value="'.$wizard['nameUV'].'">'.$wizard['nameUV'].'</option>';
                                }
                              ?>
                              </select>
                        
                              
                          </div>
                        </div>
                        <div class="form-group row ">
                          <label for="etablissement3" class="col-md-3 label-control">
                                Etablissement :
                                <span class="danger">*</span>
                                
                              </label>
                              <div class="col-md-9">
                                <select class="form-control border-primary" required data-validation-required-message="Veuillez compléter ce champ" id="etablissement3" name="etablissement" aria-invalid="false">
                                <option value="0">Choisir Etablissement</option>
                              </select>
                              </div>    
                        </div>
                        <div class="form-group row">
                          <label for="formationinp" class="col-md-3 label-control">
                                Email de l'établissement :
                                <span class="danger">*</span>
                                
                              </label>
                              <div class="col-md-9">
                                <input type="email" id="formationinp" class="form-control border-primary"  required data-validation-required-message="Veuillez compléter ce champ" placeholder="Email"
                              name="email" aria-invalid="false">
                              <br>
                              <div class="badge border-left-primary badge-striped">
                                <i class="la la-exclamation-circle font-medium-2"></i>
                              <span>L'émail saisie sera utilisé dans l'envoie des émails</span>

                            </div>
                              </div>    
                        </div>
                        <div class="form-group row">
                          <div class="col-md-10 m-auto">
                          <fieldset>
                            <div  class="row skin skin-square">
                              <input type="checkbox" name="validate" class=" icheckbox_square-red" id="validate" value="true">
                              <label for="validate" class="danger">*Je voudrais configurer les départements, les filières, les modules. </label>
                            </div> 
                          </fieldset>
                          </div> 
                        </div>
                        <div class="form-group row last">
                          <div class="col-md-10 m-auto">
                          
                          <br>
                          <br>
                          <div class="alert alert-icon-left alert-arrow-left alert-info alert-dismissible mb-2"
                        role="alert">
                            <span class="alert-icon"><i class="la la-info-circle"></i></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Info !</strong> Si vous ne choisissiez pas de configurer les départements, les filières et les modules; ils seront créer <strong>automatiquement</strong> selon la recherche fait sur les établissements. 
                      </div>
                          </div> 
                        </div>
                      <h4 class="form-section"><i class="la la-camera"></i>
                      Logo de l'université et l'établissement</h4>
                      
                        <div class="form-group row">
                          <label for="logoUV" class="col-md-3 label-control">
                                Logo de l'université : 
                                <span class="danger">*</span>
                              </label>
                              <div class="col-md-9">
                                <input type="file" accept=".png, .jpg, .jpeg" class="form-control-file"  required data-validation-required-message="Veuillez compléter ce champ" id="logoUV" name="logoUV">
                              </div>      
                        </div>
                        <div class="form-group row last">
                          <label for="logoET" class="col-md-3 label-control">
                                Logo de l'établissement : 
                                <span class="danger">*</span>
                              </label>
                              <div class="col-md-9">
                                <input type="file" accept=".png, .jpg, .jpeg" class="form-control-file"  required data-validation-required-message="Veuillez compléter ce champ" id="logoET" name="logoET">
                              </div>      
                        </div>
                        <h4 class="form-section"><i class="la la-edit"></i>
                      Personnalisation de thème</h4>
                        <div class="form-group">
                          <div class="row">
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="blue" value="skin-blue" onclick="show();" checked>
                              <img src="../thumbnails/blue.png">
                            </div>
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="lightblue" value="skin-blue-light" onclick="show();">
                              <img src="../thumbnails/lightblue.png">
                            </div>
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="red" value="skin-red" onclick="show();">
                              <img src="../thumbnails/red.png">
                            </div>
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="lightred" value="skin-red-light" onclick="show();">
                              <img src="../thumbnails/lightred.png">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="green" value="skin-green" onclick="show();">
                              <img src="../thumbnails/green.png">
                            </div>
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="lightgreen" value="skin-green-light" onclick="show();">
                              <img src="../thumbnails/lightgreen.png">
                            </div>
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="purple" value="skin-purple" onclick="show();">
                              <img src="../thumbnails/purple.png">
                            </div>
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="lightpurple" value="skin-purple-light" onclick="show();">
                              <img src="../thumbnails/lightpurple.png">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="yellow" value="skin-yellow" onclick="show();">
                              <img src="../thumbnails/yellow.png">
                            </div>
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="lightyellow" value="skin-yellow-light" onclick="show();">
                              <img src="../thumbnails/lightyellow.png">
                            </div>
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="black" value="skin-black" onclick="show();">
                              <img src="../thumbnails/black.png">
                            </div>
                            <div class="col">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="lightblack" value="skin-black-light" onclick="show();">
                              <img src="../thumbnails/lightblack.png">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col offset-md-4">
                              <input type="radio" name="theme" class="icheckbox_square-red" id="custom" value="custom" onclick="show();">
                              <img src="../thumbnails/custom.png">
                            </div>
                          </div>
                        </div>
                        <div id="hid" style="display: none;">
                        <div class="form-group row">
                          <label for="SideColor" class="col-md-3 label-control">
                                Couleur de background de Menu :                
                            </label>
                          <div class="col-md-9">
                            <input type="color" class="form-control" id="SideColor" value="#222D32" name="SideColor">
                        
                              
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="NavColor" class="col-md-3 label-control">
                                Couleur de barre de navigation :
                              </label>
                              <div class="col-md-9">
                                <input type="color" class="form-control" id="NavColor" value="#3C8DBC" name="NavColor">
                              </div>    
                        </div>
                      </div>
                      </div>
                      <div class="form-actions">
                        <br>
                        <button type="submit" class="btn btn-success float-right" name="save">
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
  <script src="../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
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