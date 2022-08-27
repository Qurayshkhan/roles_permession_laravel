@extends('layouts.app')

@section('content')

<div class="main-wrapper">

        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div>
                    <div class="text-center p-t-20 p-b-20">
                     <span class="db"><img src="../../assets/images/slgo.png" alt="logo" /></span>
                    </div>
                    <br>
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" method="post" action="{{ route('register') }}">
                    
                    @csrf 
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                        <input id="email" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name"value="{{isset($name) ? $name : old('name') }}" aria-label="Name" aria-describedby="basic-addon1" required autocomplete="name">

                                       @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                <!-- email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ isset($email) ? $email : old('email') }}" aria-label="Email" aria-describedby="basic-addon1" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                                
                                <!--address-->

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-book"></i></span>
                                    </div>
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{ old('address') }}" aria-label="Address" aria-describedby="basic-addon1" required autocomplete="address">

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>

                        
                                <!-- Mobile -->
                        
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon1"><i class="ti-mobile"></i></span>
                                    </div>
                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="Mobile" value="{{ isset($mobile) ? $mobile : old('mobile') }}" aria-label="Mobile" aria-describedby="basic-addon1" required autocomplete="mobile">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>



                                <!--Gender-->

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-filter"></i></span>
                                    </div>
                                    <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" placeholder="Gender" value="{{ old('gender') }}" aria-label="Gender" aria-describedby="basic-addon1" required autocomplete="gender">

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>


                                <!--date of birth-->

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-calendar"></i></span>
                                    </div>
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" placeholder="DOB" value="{{ old('dob') }}" aria-label="DOB" aria-describedby="basic-addon1" required autocomplete="dob">

                                @error('dob')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>


                                <!--CNIC-->

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white" id="basic-addon1"><i class="ti-credit-card"></i></span>
                                    </div>
                                    <input id="cnic" type="text" class="form-control @error('cnic') is-invalid @enderror" name="cnic" placeholder="CNIC" value="{{ old('cnic') }}" aria-label="CNIC" aria-describedby="basic-addon1" required autocomplete="cnic">

                                @error('cnic')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>

                                <!--password -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-secondary text-white" id="basic-addon2"><i class="ti-lock"></i></span>
                                    </div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required autofocus="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>

    
                                <!-- confirm password -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-lock"></i></span>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" aria-label="Coonfirm Password" aria-describedby="basic-addon1" required autofocus="new-password">
                                </div>
                            </div>
                        </div>
                            <div class="row border-top border-secondary">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="p-t-20">
                                            <button type="submit" class="btn btn-block btn-lg btn-info" >Register</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
