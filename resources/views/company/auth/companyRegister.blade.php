<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Company Register</title>
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
.create-google{
    font-size: 1.5rem;
            font-weight: bold;
            color: #b36b00;
            text-align: left;
            margin-bottom: 1rem;
}

    </style>
</head>

<body>
    <div class="container form-container">
        <div class="form-header">Employer Information</div>
        <form class="needs-validation" novalidate action="{{ route('company.register') }}" method="POST">
            @csrf
            <div class="row g-3">
                <!-- Full Name -->
                <div class="col-md-6">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                    <div class="invalid-feedback">Please enter your name.</div>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Company Name -->
                <div class="col-md-6">
                    <label for="company_name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" required>
                    <div class="invalid-feedback">Please enter your company name.</div>
                    @error('company_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Email -->
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                    <div class="invalid-feedback">Please enter a valid email.</div>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Mobile -->
                <div class="col-md-6">
                    <label for="mobile" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Phone Number">
                    <div class="invalid-feedback">Please enter a valid mobile number.</div>
                    @error('mobile')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Website -->
                <div class="col-md-6">
                    <label for="website" class="form-label">Website</label>
                    <input type="url" class="form-control" id="website" name="website" placeholder="Website">
                    <div class="invalid-feedback">Please enter a valid URL.</div>
                    @error('website')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Location -->
                <div class="col-md-6">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Your Location">
                </div>
                <!-- Password -->
                <div class="col-md-12">
                    <label for="password" class="form-label">Choose Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Choose Password" required>
                    <div class="invalid-feedback">Password must be at least 8 characters and confirmed.</div>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Submit Button -->
                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-save">Save</button>
                </div>
            </div>
        </form>
        <!-- Social Signup -->
        <div class="mt-4 text-center">
            <div class="signin-other-title">
                <h5 class="create-google text-center">Create With</h5>
            </div>
            <div class="social-buttons">
                <a href="{{ route('company.social.redirect', 'google') }}" class="btn btn-google">
                    <i class="ri-google-fill fs-16 me-2"></i> Sign up with Google
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
</body>

</html>
