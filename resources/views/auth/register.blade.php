<!DOCTYPE html>
<html lang="ar" dir="rtl">
    @extends('auth\includes\reg-header')
    <body>
        <div id="auth">
    
            <div class="row h-100">
                <div class="col-lg-6 col-12">
                    <div id="auth-left">
                        {{-- <div class="auth-logo text-center">
                            <h2>Osboha180</h2>
                        </div> --}}
                        <h1 class="auth-title text-center mt-0">{{ __('تسجيل') }}</h1>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input id="name" type="text" class="form-control form-control-xl me-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="أدخل الاسم" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-control-icon me-2">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input id="email" type="email" class="form-control form-control-xl  me-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="أدخل الإيميل" autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <div class="form-control-icon me-2">
                                    <i class="bi bi-envelope"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input id="password" type="password" class="form-control form-control-xl me-2 @error('password') is-invalid @enderror" name="password" placeholder="أدخل كلمة السر" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <div class="form-control-icon me-2">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                            </div>

                            <div class="form-group position-relative has-icon-left mb-4">
                                <select name="user_type" class="form-select form-control form-control-xl me-2" id="basicSelect">
                                    <option selected>تود التسجيل كـ</option>
                                    <option value="supervisor"> مراقب</option>
                                    <option value="advisor"> موجـه</option>
                                </select>        
                            </div>

                            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">{{ __('تسجيل') }}</button>
                        </form>
                        <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>لديك حساب مسبقا ؟ <a href="{{ route('login') }}"
                                    class="font-bold">
                                    أدخل</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block"style="background:#ccc;">
                    <div class="lift-side text-center mt-5 me-5 ">
                        <img src="{{asset('assets/images/logo/logo.PNG')}}" alt="logo">
                    </div>
                </div>
            </div>
    
        </div>
    </body>
    
    </html>
    
