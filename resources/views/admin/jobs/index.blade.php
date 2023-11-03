@extends('frontend_layouts.master')

@section('header')
@include('frontend_layouts.header')
@endsection

@section('sidebar')
@include('frontend_layouts.sidebar')
@endsection

@section('content')
<!-- Content Header (Page header) -->
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Job Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Job List</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<style>
    th {
        font-size: 14px;
    }

    tr {
        font-size: 14px;
    }

</style>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex flex-row justify-content-between">
                        <a href="{{ route('job.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle fs-1 p-2" aria-hidden="true"></i>Add Job</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    {{-- <th>Company Name</th> --}}
                                    <th>Province</th>
                                    <th>Employer</th>
                                    <th>Year</th>
                                    <th>Quarter</th>
                                    {{-- <th>City </th> --}}
                                    <th>Position</th>
                                    {{-- <th>State</th> --}}
                                    {{-- <th>Zip Code</th> --}}
                                    <th>City</th>
                                    {{-- <th>Industry</th> --}}
                                    {{-- <th>Website_url</th> --}}
                                    {{-- <th>Description</th> --}}
                                    <th>Action</th>

                                    {{-- <th>CSS grade</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                <tr>
                                    {{-- <td>{{ $job->company->company_name ?? 'N/A' }}</td> --}}
                                    <td>{{ $job->province ?? 'N/A' }}</td>
                                    <td>{{ $job->employer ?? 'N/A' }}</td>
                                    <td>{{ $job->year ?? 'N/A' }}</td>
                                    <td>{{ $job->quarter ?? 'N/A' }}</td>
                                    {{-- <td>{{ $job->city	 ?? 'N/A' }}</td> --}}
                                    <td>{{ $job->position	 ?? 'N/A' }}</td>
                                    {{-- <td>{{ $job->state	 ?? 'N/A' }}</td> --}}
                                    {{-- <td>{{ $job->zip_code ?? 'N/A' }}</td> --}}
                                    <td>{{ $job->city ?? 'N/A' }}</td>
                                    {{-- <td>{{ $job->industry ?? 'N/A' }}</td> --}}
                                    {{-- <td>{{ $job->website_url ?? 'N/A' }}</td> --}}
                                    {{-- <td>{{ $job->description ?? 'N/A' }}</td> --}}
                                    <td><a href="{{route('job.destroy',$job->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        <a href="{{route('job.edit',$job->id)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');

</script>
@endsection
