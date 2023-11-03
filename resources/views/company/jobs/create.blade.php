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
                <h1>Job Form</h1>
            </div>
            {{-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div> --}}
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Job Form</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('company.job.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Province</label>
                                    <input type="text" class="form-control" name="province" value="{{ old('province') }}" placeholder="Province" id="">
                                    @error('province')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="">Province</label>
                                    <input type="text" class="form-control" name="position" value="{{ old('position') }}" placeholder="position" id="">
                                    @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="">Employer</label>
                                    <input type="text" class="form-control" name="employer" value="{{ old('employer') }}" placeholder="Employer" placeholder="Text" id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Program Stream</label>
                                    <input type="text" class="form-control" name="program_stream" value="{{ old('program_stream') }}" placeholder="Program Stream" id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Incorporate Status</label>
                                    <input type="text" class="form-control" name="incorporate_status" value="{{ old('incorporate_status') }}" placeholder="Incorporate Status" placeholder="Text" id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Approved Applications</label>
                                    <input type="text" class="form-control" name="approved_applications" value="{{ old('approved_applications') }}" placeholder="Approved Applications" placeholder="Text" id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Approved Positions</label>
                                    <input type="text" class="form-control" name="approved_positions" value="{{ old('approved_positions') }}" placeholder="Approved Positions" placeholder="Text" id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Year</label>
                                    <input type="date" class="form-control" name="year" value="{{ old('year') }}" placeholder="Year" placeholder="Text" id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Quarter</label>
                                    <input type="text" class="form-control" name="quarter" value="{{ old('quarter') }}" placeholder="Quarter" placeholder="Text" id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">City</label>
                                    <input type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="City" placeholder="Text" id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Postal Code</label>
                                    <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}" placeholder="Postal Code" placeholder="Text" id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Noc</label>
                                    <input type="text" class="form-control" name="noc" value="{{ old('noc') }}" placeholder="Noc" placeholder="Text" id="">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label for="">Description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <button type="submit" id="status" class="btn btn-primary mt-2">Add Job</button>
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
