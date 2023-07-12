<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Admin login">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Admin: Log in</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/toastr.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">

									<div class="text-center mb-3">
										<a href=""><img src="{{ asset('logo.png') }}" style="width: 40%;" alt=""></a>
									</div>
                                    <h5 class="text-center mb-4">Login to your account</h5>
                                    <form action="{{ url('admin/login') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" >
                                            <span class="text-danger">@error('email') Error email invalid @enderror</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" >
                                            <span class="text-danger">@error('email') Error password is invalid @enderror</span>
                                        </div>
                                        <div class="new-account mt-3">
                                            <a href="">Forgot password ?</a>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                        <div class="dz-social mt-4">
                                            <h5 class="form-title fs-20 mt-2">Sign In With</h5>
                                            <ul class="dz-social-icon dz-border dz-social-icon-lg text-white">
                                                <li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
                                                <li><a target="_blank" href="https://www.google.com/" class="fab fa-google btn-google-plus"></a></li>
                                                <li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-apple btn-linkedin"></a></li>
                                                <li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
                                            </ul>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>New user ? <a class="text-primary" href="page-login.html">Create an account</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>
<script src="{{ asset('admin/js/deznav-init.js') }}"></script>
<script src="{{ asset('admin/js/toastr.js') }}"></script>
<script>

    // success message popup notification

    @if(Session::has('success'))

        toastr.success("{{ Session::get('success') }}");

    @endif


    // info message popup notification

    @if(Session::has('info'))

        toastr.info("{{ Session::get('info') }}");

    @endif


    // warning message popup notification

    @if(Session::has('warning'))

        toastr.warning("{{ Session::get('warning') }}");

    @endif


    // error message popup notification

    @if(Session::has('error'))

        toastr.error("{{ Session::get('error') }}");

    @endif

</script>

</body>

</html>
