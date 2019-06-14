@extends('layouts.default')

@section('content')
<div class="profile-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Register</h1>

                <div class="card-body">
                    <form method="POST" class="registerform" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="FirstName" class="col-md-4 col-form-label text-md-right">First name</label>

                            <div class="col-md-6">
                                <input id="FirstName" placeholder="John" type="text" class="form-control" name="FirstName">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="LastName" class="col-md-4 col-form-label text-md-right">Last name</label>

                            <div class="col-md-6">
                                <input id="LastName" placeholder="Doe" type="text" class="form-control" name="LastName">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="City" class="col-md-4 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input id="City" placeholder="Brussels" type="text" class="form-control" name="City">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Zip" class="col-md-4 col-form-label text-md-right">Zip</label>

                            <div class="col-md-6">
                                <input id="Zip" placeholder="1000" type="text" class="form-control" name="Zip">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Street" class="col-md-4 col-form-label text-md-right">Street</label>

                            <div class="col-md-6">
                                <input id="Street" placeholder="Autoweg Zuid" type="text" class="form-control" name="Street">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="StreetNumber" class="col-md-4 col-form-label text-md-right">Street number</label>

                            <div class="col-md-6">
                                <input id="StreetNumber" placeholder="10" type="number" class="form-control" name="StreetNumber">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Mail" class="col-md-4 col-form-label text-md-right">Mail</label>

                            <div class="col-md-6">
                                <input id="Mail" placeholder="john.doe@example.com" type="text" class="form-control" name="Mail">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="Password" placeholder="Password" type="Password" class="form-control @error('password') is-invalid @enderror" name="Password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>


                        <div class="form-group row mb-0 register-btn">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
