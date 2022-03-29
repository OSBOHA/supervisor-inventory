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

              <div class="col-10"> <h3>  الإضافات على عمل المراقب : </h3>
              <br>

              <div class="alert alert-light-danger color-danger"><i class="bi bi-exclamation-circle"></i>
                    في هذا الجزء ستقوم بوضع أي عمل إضافي تقوم به كمراقب <b>( اختياري* )</b> عدا سكرين المنسحبين <b>( إجباري )</b>
              </div>

             </div>



            </div>



         <section id="basic-modals">
          <div class="row">
            <div class="col-10">
                <div class="card">
                <div class="card-body">
                        <div class="col-md-10 mb-3" style="direction: ltr">
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
        @for ($i = 1; $i < $count = 4; $i++)
            <section class="section">
                <div class="row">
                    <div class="col-10">
                        <div class="card">


                            <div class="card-body">
                             <div class="form-group with-title mb-3">
                               <textarea class="form-control" id="exampleFormControlTextarea1[{{ $i }}]" rows="5"></textarea>
                               <label><h3> <Center>[{{ $i }}] اكتب شرح موجز للفكرة * </Center> </h3>  </label>
                               <br>
                               <p> أرفق صورة للنشاط الخاص بك : </p>
                               <br>
                               <input class="form-control" type="file" id="formFileMultiple[{{ $i }}]" multiple>
                              </div>
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

                        <div class="card-body">
                        <div class="col-md-12 mb-3">
                           <p class ="lead text-center">
                          <label><h3> <Center> التواصل مع باقي القادة للإطمئنان</Center> </h3>  </label>

                          <input type="radio" name="Leader" id="Leader2_1" value="1"/>  تم <br>
                          <input type="radio" name="Leader" id="Leader2_2" value="0"/> لم يتم <br><br>

                                <div class="form-group">
                                        <select class="choices form-select multiple-remove" multiple="multiple">
                                            <optgroup label="المهام">
                                                <option value="task">t-01</option>
                                                <option value="task" selected>المهام</option>
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

         <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p> Developed by <a href="http://osboha180.com">Osboha 180 </a>  Programers  &copy; </p>
                    </div>

                </div>

         </footer>


         </div>


         </div>
         </div>

         </div>


         </div>
         </div>

        </body>
    </div>

@endsection


