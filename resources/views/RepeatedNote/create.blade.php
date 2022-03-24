@extends('layouts.app')

@section('content')

<body>
  <div id="app">
      <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header">
              <div class="d-flex justify-content-between">
                   <div class="logo">
                       <h2 class="">Osboha180</h2>
                   </div>
                   <div class="toggler">
                       <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                   </div>
             </div>  
          </div> 
        <div class="sidebar-menu">
           <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
      </div>

<div id="main">
  <header class="mb-3">
      <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
      </a>
  </header> 

<div class="container">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>الجرد الاسبوعي</h3>
                <p class="text-subtitle text-muted">لطفاً نقوم بإدخال الجرد الأسبوعي لكل قائد على حدا</p>
            </div>           
        </div>
    </div>
</div>

<div class="container">
  <!-- Start Checkbox didnt_publish_news-->
    <section id="basic-checkbox">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center" style="background:#dce7f1;">
                        <h4 class="card-title">قادة لا يوصلون الاخبار</h4>
                    </div>
                    <div class="card-content mb-5">
                        <div class="card-body">
                          <form method="POST" action="{{route('notes.store')}}">
                            @csrf
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox1" class="form-check-input" name="didnt_publish_news[]"  value="Sharif">
                                            <label for="checkbox1">Sharif</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" class="form-check-input" id="checkbox2" name="didnt_publish_news[]" value="Hafsa">
                                            <label for="checkbox2">Hafsa</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox3" class="form-check-input" name="didnt_publish_news[]" value="Enas">
                                            <label for="checkbox3">Enas</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox4" class="form-check-input" name="didnt_publish_news[]" value="Bushra">
                                            <label for="checkbox4">Bushra</label>
                                        </div>
                                    </div>
                                </li>                 
                            </ul>
                           <button type="submit" class="btn btn-outline-primary mt-5">حفظ</button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- end Checkbox didnt_publish_news-->

    <!-- Start Checkbox post_late	-->
    <section id="custom-checkbox-colored">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center" style="background:#dce7f1;">
                        <h4 class="card-title">قادة يتأخرون بالمنشورات</h4>
                    </div>
                    <div class="card-content mb-5">
                        <div class="card-body">
                          <form method="POST" action="{{route('notes.store')}}">
                            @csrf
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-primary" 
                                                name="post_late[]" id="customColorCheck1" value="Sharif">
                                            <label class="form-check-label" for="customColorCheck1" >Sharif</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-primary" 
                                                name="post_late[]" id="customColorCheck2" value="Hafsa">
                                            <label class="form-check-label" for="customColorCheck2">Hafsa</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-primary" 
                                                name="post_late[]" id="customColorCheck3" value="Enas">
                                            <label class="form-check-label" for="customColorCheck3">Enas</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-primary" 
                                                name="post_late[]" id="customColorCheck4" value="Bushra">
                                            <label class="form-check-label" for="customColorCheck4">Bushra</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-primary" 
                                                name="post_late[]" id="customColorCheck5" value="Ahmed">
                                            <label class="form-check-label" for="customColorCheck5">Ahmed</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-primary"
                                                name="post_late[]" id="customColorCheck6" value="Sara">
                                            <label class="form-check-label" for="customColorCheck6">Sara</label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <button type="submit" class="btn btn-outline-primary mt-5">حفظ</button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Checkbox post_late	-->


    <!-- Start Checkbox elementary_marks_late -->
    <section id="checkbox-glow">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center" style="background:#dce7f1;">
                        <h4 class="card-title">قادة يتأخرون بالعلامات الاولية</h4>
                    </div>
                    <div class="card-content mb-5">
                        <div class="card-body">
                      
                            <form method="POST" action="{{route('notes.store')}}">
                              @csrf
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-primary form-check-primary" 
                                                name="elementary_marks_late[]" id="customColorCheck1" value="Sharif">
                                            <label class="form-check-label" for="customColorCheck1">Sharif</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-primary form-check-primary" 
                                                name="elementary_marks_late[]" id="customColorCheck2" value="Hafsa">
                                            <label class="form-check-label" for="customColorCheck2">Hafsa</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-primary form-check-primary" checked
                                                name="elementary_marks_late[]" id="customColorCheck3" value="Enass">
                                            <label class="form-check-label" for="customColorCheck3">Enass</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-primary form-check-primary" 
                                                name="elementary_marks_late[]" id="customColorCheck4" value="Bushra">
                                            <label class="form-check-label" for="customColorCheck4">Bushra</label>
                                        </div>
                                    </div>
                                </li>
                               
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-primary" 
                                                name="elementary_marks_late[]" id="customColorCheck5" value="Ahmed">
                                            <label class="form-check-label" for="customColorCheck5">Ahmed</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-primary" 
                                                name="elementary_marks_late[]" id="customColorCheck6" value="Shaden">
                                            <label class="form-check-label" for="customColorCheck6">Shaden</label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <button type="submit" class="btn btn-outline-primary mt-5">حفظ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Checkbox elementary_marks_late-->


   <!-- Start Checkbox deputized_for-->
    <section id="checkbox-sizes">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center" style="background:#dce7f1;">
                        <h4 class="card-title">قادة تم الإنابة عنهم</h4>
                    </div>
                    <div class="card-content mb-5">
                        <div class="card-body">
                          <form method="POST" action="{{route('notes.store')}}">
                            @csrf
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block mb-1 me-2">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-primary" 
                                                name="deputized_for[]" id="customColorCheck6" value="Shaad">
                                            <label class="form-check-label" for="customColorCheck6">Shaad</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block mb-1 me-2">
                                    <div class="form-check">
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                            class="form-check-input form-check-primary " 
                                            name="deputized_for[]" id="customColorCheck6" value="Salma">
                                        <label class="form-check-label" for="customColorCheck6">Salma</label>
                                    </div>
                                    </div>
                                </li>
                                <li class="d-inline-block mb-1 me-2">
                                  <div class="form-check">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox"
                                          class="form-check-input form-check-primary " 
                                          name="deputized_for[]" id="customColorCheck6" value="Sale">
                                      <label class="form-check-label" for="customColorCheck6">Sale</label>
                                  </div>
                                  </div>
                              </li>
                              <li class="d-inline-block mb-1 me-2">
                                <div class="form-check">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox"
                                        class="form-check-input form-check-primary " 
                                        name="deputized_for[]" id="customColorCheck6" value="Sara">
                                    <label class="form-check-label" for="customColorCheck6">Sara</label>
                                </div>
                                </div>
                            </li>
                            </ul>
                            <button type="submit" class="btn btn-outline-primary mt-5">حفظ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Checkbox -->

    <!-- Start Checkbox -->
    <section id="checkbox-sizes">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header text-center" style="background:#dce7f1;">
                      <h4 class="card-title">قادة الاسبوع المخفف</h4>
                  </div>
                  <div class="card-content mb-5">
                      <div class="card-body">
                        <form method="POST" action="{{route('notes.store')}}">
                          @csrf
                          <ul class="list-unstyled mb-0">
                              <li class="d-inline-block mb-1 me-2">
                                  <div class="form-check">
                                      <div class="custom-control custom-checkbox">
                                          <input type="checkbox"
                                              class="form-check-input form-check-primary" 
                                              name="light_week[]" id="customColorCheck6" value="Shaad">
                                          <label class="form-check-label" for="customColorCheck6">Shaad</label>
                                      </div>
                                  </div>
                              </li>
                              <li class="d-inline-block mb-1 me-2">
                                  <div class="form-check">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox"
                                          class="form-check-input form-check-primary" 
                                          name="light_week[]" id="customColorCheck6" value="Salma">
                                      <label class="form-check-label" for="customColorCheck6">Salma</label>
                                  </div>
                                  </div>
                              </li>
                              <li class="d-inline-block mb-1 me-2">
                                <div class="form-check">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox"
                                        class="form-check-input form-check-primary " 
                                        name="light_week[]" id="customColorCheck6" value="Sale">
                                    <label class="form-check-label" for="customColorCheck6">Sale</label>
                                </div>
                                </div>
                            </li>
                            <li class="d-inline-block mb-1 me-2">
                              <div class="form-check">
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox"
                                      class="form-check-input form-check-primary " 
                                      name="light_week[]" id="customColorCheck6" value="Sara">
                                  <label class="form-check-label" for="customColorCheck6">Sara</label>
                              </div>
                              </div>
                          </li>
                          </ul>
                          <button type="submit" class="btn btn-outline-primary mt-5">حفظ</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
   <!-- end Checkbox deputized_for-->
 </div>
   </div>
      </div>
         </div>
           </body> 
       
         
    
