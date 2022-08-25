@extends('layouts.app')

@section('content')
@section('sidebar')
@extends('layouts.sidebar')
@endsection
@section('page_title')

<h3>
    {{auth()->user()->name}}
    ||
    {{$supervisor->team}}

</h3>
@endsection

@foreach ($supervisor->leaders as $leader)
        <input type="hidden" class="leader" value="{{$leader->name}}"><br>
            
    @endforeach
    @foreach ( $leaderDuties as $mark)
            <input type="hidden" class="final_mark" value="{{ $mark->team_final_mark}}"><br>
            @endforeach
<input id="team_final_mark" type="hidden" value="{{$leaderDuties}}">
<input id="leaders" type="hidden" value="{{$supervisor->leaders}}">
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">
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
                                    <h6 class="text-muted font-semibold">حالتك الأن</h6>
                                    @if($supervisor->current_advisor)
                                    <h6 class="font-extrabold mb-0">مكلف</h6>
                                    @else
                                    <h6 class="font-extrabold mb-0">غير مكلف</h6>
                                    @endif
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
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">موجهك الحالي</h6>
                                    @if($supervisor->current_advisor)
                                    <h6 class="font-extrabold mb-0">{{$supervisor->current_advisor_info->user->name}}</h6>
                                    @else
                                    <h6 class="font-extrabold mb-0">لا يوجد</h6>
                                    @endif                               
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
                                    <h6 class="text-muted font-semibold">موجهك السابق</h6>
                                    @if($supervisor->previous_advisor)
                                    <h6 class="font-extrabold mb-0">{{$supervisor->previous_advisor_info->user->name}}</h6>
                                    @else
                                    <h6 class="font-extrabold mb-0">لا يوجد</h6>
                                    @endif
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
                                    @if($supervisor->current_advisor)
                                    <h6 class="font-extrabold mb-0">{{$supervisor->updated_at}}</h6>
                                    @else
                                    <h6 class="font-extrabold mb-0">ــــ  </h6>
                                    @endif                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>جرد القادة</h4>
                            
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
                <div class="card-header">
                    <h4>القادة في فريقي</h4>
                </div>
                <div class="card-content pb-4">
                    @if($supervisor->leaders)
                        @foreach($supervisor->leaders as $leader)
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/4.jpg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">{{$leader->name}}</h5>
                                <h6 class="text-muted mb-0">{{$leader->type}}</h6>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    <div class="px-4">
                        <a href="{{route('leaders.create')}}"><button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>
                            اضافة قائد
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection