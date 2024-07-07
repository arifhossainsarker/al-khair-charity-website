@extends('back.layouts.master')
@section('title', 'Edit Page')

@section('master')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Page</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Edit page</li>
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
                                <h4 class="card-title mb-0 flex-grow-1">Edit page</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('back.pages.update', $page->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row live-preview">
                                        <div class="col-lg-8">

                                            <div class="form-group">
                                                <input type="hidden" name="for" value="blog">
                                                <label for="title" class="form-label">Title <b
                                                        style="color: red;">*</b></label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                    value="{{ old('title') ?? $page->title }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="short_description" class="form-label">Short Description</label>
                                                <textarea class="form-control" id="short_description" name="short_description"
                                                    value="{{ old('short_description') ?? $page->short_description }}"></textarea>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="editor" class="form-label">Description <b
                                                        style="color: red;">*</b></label>
                                                {{-- <div class="snow-editor" style="height: 300px;">
                                            </div> <!-- end Snow-editor--> --}}
                                                {{-- <div id="editor">This is some sample content.</div> --}}
                                                <textarea class="form-control" id="editor" placeholder="Enter the Description" name="description">{{ old('description') ?? $page->description }}</textarea>
                                            </div>

                                        </div>

                                        <div class="col-lg-4">
                                            <div class="img_group">
                                                <img class="img-thumbnail uploaded_img"
                                                    src="{{ $page->img_paths['small'] }}">

                                                @if ($page->media_id)
                                                    <a href="{{ route('admin.pages.removeImage', $page->id) }}"
                                                        onclick="return confirm('Are you sure to remove?');"
                                                        class="btn btn-sm btn-danger remove_image" title="Remove image"><i
                                                            class="ri-delete-bin-5-line"></i></a>
                                                @endif
                                                <br>

                                                <div class="form-group text-center">
                                                    <label><b>Featured Image</b></label>
                                                    <div class="custom-file text-left">
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
                                                <label for="title" class="form-label">Meta Title</label>
                                                <input type="text" class="form-control" id="title" name="meta_title"
                                                    value="{{ old('meta_title') ?? $page->meta_title }}">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="title" class="form-label">Meta Description</label>
                                                <textarea name="meta_description" class="form-control" id="meta_description" cols="" rows="5">{{ old('meta_description') ?? $page->meta_description }}</textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="title" class="form-label">Meta Tag</label>
                                                <input type="text" class="form-control" id="title" name="meta_tags"
                                                    value="{{ old('meta_tags') ?? $page->meta_tags }}">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Page Template</b></label>

                                                <select name="template" class="form-select">
                                                    <option value="">Select Template</option>
                                                    @foreach (Info::pageTemplates() as $template)
                                                        <option value="{{ $template['blade'] }}"
                                                            {{ $template['blade'] == $page->template ? 'selected' : '' }}>
                                                            {{ $template['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
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
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <script>
        // CKEditor
        $(function() {
            CKEDITOR.replace('editor', {
                height: 200,
                filebrowserUploadUrl: "{{ route('imageUpload') }}?",
                disableNativeSpellChecker: false,
            });
        });
    </script>
@endsection
