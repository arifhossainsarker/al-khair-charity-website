@extends('back.layouts.master')
@section('title', 'Volunteer')

@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.css"/>
@endsection

@section('master')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Volunteers</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="blog-table-header card-header">
                        <h4 class="card-title mb-0 flex-grow-1">Volunteers</h4>
                        @isset(auth()->user()->role->permission['permission']['volunteer']['add'])
                        <a href="{{route('back.volunteer.create')}}" class="btn btn-info float-right"><i class="ri-add-circle-line"></i> Create New</a>
                        @endisset
                    </div><!-- end card header -->

                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-sm" id="dataTable">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Occupation</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-right">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($volunteer as $key => $vol)
                                    <tr>
                                        <th scope="row">{{$key + 1}}</th>
                                        <td>{!! $vol->name_title !!} {!! $vol->last_name !!}</td>
                                        <td>{!! $vol->email !!}</td>
                                        <td>{!! $vol->phone !!}</td>
                                        <td>{{ $vol->occupation}}</td>
                                        <td>
                                            @isset(auth()->user()->role->permission['permission']['volunteer']['edit'])
                                            @include('switcher::switch', [
                                                'table' => 'volunteers',
                                                'data' => $vol
                                            ])
                                            @endisset
                                        </td>

                                        <td class="text-right">
                                            @isset(auth()->user()->role->permission['permission']['volunteer']['edit'])
                                            <a class="btn btn-sm btn-success" href="{{route('back.volunteer.edit', $vol->id)}}"><i class="ri-edit-2-line"></i></a>
                                            @endisset
                                            @isset(auth()->user()->role->permission['permission']['volunteer']['delete'])
                                            <form class="d-inline-block" action="{{route('back.volunteer.destroy', $vol->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf

                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure to remove?')">
                                                    <i class="ri-delete-bin-5-line"></i>
                                                </button>
                                            </form>
                                            @endisset
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection

@section('footer')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#dataTable').DataTable({
            order: [[0, "asc"]],
        });
    });
</script>
@endsection
