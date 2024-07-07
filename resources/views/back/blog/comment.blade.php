@extends('back.layouts.master')
@section('title', 'Blog Comments')

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
                    <h4 class="mb-sm-0">Comment list</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Comment list</li>
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
                        <h4 class="card-title mb-0 flex-grow-1">Comment list</h4>
                    </div><!-- end card header -->

                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-sm" id="dataTable">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-right">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $key => $blog)
                                <tr>
                                    <th scope="row">{{$key + 1}}</th>
                                    <td>
                                        <a href="{{ route('blog.single',$blog->blog?$blog->blog->title:'') }}" target="_blank">{{ $blog->blog?$blog->blog->title:'' }}</a>
                                    </td>
                                    <td>{!! $blog->comment !!}</td>
                                    <td>
                                        @include('switcher::switch', [
                                            'table' => 'comments',
                                            'data' => $blog
                                        ])
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal{{$key}}" data-whatever="@mdo"><i class="ri-edit-2-line"></i></button>
                                        <form class="d-inline-block" action="{{route('back.blog.comment.remove', $blog->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf

                                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure to remove?')"><i class="ri-delete-bin-5-line"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Comment</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('back.blog.comment.update', $blog->id)}}" method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label">Comment:</label>
                                                        <textarea class="form-control" name="comment" id="message-text">{!! $blog->comment !!}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
