@extends('layouts.login_layout')

@section('content')


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w"  method="POST" action="{{ route('assistance-tutorial.changePassword') }}">
                    @csrf
                    <span class="login100-form-title p-b-51">
                       Assistance_tutorial Change Password
                    </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
                        <input id="old_password" type="password" class=" input100 form-control @error('old_password') is-invalid @enderror" name="old_password" placeholder="old password" required autocomplete="current-email">
                        @error('old_password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>



                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
                        <input id="password" type="password" class=" input100 form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-email">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input placeholder="Password confirm" id="passwordConf" name="password_confirmation" type="password" class="input100 form-control @error('password_confirmation') is-invalid @enderror" required autocomplete="current-password">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>


                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn">
                            Submit
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

@endsection
