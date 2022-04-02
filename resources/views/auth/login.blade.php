<!DOCTYPE html>
<html lang="ar" dir="rtl">
  @extends('auth\includes\login-header')

<body>
   <div id="auth">
       <div class="row h-25">
           <div class="col-lg-5 col-12">
               <div id="auth-left">
                   {{-- <div class="auth-logo mb-0 text-center">
                       <h2>Osboha180</h2>
                   </div> --}}
                   <h1 class="auth-title text-center">{{ __('دخول') }}</h1>
                   <form method="POST" action="{{ route('login') }}">
                       @csrf
                       <div class="form-group position-relative has-icon-left mb-4">
                           <input id="email" type="email" class="form-control form-control-xl me-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="أدخل الايميل" required autocomplete="email" autofocus>
                               @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           <div class="form-control-icon me-2">
                               <i class="bi bi-person"></i>
                           </div>
                       </div>
                       <div class="form-group position-relative has-icon-left mb-4">
                           <input id="password" type="password" class="form-control form-control-xl me-2 @error('password') is-invalid @enderror" name="password" placeholder="أدخل كلمة السر" required autocomplete="current-password">

                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           <div class="form-control-icon me-2">
                               <i class="bi bi-shield-lock"></i>
                           </div>
                       </div>
                       
                       <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5 me-2">{{ __('دخول') }}</button>
                   </form>
                   <div class="text-center mt-5 text-lg fs-4">
                       <p class="text-gray-600">ليس لديك حساب؟ <a href="{{ route('register')}}"
                               class="font-bold">تسجيل</a></p>
                       <p>
                           @if (Route::has('password.request'))
                           <a class="lead" href="{{ route('password.request') }}"> {{ __('هل نسيت كلمة السر ؟') }}</a></p>
                           @endif
                   </div>
               </div>
           </div>
           <div class="col-lg-7 d-none d-lg-block" style="background:#ccc;">
                <div class="lift-side text-center mt-5 ">
                    <img src="{{asset('assets/images/logo/logo.PNG')}}" alt="logo">
                </div>
          </div>
       </div>

   </div>
</body>