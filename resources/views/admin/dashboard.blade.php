@extends('frontend_layouts.master')

@section('header')
@include('frontend_layouts.header')
@endsection

@section('sidebar')
@include('frontend_layouts.sidebar')
@endsection

@section('content')
<style>
    .card-title {
        /* font-size: 16px; */
        font-family: 'Times New Roman';
    }

    .fa-user {
        font-size: 30px;
    }

    .fa-eye {
        font-size: 30px;
    }

    .card-body p {
        font-size: 15px;
        font-weight: bold;
    }

</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header d-flex flex-row justify-content-between">
                        <a href="" class="btn btn-primary btn-sm"></i>Job Lists</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
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


                                    {{-- <th>CSS grade</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                <tr>
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

                                </tr>
                                @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    {{-- <div class="card-header d-flex flex-row justify-content-between">
                        <a href="" class="btn btn-primary btn-sm"></i>Job Lists</a>
                    </div> --}}
                    <!-- /.card-header -->
                    <div class="card-body" style="height: 433px;">
                        <h1 class="text-center mt-5" style="font-family: 'Times New Roman';">Advertisement</h1>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Year Over Trend</h3>
                    </div>
                    <div class="card-body">
                        <center>
                            <i class="fa fa-user" class="fs-1"></i>
                            <p>11%</p>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Position Listed in Last 12 Months</h3>
                    </div>
                    <div class="card-body">
                        <p>National Name Of Employes Number Of Position: 150</p>
                    </div>

                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Top Employe In Canada</h3>
                    </div>
                    <div class="card-body">
                        <p>National Name Of Employes Number Of Position: 150</p>
                    </div>
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Year Over Year Trend</h3>
                    </div>
                    <div class="card-body">
                        <center>
                            <i class="fa fa-eye  text-warning" class="fs-1"></i>
                            <p>11%</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Year Over Year Trend</h3>
                    </div>
                    <div class="card-body">
                        <center>
                            <i class="fa fa-user text-warning" class="fs-1"></i>
                            <p>11%</p>
                        </center>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Top Employes in Province</h3>
                    </div>
                    <div class="card-body">
                        <p>Drop-Down With List OF Province Name Of Employer Number Of Position</p>
                    </div>
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Year Over Trend</h3>
                    </div>
                    <div class="card-body">
                        <center>
                            <i class="fa fa-user  text-warning" class="fs-1"></i>
                            <p>11%</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');

</script>
@endsection
