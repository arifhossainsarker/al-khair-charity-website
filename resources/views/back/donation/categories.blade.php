@extends('back.layouts.master')
@section('title', 'Donation Categories')

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
                    <h4 class="mb-sm-0">Category list</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Category list</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6">
                <div class="card border-light mt-3 shadow">
                    <div class="card-header">
                        <h5 class="d-inline-block">Category List</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-sm" id="dataTable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{$category->id}}</th>
                                        <td>
                                            {{$category->title}}
                                        </td>
                                        <td>
                                            @include('switcher::switch', [
                                                'table' => 'categories',
                                                'data' => $category
                                            ])
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{route('back.donation.categories.edit', $category->id)}}"><i class="ri-edit-2-line"></i></a>
                                            <form class="d-inline-block" action="{{route('back.categories.destroy', $category->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf


                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to remove?')"><i class="ri-delete-bin-5-line"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-light mt-3 shadow">
                    <div class="card-header">
                        <h5>Create Category</h5>
                    </div>

                    <form action="{{route('back.categories.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label><b>Title*</b></label>
                                        <input type="hidden" name="for" value="donation">
                                        <input type="text" class="form-control" name="title" value="{{old('title')}}" required>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label><b>Short Description</b></label>
                                        <textarea class="form-control" id="sdeditor" placeholder="Enter short Description" name="short_description">{{ old('short_description') }}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label><b>Description</b></label>
                                        <textarea class="form-control" id="deditor" placeholder="Enter short Description" name="description">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <div class="img_group">
                                        <img class="img-thumbnail uploaded_img"
                                            src="{{ asset('img/default-img.png') }}">
                                        <br>
                                        <div class="form-group text-center">

                                            <div class="custom-file text-left ft_image">
                                                <label for="imageInput" class="image-button"><i class="ri-gallery-upload-line"></i> Choose Image</label>
                                                <input type="file"
                                                    id="imageInput" class="custom-file-input image_upload form-control" name="image"
                                                    accept="image/*">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" style="width: 100%;">Create</button>
                            <br>
                            <small><b>NB: *</b> marked are required field.</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('footer')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    $(document).ready( function () {
        $('#dataTable').DataTable({
            order: [[0, "desc"]],
        });
    });

     // CKEditor
     $(function() {
            CKEDITOR.replace('sdeditor', {
                height: 100
            });
        });

         // CKEditor
         $(function() {
            CKEDITOR.replace('deditor', {
                height: 100
            });
        });

        $(document).on('click', '.feature_type_radio', function() {
            let ft = $(this).val();

            if (ft == 0) {
                $('.ft_image').show();

            } else {
                $('.ft_image').hide();
                $('.uploaded_img').hide();

            }
        });
</script>
@endsection
