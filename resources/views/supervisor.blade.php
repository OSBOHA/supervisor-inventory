@extends('layouts.app')
@section('content')

 <div class="container">
  


      <head>
    
         <title>الاصافات على عمل المراقب  </title>
    
      </head>

      <body>
        <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
        <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
            </div>
            
        </div>
        </div>
        <div class="sidebar-menu">
        <ul class="menu">
            <li
             class="sidebar-item  has-sub">
               <a href="#" class='sidebar-link'>
               <h5><i class="bi bi-person-circle"></i></h5>
                  <span> <h5> Super Test </h5></span>
                  <ul class="submenu ">
                    <div class="submenu-item" >
                        <a href="#" class="submenu-item" >
                        <i class="bi bi-envelope-fill"></i> 
                        <span>استفسارات الموجه</span>

                    </div>
                   
                    
                  </ul>  
            </li>
                  
            
            <li
            class="sidebar-item  ">
                <a href="#" class='sidebar-link'>
                <i class="bi bi-person-lines-fill"></i>
                    <span>بياناتك الشخصية</span>
                </a>
                
            </li>
            
            <li
                class="sidebar-item ">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pencil-square"></i>
                    <span>الجرد لأسبوعي</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-receipt-cutoff"></i>
                    <span>عرض نتيجة الجرد</span>
                </a>
                
            </li>
            
            <li
                class="sidebar-item ">
                <a href="form-layout.html" class='sidebar-link'>
                    <i class="bi bi-exclamation-circle-fill"></i>
                    <span>صندوق اعتراضاتك</span>
                </a>
            </li>
            
            <li class="sidebar-item  ">
                <a href="form-layout.html" class='sidebar-link'>
                    <i class="bi bi-reception-4"></i>
                    <span>ترتيبك الرقابي</span>
                </a>
                
            </li>
            
            
        </ul>

        </div>

       
        </div>
        </div>



        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                    <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last"> <h3> الاضافات على عمل المراقب </h3> </div>

                </a>
            </header>
            
            <div class="page-heading">
            <div class="page-title">
            <div class="row">
            <div class="col"> <h3>  الإضافات على عمل المراقب : </h3> 
            <br>

            <div class="alert alert-light-danger color-danger"><i class="bi bi-exclamation-circle"></i> 
                    في هذا الجزء ستقوم بوضع أي عمل إضافي تقوم به كمراقب <b>( اختياري* )</b> عدا سكرين المنسحبين <b>( إجباري )</b>
            </div>
            </div>
            <br>
            
         
         
        </div>



     <section id="basic-modals">
        <div class="row">
            <div class="col 12">
                <div class="card">
                <div class="card-body">
                        <div class="col-md-12 mb-3">
                           <p class ="lead text-center">
                           <label> <h3><Center> التواصل مع القائد الذي لم يدخل الروابط</Center> </h3> </label>
                        </div>
                        <br>
                        <br>
                    <div class="card-body">
                      <input class="form-control" type="file" id="formFileMultiple" multiple>  
                    </div>
                        
                </div>
            </div>
        </div> 
    </section>      
    
     <section class="section">
     
        <div class="row">
            <div class="col"> 
                <div class="card">
                    
                    <div class="card-body">
                        <div class="form-group with-title mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                             <label><h3> <Center>(1) اكتب شرح موجز للفكرة * </Center> </h3>  </label>
                             <br>
                             <p> أرفق صورة للنشاط الخاص بك : </p>
                             <br>
                             <input class="form-control" type="file" id="formFileMultiple" multiple>
                         
                           
                             
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>  
     
     <section class="section">
     
     <div class="row">
         <div class="col"> 
             <div class="card">
                 
                 <div class="card-body">
                     <div class="form-group with-title mb-3">
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                          <label><h3> <center> (2) اكتب شرح موجز للفكرة *</div> </Center> </h3>  </label>
                          <br>
                          <p> أرفق صورة للنشاط الخاص بك : </p>
                          <br>
                          <input class="form-control" type="file" id="formFileMultiple" multiple>
                         
                     </div>
                 </div>
             </div>
         </div>
     </div>
  </section> 
  <section class="section">
     
     <div class="row">
         <div class="col"> 
             <div class="card">
                 
                 <div class="card-body">
                     <div class="form-group with-title mb-3">
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                         <label><h3> <Center>(3) اكتب شرح موجز للفكرة *</div> </Center> </h3>  </label>
                         <br>
                         <p> أرفق صورة للنشاط الخاص بك : </p>
                         <br>
                         <input class="form-control" type="file" id="formFileMultiple" multiple>
                         
                     </div>
                 </div>
             </div>
         </div>
     </div>
  </section> 

  <section class="multiple-choices">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    
                        <div class="card-body">
                        <div class="col-md-12 mb-3">
                           <p class ="lead text-center">
                          <label><h3> <Center> التواصل مع باقي القادة للإطمئنان</Center> </h3>  </label>
                          
                          <input type="radio" name="Leader" id="Leader2_1" value="1"/>  تم <br>
                          <input type="radio" name="Leader" id="Leader2_2" value="0"/> لم يتم <br><br>

                                <div class="form-group">
                                        <select class="choices form-select multiple-remove" multiple="multiple">
                                            <optgroup label="task">
                                                <option value="task">t-01</option>
                                                <option value="task" selected>tasks</option>
                                                <option value="task">t-02</option>
                                                <option value="task">t-03</option>
                                            </optgroup>
                                            <optgroup label="اسم القائد">
                                                <option value="name">Masa</option>
                                                <option value="name">Salwa</option>
                                                <option value="name" selected>اسم القائد</option>
                                                <option value="name">Rufi</option>
                                                <option value="name">Noor</option>
                                                <option value="name">Med</option>
                                            </optgroup>
                                        </select>
                                </div>
                                <br>
                                    <p>  ارفق صورة للتواصل مع أحد القادة : </p>
                                <br>
                          <input class="form-control" type="file" id="formFileMultiple" multiple>
                          <br>
                          
                          <div class="buttons">
                          <a href="#" class="btn btn-secondary" style="border-radius: 5000px;"  > حفظ  التغييرات </a>
                          </div>
                          
                          
                        </div>
                        </div>
                                   
                        


                    
                </div>
            </div>
        </div>
    </section>
   
  </div>

            
        </div>
    </div>
       

  
  
 </div>

           
        </div>
    </div>
    
  </body>

         
 </div>    
            
            
           
            
            
@endsection
