<!--

=========================================================
* Argon Dashboard - v1.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GP clinic</title>
  <!-- Favicon -->
  <link href="<?php echo e(asset('template/assets/img/brand/favicon.png')); ?>" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital@1&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link href="<?php echo e(asset('template/assets/js/plugins/nucleo/css/nucleo.css')); ?>" rel="stylesheet" />

  <link href="<?php echo e(asset('template/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template/assets/css/dataTables.css')); ?>"> -->
  <!-- CSS Files -->
  <link href="<?php echo e(asset('template/assets/css/argon-dashboard.css?v=1.1.1')); ?>" rel="stylesheet" />
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">

 <!--  <link href="<?php echo e(asset('template/table/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet"> -->


  <!-- <link href="<?php echo e(asset('template/assets/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet"> -->

  <link href="<?php echo e(asset('template/assets/css/mine.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('dist/css/select2.min.css')); ?>" rel="stylesheet" />
  
  <style type="text/css">
    html,body{
      height: 100%;
    }
    @media (max-width: 720px){
        .profilemedia{
           text-align: center;
            margin-left: 183px;
            margin-right: 0px;
            margin-top: 0px;
            padding-top: 0px;
        }
    }

    @media (min-width: 768px){
      .main-content .container-fluid {
          padding-left: 20px !important;
          padding-right: 20px !important;
      }
    }


    .sfont{
      font-size: 0.875rem;
    }
    .my-td
    {
     max-width: 100px;
     overflow: hidden;
     text-overflow: ellipsis;
     white-space: nowrap;
    }
     .my-td:hover
    {
     
     overflow: visible;
    
     white-space: unset;
    }
    #more  {display:  none;}
    body{
      min-height: 100vh;
    }
    #page-content{
      flex:1 0 auto;
    }
    
  </style>
  <?php echo $__env->yieldContent('style'); ?>

</head>

<body class="">

  <div id = "dialog-4" title = "Dialog Title goes here...">
        
      </div>
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md  navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../index.html">
        <img src="<?php echo e(asset('template/assets/img/theme/l03.png')); ?>" class="navbar-brand-img" alt="..." >
        <span class="heading">Gp Clinic </span>
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="">
                <?php echo e(Auth::check() ? Auth::user()->name: ''); ?>

              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>


             <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>


           <!-- <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span> -->
            </a>
            <div class="dropdown-divider"></div>
             <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="ni ni-key-25 text-info"></i> <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <img src="<?php echo e(asset('template/assets/img/theme/l03.png')); ?>" class="navbar-brand-img" alt="..." >
              <span class="heading">Gp Clinic</span>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link " href="/">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          
          <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>

          <li class="nav-item">
            <a class="nav-link " href="/expenseList">
              <i class="ni ni-align-left-2 text-orange"></i> Expense
            </a>
          </li> 

          <li class="nav-item">
            <a class="nav-link " href="/report">
              <i class="ni ni-align-left-2 text-orange"></i> Report
            </a>
          </li> 
        
          <li class="nav-item">
            <a class="nav-link " href="/med">
              <i class="ni ni-align-left-2 text-orange"></i> Medicine
            </a>
          </li> 
          <?php endif; ?>

          <?php if(auth()->check() && auth()->user()->hasRole('Super_Admin')): ?>
          
           <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('owners.index')); ?>">
              <i class="ni ni-glasses-2 text-orange"></i> Owners
            </a>
          </li>
          <?php endif; ?>
          <?php if(auth()->check() && auth()->user()->hasAnyRole('Super_Admin|Admin|Reception')): ?>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('doctor.index')); ?>">
              <i class="ni ni-hat-3 text-blue"></i> Doctor
            </a>
          </li>
          <?php endif; ?>
           <?php if(auth()->check() && auth()->user()->hasAnyRole('Super_Admin|Admin')): ?>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('reception.index')); ?>">
              <i class="ni ni-circle-08 text-yellow"></i> Reception
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('patient.index')); ?>">
              <i class="ni ni-circle-08 text-blue"></i> Patient
            </a>
          </li>
          <?php endif; ?>
          <?php if(auth()->check() && auth()->user()->hasRole('Reception')): ?>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('appointment.create')); ?>">
              <i class="ni ni-circle-08 text-yellow"></i> Booking
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('todayAppointment')); ?>">
              <i class="ni ni-circle-08 text-yellow"></i> Now
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('patient.create')); ?>">
              <i class="ni ni-circle-08 text-yellow"></i> New Patient
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('patientlistforRec')); ?>">
              <i class="ni ni-circle-08 text-yellow"></i>  Patient list
            </a>
          </li>
          <?php endif; ?>

         
         
         <?php if(auth()->check() && auth()->user()->hasRole('Doctor')): ?>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('appointpatient')); ?>">
              <i class="ni ni-watch-time text-orange"></i> Incharge Patients
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('patient.index')); ?>">
              <i class="ni ni-circle-08 text-blue"></i> Patient
            </a>
          </li>
          <?php endif; ?>
           <?php if(auth()->check() && auth()->user()->hasAnyRole('Reception|Doctor')): ?>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('treatment.index')); ?>">
              <i class="ni ni-favourite-28 text-danger"></i> Treatment
            </a>
          </li>
          <?php endif; ?>
          <?php if(auth()->check() && auth()->user()->hasAnyRole('Super_Admin')): ?>

          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('medicineType.index')); ?>">
              <i class="ni ni-money-coins text-orange"></i> MedicineType
            </a>
          </li>
          

          <?php endif; ?>

          
           
          
          <li class="nav-item">
            
            <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="ni ni-key-25 text-info"></i> <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="../examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Register
            </a>
          </li> -->
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading 
        <h6 class="navbar-heading text-muted">Documentation</h6>
         Navigation 
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-spaceship"></i> Getting started
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-palette"></i> Foundation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
              <i class="ni ni-ui-04"></i> Components
            </a>
          </li>
        </ul>-->
      </div>
    </div>
  </nav>
  <div class="main-content" >
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-lg navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html"> 
         <span class="text-dark"> Clinic  :</span><?php $user=Auth::user();

          if($user->hasRole('Admin')){
            echo $user->owners[0]->clinic_name;
          }elseif($user->hasRole('Super_Admin')){
            echo 'GP Clinic';
          }elseif ($user->hasRole('Doctor')) {
             echo $user->doctors[0]->owner->clinic_name;
          }else{
            echo $user->receptions[0]->owner->clinic_name;
          }
          ?>

        </a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <!-- <span class="avatar avatar-sm rounded-circle">

                  <img alt="Image placeholder" src="">
                </span> -->
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo e(Auth::check() ? Auth::user()->name:'unknow'); ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>


              <?php if(Auth::check()): ?>
              <?php 
              $rolename=Auth::user()->roles[0];
              $id=Auth::user()->id;
              $url='';?>

              <?php if($rolename->name=='Admin'): ?>
              <?php ?>

             <a href="<?php echo e(route('owners.show',Auth::user()->owners[0])); ?>" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="<?php echo e(route('owners.edit',Auth::user()->owners[0])); ?>" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Edit Profile</span>
              </a>
             
              <?php elseif($rolename->name=='Doctor'): ?>
              
              <a href="<?php echo e(route('doctor.show',Auth::user()->doctors[0])); ?>" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="<?php echo e(route('doctor.edit',Auth::user()->doctors[0])); ?>" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Edit Profile</span>
              </a>
              
             <?php elseif($rolename->name=='Reception'): ?>
             <a href="<?php echo e(route('reception.show',Auth::user()->receptions[0])); ?>" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
             <?php else: ?>
             <?php endif; ?>

              <?php endif; ?>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="ni ni-user-run"></i>
                <span>Logout</span>
                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-3 pt-md-7">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
         <?php echo $__env->yieldContent('add'); ?>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      
      <?php echo $__env->yieldContent('content'); ?>
     
      <!-- Footer -->
      <!-- <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer> -->
    </div>
  </div>
  <!--   Core   -->
  <script src="<?php echo e(asset('template/assets/js/plugins/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="<?php echo e(asset('template/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <script src="<?php echo e(asset('template/assets/datatables/jquery.dataTables.js')); ?>"></script>
  <script src="<?php echo e(asset('template/assets/datatables/dataTables.bootstrap4.js')); ?>"></script>
  <!--   Optional JS   -->
  <script src="<?php echo e(asset('template/assets/js/plugins/chart.js/dist/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('template/assets/js/plugins/chart.js/dist/Chart.extension.js')); ?>"></script>
  

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- <script src="<?php echo e(asset('template/assets/js/moment.min.js')); ?>"></script> -->
  <!--   Argon JS   -->
  <!-- <script src="<?php echo e(asset('template/assets/js/argon-dashboard.min.js?v=1.1.1')); ?>"></script> -->
  <!-- <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script> -->

  <!--  <script src="<?php echo e(asset('template/table/datatables/jquery.dataTables.min.js')); ?>"></script> -->
  <!-- <script src="<?php echo e(asset('template/table/datatables/dataTables.bootstrap4.min.js')); ?>"></script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="<?php echo e(asset('template/table/js/demo/datatables-demo.js')); ?>"></script> -->
  <script type="text/javascript" src=""></script>
  <script src="<?php echo e(asset('template/table/datatables/icon.js')); ?>"></script>
  <!-- <script src="<?php echo e(asset('dist/js/select2.min.js')); ?>"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

  <script>


    // window.$('table').DataTable();
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });

     
      
  </script>
  <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('script'); ?>
</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/myprj/gp-clinic/resources/views/frontendTemplate.blade.php ENDPATH**/ ?>