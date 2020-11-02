@extends('layouts.app')

@section('content')
    @if(Session::get('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Message : </strong> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
@endif
        <div class="container login-container">
            <div class="row justify-content-center">
                <div class="col-md-6 login-form-2">
                    <h3>Create License</h3>
                    <form action="{{ route('save-value') }}" method="post">
                         @csrf
                        <div class="form-group row">
                            <label for="clientId" class="text-light col-sm-3">Client ID: </label>
                            <input type="text" name="client_id" id="clientId" class="form-control col-sm-8" placeholder="Client ID" required />
                        </div>
                        <div class="form-group row">
                            <label for="licenseKey" class="text-light col-sm-3"> License Key: </label>
                            <input type="text" name="license_key" class="form-control col-sm-8" placeholder="AEQB-ETRB-NZGR"required />
                        </div>
                        <div class="form-group row">
                            <label for="month" class="text-light col-sm-3">License For: </label>
                        <select name="expire_date" class="form-control col-sm-8" required>
                                <option value="">Select Month</option> 
                                <option value="3">3 Month</option> 
                                <option value="6">6 Month</option>
                                <option value="12">12 Month</option>
                                </select>
                        </div>
                        <div class="form-group row">
                            <button class="btn btn-block btn-light text-dark" type="submit" value="submit">Submit</button>
                        </div>
                    </form>
                    <button data-toggle="modal" data-target="#showDataModal" class="btn btn-light text-dark float-left">Take License Key</button>
                    <a href="{{ route('license-active-form') }}" class="btn btn-light text-dark float-right">Active License</a>
                </div>
            </div>
             @include('modal.showdata')       
        </div>
        <script>
            $(document).ready(function() {
                $("#clientId").change(function() {
                 // alert("Hello world!");
               });
            });
        </script>
@endsection
