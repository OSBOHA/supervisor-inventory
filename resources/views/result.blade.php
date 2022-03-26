
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app" >
        
        <div id="main" >
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>       
<<<<<<< HEAD
           


            
             <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">بيانات القائد</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">المهام الاساسية</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
=======
             <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> عرض نتيجة الجرد</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#main-info" role="tab"
                                    aria-controls="home" aria-selected="true">بيانات القائد</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#main-works" role="tab"
                                    aria-controls="profile" aria-selected="false">المهام الاساسية</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#news" role="tab"
>>>>>>> 78706dc4d9c18457e99cce4e763d59d196bd0fd7
                                    aria-controls="contact" aria-selected="false">الاخبار</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#audit" role="tab"
                                    aria-controls="contact" aria-selected="false">التدقيق (للمراقب)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class='my-2'>
                                    <!-- leader info start -->
                <section class="section">
                                    aria-controls="contact" aria-selected="false">التدقيق(للمراقب)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="main-info" role="tabpanel" aria-labelledby="home-tab">
                                <p class='my-2'>
                                <section class="section">
                <div class="tab-pane fade show active" id="main-info" role="tabpanel" aria-labelledby="main-info-tab">
                    <div class="row" id="table-striped">
                        <div class="col-12" >
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">بيانات القائد</h4>
                                </div>
                                <div class="card-content">
                                   
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0" dir="rtl" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>القائد</th>
                                                    <th>الفريق</th>
                                                    <th>عدد الفريق</th>
                                                    <th>عدد المنسحبين</th>
                                                    <th>المعدل</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-bold-500"> 1</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
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
                <!-- leader info end -->
                                </p>
                            </div>
<<<<<<< HEAD
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                 <!--leader info start -->
=======
                            <div class="tab-pane fade" id="main-works" role="tabpanel" aria-labelledby="profile-tab">
                                <!--leader info start -->
>>>>>>> 78706dc4d9c18457e99cce4e763d59d196bd0fd7
                 
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
<<<<<<< HEAD

                    
                <!-- Striped rows end -->

                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <p class="mt-2">
                                     <!--news start -->           
=======
                            </div>
                            <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="contact-tab">
                                <p class="mt-2">
                                    <!--news start -->           
>>>>>>> 78706dc4d9c18457e99cce4e763d59d196bd0fd7
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
                

                                </p>
                            </div>
                            <div class="tab-pane fade" id="audit" role="tabpanel" aria-labelledby="contact-tab">
                                <p class="mt-2">
<<<<<<< HEAD
                                         <!-- audit start -->
=======
                                     <!-- audit start -->
>>>>>>> 78706dc4d9c18457e99cce4e763d59d196bd0fd7
 <section class="section">
                <div class="tab-pane fade show active" id="audit" role="tabpanel" aria-labelledby="main-info-tab">
                    <div class="row" id="table-striped">
                        <div class="col-12" >
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">التدقيق (للمراقب) </h4>
                                </div>
                                <div class="card-content">
                                   
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0" dir="rtl" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>القائد</th>
                                                    <th>التواصل مع المنسحبين</th>
                                                    <th>تدقيق العلامات النهائية  </th>
                                                    <th>ارفاق سكرين </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-bold-500"> 1</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
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
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">3</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
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
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">5</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
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
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">7</td>
                                                    <td></td>
                                                    <td class="text-bold-500"></td>
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
                                </p>
                            </div>
</div>    
                

                

               
       
 

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- leader info start -->
                

                 
                
                <!-- Striped rows end -->


                
       

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
</script> 
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
             

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>