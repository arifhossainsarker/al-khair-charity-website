@extends('back.layouts.master')
@section('title', 'Edit Volunteer')
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
                                <h4 class="card-title mb-0 flex-grow-1">Edit Volunteer</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('back.volunteer.update', $volunteer->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row live-preview">
                                        <div class="col-lg-8">

                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">Title <b
                                                                style="color: red;">*</b></label>

                                                        <select name="name_title" id="" class="form-select" required>
                                                            <option value="Mr" {{ $volunteer->name_title == "Mr" ? 'selected' : '' }}>Mr</option>
                                                            <option value="Mrs" {{ $volunteer->name_title == "Mrs" ? 'selected' : '' }}>Mrs</option>
                                                            <option value="Miss" {{ $volunteer->name_title == "Miss" ? 'selected' : '' }}>Miss</option>
                                                            <option value="Ms" {{ $volunteer->name_title == "Ms" ? 'selected' : '' }}>Ms</option>
                                                            <option value="Dr" {{ $volunteer->name_title == "Dr" ? 'selected' : '' }}>Dr</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label for="first_name" class="form-label">First Name <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="first_name"
                                                            name="first_name" value="{{ old('first_name') ?? $volunteer->first_name }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label for="last_name" class="form-label">Last Name <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="last_name"
                                                            name="last_name" value="{{ old('last_name') ?? $volunteer->last_name }}" required>
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
                                                            name="email" value="{{ old('email') ?? $volunteer->email }}" required>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="phone" class="form-label">Phone <b
                                                                style="color: red;">*</b></label>
                                                        <input type="text" class="form-control" id="phone"
                                                            name="phone" value="{{ old('phone') ?? $volunteer->phone }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="dob" class="form-label">Date of Birth <b
                                                                style="color: red;">*</b></label>
                                                        <input type="date" class="form-control" id="dob"
                                                            name="dob" value="{{ old('dob') ?? $volunteer->dob }}" required>
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
                                                            name="address" value="{{ old('address') ?? $volunteer->address }}" required>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="street_address" class="form-label">Street Address</label>
                                                        <input type="text" class="form-control" id="street_address"
                                                            name="street_address" value="{{ old('street_address') ?? $volunteer->street_address }}" required>
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
                                                            name="address_line_2" value="{{ old('address_line_2') ?? $volunteer->address_line_2 }}" required>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="city" class="form-label">City</label>
                                                        <input type="text" class="form-control" id="city"
                                                            name="city" value="{{ old('city') ?? $volunteer->city }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="state" class="form-label">State</label>
                                                        <input type="text" class="form-control" id="state"
                                                            name="state" value="{{ old('state') ?? $volunteer->state }}" required>
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
                                                            name="zip_code" value="{{ old('zip_code') ?? $volunteer->zip_code }}" required>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="country" class="form-label">Country</label>
                                                        <input type="text" class="form-control" id="country"
                                                            name="country" value="{{ old('country') ?? $volunteer->country }}" required>
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
                                                            <option value="Male" {{ $volunteer->gender == "Male" ? 'selected' : '' }}>Male</option>
                                                            <option value="Female" {{ $volunteer->gender == "Female" ? 'selected' : '' }}>Female</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="disability" class="form-label">Disability</label>
                                                        <select name="disability" id="" class="form-select" required>
                                                            <option value="Yes" {{ $volunteer->disability == "Yes" ? 'selected' : '' }}>Yes</option>
                                                            <option value="No" {{ $volunteer->disability == "No" ? 'selected' : '' }}>No</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="disability_desc" class="form-label">Disability Description </label>
                                                <textarea class="form-control" id="disability_desc" placeholder="Enter the Disibility Description" name="disability_desc" rows="5">{{ old('country') ?? $volunteer->disability_desc }}</textarea>
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
                                                            <option value="Yes" {{ $volunteer->volunteered_exp == "Yes" ? 'selected' : '' }}>Yes</option>
                                                            <option value="No" {{ $volunteer->volunteered_exp == "No" ? 'selected' : '' }}>No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="occupation" class="form-label">Occupation<b
                                                            style="color: red;">*</b></label>

                                                        <select name="occupation" id="" class="form-select" required>
                                                            <option value="Unemployed" {{ $volunteer->occupation == "Unemployed" ? 'selected' : '' }}>Unemployed</option>
                                                            <option value="Student (GCSE)" {{ $volunteer->occupation == "Student (GCSE)" ? 'selected' : '' }}>Student (GCSE)</option>
                                                            <option value="Student (College)" {{ $volunteer->occupation == "Student (College)" ? 'selected' : '' }}>Student (College)</option>
                                                            <option value="Student (University)" {{ $volunteer->occupation == "Student (University)" ? 'selected' : '' }}>Student (University)</option>
                                                            <option value="Education" {{ $volunteer->occupation == "Education" ? 'selected' : '' }}>Education</option>
                                                            <option value="Construction" {{ $volunteer->occupation == "Construction" ? 'selected' : '' }}>Construction</option>
                                                            <option value="Sports" {{ $volunteer->occupation == "Sports" ? 'selected' : '' }}>Sports</option>
                                                            <option value="Business" {{ $volunteer->occupation == "Business" ? 'selected' : '' }}>Business</option>
                                                            <option value="IT" {{ $volunteer->occupation == "IT" ? 'selected' : '' }}>IT</option>
                                                            <option value="Healthcare" {{ $volunteer->occupation == "Healthcare" ? 'selected' : '' }}>Healthcare</option>
                                                            <option value="Engineering" {{ $volunteer->occupation == "Engineering" ? 'selected' : '' }}>Engineering</option>
                                                            <option value="Retail" {{ $volunteer->occupation == "Retail" ? 'selected' : '' }}>Retail</option><option value="Charity">Charity</option>
                                                            <option value="Hospitality" {{ $volunteer->occupation == "Hospitality" ? 'selected' : '' }}>Hospitality</option>
                                                            <option value="Finance" {{ $volunteer->occupation == "Finance" ? 'selected' : '' }}>Finance</option>
                                                            <option value="Government" {{ $volunteer->occupation == "Government" ? 'selected' : '' }}>Government</option>
                                                            <option value="Military" {{ $volunteer->occupation == "Military" ? 'selected' : '' }}>Military</option>
                                                            <option value="Science Other" {{ $volunteer->occupation == "Science Other" ? 'selected' : '' }}>Science &amp; Other</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="volunteering_area_int" class="form-label">Volunteering Area of Interest<b
                                                            style="color: red;">*</b></label>

                                                        <select name="volunteering_area_int" id="" class="form-select" required>
                                                            <option value="Organising and Executing Events" {{ $volunteer->occupation == "Organising and Executing Events" ? 'selected' : '' }}>Organising and Executing Events</option>
                                                            <option value="Fundraising Activities" {{ $volunteer->occupation == "Fundraising Activities" ? 'selected' : '' }}>Fundraising Activities</option>
                                                            <option value="Facilitating Sport Events" {{ $volunteer->occupation == "Facilitating Sport Events" ? 'selected' : '' }}>Facilitating Sport Events</option>
                                                            <option value="Marketing/Social Media Awareness" {{ $volunteer->occupation == "Marketing/Social Media Awareness" ? 'selected' : '' }}>Marketing/Social Media Awareness</option>
                                                            <option value="TV Studio" {{ $volunteer->occupation == "TV Studio" ? 'selected' : '' }}>TV Studio</option>
                                                            <option value="Office Work" {{ $volunteer->occupation == "Office Work" ? 'selected' : '' }}>Office Work</option>
                                                            <option value="Charity Branches" {{ $volunteer->occupation == "Charity Branches" ? 'selected' : '' }}>Charity Branches</option>
                                                            <option value="School & Education and Professional Skills" {{ $volunteer->occupation == "School & Education and Professional Skills" ? 'selected' : '' }}>School & Education and Professional Skills</option>
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
                                                    name="ref_name" value="{{ old('ref_name') ?? $volunteer->ref_name }}">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="website_link" class="form-label">Relationship To You</label>
                                                <input type="text" class="form-control" id="ref_relation"
                                                    name="ref_relation" value="{{ old('ref_relation') ?? $volunteer->ref_relation }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="ref_email" class="form-label">Email</label>
                                                <input type="text" class="form-control" name="ref_email" id="ref_email" value="{{ old('ref_email') ?? $volunteer->ref_email }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="ref_mobile" class="form-label">Mobile</label>
                                                <input type="text" class="form-control" name="ref_mobile" id="ref_mobile" value="{{ old('ref_mobile') ?? $volunteer->ref_mobile }}">
                                            </div>

                                            <br>
                                            <div class="card-header" style="padding: 20px 0;">
                                                <h4 class="card-title mb-0 flex-grow-1">Emergency Contact</h4>
                                            </div>

                                            <div class="form-group">
                                                <label for="emg_name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="emg_name"
                                                    name="emg_name" value="{{ old('emg_name') ?? $volunteer->emg_name }}">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="website_link" class="form-label">Relationship To You</label>
                                                <input type="text" class="form-control" id="emg_relation"
                                                    name="emg_relation" value="{{ old('emg_relation') ?? $volunteer->emg_relation }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="emg_email" class="form-label">Email</label>
                                                <input type="text" class="form-control" name="emg_email" id="emg_email" value="{{ old('emg_email') ?? $volunteer->emg_email }}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="emg_mobile" class="form-label">Mobile</label>
                                                <input type="text" class="form-control" name="emg_mobile" id="emg_mobile" value="{{ old('emg_mobile') ?? $volunteer->emg_mobile }}">
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
