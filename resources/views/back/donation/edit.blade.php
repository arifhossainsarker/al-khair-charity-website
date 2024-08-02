@extends('back.layouts.master')
@section('title', 'Edit Donation')
@section('head')

@endsection
@section('master')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Donation</h4>

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
                                <h4 class="card-title mb-0 flex-grow-1">Edit Donation</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('back.donation.update', $donation->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row live-preview">
                                        <div class="col-lg-8">


                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="title" class="form-label">Name <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="title" name="name"
                                                            value="{{ old('name') ?? $donation->name }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="floatingSelect">Category <b style="color: red;">*</b></label>
                                                        <select class="form-control" id="categorySelect"
                                                            aria-label="Floating label select example" name="category">
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->title }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email" value="{{ old('email') ?? $donation->email }}"
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="phone" class="form-label">Phone Number<b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="phone"
                                                            name="phone" value="{{ old('phone') ?? $donation->phone }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>


                                            <div class="form-group">
                                                <label for="aeditor" class="form-label">Address </label>
                                                <textarea class="form-control" id="aeditor" placeholder="Enter your Address" name="address">{{ old('address') ?? $donation->address }}</textarea>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="editor" class="form-label">Description </label>
                                                <textarea class="form-control" id="editor" placeholder="Enter the Description" name="description">{{ old('description') ?? $donation->description }}</textarea>
                                            </div>



                                        </div>

                                        <div class="col-lg-4">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="amount" class="form-label">Amount<b
                                                            style="color: red;">*</b></label>
                                                    <input type="text" class="form-control" id="amount"
                                                        name="amount" value="{{ old('amount') ?? $donation->amount }}" required>
                                                </div>
                                            </div>
                                            <br>
                                           <div class="col-lg-4">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="amount" class="form-label">Payment Method<b
                                                                style="color: red;">*</b></label>

                                                        <select name="payment_method" class="form-select" id="">
                                                            <option value="">Select Method</option>
                                                            <option value="1" {{ $donation->payment_method == 1 ? 'selected' : '' }}>Cash</option>
                                                            <option value="2" {{ $donation->payment_method == 2 ? 'selected' : '' }}>Bank Transfer</option>
                                                        </select>
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
                height: 100
            });
        });

        // CKEditor
        // $(function() {
        //     CKEDITOR.replace('aeditor', {
        //         height: 100
        //     });
        // });


    </script>
@endsection
