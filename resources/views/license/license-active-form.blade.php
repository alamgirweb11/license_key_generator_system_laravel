@extends('layouts.app')
@section('content')
<div class="container login-container">
    @if(Session::get('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Message : </strong> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-6 login-form-2">
            <h3>Active License</h3>
            <form action="" method="post">
                 @csrf

                <div class="form-group row">
                    <label for="licenseKey" class="text-light col-sm-3"> License Key: </label>
                    <input type="text" name="license_key" class="form-control col-sm-8" placeholder="Paste your license key"required />
                </div>
                    <button class="btn btn-light text-dark float-right" type="submit" value="submit">Active</button>
                    <a href="{{ url('/home') }}" class="btn btn-light text-dark float-left">Back to home</a>
                </form> 
        </div>
    </div>
</div>
@endsection