@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Supervisor Inventory & Points">
    <meta name="author" content="Osboha Programmer [Laila, Rufida, Masa, Shaymaa, Yasmin]">
    
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="https://www.osboha180.com/supervisor_points/assets/images/icons/favicon.ico">
    <title>عرض الجرد</title>
    
    <!-- ==================== Bootstrap core CSS ====================== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- =================== Bootstrap dataTables CSS ================= -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
    
    <!-- ========================= Multi Select ======================= -->
    <link rel="stylesheet" type="text/css" href="https://www.osboha180.com/supervisor_points/assets/css/super_inventory/multi-select.css">
    
    <!-- ======================== fontawesome ========================= -->
    <link type="text/css" href="https://www.osboha180.com/supervisor_points/assets/css/font-awesome.css" rel="stylesheet">
    
    <!--  ======================== TimeCircles ======================== -->
    <link rel="stylesheet" href="https://www.osboha180.com/supervisor_points/assets/css/super_inventory/TimeCircles.css" type="text/css">
    
    <!--  ===================== Perfect Scrollbar ===================== -->
    <link rel="stylesheet" type="text/css" href="https://www.osboha180.com/supervisor_points//assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    
    <!--  ========================= Animate ========================= -->
    <link rel="stylesheet" href="https://www.osboha180.com/supervisor_points/assets/css/super_inventory/animate.css"/>
    <!-- ======================== Custom Font ========================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=El+Messiri|Tajawal&display=swap" rel="stylesheet">
   
    <!-- ========================== Custom CSS ======================== -->
    <link href="https://www.osboha180.com/supervisor_points/assets/dist/css/style.min.css" rel="stylesheet">
    <link href="https://www.osboha180.com/supervisor_points/assets/css/super_inventory/custom.css" rel="stylesheet">
    <link href="https://www.osboha180.com/supervisor_points/assets/css/super_inventory/inventory_design.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
   
    <!-- ==================== jQuery core JavaScript ================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader" >
        <div class="lds-ripple" >
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full"><style>
    .fa{
        margin-right: 10px;
    }
</style>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" class="col-12">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                    </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- inst msg & objection -->
                <!-- ============================================================== -->
                                <li class="nav-item">
                    <a class="nav-link text-muted waves-effect waves-dark pro-pic" href="https://www.osboha180.com/supervisor_points/Supervisor_inventory/supervisor_message" style="padding-top:7px">
                        <i class="fa fa-envelope" style="font-size:1.5em;"></i>
                                                    <span class="badge badge-pill badge-danger" style="float:right; margin-top:8px">
                                3                            </span>
                                            </a>
                </li>
                                <li class="nav-item">
                    <a class="nav-link waves-effect waves-dark pro-pic text-white" href="https://www.osboha180.com/supervisor_points/Login/logout" style="font-size:1.5em;font-weight:900">Logout</a>
                </li>
                <!-- ============================================================== -->
                <!-- User Info and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>


<style>
li{list-style-type: none;}
.fa-user-check{color: #636e72;}
</style>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Page Title -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
       
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header float-right" dir="rtl">عرض نتيجة الجرد</h3>
            </div>
        </div><!--/.row-->
    </div>
    <!-- ============================================================== -->
    <!-- End Page Title -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <!-- subtitle -->
                    <div class="card-header text-right subtitle" dir="rtl">
                        <!-- ======== Timar ======== -->
                        <div style="width:350px; padding-top:0px; float:right">                            <div data-timer="-244048" id="count-down"></div>
                        </div>
                    </div>
                    <!-- //subtitle -->
                    <!-- ============================================================== -->
                    <!-- Start Tab Section -->
                    <!-- ============================================================== -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left:3%">
                        <li class="nav-item">
                            <a class="nav-link active" id="main-info-tab" data-toggle="pill" href="#main-info" role="tab" aria-controls="main-info" aria-selected="true">بيانات القادة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="main-works-tab" data-toggle="pill" href="#main-works" role="tab" aria-controls="main-works" aria-selected="false">المهام الأساسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="news-tab" data-toggle="pill" href="#news" role="tab" aria-controls="news" aria-selected="false">الأخبار</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="audit-tab" data-toggle="pill" href="#audit" role="tab" aria-controls="audit" aria-selected="false">التدقيق (للمراقب)</a>
                        </li>
                        <li class="nav-item">
                            <input type="color" class="form-control" id="btn_change" onchange="change_color()" style="margin-left:10px">
                        </li>
                    </ul>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class='my-2'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut nulla
                                    neque. Ut hendrerit nulla a euismod pretium.
                                    Fusce venenatis sagittis ex efficitur suscipit. In tempor mattis fringilla. Sed id
                                    tincidunt orci, et volutpat ligula.
                                    Aliquam sollicitudin sagittis ex, a rhoncus nisl feugiat quis. Lorem ipsum dolor sit
                                    amet, consectetur adipiscing elit.
                                    Nunc ultricies ligula a tempor vulputate. Suspendisse pretium mollis ultrices.</p>
                            </div>
                    <!-- ============================================================== -->
                    <!-- End Tab Section -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Content Section -->
                    <!-- ============================================================== -->
                    <div class="tab-content" id="pills-tabContent">
                        <!-- ============================================================== -->
                        <!-- Start Leaders Info Tab -->
                        <!-- ============================================================== -->
                        <div class="tab-pane fade show active" id="main-info" role="tabpanel" aria-labelledby="main-info-tab">
                             <div class="table-responsive" align="center">
                             <table class="table table-striped mb-0" dir="rtl" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>القائد</th>
                                                    <th>قراءة القائد</th>
                                                    <th>منشور المتابعة </th>
                                                    <th>عدد منشور الدعم</th>
                                                    <th>العلامات الاولية</th>
                                                    <th>العلامات النهائية</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-bold-500"> 1</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">2</td>
                                                    <td></td>
                                                    <td class="text-bold-500"> </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">3</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">4</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">5</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">6</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">7</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr> 
                                                <tr>
                                                    <td class="text-bold-500">8</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>                                             
                                               
                                            </tbody>
                                        </table>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Leaders Info Tab -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Start Main Work Tab -->
                        <!-- ============================================================== -->
                        <section class="section">
                <div class="tab-pane fade show active" id="main-works" role="tabpanel" aria-labelledby="main-info-tab">
                    <div class="row" id="table-striped">
                        <div class="col-12" >
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">المهام الاساسية  </h4>
                                </div>
                                <div class="card-content">
                                   
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0" dir="rtl" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>القائد</th>
                                                    <th>قراءة القائد</th>
                                                    <th>منشور المتابعة </th>
                                                    <th>عدد منشور الدعم</th>
                                                    <th>العلامات الاولية</th>
                                                    <th>العلامات النهائية</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-bold-500"> 1</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">2</td>
                                                    <td></td>
                                                    <td class="text-bold-500"> </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">3</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">4</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">5</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">6</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">7</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr> 
                                                <tr>
                                                    <td class="text-bold-500">8</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>                                             
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
                <!-- Striped rows end -->
                        <!-- ============================================================== -->
                        <!-- Start News Tab -->
                        <!-- ============================================================== -->
                        <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">
                            <div class="card-columns text-right" dir="rtl" style="font-size:1.1em;">                                <div class="card border-dark p-3 radius" style="max-width:18rem;">
                                    <div class="card-header news-header" style="border-radius:50px;">
                                        Masa                                        <small><b>0/2</b></small>
                                    </div>
                                    <div class="card-body card-text" style="margin-right:-40px">
                                        <ul>                                        </ul>
                                    </div>
                                </div>                                <div class="card border-dark p-3 radius" style="max-width:18rem;">
                                    <div class="card-header news-header" style="border-radius:50px;">
                                        Test                                        <small><b>0/2</b></small>
                                    </div>
                                    <div class="card-body card-text" style="margin-right:-40px">
                                        <ul>                                        </ul>
                                    </div>
                                </div>                                <div class="card border-dark p-3 radius" style="max-width:18rem;">
                                    <div class="card-header news-header" style="border-radius:50px;">
                                        Rufi                                        <small><b>0/2</b></small>
                                    </div>
                                    <div class="card-body card-text" style="margin-right:-40px">
                                        <ul>                                        </ul>
                                    </div>
                                </div>                                <div class="card border-dark p-3 radius" style="max-width:18rem;">
                                    <div class="card-header news-header" style="border-radius:50px;">
                                        salwa                                        <small><b>0/2</b></small>
                                    </div>
                                    <div class="card-body card-text" style="margin-right:-40px">
                                        <ul>                                        </ul>
                                    </div>
                                </div>                                <div class="card border-dark p-3 radius" style="max-width:18rem;">
                                    <div class="card-header news-header" style="border-radius:50px;">
                                        رونق بني عطا                                        <small><b>0/2</b></small>
                                    </div>
                                    <div class="card-body card-text" style="margin-right:-40px">
                                        <ul>                                        </ul>
                                    </div>
                                </div>                                <div class="card border-dark p-3 radius" style="max-width:18rem;">
                                    <div class="card-header news-header" style="border-radius:50px;">
                                        Rowan                                        <small><b>0/2</b></small>
                                    </div>
                                    <div class="card-body card-text" style="margin-right:-40px">
                                        <ul>                                        </ul>
                                    </div>
                                </div>                                <div class="card border-dark p-3 radius" style="max-width:18rem;">
                                    <div class="card-header news-header" style="border-radius:50px;">
                                        m1                                        <small><b>0/2</b></small>
                                    </div>
                                    <div class="card-body card-text" style="margin-right:-40px">
                                        <ul>                                        </ul>
                                    </div>
                                </div>                            </div><br><br>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End News Tab -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Start Audit Tab -->
                        <!-- ============================================================== -->
                        <div class="tab-pane fade" id="audit" role="tabpanel" aria-labelledby="audit-tab">
                            <div class="table-responsive" align="center">
                                <table class="table v-middle inventory-table md-table" dir="rtl">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">القائد</th>
                                            <th class="border-top-0">التواصل مع المنسحبين</th>
                                            <th class="border-top-0">تدقيق العلامات النهائية</th>
                                            <th class="border-top-0">ارفاق سكرين</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        <tr>
                                            <td>1</td>
                                            <td>Masa</td>
                                            <td>                                            </td>
                                            <td>                                            </td>
                                            <td><i class="fas fa-times"></i>                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td>2</td>
                                            <td>Test</td>
                                            <td>                                            </td>
                                            <td>                                            </td>
                                            <td><i class="fas fa-times"></i>                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td>3</td>
                                            <td>Rufi</td>
                                            <td>                                            </td>
                                            <td>                                            </td>
                                            <td><i class="fas fa-times"></i>                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td>4</td>
                                            <td>salwa</td>
                                            <td>                                            </td>
                                            <td>                                            </td>
                                            <td><i class="fas fa-times"></i>                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td>5</td>
                                            <td>رونق بني عطا</td>
                                            <td>                                            </td>
                                            <td>                                            </td>
                                            <td><i class="fas fa-times"></i>                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td>6</td>
                                            <td>Rowan</td>
                                            <td>                                            </td>
                                            <td>                                            </td>
                                            <td><i class="fas fa-times"></i>                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td>7</td>
                                            <td>m1</td>
                                            <td>                                            </td>
                                            <td>                                            </td>
                                            <td><i class="fas fa-times"></i>                                            </td>
                                        </tr>
                                                                            </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Audit Tab -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Start Uncommitted Tab -->
                        <!-- ============================================================== 
                        <li class="nav-item">
                            <a class="nav-link" id="uncommitted-tab" data-toggle="pill" href="#uncommitted" role="tab" aria-controls="uncommitted" aria-selected="false">قادة غير ملتزمون</a>
                        </li>
                        
                        <div class="tab-pane fade" id="uncommitted" role="tabpanel" aria-labelledby="uncommitted-tab">
                            Uncommitted
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Content Section -->
                    <!-- ============================================================== -->
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        &copy; Developed by <a href="">Osboha 180</a> Programers.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<script>
$(document).ready(function() {
    $("#count-down").TimeCircles();
    $("#count-down").TimeCircles({count_past_zero:false});
    $("#count-down").TimeCircles({animation:"smooth"});// ticks
    $("#count-down").TimeCircles({time:{
        Days:    {color: "#ff6666" }, //32ff7e  2d3436
        Hours:   {color: "#9966cc" }, //007bff
        Minutes: {color: "#996699" }, //ffeaa7
        Seconds: {color: "#ffcccc" }, //fd79a8
    }});
    $("#count-down").TimeCircles({circle_bg_color:"#dfe6e9"});
    $("#count-down").TimeCircles({use_background:true});
});
function change_color(){
    $(".inventory-table>thead>tr>th").css("background",$('#btn_change').val());
    $(".news-header").css("background",$('#btn_change').val());
};
</script>    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    
    <!-- ============== Bootstrap core JavaScript ===================== --> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- =============== DataTables core JavaScript =================== -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
    <!-- =========================== WOW.js =========================== -->
    <script src="https://www.osboha180.com/supervisor_points/assets/js/super_inventory/wow.min.js"></script>
    <script>new WOW().init();</script>
    
    <!-- ======================== TimeCircles ========================= -->
    <script src="https://www.osboha180.com/supervisor_points/assets/js/super_inventory/TimeCircles.js"></script>

    <!-- ========================= Multi Select ======================= -->
    <script src="https://www.osboha180.com/supervisor_points/assets/js/super_inventory/jquery.multi-select.js"></script>
    
    <!-- ========================= Plugins Js ========================== -->
    <script src="https://www.osboha180.com/supervisor_points/assets/js/super_inventory/plugins.js"></script>
    <script type="text/javascript">var user_id = "
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: user_id</p>
<p>Filename: templates/page_footer.php</p>
<p>Line Number: 29</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/osbohaco/public_html/supervisor_points/application/views/templates/page_footer.php<br />
			Line: 29<br />
			Function: _error_handler			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/osbohaco/public_html/supervisor_points/application/controllers/Supervisor_inventory.php<br />
			Line: 41<br />
			Function: view			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/osbohaco/public_html/supervisor_points/index.php<br />
			Line: 315<br />
			Function: require_once			</p>

		
	

</div>";</script>
    <!--<script src="https://www.osboha180.com/supervisor_points/assets/js/super_inventory/InsertShowData.js"></script> -->
    
    <!-- ==================== Navbar Style Switch ===================== -->
    <script src="https://www.osboha180.com/supervisor_points/assets/dist/js/app-style-switcher.js"></script>
    <!-- ======================= Wave Effects ========================= -->
    <script src="https://www.osboha180.com/supervisor_points/assets/dist/js/waves.js"></script>
    <!-- ========================= Menu sidebar ======================= -->
    <script src="https://www.osboha180.com/supervisor_points/assets/dist/js/sidebarmenu.js"></script>
    <!-- ====================== Custom JavaScript ===================== -->
    <script src="https://www.osboha180.com/supervisor_points/assets/dist/js/custom.js"></script>
    
    <!--This page JavaScript -->
    <!--chartis chart
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>-->
</body>

</html>