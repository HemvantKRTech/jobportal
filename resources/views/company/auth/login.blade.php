<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Company Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{ asset('admin-assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom Css-->
    <link href="{{ asset('admin-assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .form-container {
            max-width: 600px;
            margin: 2rem auto;
        }

        .form-header {
            font-size: 1.5rem;
            font-weight: bold;
            color: #b36b00;
            text-align: left;
            margin-bottom: 1rem;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-save {
            background-color: #b36b00;
            color: white;
            border: none;
        }

        .btn-save:hover {
            background-color: #914f00;
        }

        .social-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .btn-google {
            background-color: #914f00;
            color: #fff;
            border: none;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 0.375rem;
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        .btn-google:hover {
            background-color: #914f00;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-google i {
            font-size: 1.2rem;
            margin-right: 0.5rem;
        }

        .create-google {
            font-size: 1.5rem;
            font-weight: bold;
            color: #b36b00;
            text-align: left;
            margin-bottom: 1rem;
        }

        .forgot-password {
            text-align: left;
            margin-top: 1rem;
        }

        .remember-me {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container form-container">
        <div class="form-header">Login</div>
        <form class="needs-validation" novalidate method="POST" action="#" id="loginform">
            @csrf
            <div class="row g-3">
                <!-- Email -->
                <div class="col-md-12">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                    <div class="invalid-feedback">Please enter a valid email.</div>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <div class="invalid-feedback">Please enter your password.</div>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="col-md-12 remember-me">
                    <div>
                        <input type="checkbox" id="remember_me" name="remember_me">
                        <label for="remember_me">Remember Me</label>
                    </div>
                    <a href="#" class="text-muted">Forgot Password?</a>
                </div>

                <!-- Submit Button -->
                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-save">Login</button>
                </div>
            </div>
        </form>

        <!-- Social Login -->
        <div class="mt-4 text-center">
            <div class="signin-other-title">
                <h5 class="create-google text-center">Or login using</h5>
            </div>
            <div class="social-buttons">
                <a href="{{ route('company.social.redirect', 'google') }}" class="btn btn-google">
                    <i class="ri-google-fill fs-16 me-2"></i> Login with Google
                </a>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()

    </script>
    <script>

        $('body').on('click', '.loginBtn', function(){
            var element = this;
            var button = new Button(element);
            button.process();
            clearErrors();
            var requestData,otpdata,data;
            formData = new FormData(document.querySelector('#loginform'));
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url:'{{ route('company.login.post') }}',
                data: formData,
                contentType: false,
                processData: false,
                cache: false,
                success:function(response){
                    Toastify({
                        text: response.message,
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true, 
                        className: response.class,

                    }).showToast();
                    button.normal();
                    if(response.error == false){
                        window.location.href = "{{route('company.dashboard')}}";
                    }
                },
                error:function(error){
                    button.normal();
                    handleErrors(error.responseJSON);
                }
            });
        });

        
    </script>
</body>

</html>
