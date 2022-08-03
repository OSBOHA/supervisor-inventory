@extends('layouts.app')

@section('content')
    @section('sidebar')
        @extends('layouts.sidebar')
    @endsection
    <div class="page-heading">
        <h3> معلومات المراقب</h3>
    </div>
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
                                            {{-- <img src="https://img.icons8.com/wired/64/000000/checked-2.png" /> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold"> حالتك الان</h6>
                                        <h6 class="font-extrabold mb-0">مكلف</h6>


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
                                        <h6 class="font-extrabold mb-0">شادن</h6>
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
                                        <h6 class="font-extrabold mb-0">نصر الدين </h6>
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
                                        <h6 class="font-extrabold mb-0">1\1\2011</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4> معدلات الافرقة</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div>


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
                        <h4>معلومات القادة</h4>
                    </div>
                    <div class="card-content pb-4">
                        @if ( count($leader) > 0)
                        @foreach ($leader as $item)
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/{{$item->id}}.jpg">
                            </div><br>
                            <div class="name ms-4" style="padding: 10px;">
                                <h5 class="mb-1"> {{$item->name}}</h5>
                                <h6 class="text-muted mb-0">{{$item->team}}</h6>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="recent-message px-4 py-3">
                            <h4 style="color: red"> لا يوجد لديك قادة </h4>
                            <p>  تواصل مع الموجه المسؤول عنك ليتم فرز قادة إلى فريقك</p>
                        </div>
                        @endif
                        {{-- <div class="px-4">
                            <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>
                                المزيد </button>
                        </div> --}}
                    </div>
                </div>

            </div>
        </section>
    </div>

    @foreach ($leader as $item)
        <input type="hidden" class="leader" value="{{$item->name}}"><br>
        @php
            $final_mark = DB::table('leader_duties')->where('supervisor_id' ,Auth::id())
            ->where('leader_id', $item->id)
            ->where('week_id', DB::table('Weeks')->latest('id')->first()->id)
            ->orderBy('created_at', 'DESC')->paginate(1);
        @endphp
        @if ($final_mark->isempty())
         <input type="hidden" class="final_mark" value= "0" > <br>
         @else
            @foreach ( $final_mark as $row)
            <input type="hidden" class="final_mark" value="{{ $row->team_final_mark}}"><br>
            @endforeach
         @endif
    @endforeach

    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
@endsection
