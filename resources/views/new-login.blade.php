@extends('layouts.login')

@section('title')
	Login
@endsection

@section('content')
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      			<h3 class="mb-4 text-center">Have an account?</h3>
		      			<form method="POST" action="{{ route('login') }}" class="signin-form">
							@csrf
							<div class="form-group">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your Email" required autocomplete="email" autofocus>
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
							</div>
							<div class="form-group d-md-flex">
								<!--<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>-->
								@if (Route::has('password.request'))
									<div class="form-group d-md-flex">
										<a href="{{ route('password.request') }}" style="color: #fff">Forgot Password?</a>
									</div>
									<!--<div class="w-50 text-md-right">
										<a href="{{ route('password.request') }}" style="color: #fff">Forgot Password?</a>
									</div>-->
								@endif
							</div>
	          			</form>
						@if (Route::has('register'))
							<a style="color: #fff" href="{{ route('new-register') }}">
								<h5 style="color: #fff" class="mb-4 text-center">&mdash; Or Register here &mdash;</h5>
							</a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection