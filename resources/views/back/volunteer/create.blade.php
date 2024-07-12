@extends('back.layouts.master')
@section('title', 'Create volunteer')
@section('head')
    <style>
        .additional-attribute {
            margin-bottom: 20px;
        }

        .add-btn i,
        .delete-btn i {
            font-size: 25px;
        }

        .add-btn,
        .delete-btn {
            margin-top: 25px;
        }

        .icon-img img {
            height: 40px;
            width: 40px;
            border-radius: 100px;
            margin-top: 25px;
            object-fit: cover;
        }

        .icon-img {
            text-align: center;
        }
    </style>
@endsection
@section('master')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Volunteer</h4>

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
                                <h4 class="card-title mb-0 flex-grow-1">Create Volunteer</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('back.volunteer.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row live-preview">
                                        <div class="col-lg-8">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">Name <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" value="{{ old('name') }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email" value="{{ old('email') }}" required>
                                                    </div>
                                                </div>

                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="phone" class="form-label">Phone</label>
                                                        <input type="text" class="form-control" id="phone"
                                                            name="phone" value="{{ old('phone') }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="designation" class="form-label">Designation <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="designation"
                                                            name="designation" value="{{ old('designation') }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="editor" class="form-label">Description </label>
                                                <textarea class="form-control" id="editor" placeholder="Enter the Description" name="bio"></textarea>
                                            </div>
                                            <br>
                                            <div class="row">
                                                {{-- <event-attribute></event-attribute> --}}
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

                                            <div class="form-group">
                                                <label for="location_address" class="form-label">Category <b
                                                        style="color: red;">*</b></label>
                                                <select name="people_id" id="" class="form-select" required>
                                                    <option value="">Select Category</option>
                                                    @foreach ($peoples as $item)
                                                        <option value="{{ $item->id }}">{{ $item->type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="location_map" class="form-label">Department</label>
                                                <input type="text" class="form-control" id="department"
                                                    name="department" value="{{ old('department') }}">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="website_link" class="form-label">Website</label>
                                                <input type="url" class="form-control" id="website_link"
                                                    name="website_link" value="{{ old('website_link') }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="research_interest" class="form-label">Research
                                                    Interest</label>
                                                <textarea name="research_interest" class="form-control" id="research_interest" cols="" rows="5">{{ old('research_interest') }}</textarea>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="address" class="form-label">Address</label>
                                                <textarea name="address" class="form-control" id="address" cols="" rows="5">{{ old('address') }}</textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="serial" class="form-label">Display Serial</label>
                                                <input type="number" name="serial" id="serial" class="form-control" value="{{ old('serial') }}">
                                            </div>
                                            <br>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                    style="width: 100%;">Create</button>
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
    <script type="text/javascript" src="{{ asset('back/js/app.js') }}"></script>
    <!-- ck Editor -->
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
