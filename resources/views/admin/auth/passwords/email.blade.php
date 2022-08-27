@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Admin Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal m-t-20" method="post" action="{{ route('admin.password.email') }}">

                        @csrf

                        <div class="row p-b-30">

                                <!-- email -->
                            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ isset($email) ? $email : old('email') }}" aria-label="Username" aria-describedby="basic-addon1" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row border-top">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="p-t-20">
                                            <button type="submit" class="btn bg-primary text-white" >Send Password Reset link</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
