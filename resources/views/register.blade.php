<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<link rel="stylesheet" href="resources/css/register.css">


<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>

	<form method="post" action="{{url('/')}}/accounts/register">
		@csrf
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			</div>
			<div>
				<input name="username" class="form-control" placeholder="username" type="text">
			</div>
			<small class='text-danger'>
				@error('username')
					{{$message}}
				@enderror
			</small>
		</div>
		 <!-- form-group// -->
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
			</div>
			<div>
				<input name="email" class="form-control" placeholder="Email address" type="email">
			</div>
			<small class='text-danger'>
				@error('email')
					{{$message}}
				@enderror
			</small>
		</div>
		 <!-- form-group// -->
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<div>
				<input name="password" class="form-control" placeholder="Create password" type="password">
			</div>
			<small class='text-danger'>
				@error('password')
					{{$message}}
				@enderror
			</small>
		</div>
		 <!-- form-group// -->
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<div>
				<input name="password_confirmation" class="form-control" placeholder="Repeat password" type="password">
			</div>
			<small class='text-danger'>
				@error('password_confirmation')
					{{$message}}
				@enderror
			</small>
		</div>
		 <!-- form-group// -->                                      
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
		</div> <!-- form-group// -->      
		<p class="text-center">Have an account? <a href="{{ url('/') }}/accounts/login">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

