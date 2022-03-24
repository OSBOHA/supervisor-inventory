
 <!DOCTYPE html>
 <html lang="ar" dir="rtl">
   @extends('auth\includes\login-header')
 {{-- <body>
     <div id="auth">
         
 <div class="row h-100">
     <div class="col-lg-5 col-12">
         <div id="auth-left">

             <div class="auth-logo text-center">
                 <h2>Osboha180</h2>
             </div>

             <h1 class="auth-title text-center">دخول</h1> 

             <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input id="email" type="email" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="أدخل الايميل" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input id="password" type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" name="password" placeholder="أدخل كلمة السر" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">{{ __('دخول') }}</button>
            </form>


             <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">ليس لديك حساب، اضغط للتسجيل <a href="{{ route('register')}}"
                        class="font-bold">
                    تسجيل</a></p>
                <p>
                    @if (Route::has('password.request'))
                    <a class="font-bold" href="{{ route('password.request') }}"> {{ __('هل نسيت كلمة السر ؟ اضغط هنا') }}</a></p>
                    @endif
            </div>
         </div>
     </div>
     <div class="col-lg-7 d-none d-lg-block">
          <div id="auth-right">
         
         </div>
     </div>
 </div>
 
     </div>
 </body>
 
 </html> --}}
 

 <body>
    <div id="auth">
        <div class="row h-25">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">{{ __('Login') }}</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="email" type="email" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email Address" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="password" type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">{{ __('Login') }}</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="{{ route('register')}}"
                                class="font-bold">Sign
                                up</a></p>
                        <p>
                            @if (Route::has('password.request'))
                            <a class="font-bold" href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a></p>
                            @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

 