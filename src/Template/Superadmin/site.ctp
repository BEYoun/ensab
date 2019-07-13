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

  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/editors/tinymce/tinymce.min.css">
  <!-- END Custom CSS-->

  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/wizard.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/pickers/daterange/daterange.css">
  <!-- END Page Level CSS-->

  <script type="text/javascript">
    function sitesuccess() {
      swal({
        title: "Enregistré!",
        text: "Le Site Web de l'établissement a été modifié!",
        type: "success",
        icon:"success",
        timer: 20000,
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
        <li class=" nav-item"><a href="service"><i class="la la-cog"></i><span class="menu-title" data-i18n="nav.templates.main">Contrôle <br>des Services d'App</span></a>
         
        </li>
        <li class=" nav-item active"><a href="site"><i class="la la-edit"></i><span class="menu-title" data-i18n="nav.templates.main">Gestion <br> de Site Web</span></a>
         
        </li>
        
        
        
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
                  <h4 class="card-title" id="row-separator-basic-form">
                    Personnalisation de site web de l'établissement
                    <small class="block"> <?php echo $nometab;?></small>
                  </h4>
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
                      <div class="form-body">
                        <h4 class="form-section"><i class="la la-user"></i> Information sur l'établissement</h4>
                        <div class="form-group row">
                          <label for="pres" class="col-md-3 label-control">
                                Présentation :
                                <span class="danger">*</span>                               
                              </label>
                          <div class="col-md-9">
                            
                                <textarea rows="7" class="form-control" required id="pres" name="pres" placeholder="Missions de l'établissement"></textarea>
                        
                              
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="mission" class="col-md-3 label-control">
                                Mission :
                                <span class="danger">*</span>
                              </label>
                              <div class="col-md-9">
                                <textarea rows="7" class="form-control" required id="mission" name="mission" placeholder="Missions de l'établissement"></textarea>
                              </div>    
                        </div>
                        <div class="form-group row last">
                          <label for="admm" class="col-md-3 label-control">
                                Admission :
                                <span class="danger">*</span>
                              </label>
                              <div class="col-md-9">
                                <textarea rows="7" class="form-control" required id="admm" name="admission" placeholder="L'admission à l'établissement"></textarea>
                              </div>      
                        </div>
                        <h4 class="form-section"><i class="la la-mortar-board"></i> Information Académique</h4>
                        <div class="file-repeater">
                          <div data-repeater-list="info">
                          <div data-repeater-item>
                            <div class="form-group row">
                          
                          
                            <label class="col-md-3 label-control" for="formationinput1">Formation :
                              <span class="danger">*</span>
                            </label>
                            <div class="col-md-9">
                              <input type="text" id="formationinput1" class="form-control border-primary" required placeholder="Libellé de Formation"
                              name="fname">
                            </div>
                          
                        </div>
                        
                        <div class="form-group row">
                          
                          
                          <label class="col-md-3 label-control" for="contenuinput3">Présentation :
                              <span class="danger">*</span>
                          </label>
                          <div class="col-md-9">
                            <textarea type="text" id="contenuinput3" required class="form-control border-primary" placeholder="Présentation de formation"
                            name="presentation" rows="4"></textarea>
                            
                          
                        </div>
                     
                    </div>
                        <div class="form-group row">
                          
                          
                          <label class="col-md-3 label-control" for="contenuinput4">Objectif :
                            <span class="danger">*</span>
                          </label>
                          <div class="col-md-9">
                            <textarea type="text" id="contenuinput4" required class="form-control border-primary" placeholder="Objectif de formation"
                            name="objectif" rows="4"></textarea>
                            
                          
                        </div>
                     
                    </div>
                    <div class="form-group row">
                          
                          
                          <label class="col-md-3 label-control" for="contenuinput5">Débouchet :
                              <span class="danger">*</span>
                          </label>
                          <div class="col-md-9">
                            <textarea type="text" id="contenuinput5" required class="form-control border-primary" placeholder="Débouchet"
                            name="debouchet" rows="4"></textarea>
                            
                          
                        </div>
                     
                    </div>
                    <div class="form-group row">
                          
                          
                          <label class="col-md-3 label-control" for="contenuinput6">Condidat :
                            <span class="danger">*</span>
                          </label>
                          <div class="col-md-9">
                            <textarea type="text" id="contenuinput6" required class="form-control border-primary" placeholder="Condidat"
                            name="condidat" rows="4"></textarea>
                            
                          
                        </div>
                     
                    </div>
                    <div class="form-group row">
                          
                          
                          <label class="col-md-3 label-control" for="contenuinput7">Processus :
                            <span class="danger">*</span>
                          </label>
                          <div class="col-md-9">
                            <textarea type="text" id="contenuinput7" required class="form-control border-primary" placeholder="Processus"
                            name="processus" rows="4"></textarea>
                            
                          
                        </div>
                     
                    </div>
                    <div class="form-group row">
                          
                          
                          <label class="col-md-3 label-control" for="contenuinput8">Organisation :
                            <span class="danger">*</span>
                          </label>
                          <div class="col-md-9">
                            <textarea type="text" id="contenuinput8" required class="form-control border-primary" placeholder="Organisation"
                            name="organisation" rows="4"></textarea>
                            
                          
                        </div>
                     
                    </div>
                    <div class="form-group row">
                      <div class="col-2 m-auto">
                        <br>
                        <br>

                                <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1"><i class="ft-x"></i></button>
                              </div>
                        </div>
                        </div>
                      </div>
                        <div class="row float-right" >
                        <button type="button" data-repeater-create class="btn btn-primary">
                          <i class="ft-plus"></i> Ajouter Formation
                        </button>
                        </div>
                      </div>
                      <br><br>
                        <h4 class="form-section"><i class="la la-user"></i> Direction de l'établissement</h4>
                        <div class="form-group row">
                          <label for="nDir" class="col-md-3 label-control">
                                Nom de Directeur (Directrice) : 
                                <span class="danger">*</span>                              
                              </label>
                          <div class="col-md-9">
                            
                                <input type="text" class="form-control border-primary" required id="nDir" name="nDir" placeholder="Nom">
                        
                              
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="pDir" class="col-md-3 label-control">
                                Prénom de Directeur (Directrice) :
                                <span class="danger">*</span>
                              </label>
                              <div class="col-md-9">
                                <input type="text" class="form-control border-primary" required id="pDir" name="pDir" placeholder="Prénom">
                              </div>    
                        </div>
                        <div class="form-group row last">
                          <label for="motDir" class="col-md-3 label-control">
                                Mot de Directeur (Directrice) :
                                <span class="danger">*</span>
                              </label>
                              <div class="col-md-9">
                                <textarea rows="7" class="form-control" required id="motDir" name="motDir" placeholder="Mot de la Direction"></textarea>
                              </div>      
                        </div>
                        <h4 class="form-section"><i class="la la-user"></i> Réseaux Sociaux</h4>
                        <div class="form-group row">
                          <label for="facebook3" class="col-md-3 label-control">
                                Facebook :                               
                              </label>
                          <div class="col-md-9">
                            
                                <input type="url" class="form-control border-primary" id="facebook3" name="facebook" placeholder="lien de facebook" >
                        
                              
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="twitter3" class="col-md-3 label-control">
                                Twitter :
                                
                              </label>
                              <div class="col-md-9">
                                <input type="url" class="form-control border-primary" id="twitter3" name="twitter" placeholder="lien de twitter">
                              </div>    
                        </div>
                        <div class="form-group row">
                          <label for="google3" class="col-md-3 label-control">
                                Google + :
                                
                              </label>
                              <div class="col-md-9">
                                <input type="url" class="form-control border-primary" id="google3" name="google" placeholder="lien de Google +">
                              </div>      
                        </div>
                        <div class="form-group row last">
                          <label for="linkedin3" class="col-md-3 label-control">
                                LinkedIn :
                                
                              </label>
                              <div class="col-md-9">
                                <input type="url" class="form-control border-primary" id="linkedin3" name="linkedin" placeholder="lien de LinkedIn">
                              </div>  
                        </div>
                        <h4 class="form-section"><i class="la la-phone"></i> Information de Contact </h4>                          
                        <div class="form-group row">
                              <label for="Adresse3" class="col-md-3 label-control">
                                Adresse d'établissement :
                                <span class="danger">*</span>
                              </label>
                              <div class="col-md-9">
                                <input type="text" class="form-control border-primary" required id="Adresse3" name="Adresse" placeholder="Adresse d'établissement">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="emailAddress5" class="col-md-3 label-control">
                                Adresse électronique :
                                <span class="danger">*</span>
                              </label>
                              <div class="col-md-9">
                                <input type="email" class="form-control border-primary" required id="emailAddress5" name="emailAddress" placeholder="Adresse électronique"> 
                              </div>   
                        </div>
                        
                        <div class="form-group row">
                          
                              <label for="phoneNumber3" class="col-md-3 label-control">
                                N° Tel 1 :
                                <span class="danger">*</span>
                              </label>
                              <div class="col-md-9">
                                <input type="tel" class="form-control border-primary" required id="phoneNumber3" name="phone" placeholder="Numéro de Téléphone 1">
                              </div>    
                        </div>
                        <div class="form-group row">
                          
                              <label for="phoneNumber4" class="col-md-3 label-control">
                                N° Tel 2 :
                              </label>
                              <div class="col-md-9">
                                <input type="tel" class="form-control border-primary" id="phoneNumber4" name="phone2" placeholder="Numéro de Téléphone 2">
                              </div>    
                        </div>
                        <div class="form-group row last">
                            <label for="faxNumber3" class="col-md-3 label-control">
                              N° Faxe :
                              <span class="danger">*</span>
                            </label>
                              <div class="col-md-9">
                                <input type="tel" class="form-control border-primary" required id="faxNumber3" name="faxe" placeholder="Numéro de Faxe">
                              </div>    
                        </div>
                        
                       
                        
                      </div>
                      <div class="form-actions">
                        <br>
                        <button type="submit" class="btn btn-success float-right" name="save" onclick="sitesuccess()" >
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
  <script src="../app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"
  type="text/javascript"></script>

  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../app-assets/js/core/app.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../app-assets/js/scripts/extensions/dropzone.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/forms/form-repeater.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
    <script src="../tinymce/tinymce.min.js" type="text/javascript"></script> 
    <script type="text/javascript">
 tinymce.init({
    selector: '.editor',
    height: 400,
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ],
     image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  }
});
  </script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>