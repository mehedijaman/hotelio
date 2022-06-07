{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Registration Page</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="{{ url('/home') }}"><b>{{ config('app.name') }}</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form method="post" action="{{ route('register') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}"
                           placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="form-control @error('email') is-invalid @enderror"
                           placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password"
                           name="password"
                           class="form-control @error('password') is-invalid @enderror"
                           placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password"
                           name="password_confirmation"
                           class="form-control"
                           placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->

    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<script src="{{ mix('js/app.js') }}" defer></script>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>{{ config('app.name') }} | Registration Page</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		<link rel="stylesheet" href="css/custom.css">
	</head>
	<body>
		<section class="p-4">
			<div class="container">
                <div class="row box">
                    <div class="col-md-12">
                        <div class="row">
                            {{-- left side --}}
                            <div class="col-md-7 g-md-0">
                                <div class="img mt-4">
                                    <div class="overlay p-5">
                                        <h3 class="">Hotelio</h3>
                                        {{-- <img src="/img/logo-light.png" alt="img-1" > --}}
                                        <h1 class="pt">You're new here!</h1>
                                        <p class="pt-2">Sign up with your email and personal details to get started!</p>
                                        <input type="button" class="btn btn-dark rounded-pill" value="Watch Demo">
                                    </div>
                                </div>
                            </div>
                            {{-- Right side --}}
						    <div class="col-md-5 g-md-0">
							    <div class="custom-form">
                                    <form method="post" action="{{ route('register')}}">
                                    @csrf
                                        <h2 class="text-center">Sign Up</h2>
                                        <!-- single item -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" 
                                            placeholder="Full Name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- single item -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address"
                                            value="{{ old('email') }}">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- single item -->
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" 
                                            name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- single item -->
                                        <div class="mb-3">
                                            <label for="password" class="form-label">ConPassword</label>
                                            <input type="password" 
                                            name="password_confirmation" class="form-control"  placeholder="Retype password">
                                        </div>
                                        <!-- button -->
                                        <input type="submit" class="btn btn-primary w-100" value="Sing Up">
                                        <!-- single item -->
                                        <div class="form-check pt-2">
                                            <input class="form-check-input" type="checkbox" checked>
                                            <label for="form-check-lebel">
                                                I agree to the <a href="" class="text-decoration-none">Terms</a> and <a href="" class="text-decoration-none">Privacy Policy</a>
                                            </label>
                                        </div>
                                        <!-- single item -->
                                        <div class="d-flex pt-2">
                                            <hr class="flex-grow-1">
                                            <span>Or with Social Profile </span>
                                            <hr class="flex-grow-1">
                                        </div>
                                        <!-- icon -->
                                        <div class="d-flex justify-content-center pt-2">
                                            <a href="" class="pe-3"><i class="bi bi-facebook"></i></a>
                                            <a href="" class="pe-3"><i class="bi bi-twitter"></i></a>
                                            <a href="" class="pe-3"><i class="bi bi-google"></i></a>
                                            <a href="" class="pe-3"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                        <!-- single item -->
                                        <p>Already have an account?<a href="{{ route('login') }}" class="text-decoration-none" type="text">Sing in</a></p>
                                    </form>
						        </div>
						    </div>
                        </div>
                    </div>
                </div>
            </div>
		</section>
		
		
		{{-- <script src="/1sday/js/bootstrap.esm.min.js"></script> --}}
        <script src="{{ mix('js/app.js') }}" defer></script>
	</body>
</html>
