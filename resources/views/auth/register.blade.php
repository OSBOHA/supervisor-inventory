@extends('layouts.app')
@section('content')
<div class="container">
    <div id="auth">
        <div class="row h-100">
            <div class="col-6">
                <div id="auth-left">
                    <div class="auth-logo">
                        <!-- <a href="index.html"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo"></a> -->
                    </div>
                    <h1 class="auth-title">{{ __('تسجيل') }}</h1>
                    <p class="auth-subtitle mb-5"> املأ الحقول التالية لكي تتمكن من التسجيل</p>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="name" type="text" class="form-control form-control-xl @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="ادخل اسمك" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="email" type="email" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="ادخل إيميلك" autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="password" type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" name="password" placeholder="ادخل كلمة السر" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                                <select class="form-select form-control form-control-xl" id="basicSelect" placeholder="تسجيل كـ :" >
                                    <option value="supervisor">مُشــرف</option>
                                    <option value="advisor">مُــراقب</option>
                               </select>
                            <div class="form-control-icon">
                                <!-- <i class="bi bi-shield-lock"></i> -->
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">{{ __('تسجيل') }}</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'> هل لديك حساب مسبقا ؟ اضغط للدخول<a href="{{ route('login') }}"
                                class="font-bold">
                                دخول </a></p>
                                
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

