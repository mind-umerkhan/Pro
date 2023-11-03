@extends('frontend_layouts.master')

@section('header')
@include('frontend_layouts.header')
@endsection

@section('sidebar')
@include('frontend_layouts.sidebar')
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('company.update',$company->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label text-md-end">{{ __('Company Name') }}</label>
                                        <input id="name" placeholder="Name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ isset($company) ? $company->company_name : old('company_name') }}" autocomplete="company_name" autofocus>
                                        @error('company_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label text-md-end">{{ __('Owner Name*') }}</label>
                                        <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ isset($company) ? $company->name : old('name') }}" autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label text-md-end">{{ __('Company Address') }}</label>
                                        <input id="name" placeholder="Street Address" type="text" class="form-control @error('company_address') is-invalid @enderror" name="company_address" value="{{ isset($company) ? $company->company_address : old('company_address') }}" autocomplete="company_address" autofocus>
                                        @error('company_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input id="name" placeholder="City" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ isset($company) ? $company->city : old('city') }}" autocomplete="city" autofocus>
                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input id="name" placeholder="State" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ isset($company) ? $company->state : old('state') }}" autocomplete="state" autofocus>
                                        @error('state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input id="name" placeholder="Zip Code" type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{ isset($company) ? $company->zip_code : old('zip_code') }}" autocomplete="zip_code" autofocus>
                                        @error('zip_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input id="name" placeholder="Country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ isset($company) ? $company->country : old('country') }}" autocomplete="country" autofocus>
                                        @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="">{{ __('Email Address') }}</label>
                                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ isset($company) ? $company->email : old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Phone" class="">{{ __('Phone') }}</label>
                                        <input id="" placeholder="###########" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ isset($company) ? $company->phone : old('phone') }}" required autocomplete="phone">
                                        @error('number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Industry" class="">{{ __('Industry') }}</label>
                                        <input id="Industry" placeholder="Industry" type="text" class="form-control @error('industry') is-invalid @enderror" name="industry" value="{{ isset($company) ? $company->industry : old('industry') }}" required autocomplete="industry">
                                        @error('industry')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Website Url</label>
                                        <input type="text" name="website_url" placeholder="Website.com" value="{{ isset($company) ? $company->website_url : old('website_url') }}" class="form-control" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password" class="">{{ __('Password') }}</label>
                                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror"  value="{{ isset($company) ? $company->password : old('password') }}" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" value="{{ isset($company) ? $company->password : old('password') }}" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Phone" class="">Company Description</label>
                                <textarea name="description" class="form-control" id="">{{ isset($company) ? $company->description : old('description') }}</textarea>
                            </div>
                            <button type="submit" id="status" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

@endsection
