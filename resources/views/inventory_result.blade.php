@extends('layouts.app')

@section('content')
@section('sidebar')
@extends('layouts.sidebar')
@endsection
<div class="page-heading">
    <h3> نتائج الجرد</h3>
</div>

<div class="form-group">
    <label for="exampleFormControlInput1"></label>
</div>




<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> عرض نتيجة الجرد</h5>
                    </div>
                    <div class="card-body">


                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="leader_data" data-bs-toggle="tab" href="#leaderData" role="tab" aria-controls="leaderData" aria-selected="true">بيانات القائد</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="basic_tasks" data-bs-toggle="tab" href="#basicTasks" role="tab" aria-controls="basicTasks" aria-selected="false">المهام الأساسية</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="leader_news" data-bs-toggle="tab" href="#audit" role="tab" aria-controls="audit" aria-selected="false">تدقيق المراقب</a>
                            </li>

                        </ul>



                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="leaderData" role="tabpanel" aria-labelledby="leader_data">
                                <p class='my-2'>
                                <div class="table-responsive">
                                    <div>
                                        @if($message=Session::get('success'))
                                        <div class="alert alert-primary" role="alert">
                                            {{$message}}
                                        </div>
                                        @endif
                                    </div>
                                    <table class="table table-striped mb-0" dir="rtl">
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
                                            <td class="text-bold-500">  {{++ $i}}</td>
                                            
                                                <td>{{$item->leader->name}}</td>
                                                <td class="text-bold-500">{{$item->leader->team}}</td>
                                                <td>{{$item->current_team_members}}</td>
                                                @if(($item->withdrawn_ambassadors['withdrawn_ambassadors'])!='لا يوجد منسحبين')
                                                    <td>{{$item->withdrawn_ambassadors['defective_num']}}</td>
                                                @else
                                                    <td>{{'لا يوجد منسحبين'}}</td>
                                                @endif
                                                <td>{{$item->team_final_mark}}</td>

                                            </tr>
                                         @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </p>
                            </div>



                            <div class="tab-pane fade" id="basicTasks" role="tabpanel" aria-labelledby="basic_tasks">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0" dir="rtl">
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
                                            
                                            <td class="text-bold-500">  {{++ $i}}</td>
                                                <td class="text-bold-500">{{$item->leader->name}}</td>
                                                <td>  {{$item->leader_reading}} </td>
                                                <td >
                                                    {{$item->follow_up_post[0]['follow_up_post']}}
                                                    @if($item->follow_up_post[0]['follow_up_post'] == "غير مستوف المعايير")
                                                            <br/>
                                                            ـــــــــــــــــــ
                                                            <br/>
                                                            @if($item->follow_up_post[0]['follow_up_standard_1'] != "")
                                                                <p> {{$item->follow_up_post[0]['follow_up_standard_1']}} </p>
                                                            @endif
                                                            @if($item->follow_up_post[0]['follow_up_standard_2'] != "")
                                                                <p> {{$item->follow_up_post[0]['follow_up_standard_2']}} </p>
                                                            @endif
                                                            @if($item->follow_up_post[0]['follow_up_standard_3'] != "")
                                                                <p> {{$item->follow_up_post[0]['follow_up_standard_3']}} </p>
                                                            @endif
                                                            @if($item->follow_up_post[0]['follow_up_standard_4'] != "")
                                                                <p> {{$item->follow_up_post[0]['follow_up_standard_4']}} </p>
                                                            @endif
                                                            @if($item->follow_up_post[0]['follow_up_standard_5'] != "")
                                                                <p> {{$item->follow_up_post[0]['follow_up_standard_5']}} </p>
                                                            @endif
                                                            @if($item->follow_up_post[0]['follow_up_standard_6'] != "")
                                                                <p> {{$item->follow_up_post[0]['follow_up_standard_6']}} </p>
                                                            @endif
                                                            @if($item->follow_up_post[0]['follow_up_standard_7'] != "")
                                                                <p> {{$item->follow_up_post[0]['follow_up_standard_7']}} </p>
                                                            @endif
                                                            @if($item->follow_up_post[0]['follow_up_standard_8'] != "")
                                                                <p> {{$item->follow_up_post[0]['follow_up_standard_8']}} </p>
                                                            @endif
                                                            @if($item->follow_up_post[0]['follow_up_standard_9'] != "")
                                                                <p> {{$item->follow_up_post[0]['follow_up_standard_9']}} </p>
                                                            @endif
                                                            @if($item->follow_up_post[0]['follow_up_standard_10'] != "")
                                                                <p> {{$item->follow_up_post[0]['follow_up_standard_10']}} </p>
                                                            @endif

                                                    @endif
                                                </td>
                                                <td>
                                                    {{$item->support_post[0]['support_post']}}
                                                    @if($item->support_post[0]['support_post'] == "غير مستوف المعايير")
                                                        <br/>
                                                        ـــــــــــــــــــ
                                                        <br/>

                                                        @if($item->support_post[0]['support_standard_1'] != "")
                                                            <p> {{$item->support_post[0]['support_standard_1']}} </p>
                                                        @endif
                                                        @if($item->support_post[0]['support_standard_2'] != "")
                                                            <p> {{$item->support_post[0]['support_standard_2']}} </p>
                                                        @endif
                                                        @if($item->support_post[0]['support_standard_3'] != "")
                                                            <p> {{$item->support_post[0]['support_standard_3']}} </p>
                                                        @endif
                                                        @if($item->support_post[0]['support_standard_4'] != "")
                                                            <p> {{$item->support_post[0]['support_standard_4']}} </p>
                                                        @endif
                                                        @if($item->support_post[0]['support_standard_5'] != "")
                                                            <p> {{$item->support_post[0]['support_standard_5']}} </p>
                                                        @endif
                                                        @if($item->support_post[0]['support_standard_6'] != "")
                                                            <p> {{$item->support_post[0]['support_standard_6']}} </p>
                                                        @endif
                                                        @if($item->support_post[0]['support_standard_7'] != "")
                                                            <p> {{$item->support_post[0]['support_standard_7']}} </p>
                                                        @endif

                                                    @endif
                                                </td>
                                                <td >
                                                    {{$item->elementary_mark[0]['elementary_mark']}}
                                                    @if($item->elementary_mark[0]['elementary_mark'] == "غير مستوف المعايير")
                                                            <br/>
                                                            ـــــــــــــــــــ
                                                            <br/>
                                                            @if($item->elementary_mark[0]['elementary_standard_1'] != "")
                                                                <p> {{$item->elementary_mark[0]['elementary_standard_1']}} </p>
                                                            @endif
                                                            @if($item->elementary_mark[0]['elementary_standard_2'] != "")
                                                                <p> {{$item->elementary_mark[0]['elementary_standard_2']}} </p>
                                                            @endif
                                                            @if($item->elementary_mark[0]['elementary_standard_3'] != "")
                                                                <p> {{$item->elementary_mark[0]['elementary_standard_3']}} </p>
                                                            @endif
                                                            @if($item->elementary_mark[0]['elementary_standard_4'] != "")
                                                                <p> {{$item->elementary_mark[0]['elementary_standard_4']}} </p>
                                                            @endif
                                                            @if($item->elementary_mark[0]['elementary_standard_5'] != "")
                                                                <p> {{$item->elementary_mark[0]['elementary_standard_5']}} </p>
                                                            @endif

                                                    @endif
                                                </td>
                                                <td>{{$item->withdrawn_ambassadors['withdrawn_ambassadors']}}</td>
                                                
                                                
                                                
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="audit" role="tabpanel" aria-labelledby="leader_news">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0" dir="rtl">
                                        <thead>
                                       
                                            <tr>
                                                <th>#</th>
                                                <th>القائد</th>
                                                <th>التواصل مع المنسحبين</th>
                                                <th>تدقيق العلامات النهائية </th>
                                                <th>سكرين شوت للتدقيق</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                        @php
                                             $i=0;
                                             @endphp
                                        @foreach($leaderduty as $item)
                                            <tr>
                                                <td class="text-bold-500">{{++ $i}} </td>
                                                <td>{{$item->leader->name}}</td>
                                                <td class="text-bold-500">{{$item->withdrawn_ambassadors['withdrawn_ambassadors']}}</td>
                                                <td>{{$item->audit_final_mark[0]['audit_final_mark']}}</td>
                                                @if(($item->audit_final_mark[0]['leader_message_1'])!=='null')
                                                <td>
                                                    <img src="..\assets\images\{{$item->audit_final_mark[0]['leader_message_1']}}" class="img-tumbnail" width="100" height="100"> 

                                                </td>
                                                @else
                                                       <td> {{" لا يوجد سكرين شوت "}}</td>
                                                    
                                                @endif
                                                
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