@extends('layouts.app')

@section('content')

    <section class="signUp">

        <div class="content">

            <div class="row no-gutters">

                <div class="col-md-12">
                    <div class="signInForms">
                        <div class="signInTitle">
                            <h2>Sign Up</h2>
                        </div>
                        <div class="signUpForm">
                            <p>Fill in the form below to get instant access:</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="input-group mb-3 mainRegInput">
                                    <input name="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" placeholder="First Name"
                                           aria-label="firstName"
                                           aria-describedby="basic-addon1">
                                    @if ($errors->has('firstName'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('firstName') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3 mainRegInput">
                                    <input name="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" placeholder="Last Name"
                                           aria-label="lastName"
                                           aria-describedby="basic-addon1">
                                    @if ($errors->has('lastName'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('lastName') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3 mainRegInput">
                                    <input name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E - Mail Address"
                                           aria-label="Email"
                                           aria-describedby="basic-addon1">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('email') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3 mainRegInput">
                                    <input name="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Phone Number"
                                           aria-label="Phone"
                                           aria-describedby="basic-addon1">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('phone') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3 mainRegInput">
                                    <input name="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" placeholder="Company"
                                           aria-label="Company"
                                           aria-describedby="basic-addon1">
                                    @if ($errors->has('company'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('company') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3 mainRegInput">
                                    <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password"
                                           aria-label="password"
                                           aria-describedby="basic-addon1">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('password') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3 mainRegInput">
                                    <input name="password_confirmation" type="password" class="form-control"
                                           placeholder="Confirm Password"
                                           aria-label="confirm password" aria-describedby="basic-addon1">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary login">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
