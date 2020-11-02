<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <!--    Bootstrap-4.3 Stylesheet-->
        <link rel="stylesheet" href="{{asset('/admin/assets/css/bootstrap.min.css')}}">
        <!--    Theme Stylesheet-->
        <link rel="stylesheet" href="{{asset('/admin/assets/css/style.css')}}">
        <link rel="shortcut icon" href="{{asset('/admin/assets/images/favicon.png')}}" type="image/x-icon">
    </head>
    <body>
        <!--Content Start-->
        <section class="container-fluid">
            <div class="row content login-form">
                <div class="col-12 pl-0 pr-0">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h4 class="text-center font-weight-bold font-italic mt-3">Registration Form</h4>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" autocomplete="" class="form-inline">
                        @csrf
                        <div class="form-group col-12 mb-3">
                            <label for="firstName" class="col-sm-3 col-form-label text-right">{{ __('First Name') }}</label>
                            <input id="firstName" type="text" class="col-sm-9 form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required autofocus>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label for="lastName" class="col-sm-3 col-form-label text-right">{{ __('Last Name') }}</label>
                            <input id="lastName" type="text" class="col-sm-9 form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required autofocus>
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label for="organizationName" class="col-sm-3 col-form-label text-right">{{ __('Organization Name') }}</label>
                            <input id="organizationName" type="text" class="col-sm-9 form-control @error('organization_name') is-invalid @enderror" name="organization_name" value="{{ old('organization_name') }}" placeholder="Organization Name" required autofocus>
                            @error('organization_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label for="street" class="col-sm-3 col-form-label text-right">{{ __('Street') }}</label>
                            <input id="street" type="text" class="col-sm-9 form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" placeholder="Street" required autofocus>
                            @error('street')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label for="city" class="col-sm-3 col-form-label text-right">{{ __('City') }}</label>
                            <input id="city" type="text" class="col-sm-9 form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" placeholder="City" required autofocus>
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label for="mobile" class="col-sm-3 col-form-label text-right">{{__('Mobile')}}</label>
                            <input id="mobile" type="text" class="col-sm-9 form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('email') }}" placeholder="8801xxxxxxxxx" required>
                            @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label for="email" class="col-sm-3 col-form-label text-right">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="col-sm-9 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group col-12 mb-3">
                          <label for="password" class="col-sm-3 col-form-label text-right">{{ __('Password') }}</label>
                             <input id="password" type="password" class="col-sm-9 form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label for="password-confirm" class="col-sm-3 col-form-label text-right">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="col-sm-9 form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">                         
                        </div>
                        <div class="form-group col-12 mb-3">
                            <label class="col-sm-3"></label>
                            <button type="submit" class="col-sm-9 btn btn-block my-btn-submit">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Content End-->
    </body>
</html>