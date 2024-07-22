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
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">Title <b
                                                                style="color: red;">*</b></label>

                                                        <select name="name_title" id="" class="form-select" required>
                                                            <option value="Mr">Mr</option>
                                                            <option value="Mrs">Mrs</option>
                                                            <option value="Miss">Miss</option>
                                                            <option value="Ms">Ms</option>
                                                            <option value="Dr">Dr</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label for="first_name" class="form-label">First Name <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="first_name"
                                                            name="first_name" value="{{ old('first_name') }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label for="last_name" class="form-label">Last Name <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="last_name"
                                                            name="last_name" value="{{ old('last_name') }}" required>
                                                    </div>
                                                </div>

                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email <b
                                                            style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email" value="{{ old('email') }}" required>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="phone" class="form-label">Phone <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="phone"
                                                            name="phone" value="{{ old('phone') }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="dob" class="form-label">Date of Birth <b
                                                                style="color: red;">*</b></label>
                                                        <input type="date" class="form-control" id="dob"
                                                            name="dob" value="{{ old('dob') }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="address" class="form-label">Address <b
                                                            style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="address"
                                                            name="address" value="{{ old('address') }}" required>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="street_address" class="form-label">Street Address</label>
                                                        <input type="text" class="form-control" id="street_address"
                                                            name="street_address" value="{{ old('street_address') }}" required>
                                                    </div>
                                                </div>

                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="address_line_2" class="form-label">Address Line 2 <b
                                                            style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="address_line_2"
                                                            name="address_line_2" value="{{ old('address_line_2') }}" required>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="city" class="form-label">City</label>
                                                        <input type="text" class="form-control" id="city"
                                                            name="city" value="{{ old('city') }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="state" class="form-label">State</label>
                                                        <input type="text" class="form-control" id="state"
                                                            name="state" value="{{ old('state') }}" required>
                                                    </div>
                                                </div>

                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zip_code" class="form-label">Zip Code <b
                                                            style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="zip_code"
                                                            name="zip_code" value="{{ old('zip_code') }}" required>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="country" class="form-label">Country</label>
                                                        <input type="text" class="form-control" id="country"
                                                            name="country" value="{{ old('country') }}" required>
                                                    </div>
                                                </div>


                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="gender" class="form-label">Gender<b
                                                            style="color: red;">*</b></label>

                                                        <select name="gender" id="" class="form-select" required>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="disability" class="form-label">Disability</label>
                                                        <select name="disability" id="" class="form-select" required>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="disability_desc" class="form-label">Disability Description </label>
                                                <textarea class="form-control" id="disability_desc" placeholder="Enter the Disibility Description" name="disability_desc" rows="5"></textarea>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0 flex-grow-1">Personal Information (Section Two)</h4>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="volunteered_exp" class="form-label">Have You volunteered before?<b
                                                            style="color: red;">*</b></label>

                                                        <select name="volunteered_exp" id="" class="form-select" required>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="occupation" class="form-label">Occupation<b
                                                            style="color: red;">*</b></label>

                                                        <select name="occupation" id="" class="form-select" required>
                                                            <option value="Unemployed">Unemployed</option>
                                                            <option value="Student (GCSE)">Student (GCSE)</option>
                                                            <option value="Student (College)">Student (College)</option>
                                                            <option value="Student (University)">Student (University)</option>
                                                            <option value="Education">Education</option>
                                                            <option value="Construction">Construction</option>
                                                            <option value="Sports">Sports</option>
                                                            <option value="Business">Business</option>
                                                            <option value="IT">IT</option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Engineering">Engineering</option>
                                                            <option value="Retail">Retail</option><option value="Charity">Charity</option>
                                                            <option value="Hospitality">Hospitality</option>
                                                            <option value="Finance">Finance</option>
                                                            <option value="Government">Government</option>
                                                            <option value="Military">Military</option>
                                                            <option value="Science &amp; Other">Science &amp; Other</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="volunteering_area_int" class="form-label">Volunteering Area of Interest<b
                                                            style="color: red;">*</b></label>

                                                        <select name="volunteering_area_int" id="" class="form-select" required>
                                                            <option value="Organising and Executing Events">Organising and Executing Events</option>
                                                            <option value="Fundraising Activities">Fundraising Activities</option>
                                                            <option value="Facilitating Sport Events">Facilitating Sport Events</option>
                                                            <option value="Marketing/Social Media Awareness">Marketing/Social Media Awareness</option>
                                                            <option value="TV Studio">TV Studio</option>
                                                            <option value="Office Work">Office Work</option>
                                                            <option value="Charity Branches">Charity Branches</option>
                                                            <option value="School & Education and Professional Skills">School & Education and Professional Skills</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0 flex-grow-1">Important Information (Section Three)</h4>
                                            </div>


                                            <div class="form-group">
                                                <label for="location_map" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="ref_name"
                                                    name="ref_name" value="{{ old('ref_name') }}">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="website_link" class="form-label">Relationship To You</label>
                                                <input type="text" class="form-control" id="ref_relation"
                                                    name="ref_relation" value="{{ old('ref_relation') }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="ref_email" class="form-label">Email</label>
                                                <input type="text" class="form-control" name="ref_email" id="ref_email" value="{{ old('ref_email') }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="ref_mobile" class="form-label">Mobile</label>
                                                <input type="text" class="form-control" name="ref_mobile" id="ref_mobile" value="{{ old('ref_mobile') }}">
                                            </div>

                                            <br>
                                            <div class="card-header" style="padding: 20px 0;">
                                                <h4 class="card-title mb-0 flex-grow-1">Emergency Contact</h4>
                                            </div>

                                            <div class="form-group">
                                                <label for="emg_name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="emg_name"
                                                    name="emg_name" value="{{ old('emg_name') }}">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="website_link" class="form-label">Relationship To You</label>
                                                <input type="text" class="form-control" id="emg_relation"
                                                    name="emg_relation" value="{{ old('emg_relation') }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="emg_email" class="form-label">Email</label>
                                                <input type="text" class="form-control" name="emg_email" id="emg_email" value="{{ old('emg_email') }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="emg_mobile" class="form-label">Mobile</label>
                                                <input type="text" class="form-control" name="emg_mobile" id="emg_mobile" value="{{ old('emg_mobile') }}">
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
