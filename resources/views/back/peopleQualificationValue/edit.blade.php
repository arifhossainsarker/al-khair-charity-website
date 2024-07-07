@extends('back.layouts.master')
@section('title', 'Edit Qualification Category Value')
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
                        <h4 class="mb-sm-0">Tab Category Value</h4>

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
                                            @foreach ($peopleQualificationValues as $category)
                                                <tr>
                                                    <th scope="row">{{ $category->id }}</th>
                                                    <td>
                                                        {{ $category->PeopleQualificationCategory->title }}
                                                    </td>
                                                    <td>
                                                        {{ $category->value }}
                                                    </td>
                                                    <td>
                                                        {{ $category->position }}
                                                    </td>
                                                    <td>
                                                        @include('switcher::switch', [
                                                            'table' => 'people_qualification_values',
                                                            'data' => $category,
                                                        ])
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm"
                                                            href="{{ route('back.people-qualification-value.edit', $category->id) }}"><i
                                                                class="ri-edit-2-line"></i></a>
                                                        {{-- <form class="d-inline-block"
                                                            action="{{ route('back.people-qualification-value.destroy', $category->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf


                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure to remove?')"><i
                                                                    class="ri-delete-bin-5-line"></i></button>
                                                        </form> --}}
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
                                    <h5>Create Tab Category value</h5>
                                </div>

                                <form
                                    action="{{ route('back.people-qualification-value.update', $peopleQualificationValue->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><b>Title*</b></label>
                                                    <input type="text" class="form-control" name="value"
                                                        value="{{ old('value') ?? $peopleQualificationValue->value }}"
                                                        required>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label><b>Tab Category</b></label>
                                                    <select class="form-select" name="people_qualification_category_id"
                                                        id="">
                                                        <option value="">Select Category</option>
                                                        @foreach ($qualification_categories as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $peopleQualificationValue->people_qualification_category_id == $item->id ? 'selected' : '' }}>
                                                                {{ $item->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label><b>Position</b></label>
                                                    <input type="text" class="form-control" name="position"
                                                        value="{{ old('position') ?? $peopleQualificationValue->position }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            style="width: 100%;">Update</button>
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


        $(document).ready(function() {
            $('#categorySelect').select2();
        });
    </script>
@endsection
