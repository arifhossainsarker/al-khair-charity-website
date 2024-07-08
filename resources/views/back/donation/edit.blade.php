@extends('back.layouts.master')
@section('title', 'Edit Alumni')
@section('head')

@endsection
@section('master')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Alumni</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row project-wrapper">
                <div class="col-xxl-12">
                    <!-- Create form start -->
                    <div class="row">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0 flex-grow-1">Edit Alumni</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('back.alumni.update', $alumni->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row live-preview">
                                        <div class="col-lg-8">

                                            <div class="form-group">
                                                <label for="title" class="form-label">Name <b
                                                        style="color: red;">*</b></label>
                                                <input type="text" class="form-control" id="title" name="name"
                                                    value="{{ old('name') ?? $alumni->name }}" required>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email" value="{{ old('email') ?? $alumni->email }}"
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="student_id" class="form-label">Student ID <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="student_id"
                                                            name="student_id"
                                                            value="{{ old('student_id') ?? $alumni->student_id }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="sub_title" class="form-label">Designation</label>
                                                        <input type="text" class="form-control" id="sub_title"
                                                            name="designation"
                                                            value="{{ old('designation') ?? $alumni->designation }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="sub_title" class="form-label">Batch Number</label>
                                                        <input type="text" class="form-control" id="sub_title"
                                                            name="batch_no"
                                                            value="{{ old('batch_no') ?? $alumni->batch_no }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <br>

                                            <div class="form-group">
                                                <label for="editor" class="form-label">Description </label>
                                                <textarea class="form-control" id="editor" placeholder="Enter the Description" name="description">{{ old('description') ?? $alumni->description }}</textarea>
                                            </div>

                                        </div>

                                        <div class="col-lg-4">
                                            <div class="img_group">
                                                <img class="img-thumbnail uploaded_img"
                                                    src="{{ asset('img/default-img.png') }}">
                                                <br>
                                                <div class="form-group text-center">

                                                    <div class="custom-file text-left ft_image">
                                                        <label for="imageInput" class="image-button"><i
                                                                class="ri-gallery-upload-line"></i> Choose Image</label>
                                                        <input type="file" id="imageInput"
                                                            class="custom-file-input image_upload form-control"
                                                            name="image" accept="image/*">
                                                    </div>

                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                    style="width: 100%;">Update</button>
                                                <small><b>NB: <span style="color: red;">*</span></b> marked are required
                                                    field.</small>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Create form end -->

                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer')
    <!-- summernote Editor -->

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <script>
        // CKEditor
        $(function() {
            CKEDITOR.replace('editor', {
                height: 400
            });
        });

        $(document).on('click', '.video_radio', function() {
            let video_type = $(this).val();

            if (video_type == 'File') {
                $('.video_input').show();
                $('.video_embade_code').hide();
            } else {
                $('.video_input').hide();
                $('.video_embade_code').show();
            }
        });
        $(document).on('click', '.feature_type_radio', function() {
            let ft = $(this).val();

            if (ft == 0) {
                $('.ft_image').show();
                $('.uploaded_img').show();
                $('.ft_video').hide();
            } else {
                $('.ft_image').hide();
                $('.uploaded_img').hide();
                $('.ft_video').show();
            }
        });

        $(document).ready(function() {
            $('#categorySelect').select2();
        });
    </script>
@endsection
