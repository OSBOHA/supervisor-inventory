@extends('layouts.error_style')

@section('error')
<div id="error" style="margin-bottom: 20% !important;">
    <div class="error-page container">
        <div class="col-md-8 col-12 offset-md-2">
            <img class="img-error" src="{{asset('assets/images/errors/error-404.png')}}" alt="Not Found">
            <div class="text-center">
                <h1 class="error-title">404</h1>
                <p class="fs-5 text-gray-600">ما طلبته غير موجود</p>
                <a href="{{route('home')}}" class="btn btn-lg btn-outline-primary mt-3">عودة إلى الصفحة الرئيسية</a>
            </div>
        </div>
    </div>
</div>
@endsection