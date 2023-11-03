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
                <h1>Edit Job</h1>
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
                        <h4>Edit Job</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('company.job.update',$job->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Province</label>
                                    <input type="text" class="form-control" name="province" value="{{ isset($job) ? $job->province : old('province') }}" placeholder="Province" id="">
                                    @error('province')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="">Position</label>
                                    <input type="text" class="form-control" name="position"value="{{ isset($job) ? $job->position : old('position') }}" placeholder="position" id="">
                                    @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="">Employer</label>
                                    <input type="text" class="form-control" name="employer"value="{{ isset($job) ? $job->employer : old('employer') }}" placeholder="Employer"id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Program Stream</label>
                                    <input type="text" class="form-control" name="program_stream" value="{{ isset($job) ? $job->program_stream : old('program_stream') }}" placeholder="Program Stream" id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Incorporate Status</label>
                                    <input type="text" class="form-control" name="incorporate_status" value="{{ isset($job) ? $job->incorporate_status : old('incorporate_status') }}" placeholder="Incorporate Status"id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Approved Applications</label>
                                    <input type="text" class="form-control" name="approved_applications" value="{{ isset($job) ? $job->approved_applications : old('approved_applications') }}" placeholder="Approved Applications"id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Approved Positions</label>
                                    <input type="text" class="form-control" name="approved_positions" value="{{ isset($job) ? $job->approved_positions : old('approved_positions') }}" placeholder="Approved Positions"id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Year</label>
                                    <input type="date" class="form-control" name="year" value="{{ isset($job) ? $job->year : old('year') }}" placeholder="Year"id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Quarter</label>
                                    <input type="text" class="form-control" name="quarter"value="{{ isset($job) ? $job->quarter : old('quarter') }}"placeholder="Quarter"id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">City</label>
                                    <input type="text" class="form-control" name="city" value="{{ isset($job) ? $job->city : old('city') }}" placeholder="City"id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Postal Code</label>
                                    <input type="text" class="form-control" name="postal_code" value="{{ isset($job) ? $job->postal_code : old('postal_code') }}" placeholder="Postal Code"id="">
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label for="">Noc</label>
                                    <input type="text" class="form-control" name="noc" value="{{ isset($job) ? $job->noc : old('noc') }}" placeholder="Noc"id="">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label for="">Description</label>
                                    <textarea name="description" class="form-control">{{ isset($job) ? $job->description : old('description') }}</textarea>
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
