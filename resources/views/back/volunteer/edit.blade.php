@extends('back.layouts.master')
@section('title', 'Edit Peoples')
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
                        <h4 class="mb-sm-0">Peoples</h4>

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
                                <h4 class="card-title mb-0 flex-grow-1">Edit People</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('back.people-list.update', $peopleList->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row live-preview">
                                        <div class="col-lg-8">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">Name <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" value="{{ old('name') ?? $peopleList->name }}"
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email" value="{{ old('email') ?? $peopleList->email }}"
                                                            required>
                                                    </div>
                                                </div>

                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="phone" class="form-label">Phone</label>
                                                        <input type="text" class="form-control" id="phone"
                                                            name="phone" value="{{ old('phone') ?? $peopleList->phone }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="designation" class="form-label">Designation <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="designation"
                                                            name="designation"
                                                            value="{{ old('designation') ?? $peopleList->designation }}"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="editor" class="form-label">Description </label>
                                                <textarea class="form-control" id="editor" placeholder="Enter the Description" name="bio">{{ old('bio') ?? $peopleList->bio }}</textarea>
                                            </div>
                                            <br>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="img_group">


                                                @if ($peopleList->media_id)
                                                    <img class="img-thumbnail uploaded_img"
                                                        src="{{ $peopleList->img_paths['small'] }}">

                                                    <a href="{{ route('back.people-list.removeImage', $peopleList->id) }}"
                                                        onclick="return confirm('Are you sure to remove?');"
                                                        class="btn btn-sm btn-danger remove_image" title="Remove image"><i
                                                            class="ri-delete-bin-5-line"></i></a>
                                                @else
                                                    <img class="img-thumbnail uploaded_img"
                                                        src="{{ asset('img/default-img.png') }}">
                                                @endif

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
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id == $peopleList->people_id ? 'selected' : '' }}>
                                                            {{ $item->type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="location_map" class="form-label">Department</label>
                                                <input type="text" class="form-control" id="department"
                                                    name="department"
                                                    value="{{ old('department') ?? $peopleList->department }}">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="website_link" class="form-label">Website</label>
                                                <input type="url" class="form-control" id="website_link"
                                                    name="website_link"
                                                    value="{{ old('website_link') ?? $peopleList->website_link }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="research_interest" class="form-label">Research
                                                    Interest</label>
                                                <textarea name="research_interest" class="form-control" id="research_interest" cols="" rows="5">{{ old('research_interest') ?? $peopleList->research_interest }}</textarea>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="address" class="form-label">Address</label>
                                                <textarea name="address" class="form-control" id="address" cols="" rows="5">{{ old('address') ?? $peopleList->address }}</textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="serial" class="form-label">Display Serial</label>
                                                <input type="number" name="serial" id="serial" class="form-control" value="{{ old('serial') ?? $peopleList->serial }}">
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

                    {{-- qualification section start --}}
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card border-light mt-3 shadow">
                                <div class="card-header">
                                    <h5 class="d-inline-block">Tab List</h5>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-bordered table-sm" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($people_qualifications as $key => $category)
                                                <tr>
                                                    <th scope="row">{{ $key + 1 }}</th>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-control-sm category_title"
                                                                value="{{ $category->title }}">
                                                            <div class="input-group-append">
                                                                <button type="button" data-id="{{ $category->id }}"
                                                                    class="btn btn-info btn-sm update_category"><i
                                                                        class="ri-edit-2-line"></i></button>
                                                            </div>
                                                        </div>
                                                        {{-- {{ $category->title }} --}}
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-control-sm qualification_position"
                                                                value="{{ $category->position }}">
                                                            <div class="input-group-append">
                                                                <button type="button" data-id="{{ $category->id }}"
                                                                    class="btn btn-info btn-sm update_qualification_position"><i
                                                                        class="ri-edit-2-line"></i></button>
                                                            </div>
                                                        </div>
                                                        {{-- {{ $category->position }} --}}
                                                    </td>
                                                    <td>
                                                        @include('switcher::switch', [
                                                            'table' => 'people_qualifications',
                                                            'data' => $category,
                                                        ])
                                                    </td>
                                                    <td>
                                                        {{-- <a class="btn btn-primary btn-sm"
                                                            href="{{ route('back.people-qualification.edit', $category->id) }}"><i
                                                                class="ri-edit-2-line"></i></a> --}}
                                                        <form class="d-inline-block"
                                                            action="{{ route('back.people-qualification.destroy', $category->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf


                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure to remove?')"><i
                                                                    class="ri-delete-bin-5-line"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-light mt-3 shadow">
                                <div class="card-header">
                                    <h5>Create Qualification Tab</h5>
                                </div>

                                <form action="{{ route('back.people-qualification.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><b>Title*</b></label>
                                                    <input type="hidden" name="people_list_id"
                                                        value="{{ $peopleList->id }}">
                                                    <input type="text" class="form-control" name="title"
                                                        value="{{ old('title') }}" required>
                                                </div>

                                                <div class="form-group">
                                                    <label><b>Position</b></label>
                                                    <input type="text" class="form-control" name="position"
                                                        value="{{ old('position') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            style="width: 100%;">Create</button>
                                        <br>
                                        <small><b>NB: *</b> marked are required field.</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- qualification section end --}}

                    {{-- qualification tab category --}}
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card border-light mt-3 shadow">
                                <div class="card-header">
                                    <h5 class="d-inline-block">Tab List Category</h5>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-bordered table-sm" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tab Name</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($people_qualifications as $_category)
                                                @foreach ($_category->PeopleQualificationCategories as $key => $category)
                                                    <tr>
                                                        <th scope="row">{{ $key + 1 }}</th>
                                                        <td>
                                                            {{ $_category->title }}
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="text"
                                                                    class="form-control form-control-sm qualification_category_title"
                                                                    value="{{ $category->title }}">
                                                                <div class="input-group-append">
                                                                    <button type="button" data-id="{{ $category->id }}"
                                                                        class="btn btn-info btn-sm update_qualification_category_title"><i
                                                                            class="ri-edit-2-line"></i></button>
                                                                </div>
                                                            </div>
                                                            {{-- {{ $category->title }} --}}
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="text"
                                                                    class="form-control form-control-sm qualification_category_position"
                                                                    value="{{ $category->position }}">
                                                                <div class="input-group-append">
                                                                    <button type="button" data-id="{{ $category->id }}"
                                                                        class="btn btn-info btn-sm update_qualification_category_position"><i
                                                                            class="ri-edit-2-line"></i></button>
                                                                </div>
                                                            </div>

                                                            {{-- {{ $category->position }} --}}
                                                        </td>
                                                        <td>
                                                            @include('switcher::switch', [
                                                                'table' => 'people_qualification_categories',
                                                                'data' => $category,
                                                            ])
                                                        </td>
                                                        <td>
                                                            {{-- <a class="btn btn-primary btn-sm"
                                                                href="{{ route('back.people-qualification-category.edit', $category->id) }}"><i
                                                                    class="ri-edit-2-line"></i></a> --}}
                                                            <form class="d-inline-block"
                                                                action="{{ route('back.people-qualification-category.destroy', $category->id) }}"
                                                                method="POST">
                                                                @method('DELETE')
                                                                @csrf


                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Are you sure to remove?')"><i
                                                                        class="ri-delete-bin-5-line"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-light mt-3 shadow">
                                <div class="card-header">
                                    <h5>Create Qualification Tab Category</h5>
                                </div>

                                <form action="{{ route('back.people-qualification-category.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><b>Tab</b></label>
                                                    <select class="form-select" name="people_qualification_id"
                                                        id="">
                                                        <option value="">Select Tab</option>
                                                        @foreach ($people_qualifications as $item)
                                                            <option value="{{ $item->id }}">{{ $item->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label><b>Title*</b></label>
                                                    <input type="hidden" name="people_list_id"
                                                        value="{{ $peopleList->id }}">
                                                    <input type="text" class="form-control" name="title"
                                                        value="{{ old('title') }}" required>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label><b>Position</b></label>
                                                    <input type="text" class="form-control" name="position"
                                                        value="{{ old('position') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            style="width: 100%;">Create</button>
                                        <br>
                                        <small><b>NB: *</b> marked are required field.</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- qualification tab category --}}

                    {{-- qualification category value --}}
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card border-light mt-3 shadow">
                                <div class="card-header">
                                    <h5 class="d-inline-block">Tab List Category Value</h5>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-bordered table-sm" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tab Category Name</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($people_qualifications as $_category)
                                                @foreach ($_category->PeopleQualificationCategories as $_category_)
                                                    @foreach ($_category_->PeopleQualificationValues as $key => $category)
                                                        <tr>
                                                            <th scope="row">{{ $key + 1 }}</th>
                                                            <td>
                                                                {{ $_category_->title }}
                                                            </td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm qualification_category_value"
                                                                        value="{{ $category->value }}">
                                                                    <div class="input-group-append">
                                                                        <button type="button"
                                                                            data-id="{{ $category->id }}"
                                                                            class="btn btn-info btn-sm update_qualification_category_value"><i
                                                                                class="ri-edit-2-line"></i></button>
                                                                    </div>
                                                                </div>
                                                                {{-- {{ $category->value }} --}}
                                                            </td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text"
                                                                        class="form-control form-control-sm qualification_category_value_position"
                                                                        value="{{ $category->position }}">
                                                                    <div class="input-group-append">
                                                                        <button type="button"
                                                                            data-id="{{ $category->id }}"
                                                                            class="btn btn-info btn-sm update_qualification_category_value_position"><i
                                                                                class="ri-edit-2-line"></i></button>
                                                                    </div>
                                                                </div>
                                                                {{-- {{ $category->position }} --}}
                                                            </td>
                                                            <td>
                                                                @include('switcher::switch', [
                                                                    'table' => 'people_qualification_values',
                                                                    'data' => $category,
                                                                ])
                                                            </td>
                                                            <td>
                                                                {{-- <a class="btn btn-primary btn-sm"
                                                                    href="{{ route('back.people-qualification-value.edit', $category->id) }}"><i
                                                                        class="ri-edit-2-line"></i></a> --}}
                                                                <form class="d-inline-block"
                                                                    action="{{ route('back.people-qualification-value.destroy', $category->id) }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf


                                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                                        onclick="return confirm('Are you sure to remove?')"><i
                                                                            class="ri-delete-bin-5-line"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-light mt-3 shadow">
                                <div class="card-header">
                                    <h5>Create Tab Category value</h5>
                                </div>

                                <form action="{{ route('back.people-qualification-value.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><b>Tab</b></label>
                                                    <select class="form-select" name="people_qualification_id"
                                                        id="people_qualification">
                                                        <option value="">Select Tab</option>
                                                        @foreach ($people_qualifications as $item)
                                                            <option value="{{ $item->id }}">{{ $item->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label><b>Tab Category</b></label>
                                                    <select class="form-select" name="people_qualification_category_id"
                                                        id="qualification_value">
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label><b>Title*</b></label>
                                                    <input type="text" class="form-control" name="value"
                                                        value="{{ old('value') }}" required>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label><b>Position</b></label>
                                                    <input type="text" class="form-control" name="position"
                                                        value="{{ old('position') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            style="width: 100%;">Create</button>
                                        <br>
                                        <small><b>NB: *</b> marked are required field.</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- qualification category value --}}

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


        $(document).ready(function() {
            $('#people_qualification').on('change', function() {
                var people_qualification_id = this.value;

                $("#qualification_value").html('');
                $.ajax({
                    url: "{{ url('adminx/people-qualification-id') }}",
                    type: "POST",
                    data: {
                        people_qualification_id: people_qualification_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        console.log(result);
                        $('#qualification_value').html(
                            '<option value="">Select Category</option>');
                        $.each(result, function(key, value) {
                            $("#qualification_value").append('<option value="' + value
                                .id + '">' + value.title + '</option>');
                        });
                    }
                });
            });
        });

        // tab list title update
        $(document).on('click', '.update_category', function() {
            let id = $(this).data('id');
            let title = $(this).closest('tr').find('.category_title').val();

            cLoader();

            $.ajax({
                url: "{{ route('back.qualification.updateAjax') }}",
                method: 'POST',
                data: {
                    title,
                    id,
                    _token: '{{ csrf_token() }}'
                },
                success: function() {
                    cLoader('h');
                    cAlert('success', 'Category updated successfully.');
                },
                error: function() {
                    cLoader('h');
                    cAlert();
                }
            });
        });

        $(document).on('click', '.update_qualification_position', function() {
            let id = $(this).data('id');
            let position = $(this).closest('tr').find('.qualification_position').val();

            cLoader();

            $.ajax({
                url: "{{ route('back.qualification-position.updateAjax') }}",
                method: 'POST',
                data: {
                    position,
                    id,
                    _token: '{{ csrf_token() }}'
                },
                success: function() {
                    cLoader('h');
                    cAlert('success', 'Category updated successfully.');
                },
                error: function() {
                    cLoader('h');
                    cAlert();
                }
            });
        });

        // qualification category update

        $(document).on('click', '.update_qualification_category_title', function() {
            let id = $(this).data('id');
            let title = $(this).closest('tr').find('.qualification_category_title').val();

            cLoader();

            $.ajax({
                url: "{{ route('back.qualification-category.updateAjax') }}",
                method: 'POST',
                data: {
                    title,
                    id,
                    _token: '{{ csrf_token() }}'
                },
                success: function() {
                    cLoader('h');
                    cAlert('success', 'Qualification Category updated successfully.');
                },
                error: function() {
                    cLoader('h');
                    cAlert();
                }
            });
        });

        $(document).on('click', '.update_qualification_category_position', function() {
            let id = $(this).data('id');
            let position = $(this).closest('tr').find('.qualification_category_position').val();

            cLoader();

            $.ajax({
                url: "{{ route('back.qualification-category-position.updateAjax') }}",
                method: 'POST',
                data: {
                    position,
                    id,
                    _token: '{{ csrf_token() }}'
                },
                success: function() {
                    cLoader('h');
                    cAlert('success', 'Qualification Category updated successfully.');
                },
                error: function() {
                    cLoader('h');
                    cAlert();
                }
            });
        });

        // qualification category value



        $(document).on('click', '.update_qualification_category_value', function() {
            let id = $(this).data('id');
            let title = $(this).closest('tr').find('.qualification_category_value').val();

            cLoader();

            $.ajax({
                url: "{{ route('back.qualification-category-value.updateAjax') }}",
                method: 'POST',
                data: {
                    title,
                    id,
                    _token: '{{ csrf_token() }}'
                },
                success: function() {
                    cLoader('h');
                    cAlert('success', 'Qualification Category Value updated successfully.');
                },
                error: function() {
                    cLoader('h');
                    cAlert();
                }
            });
        });

        $(document).on('click', '.update_qualification_category_value_position', function() {
            let id = $(this).data('id');
            let position = $(this).closest('tr').find('.qualification_category_value_position').val();

            cLoader();

            $.ajax({
                url: "{{ route('back.qualification-category-value-position.updateAjax') }}",
                method: 'POST',
                data: {
                    position,
                    id,
                    _token: '{{ csrf_token() }}'
                },
                success: function() {
                    cLoader('h');
                    cAlert('success', 'Qualification Category Value updated successfully.');
                },
                error: function() {
                    cLoader('h');
                    cAlert();
                }
            });
        });
    </script>
@endsection
