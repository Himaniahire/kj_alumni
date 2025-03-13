@extends('admin.layouts.layout')

@section('content')

<div class="page-container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Profile</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <form action="{{route('alumni.profile.update', $alumni->id)}}" method="POST" enctype="multipart/form-data" id="alumni-update">
                            @csrf
                            @method('put')
                            @if ($errors->any())
                                <div class="text-red-500">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="type_membership" class="form-label">Type Of Membership</label>
                                        <select class="form-select" id="type_membership" name="type_membership">
                                            <option value="">Select</option>
                                            <option value="1" {{ ($alumni->type_membership == 1) ? 'selected' : '' }}>Patron</option>
                                            <option value="2" {{ ($alumni->type_membership == 2) ? 'selected' : '' }}>Donor</option>
                                            <option value="3" {{ ($alumni->type_membership == 3) ? 'selected' : '' }}>Life</option>
                                            <option value="4" {{ ($alumni->type_membership == 4) ? 'selected' : '' }}>Five Year</option>
                                            <option value="5" {{ ($alumni->type_membership == 5) ? 'selected' : '' }}>One Year</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{$alumni->name}}" placeholder="Surname">
                                    </div>

                                    <div class="mb-3">
                                        <label for="profile" class="form-label">Profile</label>
                                        <input type="file" id="profile" name="profile" class="form-control" accept=".jpg,.png">
                                    </div>

                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <input type="date" id="dob" name="dob" class="form-control" value="{{$alumni->dob}}" placeholder="dd/mm/yy">
                                    </div>

                                    <div class="mb-3">
                                        <label for="passing_year" class="form-label">Year of Passing</label>
                                        <select class="form-select" id="passing_year" name="passing_year">
                                            <option value="">Select Year</option>
                                            @for ($year = 1900; $year <= date('Y'); $year++)
                                                <option value="{{ $year }}" {{ ($alumni->passing_year == $year) ? 'selected' : '' }}>{{ $year }}</option>
                                            @endfor
                                        </select>

                                    </div>

                                    <div class="mb-3">
                                        <label for="other_isntitute" class="form-label">Qualifications obtained from other Institute</label>
                                        <input type="text" id="other_isntitute" name="other_isntitute" class="form-control" value="{{$alumni->other_isntitute}}" placeholder="Qualifications obtained from other Institute">
                                    </div>

                                    <div class="mb-3">
                                        <label for="address" class="form-label">Contact / Postal Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="5">{{$alumni->address}}</textarea>
                                    </div>

                                    <h2>Career Profile</h2>

                                    <div class="mb-3">
                                        <label for="name_organization" class="form-label">Name of Organization</label>
                                        <input type="text" id="name_organization" name="name_organization" class="form-control" value="{{$alumni->name_organization}}" placeholder="Name of Organization">
                                    </div>

                                    <div class="mb-3">
                                        <label for="job" class="form-label">Job/Designation</label>
                                        <input type="text" id="job" name="job" class="form-control" value="{{$alumni->job}}"  placeholder="Job/Designation">
                                    </div>
                            </div> <!-- end col -->

                            <div class="col-lg-6">

                                <div class="mb-3">
                                    <label for="sname" class="form-label">Surname</label>
                                    <input type="text" id="sname" name="sname" class="form-control" value="{{$alumni->sname}}" placeholder="Surname">
                                </div>

                                <div class="mb-3">
                                    <label for="mname" class="form-label">Middle name</label>
                                    <input type="text" id="mname" name="mname" class="form-control" value="{{$alumni->mname}}" placeholder="Surname">
                                </div>

                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="">Gender</option>
                                            <option value="Male" {{ ($alumni->gender == 'Male') ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ ($alumni->gender == 'Female') ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="admission_year" class="form-label">Year of Admission</label>
                                    <select class="form-select" id="admission_year" name="admission_year">
                                        <option value="">Select Year</option>
                                            @for ($year = 1900; $year <= date('Y'); $year++)
                                                <option value="{{ $year }}" {{ ($alumni->admission_year == $year) ? 'selected' : '' }}>{{ $year }}</option>
                                            @endfor
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="branch" class="form-label">Branch</label>
                                    <input type="text" id="branch" name="branch" class="form-control" value="{{$alumni->branch}}" placeholder="Branch">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{$alumni->email}}" placeholder="Email Address">
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Mobile No/ Whatsapp No</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" value="{{$alumni->phone}}" placeholder="Mobile No/ Whatsapp No">
                                </div>

                                <div class="mb-3" style=" margin-top: 147px; ">
                                    <label for="year" class="form-label">Year</label>
                                    <select class="form-select" id="year" name="year">
                                        <option value="">Select Year</option>
                                            @for ($year = 1900; $year <= date('Y'); $year++)
                                                <option value="{{ $year }}" {{ ($alumni->year == $year) ? 'selected' : '' }}>{{ $year }}</option>
                                            @endfor
                                    </select>
                                </div>



                                <div class="mb-3">
                                    <label for="other_achivements" class="form-label">Other achievements (if your wish to highlight)</label>
                                    <textarea class="form-control" id="other_achivements" name="other_achivements" rows="5">{{$alumni->other_achivements}}</textarea>
                                </div>

                            </div> <!-- end col -->
                            <button class="btn btn-primary">Update</button>
                        </form>
                    </div>
                    <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
</div> <!-- container -->

@endsection

@section('footer-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>

<script>
$(document).ready(function () {

    // Remove leading space
    $('.whitespace-trim').on('input', function () {
        var value = $(this).val();
        if (value && value.charAt(0) === ' ') {
            $(this).val(value.trimStart());
        }
    });

    // Allow only numbers (max 10 digits)
    $('.only-number').on('input', function () {
        var value = $(this).val();
        var numericValue = value.replace(/\D/g, '');
        if (numericValue.length > 10) {
            numericValue = numericValue.substring(0, 10);
        }
        $(this).val(numericValue);
    });

    // Custom Methods
    $.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
    }, "Please enter only alphabetic characters.");

    $.validator.addMethod("regexEmail", function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
    }, "Please enter a valid email address.");

    $.validator.addMethod("equalPassword", function (value, element) {
        return $('#password').val() === value;
    }, "Password and Confirm Password must match.");

    // Validate Form
    $('#alumni-register').validate({
        errorElement: 'div',
        rules: {
            type_membership: { required: true },
            sname: { required: true,lettersonly: true },
            name: { required: true, lettersonly: true },
            mname: { required: true, lettersonly: true },
            profile: { extension: "jpg|png" },
            password: { required: true, minlength: 6 },
            cpassword: { required: true, equalPassword: true },
            gender: { required: true },
            dob: { required: true },
            admission_year: { required: true },
            passing_year: { required: true },
            branch: { required: true },
            other_isntitute: { required: true },
            email: { required: true, regexEmail: true },
            phone: { required: true, digits: true, minlength: 10, maxlength: 10 },
            address: { required: true },
            name_organization: { required: true },
            year: { required: true },
            job: { required: true },
        },
        messages: {
            type_membership: { required: "Please select membership type." },
            sname: { required: "Please enter your surname."lettersonly: "Only alphabets allowed." },
            name: { required: "Please enter your name.", lettersonly: "Only alphabets allowed." },
            mname: { required: "Please enter middle name.", lettersonly: "Only alphabets allowed." },
            profile: { extension: "Only JPG or PNG files allowed." },
            password: { required: "Please enter password.", minlength: "Minimum 6 characters required." },
            cpassword: { required: "Please confirm password.", equalPassword: "Passwords do not match." },
            gender: { required: "Please select gender." },
            dob: { required: "Please select date of birth." },
            admission_year: { required: "Please select admission year." },
            passing_year: { required: "Please select passing year." },
            branch: { required: "Please enter branch." },
            other_isntitute: { required: "Please enter qualification from other institute." },
            email: { required: "Please enter email.", regexEmail: "Invalid email format." },
            phone: { required: "Please enter mobile number.", digits: "Only numbers allowed.", minlength: "Enter 10 digits.", maxlength: "Only 10 digits allowed." },
            address: { required: "Please enter address." },
            name_organization: { required: "Enter organization name." },
            year: { required: "Select organization year." },
            job: { required: "Enter job/designation." },
        }
    });

});
</script>

@endsection
