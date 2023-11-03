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
                        <a href="{{ route('company.job.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle fs-1 p-2" aria-hidden="true"></i>Add Job</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
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
                                    <th>Action</th>

                                    {{-- <th>CSS grade</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                <tr>
                                    {{-- <td>{{ $company['email'] ?? 'N/A' }}</td> --}}
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
                                    <td><a href="{{route('company.job.destroy',$job->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        <a href="{{route('company.job.edit',$job->id)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
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

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('dashboard_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('dashboard_assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard_assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard_assets/dist/js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true
            , "lengthChange": false
            , "autoWidth": false
            , "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true
            , "lengthChange": false
            , "searching": false
            , "ordering": true
            , "info": true
            , "autoWidth": false
            , "responsive": true
        , });
    });

</script>
@endsection
