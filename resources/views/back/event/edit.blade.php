@extends('back.layouts.master')
@section('title', 'Edit Events')
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
                        <h4 class="mb-sm-0">Events</h4>

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
                                <h4 class="card-title mb-0 flex-grow-1">Edit Events</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('back.events.update', $event->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row live-preview">
                                        <div class="col-lg-8">

                                            <div class="form-group">
                                                <label for="title" class="form-label">Title <b
                                                        style="color: red;">*</b></label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                    value="{{ old('title') ?? $event->title }}" required>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="editor" class="form-label">Description <b
                                                        style="color: red;">*</b></label>
                                                <textarea class="form-control" id="editor" placeholder="Enter the Description" name="description">{{ old('description') ?? $event->description }}</textarea>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <event-attribute></event-attribute>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="img_group">
                                                @if ($event->feature_type == 0)
                                                    <img class="img-thumbnail uploaded_img"
                                                        src="{{ $event->img_paths['small'] }}">

                                                    @if ($event->media_id)
                                                        <a href="{{ route('back.news.removeImage', $event->id) }}"
                                                            onclick="return confirm('Are you sure to remove?');"
                                                            class="btn btn-sm btn-danger remove_image"
                                                            title="Remove image"><i class="ri-delete-bin-5-line"></i></a>
                                                    @endif
                                                @else
                                                    {!! $event->video_html !!}
                                                @endif
                                                <br>
                                                <div class="form-group text-center">
                                                    <label><b>Featured</b></label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input feature_type_radio" type="radio"
                                                            name="feature_type" id="feature_type_1" value="0"
                                                            {{ $event->feature_type == 0 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="feature_type_1">Image</label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input feature_type_radio" type="radio"
                                                            name="feature_type" id="feature_type_2" value="1"
                                                            {{ $event->feature_type == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="feature_type_2">Video
                                                            link(Youtube/Vimo)</label>
                                                    </div>

                                                    <div class="custom-file text-left ft_image">
                                                        <label for="imageInput" class="image-button"><i
                                                                class="ri-gallery-upload-line"></i> Choose Image</label>
                                                        <input type="file" id="imageInput"
                                                            class="custom-file-input image_upload form-control"
                                                            name="image" accept="image/*">
                                                    </div>
                                                    <div class="text-left ft_video form-group" style="display: none">
                                                        <input type="text" class="form-control feature_video"
                                                            placeholder="https://www.youtube.com/watch?v=QarivLA5"
                                                            name="video">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="start_date" class="form-label">Event Start Date <b
                                                                style="color: red;">*</b></label>
                                                        <input type="datetime-local" class="form-control" id="start_date"
                                                            name="start_date"
                                                            value="{{ old('start_date') ?? $event->start_date }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="end_date" class="form-label">Event End Date</label>
                                                        <input type="datetime-local" class="form-control" id="end_date"
                                                            name="end_date"
                                                            value="{{ old('end_date') ?? $event->end_date }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="location_address" class="form-label">Location
                                                    Address</label>
                                                <textarea name="location_address" class="form-control" id="location_address" cols="" rows="4">{{ old('location_address') ?? $event->location_address }}</textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="location_map" class="form-label">Location Map</label>
                                                <textarea name="location_map" class="form-control" id="location_map" cols="" rows="4">{{ old('location_map') ?? $event->location_map }}</textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="title" class="form-label">Meta Title</label>
                                                <input type="text" class="form-control" id="title"
                                                    name="meta_title"
                                                    value="{{ old('meta_title') ?? $event->meta_title }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="title" class="form-label">Meta Tag</label>
                                                <input type="text" class="form-control" id="title"
                                                    name="meta_tags" value="{{ old('meta_tags') ?? $event->meta_tags }}">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="title" class="form-label">Meta Description</label>
                                                <textarea name="meta_description" class="form-control" id="meta_description" cols="" rows="5">{{ old('meta_description') ?? $event->meta_description }}</textarea>
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
