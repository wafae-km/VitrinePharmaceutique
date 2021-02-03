<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form"method="POST" action="{{ route('register') }}">
                @csrf
                    <span class="login100-form-title">
						member Register
					</span>
                    <label for="name" class="col-md-7 col-form-label text-md-right">{{ __('Name') }}</label>

					<div class="wrap-input100 validate-input" >

                                <input id="name" type="text" class="input100 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                   <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                   </span>
                   @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

                    <label for="email" class="col-md-9 l-form-label text-md-right">{{ __('E-Mail Address') }}</label>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" >
                    <input id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

                    <label for="password" class="col-md-8 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                   <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

                            <label for="password-confirm" class="col-md-9 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                   <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required autocomplete="new-password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
					
                        <button type="submit" class="login100-form-btn">
                        {{ __('Register') }}
                                </button>
					
					
					</div>
                

					<div class="text-center p-t-136">
						<a class="txt2" href="{{ route('login') }}">
							Already have an Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>