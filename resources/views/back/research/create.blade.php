@extends('back.layouts.master')
@section('title', 'Create Research')
@section('head')

@endsection
@section('master')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Research</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Create</li>
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
                                <h4 class="card-title mb-0 flex-grow-1">Create Research</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('back.research.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row live-preview">
                                        <div class="col-lg-8">

                                            <div class="form-group">
                                                <label for="title" class="form-label">Title <b style="color: red;">*</b></label>
                                                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" required>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="sub_title" class="form-label">Sub Title</label>
                                                <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{old('sub_title')}}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="editor" class="form-label">Description <b style="color: red;">*</b></label>
                                                <textarea class="form-control" id="editor" placeholder="Enter the Description" name="description">{{old('description')}}</textarea>
                                            </div>

                                        </div>

                                        <div class="col-lg-4">
                                            <div class="img_group">
                                                <img class="img-thumbnail uploaded_img" src="{{asset('img/default-img.png')}}">
                                                <br>
                                                <div class="form-group text-center">
                                                    <label><b>Featured</b></label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input feature_type_radio" type="radio" name="feature_type" id="feature_type_1" value="0" checked>
                                                        <label class="form-check-label" for="feature_type_1">Image</label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input feature_type_radio" type="radio" name="feature_type" id="feature_type_2" value="1">
                                                        <label class="form-check-label" for="feature_type_2">Video link(Youtube/Vimo)</label>
                                                    </div>

                                                    <div class="custom-file text-left ft_image">
                                                        <label for="imageInput" class="image-button"><i class="ri-gallery-upload-line"></i> Choose Image</label>
                                                        <input type="file" id="imageInput" class="custom-file-input image_upload form-control" name="image" accept="image/*">
                                                    </div>
                                                    <div class="text-left ft_video form-group" style="display: none">
                                                        <input type="text" class="form-control form-control-sm feature_video" name="video">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label class="form-label" for="pdf_file"><b>Pdf File</b></label>
                                                <input type="file" id="pdf_file" name="pdf_file" class="pdf_input form-control">
                                            </div>
                                            <br>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block" style="width: 100%;">Create</button>
                                                <small><b>NB: <span style="color: red;">*</span></b> marked are required field.</small>
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
        $(function () {
            CKEDITOR.replace('editor', {
                height: 400
            });
        });

        $(document).on('click', '.video_radio', function(){
            let video_type = $(this).val();

            if(video_type == 'File'){
                $('.video_input').show();
                $('.video_embade_code').hide();
            }else{
                $('.video_input').hide();
                $('.video_embade_code').show();
            }
        });
        $(document).on('click', '.feature_type_radio', function(){
            let ft = $(this).val();

            if(ft == 0){
                $('.ft_image').show();
                $('.uploaded_img').show();
                $('.ft_video').hide();
            }else{
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
