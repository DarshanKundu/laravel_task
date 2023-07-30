<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<link rel="stylesheet" href="resources/css/register.css">


<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Login Account</h4>

	<form method="post" action="{{url('/')}}/accounts/login">
		@csrf

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
	                     
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block"> Login  </button>
		</div> <!-- form-group// -->      
		<p class="text-center">Not registered yet? <a href="{{ url('/')}}/accounts/register">Register Here</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

