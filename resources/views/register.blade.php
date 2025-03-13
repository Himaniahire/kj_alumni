@extends('layouts.layout')
@section('content')
<style>
    label.error, div.error {
        color: red;
        font-size: 13px;
        margin-top: 5px;
    }
    input.error, select.error, textarea.error {
        border-color: red;
    }
</style>

<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row sticky-coloum-wrap g-5 mt--45">
            <div class="col-lg-12">
                <div class="rts-ap-section">
                    <h3 class="rts-section-title mb--30">Register</h3>
                    <div class="rts-application-form" >
                        <form action="{{ route('alumni.store') }}" method="POST" enctype="multipart/form-data" id="alumni-register">
                            @if ($errors->any())
                                <div class="text-red-500">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            <div class="single-form-part">
                                <h5 class="form-title">Personal Information</h5>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="type_membership">Type Of Membership</label>
                                        <select name="type_membership" id="type_membership" >
                                            <option value="">Select </option>
                                            <option value="1">Patron</option>
                                            <option value="2">Donor</option>
                                            <option value="3">Life</option>
                                            <option value="4">Five Year</option>
                                            <option value="5">One Year</option>
                                        </select>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="sname">Surname</label>
                                        <input type="text" name="sname" id="sname" placeholder="Surname" class="whitespace-trim" >
                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" placeholder="Name" class="whitespace-trim" required>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="mname">Middle Name</label>
                                        <input type="text" name="mname" id="mname" placeholder="Middle Name" class="whitespace-trim" required>
                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="profile">Profile</label>
                                        <input type="file" name="profile" id="profile" accept=".jpg,.png">
                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="password">Password</label>
                                        <input type="text" name="password" id="password" placeholder="Password" class="whitespace-trim" required>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="text" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="whitespace-trim" required>
                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender" required>
                                            <option value="">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" name="dob" placeholder="dd/mm/yy" class="whitespace-trim" required>
                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="admission_year">Year of Admission</label>
                                        <select name="admission_year" id="admission_year" required>
                                        <option value="">Select Year</option>
                                            @for ($year = 1900; $year <= date('Y'); $year++)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="passing_year">Year of Passing</label>
                                        <select name="passing_year" id="passing_year" required>
                                            <option value="">Select Year</option>
                                            @for ($year = 1900; $year <= date('Y'); $year++)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="branch">Branch</label>
                                        <input type="text" name="branch" id="branch" placeholder="Branch" class="whitespace-trim" required>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="other_isntitute">Qualifications obtained from other Institute</label>
                                        <input type="text" name="other_isntitute" id="other_isntitute" placeholder="Qualifications obtained from other Institute" class="whitespace-trim" required>
                                    </div>
                                </div>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" id="email" placeholder="Email Address" class="whitespace-trim" required>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="phone">Mobile No/ Whatsapp No</label>
                                        <input type="tel" name="phone" id="phone" placeholder="Mobile No/ Whatsapp No" class="whitespace-trim only-number" required>
                                    </div>
                                </div>

                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="address">Contact / Postal Address</label>
                                        <textarea style="border: 1px solid #D9D9D9; background: transparent;" name="address" id="" cols="30" rows="10" class="whitespace-trim" placeholder="Contact / Postal Address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="single-form-part">
                                <h4 class="form-title">Career Profile</h4>
                                <div id="careerContainer">
                                    <div class="career-block">
                                        <div class="single-input">
                                            <div class="single-input-item">
                                                <label for="name_organization">Name of Organization</label>
                                                <input name="name_organization" type="text" placeholder="Name of Organization" class="whitespace-trim" required>
                                            </div>
                                        </div>
                                        <div class="single-input">
                                            <div class="single-input-item">
                                                <label>Year</label>
                                                <select name="year" required>
                                                    <option value="">Select Year</option>
                                                    @for ($year = 1900; $year <= date('Y'); $year++)
                                                        <option value="{{ $year }}">{{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="single-input-item">
                                                <label>Job/Designation</label>
                                                <input name="job" type="text" placeholder="Job/Designation" class="whitespace-trim" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="single-form-part">
                                <div class="single-input-item">
                                    <label for="other_achivements">Other achievements (if your wish to highlight)</label>
                                    <textarea style="border: 1px solid #D9D9D9; background: transparent;" class="whitespace-trim" name="other_achivements" id="" cols="30" rows="10" placeholder="Other achievements (if your wish to highlight)"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="rts-theme-btn primary with-arrow">Submit<span><i class="fa-thin fa-arrow-right"></i></span></button>
                        </form>
                        <div id="form-messages-admission" class="mt-20"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
