@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
    @include('auth.includes.header')
<body>
	 <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                    @csrf
					  <span class="login100-form-title"> تسجيل جديد</span>					 
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your Name" >
						<input id="name" class="input100" type="text" name="name" @error('name') is-invalid @enderror" placeholder="ادخل الإسم" value="{{ old('name') }}" required autocomplete="name" autofocus>
                             @error('name')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
				    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your Email">
						<input id="email" class="input100" type="text" name="email" @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="name" autofocus placeholder="ادخل الإيميل">
                           @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input id="password" class="input100" type="password" name="password" @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="ادخل الرقم السري">
                            @error('password')
                               <span class="invalid-feedback role="alert">
                                    <strong>{{ $message }}</strong>
                                 </span>
                           @enderror
					</div>                
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "please chose your option">
                        <select name="rol_id" id="" class="input100">
                            <option class="input100" selected>تود التسجيل كـ</option>
                            <option class="input100" value="supervisor">مراقب</option>
                            <option class="input100" value="advisor">موجه</option>
                        </select>
                    </div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">سجل </button>		
					</div>
                    <div class="flex-col-c p-t-80 p-b-20">
                       <span class="txt1 p-b-9">   إن كنت مسجل بالفعل </span>
                       <a href="{{route('login')}}" class="txt3">سجل الدخول</a>                   
                   </div>
				</form>
			</div>
		</div>
	</div>
    @include('auth.includes.footer')
    </body>
</html>

