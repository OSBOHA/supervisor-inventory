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

                   </a>
                </header>
            
              <div class="page-heading">
              <div class="page-title">
              <div class="row">
               
              <div class="col-10"> <h3>  الإضافات على عمل المراقب  </h3> 
                 <p class="text-subtitle text-muted"> في هذا الجزء ستقوم بوضع أي عمل إضافي تقوم به كمراقب <b>( اختياري* )</b> عدا سكرين المنسحبين <b>( إجباري )</b></p>
                 <br>
             </div>
            
         
         
            </div>



         <section id="basic-modals">
         <form action="{{route('supervisor.store')}}" method="POST">
           @csrf
           <div class="row">
            <div class="col-10">
                <div class="card">
                      <div class="card-header" style="background:#dce7f1;text-align:center;">    
                          <span class="card-title"> <h3> التواصل مع القائد الذي لم يدخل الروابط </span>  
                       </div><br>
                <div class="card-body">
                        
                    <div class="card-body">
                      <input class="form-control" type="file" name="leaders_didnt_enter_withdraw" id="formFileMultiple" multiple>  
                    </div>
                    <div class="buttons">
                      <a href="{{route('supervisor.index')}}" type="submit" class="btn btn-secondary" style="border-radius: 5000px;"  > حفظ  التغييرات </a>
                    </div>
                    
                    
                        
                </div>
             </div>  
            </div>
          </form> 
         </section>
         @for ($i = 1; $i < $count = 4; $i++)
            <section class="section">
             <form action="{{route('supervisor.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-10"> 
                        <div class="card">


                            <div class="card-body">

                                <div class="form-group with-title mb-6 " >
                                  <textarea class="form-control" id="exampleFormControlTextarea1[{{ $i }}]" rows="5" name="activities"></textarea>
                                  <label style="background:#dce7f1;text-align:center;" >
                                     <h3> [{{ $i }}] أكتب شرح موجز للفكرة *  </h3>  
                                  </label>
                                  <br>


                                </div>
                                <label> <h6> أرفق صورة للنشاط الخاص بك : </h6></label><br>
                                <input class="form-control" type="file" name="activities" id="formFileMultiple[{{ $i }}]" multiple> 
                                <br>
                                <div class="buttons">
                                    <a href="{{route('supervisor.index')}}" type="submit" class="btn btn-secondary" style="border-radius: 5000px;"  > حفظ  التغييرات </a>
                                </div>

                            </div>


                        </div>
                    </div>
                 </div>
              </form>
            </section> 
        @endfor  

     
         <section class="multiple-choices">
          <form action="{{route('supervisor.store')}}" method="POST">
            @csrf
            <div class="row">
            <div class="col-10">
                <div class="card">

                        <div class="card-header" style="background:#dce7f1;text-align:center;">    
                          <span class="card-title"> <h3> التواصل مع باقي القادة للإطمئنان </h3> </span>  
                        </div><br>
                    
                        <div class="card-body">
                        <div class="col-md-12 mb-3">
                          <input type="radio" name="communicate_with_leaders" id="Leader2_1" value="1"/>  تم <br>
                          <input type="radio" name="communicate_with_leaders" id="Leader2_2" value="0"/> لم يتم <br><br>

                                <div class="form-group">
                                        <select class="choices form-select multiple-remove" name="communicate_with_leaders"  multiple="multiple">
                                            <optgroup label="leader">
                                                <option value="name" name="communicate_with_leaders0">Masa</option>
                                                <option value="name" name="communicate_with_leaders1">Salwa</option>
                                                <option value="name" name="communicate_with_leaders2">Rufi</option>
                                                <option value="name" name="communicate_with_leaders3">Noor</option>
                                                <option value="name" name="communicate_with_leaders4">Med</option>
                                            </optgroup>
                                        </select>
                                </div>
                                <br>
                                    <p>  ارفق صورة للتواصل مع أحد القادة : </p>
                                <br>
                          <input class="form-control" type="file"  name="communicate_with_leaders"  id="formFileMultiple" multiple>
                          <br>
                          
                          <div class="buttons">
                          <a href="{{route('supervisor.index')}}" type="submit" class="btn btn-secondary" style="border-radius: 5000px;"  > حفظ  التغييرات </a>
                          </div>
                          
                          
                        </div>
                        </div>
                                   
                </div>
            </div>
           </div>
          </form> 
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


