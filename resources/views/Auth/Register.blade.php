@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div><br>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="FirstName" class="col-md-4 col-form-label text-md-right">First name</label>

                            <div class="col-md-6">
                                <input id="FirstName" type="text" class="form-control" name="FirstName">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="LastName" class="col-md-4 col-form-label text-md-right">Last name</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control" name="LastName">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="City" class="col-md-4 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input id="City" type="text" class="form-control" name="City">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Zip" class="col-md-4 col-form-label text-md-right">Zip</label>

                            <div class="col-md-6">
                                <input id="Zip" type="text" class="form-control" name="Zip">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Street" class="col-md-4 col-form-label text-md-right">Street</label>

                            <div class="col-md-6">
                                <input id="Street" type="text" class="form-control" name="Street">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="StreetNumber" class="col-md-4 col-form-label text-md-right">Street number</label>

                            <div class="col-md-6">
                                <input id="StreetNumber" type="number" class="form-control" name="StreetNumber">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Mail" class="col-md-4 col-form-label text-md-right">Mail</label>

                            <div class="col-md-6">
                                <input id="Mail" type="text" class="form-control" name="Mail">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="Password" type="Password" class="form-control @error('password') is-invalid @enderror" name="Password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>


                        <div class="form-group row mb-0">
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
