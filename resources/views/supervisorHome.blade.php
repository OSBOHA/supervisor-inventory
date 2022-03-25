@extends('layouts.app')

@section('content')
    @section('sidebar')
        @extends('layouts.sidebar')
    @endsection
    <div class="page-heading">
        <h3> معلومات المراقب</h3>
    </div>
    @php
    $t=0;
@endphp
@for ($t == 0 && $supervisors as $sp) {

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <img src="https://img.icons8.com/wired/64/000000/checked-2.png" />
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold"> حالتك الان</h6>
                                        <h6 class="font-extrabold mb-0">
                                            @if ($sp->current_advisor == null)
                                                غير مكلف
                                            @else
                                                مكلف
                                            @endif
                                        </h6>


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
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">موجهك الحالي</h6>
                                        <h6 class="font-extrabold mb-0">">{{ $sp->current_advisor }}</h6>
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
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">موجهك السابق</h6>
                                        <h6 class="font-extrabold mb-0">">{{ $sp->previous_advisor }}</h6>
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
                                        <h6 class="text-muted font-semibold"> تاريخ انضمامك</h6>
                                        <h6 class="font-extrabold mb-0">">{{ $sp->created_at }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @php
                    $i=0;
                @endphp
                @foreach ($leader_duties as $ldt)

                </div>
                <div class="row" style="float: left;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4> معدلات الافرقة</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit">
                                    <span>{{$ldt->leader_id}}</span>
                                    <div>
                                        <div scope="row">{{++$i}}</div>
                                        <div>{{ $ldt->week_id }}</div>
                                        <div>{{ $ldt->final_mark }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @php
                    $j=0;
                @endphp
                @foreach ($leadres as $ld)
                <div class="row" style="float: right;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>بيانات القادة</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <span>{{$ld->id}}</span>
                                    <div>
                                        <div scope="row">{{++$j}}</div>
                                        <div>{{ $ld->name }}</div>
                                        <div>{{ $ld->team }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="assets/images/faces/1.jpg" alt="Face 1">
                            </div>
                            <div class="ms-3 name" style="padding: 10px;">
                                <h5 class="font-bold">بتول </h5>
                                <h6 class="text-muted mb-0">@بتول</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4> الاشعارات</h4>
                    </div>
                    <div class="card-content pb-4">
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/4.jpg">
                            </div><br>
                            <div class="name ms-4" style="padding: 10px;">
                                <h5 class="mb-1"> سارة</h5>
                                <h6 class="text-muted mb-0">@سارة</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/5.jpg">
                            </div>
                            <div class="name ms-4" style="padding: 10px;">
                                <h5 class="mb-1"> محمد </h5>
                                <h6 class="text-muted mb-0">@محمد</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/1.jpg">
                            </div>
                            <div class="name ms-4" style="padding: 10px;">
                                <h5 class="mb-1">بتول </h5>
                                <h6 class="text-muted mb-0">@بتول</h6>
                            </div>
                        </div>
                        <div class="px-4">
                            <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>
                                المزيد </button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
}
    @endfor


    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
@endsection
