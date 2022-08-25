@extends('layouts.app')

@section('content')
@section('sidebar')
@extends('layouts.sidebar')
@endsection
@section('page_title')

<h3>
    {{auth()->user()->name}}
    ||
    {{$advisor->team}}

</h3>
@endsection

@foreach ($summary as $supervisor => $record)
    <input type="hidden" class="supervisor" value="{{$supervisor}}"><br>
    <input type="hidden" class="freezed" value="{{$record['freezed']}}"><br>
    <input type="hidden" class="fullMark" value="{{$record['fullMark']}}"><br>
    <input type="hidden" class="withdrawn_ambassadors" value="{{$record['withdrawn_ambassadors']}}"><br>
            
@endforeach


<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">مراقبين </h6>
                                    <h6 class="font-extrabold mb-0">{{$advisor->current_supervisors_count}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">قادة</h6>
                                    <h6 class="font-extrabold mb-0">{{$advisor->leaders_count}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">تاريخ تكلفيك</h6>
                                    <h6 class="font-extrabold mb-0">{{$advisor->updated_at}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold"> رسائل جديدة</h6>
                                    <h6 class="font-extrabold mb-0">{{$messages->count()}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>إحصائية الأفرقة</h4>
                        </div>
                        <div class="card-body">
                            <div id="bar"></div>
                        </div>
                    </div>
                </div>
                
            <div class="col-2 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4>المراقبون في فريقي</h4>
                    </div>
                    <div class="card-content pb-4">
                        @if($advisor->current_supervisors)
                        @foreach($advisor->current_supervisors as $supervisor)
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/4.jpg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">{{$supervisor->user->name}}</h5>
                                <h6 class="text-muted mb-0">{{$supervisor->user->type}}</h6>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            </div>
    </section>
    <!-- بداية ملخص الجرد -->
    <section class="list-group-navigation">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ملخص الجرد</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="list-group" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab">قراءة القادة</a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab">نشر الاخبار</a>
                                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab">اعرف مشروعك </a>
                                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab">العلامات النهائية </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 mt-1">
                                    <div class="tab-content text-justify" id="nav-tabContent">
                                        <div class="tab-pane show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                            @if (!empty($missigReading))
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>اسم القائد </th>
                                                            <th>اسم المراقب </th>
                                                            <th>النقص</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $i=0;
                                                        @endphp
                                                        @foreach($missigReading as $missing)
                                                        <tr>
                                                            <td class="text-bold-500"> {{++ $i}}</td>
                                                            <td>{{$missing['leader_name']}}</td>
                                                            <td class="text-bold-500">{{$missing['supervisor_name']}}</td>
                                                            <td>{{$missing['missing']}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            @else
                                            <h5 class="text-center">تامة</h5>
                                            @endif
                                        </div>
                                        <div class="tab-pane" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                            @if (!empty($missigNews))
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>اسم القائد </th>
                                                            <th>اسم المراقب </th>
                                                            <th>النقص</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $i=0;
                                                        @endphp
                                                        @foreach($missigNews as $missing)
                                                        <tr>
                                                            <td class="text-bold-500"> {{++ $i}}</td>
                                                            <td>{{$missing['leader_name']}}</td>
                                                            <td class="text-bold-500">{{$missing['supervisor_name']}}</td>
                                                            <td>{{$missing['missing']}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            @else
                                            <h5 class="text-center">تامة</h5>
                                            @endif
                                        </div>
                                        <div class="tab-pane" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                            @if (!empty($missigSupport))
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>اسم القائد </th>
                                                            <th>اسم المراقب </th>
                                                            <th>النقص</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $i=0;
                                                        @endphp
                                                        @foreach($missigSupport as $missing)
                                                        <tr>
                                                            <td class="text-bold-500"> {{++ $i}}</td>
                                                            <td>{{$missing['leader_name']}}</td>
                                                            <td class="text-bold-500">{{$missing['supervisor_name']}}</td>
                                                            <td>
                                                                {{$missing['missing'][0]['support_post']}}
                                                                @if($missing['missing'][0]['support_post'] == "غير مستوف المعايير")
                                                                <br />
                                                                ـــــــــــــــــــ
                                                                <br />

                                                                @if($missing['missing'][0]['support_standard_1'] != "")
                                                                <p> {{$missing['missing'][0]['support_standard_1']}} </p>
                                                                @endif
                                                                @if($missing['missing'][0]['support_standard_2'] != "")
                                                                <p> {{$missing['missing'][0]['support_standard_2']}} </p>
                                                                @endif
                                                                @if($missing['missing'][0]['support_standard_3'] != "")
                                                                <p> {{$missing['missing'][0]['support_standard_3']}} </p>
                                                                @endif
                                                                @if($missing['missing'][0]['support_standard_4'] != "")
                                                                <p> {{$missing['missing'][0]['support_standard_4']}} </p>
                                                                @endif
                                                                @if($missing['missing'][0]['support_standard_5'] != "")
                                                                <p> {{$missing['missing'][0]['support_standard_5']}} </p>
                                                                @endif
                                                                @if($missing['missing'][0]['support_standard_6'] != "")
                                                                <p> {{$missing['missing'][0]['support_standard_6']}} </p>
                                                                @endif
                                                                @if($missing['missing'][0]['support_standard_7'] != "")
                                                                <p> {{$missing['missing'][0]['support_standard_7']}} </p>
                                                                @endif
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                            @else
                                            <h5 class="text-center">تامة</h5>
                                            @endif
                                        </div>
                                        <div class="tab-pane" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                            @if (!empty($missigFinalMark))
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>اسم القائد </th>
                                                            <th>اسم المراقب </th>
                                                            <th>النقص</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $i=0;
                                                        @endphp
                                                        @foreach($missigFinalMark as $missing)
                                                        <tr>
                                                            <td class="text-bold-500"> {{++ $i}}</td>
                                                            <td>{{$missing['leader_name']}}</td>
                                                            <td class="text-bold-500">{{$missing['supervisor_name']}}</td>
                                                            <td>{{$missing['missing']}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            @else
                                            <h5 class="text-center">تامة</h5>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- نهاية ملخص الجرد -->

</div>

<script src="{{asset('assets/vendors/dayjs/dayjs.min.js')}}"></script>
<script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
<script src="{{asset('assets/js/pages/ui-apexchart.js')}}"></script>
@endsection