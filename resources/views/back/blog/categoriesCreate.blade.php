@extends('back.layouts.master')
@section('title', 'Create Category')

@section('master')

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create Category</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Category</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Create Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('back.categories.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row live-preview">
                                    <div class="col-lg-8">

                                        <div class="form-group">
                                            <input type="hidden" name="for" value="blog">
                                            <label for="title" class="form-label">Title <b style="color: red;">*</b></label>
                                            <input type="text" class="form-control" id="title" name="title" value="">
                                        </div>

                                        <br>

                                        <div class="form-group">
                                            <label for="short_description" class="form-label">Short Description</label>
                                            <textarea class="form-control" id="short_description" name="short_description" value=""></textarea>
                                        </div>

                                        <br>

                                        <div class="form-group">
                                            <label for="editor" class="form-label">Description <b style="color: red;">*</b></label>
                                            {{-- <div class="snow-editor" style="height: 300px;">
                                            </div> <!-- end Snow-editor--> --}}
                                            <textarea class="form-control" id="editor" placeholder="Enter the Description" name="description"></textarea>
                                        </div>

                                    </div>

                                    <div class="col-lg-4">
                                        <div class="img_group">
                                            <img class="img-thumbnail uploaded_img" src="{{asset('img/default-img.png')}}">
                                            <br>

                                            <div class="form-group text-center">
                                                <label><b>Featured Image</b></label>
                                                <div class="custom-file text-left">
                                                    <label for="imageInput" class="image-button"><i class="ri-gallery-upload-line"></i> Choose Image</label>
                                                    <input type="file" id="imageInput" class="custom-file-input image_upload form-control" name="image" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label for="title" class="form-label">Meta Title</label>
                                            <input type="text" class="form-control" id="title" name="meta_title" value="{{old('meta_title')}}">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="title" class="form-label">Meta Description</label>
                                            <textarea name="meta_description" class="form-control" id="meta_description" cols="" rows="5">{{old('meta_description')}}</textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="title" class="form-label">Meta Tag</label>
                                            <input type="text" class="form-control" id="title" name="meta_tags" value="{{old('meta_tags')}}">
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
    <!-- CK Editor -->
    {{-- <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>
        // CKEditor
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
        // $(function () {
        //     CKEDITOR.replace('editor', {
        //         height: 400
        //     });
        // });
    </script>
@endsection
