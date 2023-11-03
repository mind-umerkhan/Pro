@extends('frontend_layouts.master')

@section('header')
@include('frontend_layouts.header')
@endsection

@section('sidebar')
@include('frontend_layouts.sidebar')
@endsection

@section('content')
<!-- Content Header (Page header) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

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
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    {{-- <th>CSS grade</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name ?? 'N/A' }}</td>
                                    <td>{{ $user->email ?? 'N/A' }}</td>
                                    @if($user->role_id == 1)
                                    <td>Admin</td>
                                    @elseif($user->role_id == 2)
                                    <td>Company</td>
                                    @else
                                    <td>User</td>
                                    @endif
                                    @if($user->role_id == 2)
                                    @if($user->status == 0)
                                    <td>
                                        <form action="{{ route('company.approve.user', $user) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-warning">Pending</button>
                                        </form>
                                    </td>
                                    @else
                                    <td><button class="btn btn-success">Approved</button></td>
                                    @endif
                                    @else
                                    <td><button class="btn btn-success">Approved</button></td>
                                    @endif
                                    <td><a href="{{route('admin.destroy',$user->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
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
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');

    </script>
</section>

@endsection
