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
                <h1>Company</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Company List</li>
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
        font-size: 13px;
    }

</style>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Company List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Ower Name</th>
                                    <th>Company Name</th>
                                    <th>Company Email</th>
                                    <th>Address</th>
                                    {{-- <th>City </th> --}}
                                    <th>Country</th>
                                    {{-- <th>State</th> --}}
                                    {{-- <th>Zip Code</th> --}}
                                    <th>Phone</th>
                                    {{-- <th>Industry</th> --}}
                                    {{-- <th>Website_url</th> --}}
                                    {{-- <th>Description</th> --}}
                                    <th>Action</th>

                                    {{-- <th>CSS grade</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->name ?? 'N/A' }}</td>
                                    <td>{{ $company->company_name ?? 'N/A' }}</td>
                                    <td>{{ $company->email ?? 'N/A' }}</td>
                                    <td>{{ $company->company_address ?? 'N/A' }}</td>
                                    {{-- <td>{{ $company->city	 ?? 'N/A' }}</td> --}}
                                    <td>{{ $company->country	 ?? 'N/A' }}</td>
                                    {{-- <td>{{ $company->state	 ?? 'N/A' }}</td> --}}
                                    {{-- <td>{{ $company->zip_code ?? 'N/A' }}</td> --}}
                                    <td>{{ $company->phone ?? 'N/A' }}</td>
                                    {{-- <td>{{ $company->industry ?? 'N/A' }}</td> --}}
                                    {{-- <td>{{ $company->website_url ?? 'N/A' }}</td> --}}
                                    {{-- <td>{{ $company->description ?? 'N/A' }}</td> --}}
                                    <td><a href="{{route('company.destroy',$company->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        <a href="{{route('company.edit',$company->id)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');

</script>
@endsection
