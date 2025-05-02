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
                                <div class="text-red-500" id="danger-alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(Session::has('success'))
                            <div class="alert alert-success" id="success-alert">
                                {{ Session::get('success')}}
                            </div>
                            @endif
                            @csrf
                            <div class="single-form-part">
                                <h5 class="form-title">Personal Information</h5>
                                <div class="single-input">
                                    <div class="single-input-item">
                                        <label for="type_membership">Type Of Membership</label>
                                        <select name="type_membership" id="type_membership" required>
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
                                        <input type="text" name="sname" id="sname" placeholder="Surname" class="whitespace-trim" required>
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
                                        <input type="password" name="password" id="password" placeholder="Password" class="whitespace-trim" required>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="whitespace-trim" required>
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
                                                <input name="name_organization" id="name_organization" type="text" placeholder="Name of Organization" class="whitespace-trim" required>
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

<<<<<<< HEAD
@endsection
@section('footer_script')
<!--<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>-->

<script>
        setTimeout(function() {
            let alert = document.getElementById('success-alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 3000); // 3000 ms = 3 seconds
    </script>
    <script>
        setTimeout(function() {
            let alert = document.getElementById('danger-alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 3000); // 3000 ms = 3 seconds
    </script>
=======
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

>>>>>>> 265cc981e453c7f4f6fccdaa883aa41a099a472e
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

// Apply validation to the form
    $("#alumni-register").validate({
        rules: {
            type_membership: {
                required: true
            },
            sname: {
                required: true,
                lettersonly: true // Use the custom lettersonly validation
            },
            name: {
                required: true,
                lettersonly: true // Use the custom lettersonly validation
            },
            mname: {
                required: true,
                lettersonly: true // Use the custom lettersonly validation
            },
            profile: {
                extension: "jpg|png"
            },
            password: {
                required: true,
                minlength: 6
            },
            password_confirmation: {
                required: true,
                equalTo: "#password"
            },
            gender: {
                required: true
            },
            dob: {
                required: true,
                date: true
            },
            admission_year: {
                required: true
            },
            passing_year: {
                required: true
            },
            branch: {
                required: true
            },
            other_isntitute: {
                required: true
            },
            email: {
                required: true,
                regexEmail: true // Use the custom regexEmail validation
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15
            },
            address: {
                required: true
            },
            name_organization: {
                required: true
            },
            year: {
                required: true
            },
            job: {
                required: true
            }
        },
        messages: {
            type_membership: {
                required: "Please select a membership type."
            },
            sname: {
                required: "Please enter your surname.",
                lettersonly: "Please enter only alphabetic characters in the surname."
            },
            name: {
                required: "Please enter your name.",
                lettersonly: "Please enter only alphabetic characters in the name."
            },
            mname: {
                required: "Please enter your middle name.",
                lettersonly: "Please enter only alphabetic characters in the middle name."
            },
            profile: {
                extension: "Only jpg and png images are allowed."
            },
            password: {
                required: "Please enter a password.",
                minlength: "Your password must be at least 6 characters long."
            },
            password_confirmation: {
                required: "Please confirm your password.",
                equalTo: "Password confirmation does not match."
            },
            gender: {
                required: "Please select your gender."
            },
            dob: {
                required: "Please select your date of birth.",
                date: "Please enter a valid date."
            },
            admission_year: {
                required: "Please select your year of admission."
            },
            passing_year: {
                required: "Please select your year of passing."
            },
            branch: {
                required: "Please enter your branch."
            },
            other_isntitute: {
                required: "Please provide qualifications obtained from other institutes."
            },
            email: {
                required: "Please enter your email address.",
                regexEmail: "Please enter a valid email address."
            },
            phone: {
                required: "Please enter your mobile number.",
                digits: "Please enter a valid phone number.",
                minlength: "Your phone number must be at least 10 digits.",
                maxlength: "Your phone number can be a maximum of 15 digits."
            },
            address: {
                required: "Please enter your contact address."
            },
            career: {
                required: "Please enter the name of the organization."
            },
            year: {
                required: "Please select the year of your career."
            },
            job: {
                required: "Please enter your job/designation."
            }
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element); // Default placement of errors
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        }
    });
});
<<<<<<< HEAD
=======

</script>
>>>>>>> 265cc981e453c7f4f6fccdaa883aa41a099a472e

</script>
@endsection
