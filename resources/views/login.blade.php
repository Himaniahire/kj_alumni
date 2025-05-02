<!DOCTYPE html>
<html lang="en" data-layout="">

<head>
    <meta charset="utf-8" />
    <title>Log In | K J Alumni - Alumni Dashbord</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset ('admin_assets/images/favicon.ico')}}">

    <!-- Theme Config Js -->
    <script src="{{asset ('admin_assets/js/config.js')}}"></script>

    <!-- Vendor css -->
    <link href="{{asset ('admin_assets/css/vendor.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset ('admin_assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset ('admin_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="auth-bg d-flex min-vh-100">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xxl-3 col-lg-5 col-md-6">
                <a href="{{route('index')}}" class="auth-brand d-flex justify-content-center mb-2">
                    <img src="{{ asset('logo/logo.png') }}" alt="dark logo" height="150" class="logo-dark">
                    <img src="{{ asset('logo/logo.png') }}" alt="logo light" height="26" class="logo-light">
                </a>

                <p class="fw-semibold mb-4 text-center text-muted fs-15"></p>

                <div class="card overflow-hidden text-center p-xxl-4 p-3 mb-0">

                    <h4 class="fw-semibold mb-3 fs-18">Log in</h4>

                    <form action="{{ route('alumnilogin') }}" method="POST" class="text-start mb-3">
                        @csrf
                        @if ($errors->any())
                            <div class="text-red-500">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error')}}
                        </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Enter your password">
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                            </div>

                            <a href="auth-recoverpw.html" class="text-muted border-bottom border-dashed">Forget
                                Password</a>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary fw-semibold" type="submit">Login</button>
                        </div>
                    </form>

                    <p class="text-muted fs-14 mb-0">Don't have an account?
                        <a href="{{route('alumni.register')}}" class="fw-semibold text-danger ms-1">Sign Up !</a>
                    </p>

                </div>
                <p class="mt-4 text-center mb-0">
                    <script>document.write(new Date().getFullYear())</script> © K J Alumani - By <span
                        class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Texhomax Solution</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{asset ('admin_assets/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset ('admin_assets/js/app.js')}}"></script>

</body>


</html>
