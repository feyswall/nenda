@extends('layouts.login_layout')

@section('content')


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w"  method="POST" action="{{ route('lecture.login-post') }}">
                    @csrf
                    <span class="login100-form-title p-b-51">
                       Lecture Login
                    </span>

                    <input value="lecture@gmail.com" id="email" type="hidden" class=" input100 form-control @error('email') is-invalid @enderror" name="email" placeholder="" required autocomplete="current-check_number">
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
                        <input id="check_number" type="number" class=" input100 form-control @error('check_number') is-invalid @enderror" name="check_number" placeholder="check_number" required autocomplete="current-check_number">
                        @error('check_number')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input placeholder="Password" id="password" name="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-24">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Forgot?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

@endsection
