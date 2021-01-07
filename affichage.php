<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- endinject -->

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
    <style>
      
div.fw-container div.fw-body div.content {
  margin-top: 5em;
}

div.fw-body h1 {
  display: none;
}

div.fw-container {
  z-index: 1;
}
  
    </style>

    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
   
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script>
      
  
    $(document).ready( function () {
      $('#example')
        .addClass( 'nowrap' )
        .dataTable( {
          responsive: true,
          columnDefs: [
            { targets: [-1, -3], className: 'dt-body-right' }
          ]
        } );
    } );
  
  
    </script>


    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    
  </head>
  <body>

    <?PHP
        include "maladieCont.php";
        $maladie1C=new maladieCont();
        $listdesMaladie=$maladie1C->afficherMaladie();

        //var_dump($listedoctors->fetchAll());
        ?>

    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="assets/images/logo.svg" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
            <li class="nav-item dropdown language-dropdown">
            
                
                
           
              <li class="nav-item dropdown language-dropdown">
            
            <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </li>
            </li>
          </ul>
         
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="ajoutermaladie.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">ajouter maladie</span>
              </a>
            </li>
               
         
            
            <li class="nav-item">
              <a class="nav-link" href="affichage.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">liste des maladie</span>
              </a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="views/medecin.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">ajouter medecin</span>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="Views/charts.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">statistique medecins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Views/showconsultation.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">les consultations</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="Views/ajouterconsultation.html">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">ajouter consultation</span>
              </a>
            </li>
  <li class="nav-item">
              <a class="nav-link" href="views/editconsultation1.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">modifier consultation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="views/removeconsultation1.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">supprimer consultation</span>
              </a>
            </li>

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">


              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Maladies</h4>
                    
                    <div id="example_wrapper" class="dataTables_wrapper">
                      
                      <table id="example" class="display nowrap dataTable dtr-inline collapsed" style="width: 100%;" role="grid" aria-describedby="example_info">
                      <thead>
                          <tr>
                              <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 106px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">id</th>
                              <th class="sorting_asc" tabindex="1" aria-controls="example" rowspan="1" colspan="1" style="width: 106px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                              <th class="sorting_asc" tabindex="2" aria-controls="example" rowspan="1" colspan="1" style="width: 106px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">description</th>
                              
                              
                              

                          </tr>
                      </thead>
                                                  <?PHP
foreach($listdesMaladie as $row){
	?>
                      <tbody>
                        <tr class="table-info">



            <tr>
             <td><?PHP echo $row['id']; ?></td>
                <td id="hey"><?PHP echo $row['nom']; ?></td>
                <td><?PHP echo $row['description']; ?></td>
                
                

                <td>
                  <form method="POST" action="supprimermaladie.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
	</td>
	


                        </tr>
                      </tbody>

        <?PHP
    }  ?>
                    </table>
                    <script type="text/javascript">

               function exportReportToExcel() {
  let table = document.getElementsById("exemple"); // you can use document.getElementById('tableId') as well by providing id to the table tag
  TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
    name: `export.xls`, // fileName you could use any name
    sheet: {
      name: 'Sheet 1' // sheetName
    }
  });
}
}       
                      

$(document).ready(function (){
   var table = $('#example').DataTable({
      columnDefs: [
         { 
            targets: [1, 6], 
            type: 'string',
            render: function(data, type, full, meta){
               if (type === 'filter' || type === 'sort') {
                  var api = new $.fn.dataTable.Api(meta.settings);
                  var td = api.cell({row: meta.row, column: meta.col}).node();
                  data = $('select, input[type="text"]', td).val();
               }

               return data;
            }
         }
      ]
   });
   
   $('#example').on('change', 'tbody select, tbody input[type="text"]', function(){
      table.cell($(this).closest('td')).invalidate();
      
      // Redraw table (optional)
      // table.draw(false);
   });    
});

                    </script>

                    
                    </div>


                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
    <!-- End custom js for this page-->
  </body>
</html>
