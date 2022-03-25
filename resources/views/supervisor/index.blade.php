@extends('layouts.app')
@section('content')
<div class="container"> 
       
        <body>
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
                
                          <div class="col-10"> <h3> كل الأعمال الإضافية   </h3> 
                  
                    </div>
            </div>
            
            <a class="btn btn-secondary" href="{{route('supervisor.create')}}" role="button">Create</a>
             <br>       
            <section class="section">
              <div class="row" id="table-head">
                  <div class="col-12">
                        <div class="card">
                         
                            <div class="card-content">
                               <br>
                        
                               <div class="table-responsive">
                                   <table class="table mb-0">
                                        <thead class="thead-dark" style="background:#dce7f1";>
                                            <tr>
                                                <th scope="col"><h6> # </h6></th>
                                                <th scope="col"><h6> رقم الأسبوع</h6></th>
                                                <th scope="col"><h6>رقم المراقب </h6></th>
                                                <th scope="col"><h6>التواصل مع القائد الذي لم يدخل الروابط</h6></th>
                                                <th scope="col"><h6>[1]شرح موجز للفكرة </h6></th>
                                                <th scope="col"><h6> [2]شرح موجز للفكرة</h6></th>
                                                <th scope="col"><h6> [3]شرح موجز للفكرة</h6></th>
                                                <th scope="col"><h6> التواصل مع باقي القادة للإطمئنان</h6></th>
                                            </tr>
                                        </thead>
                                      <tbody>
                                          @php
                                           $i = 0;


                                          @endphp
                                          @foreach($idea as $item)  
                                              <tr>
                                                  <th scope="row">{{++$i}}</th>
                                                   <td>{{$item['week_id']}}</td>
                                                   <td>{{$item['supervisor_id']}}</td>
                                                   <td>{{$item['activities']}}</td>
                                                   <td>{{$item['communicate_with_leaders']}}</td>
                                                   <td>{{$item['leaders_didnt_enter_withdraw']}}</td>
                                              
                                                </tr>

                                             @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
           </section>
           
              
        </body>

    </div>

@endsection