@extends('layouts.app')
@section('content')

    <div class="container"> 
       
        <body>
        
          <div id="main-content" >
             <div class="page-heading">
                <header class="mb-3">
                  <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last"> <h3> الاضافات على عمل المراقب </h3> </div>
                        </div>
                   </a>
                </header>
            
              <div class="page-heading">
              <div class="page-title">
              <div class="row">
                
                <div class="col-10"> <h3>  الإضافات على عمل المراقب </h3> 
                  
                 <p class="text-subtitle text-muted"> في هذا الجزء ستقوم بوضع أي عمل إضافي تقوم به كمراقب <b>( اختياري* )</b> عدا سكرين المنسحبين <b>( إجباري )</b></p>
                 <br>
                </div>
            </div>


     <form action="{{route('supervisor.store')}}" method="POST">
     @csrf
        <section id="basic-modals">
            <div class="row">
              <div class="col-10">
                  <div class="card">
                       <div class="card-header" style="background:#dce7f1;text-align:center;">    
                          <span class="card-title" name='leaders_didnt_enter_withdraw'> <h3> التواصل مع القائد الذي لم يدخل الروابط </span>  
                       </div><br>
                       
                        
                       <div class="card-body">
                         
                             <input class="form-control" type="file" id="formFileMultiple" multiple> <br>
                            
                       </div>
                       
                    </div>
               </div>
            </div> 
        </section>
        @for ($i = 1; $i < $count = 4; $i++)
            <section class="section">
                <div class="row">
                    <div class="col-10"> 
                        <div class="card">
                    

                            <div class="card-body">
                                
                                <div class="form-group with-title mb-6 " >
                                  <textarea class="form-control" id="exampleFormControlTextarea1[{{ $i }}]" rows="5"></textarea>
                                  <label style="background:#dce7f1;text-align:center;" name='activities'>
                                     <h3> [{{ $i }}] أكتب شرح موجز للفكرة *  </h3>  
                                  </label>
                                  <br>
                                  
                              
                                </div>
                                <label> <h6> أرفق صورة للنشاط الخاص بك : </h6></label><br>
                                <input class="form-control" type="file" id="formFileMultiple[{{ $i }}]" multiple> 
                                <br>
                                 
                            </div>
                            
                                
                        </div>
                    </div>
                 </div>
                    
            </section> 
        @endfor  
     
        <section class="multiple-choices">
            <div class="row">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header" style="background:#dce7f1;text-align:center;">    
                         <span class="card-title" name='communicate_with_leaders'> <h3> التواصل مع باقي القادة للإطمئنان </h3> </span>  
                        </div><br>
                        
                        <div class="card-body">
                            
                            
                             <div class="col-md-12 mb-2">
                             <input type="radio" name="Leader" id="Leader2_1" value="1"/>  تم <br>
                             <input type="radio" name="Leader" id="Leader2_2" value="0"/> لم يتم <br><br>
                                
                                    <div class="form-group">
                                        <select class="choices form-select multiple-remove" multiple="multiple">
                                            <optgroup label="المهام">
                                                <option value="task">t-01</option>
                                                <option value="task">t-02</option>
                                                <option value="task">t-03</option>
                                            </optgroup>
                                            <optgroup label="اسم القائد"style="background:#dce7f1;">
                                                <option value="name">Masa</option>
                                                <option value="name">Salwa</option>
                                                <option value="name">Rufi</option>
                                                <option value="name">Noor</option>
                                                <option value="name">Med</option>
                                            </optgroup>
                                        </select>
                                   </div>
                                <br>
                                    <label><h6> ارفق صورة للتواصل مع أحد القادة :</h6></label>
                                <br>
                           </div>
                                
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                              <br>
                            
                        </div>
                         
                    </div>
                              
                </div>
            </div>
          
        </section>
        <div class="buttons">
          <a href="{{route('supervisor.index')}}" type="submit" class="btn btn-secondary"  style="border-radius: 5000px;" name='save' > حفظ  التغييرات </a>
        </div>

      </form>
     </body>
    </div>

@endsection


