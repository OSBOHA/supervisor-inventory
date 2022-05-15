@extends('layouts.app')

@section('content')
    @section('sidebar')
        @extends('layouts.sidebar')
    @endsection
    <div class="page-heading">
        <h3>  نتائج الجرد</h3>
    </div>

    <div class="form-group">
            <label for="exampleFormControlInput1"></label>
        </div>




    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
            <div class="row">
                       
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title"> عرض نتيجة الجرد</h5>
                                </div>
                                <div class="card-body">


                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="leader_data" data-bs-toggle="tab" href="#leaderData"
                                                role="tab" aria-controls="leaderData" aria-selected="true">بيانات القائد</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="basic_tasks" data-bs-toggle="tab" href="#basicTasks"
                                                role="tab" aria-controls="basicTasks" aria-selected="false">المهام الأساسية</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="leader_news" data-bs-toggle="tab" href="#audit"
                                                role="tab" aria-controls="audit" aria-selected="false">التدقيق للمراقب</a>
                                        </li>
                                        
                                    </ul>



                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="leaderData" role="tabpanel"
                                            aria-labelledby="leader_data">
                                            <p class='my-2'>
                                                        <div class="table-responsive">
                                                            <div>
                                                            @if($message=Session::get('success'))
                                                                <div class="alert alert-primary" role="alert">
                                                                     {{$message}}
                                                                </div>
                                                              @endif
                                                            </div>
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
                                                        
                                                        @php
                                                            $i=0;
                                                        @endphp
                                                        @foreach($leaderduty as $item)
                                                            
                                                            <tr>
                                                                <td class="text-bold-500">  {{++ $i}} </td>
                                                                <td>{{$item->leader->name}}</td>
                                                                <td class="text-bold-500">{{$item->leader_id}}</td>
                                                                <td>{{$item->current_team_members}}</td>
                                                                <td></td>
                                                                <td>{{$item->team_final_mark}}</td>
                                                            </tr>
  
                                                                                                     
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>    
                                            </p>
                                        </div>



                                        <div class="tab-pane fade" id="basicTasks" role="tabpanel"
                                            aria-labelledby="basic_tasks">
                                            <div class="table-responsive">
                                                <table class="table table-striped mb-0" dir="rtl" >
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>القائد</th>
                                                            <th>قراءة القائد</th>
                                                            <th>منشور المتابعة </th>
                                                            <th> منشور الدعم</th>
                                                            <th>العلامات الاولية</th>
                                                            <th>العلامات النهائية</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @php
                                                            $i=0;
                                                        @endphp
                                                        @foreach($leaderduty as $item)
                                                        <tr>
                                                            <td class="text-bold-500">{{++ $i}}</td>
                                                            <td>
                                                                 {{ $item->Leader->name}}
                                                             </td>
                                                            <td class="text-bold-500">{{$item->leader_reading}}</td>
                                                            <td>{{$item->$follow_up_post1}}</td>
                                                            <td>{{$item->$support_post1}}</td>
                                                            <td>{{$item->$elementary_mark1}}</td>
                                                            <td>{{$item->final_mark}}</td>
                                                        </tr>
                                                                                                     
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                             </div>
                                        </div>

                                        <div class="tab-pane fade" id="audit" role="tabpanel"
                                        aria-labelledby="leader_news">
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
                                                        @php
                                                            $i=0;
                                                        @endphp
                                                        @foreach($leaderduty as $item)
                                                        <tr>
                                                            <td class="text-bold-500"> {{++ $i}}</td>
                                                            <td>{{$item->Leader->name}}</td>
                                                            <td class="text-bold-500"></td>
                                                            <td>{{$item->audit_final_mark}}</td>
                                                            
                                                            <td></td>
                                                        </tr>
                                                                                          
                                                        @endforeach
                                                        
                                                        
                                                    </tbody>
                                                </table>
                                             </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                
            </div>
        </section>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
@endsection
