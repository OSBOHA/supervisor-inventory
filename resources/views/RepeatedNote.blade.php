@extends('layouts.app')

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>osboha180</title>
    
<!-- Include Choices CSS -->
    <link rel="stylesheet" href="assets/vendors/choices.js/choices.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">   
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

 <body>
    <div id="main">
      <header class="mb-3">
         <a href="#" class="burger-btn d-block d-xl-none">
             <i class="bi bi-justify fs-3"></i>
         </a>
     </header>

 <!-- Start Choose The Page -->         
<div class="page-heading">
    <section class="bootstrap-select">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">الجرد الإسبوعي</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6 mb-4">
                                    <h6> إضافة قائد</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option value="">Ahmed</option>
                                            <option value="">Amjade</option>
                                            <option value="">Ali</option>
                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-md-6 mb-4 mt-4">                                 
                                  <fieldset class="form-group">
                                      <select class="form-select" id="basicSelect">
                                          <option value="repeated-notes">ملاحظات متكررة</option>
                                          <option value="">البنود الاساسية</option>
                                          <option value="">اضافت علي عمل المراقب</option>
                                      </select>
                                  </fieldset>
                              </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Choose The Page --}}

    <!-- Multiple choices start -->
    <section class="multiple-choices">
        <div class="row">
            <div class="col-12">
                <div class="card">                   
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <h2 class="Title">قادة لا يوصلون الأخبار</h2>
                                    <div class="form-group">
                                        <select class="choices form-select multiple-remove" multiple="multiple">
                                            <option value="shrif">Shrif</option>
                                            <option value="Same">Same</option>
                                            <option value="Sana">Sana</option>
                                            <option value="Shahad">Shahad</option>
                                            <option value="Salih">Salih</option>
                                        </select>
                                       <button type="button" class="btn btn-outline-primary">حفظ</button>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <h2 class="Title">قادة يتأخرون بالمنشورات</h2>
                                    <div class="form-group">
                                        <select class="choices form-select multiple-remove" multiple="multiple">
                                        
                                                <option value="shrif">Shrif</option>
                                                <option value="Same">Same</option>
                                                <option value="Sana">Sana</option>
                                                <option value="Shahad">Shahad</option>
                                                <option value="Salih">Salih</option>
                                        </select>
                                        <button type="button" class="btn btn-outline-primary">حفظ</button>
                                    </div>
                                </div>

                             <div class="col-md-12 mb-4">
                                    <h2 class="Title">قادة يتأخرون بالعلامات الأولية</h2>
                                <div class="form-group">
                                    <select class="choices form-select multiple-remove" multiple="multiple">     
                                            <option value="shrif">Shrif</option>
                                            <option value="Same">Same</option>
                                            <option value="Sana">Sana</option>
                                            <option value="Shahad">Shahad</option>
                                            <option value="Salih">Salih</option>
                                    </select>
                                    <button type="button" class="btn btn-outline-primary">حفظ</button>
                                </div>
                             </div>

                                <div class="col-md-12 mb-4">
                                   <h2 class="Title">قادة تم الإنابة عنهم</h2>
                                    <div class="form-group">
                                        <select class="choices form-select select-light-danger multiple-remove" multiple="multiple">
                                            <option value="shrif">Shrif</option>
                                            <option value="Same">Same</option>
                                            <option value="Sana">Sana</option>
                                            <option value="Shahad">Shahad</option>
                                            <option value="Salih">Salih</option>
                                        </select>
                                        <button type="button" class="btn btn-outline-primary">حفظ</button>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-4">
                                  <h2 class="Title"> قادة الاسبوع  المخفف</h2>
                                   <div class="form-group">
                                       <select class="choices form-select select-light-danger multiple-remove" multiple="multiple">
                                        <option value="shrif">Shrif</option>
                                        <option value="Same">Same</option>
                                        <option value="Sana">Sana</option>
                                        <option value="Shahad">Shahad</option>
                                        <option value="Salih">Salih</option>
                                       </select>
                                       <button type="button" class="btn btn-outline-primary">حفظ</button>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Multiple choices end -->
   </div>            
 </div>


     <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     <script src="assets/js/bootstrap.bundle.min.js"></script>
    
     <!-- Include Choices JavaScript -->
     <script src="assets/vendors/choices.js/choices.min.js"></script>
     <script src="assets/js/pages/form-element-select.js"></script>
     <script src="assets/js/mazer.js"></script>

   </body>
</html>



