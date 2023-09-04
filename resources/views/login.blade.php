
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
	    <link href="{{asset('tem/css/bootstrap.min.css')}}" rel="stylesheet"> 
		<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}" rel="stylesheet">
		<link href="{{asset('tem/css/tiny-slider.css')}}" rel="stylesheet">
		 <link href="{{asset('tem/css/style.css')}}" rel="stylesheet"> 
		<title>Login</title> 
	
	

		
</head>
	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand">Furni<span>.</span></a>

				

				<div class="collapse navbar-collapse" id="navbarsFurni">
				

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5 float-right">
						<li><a class="nav-link" href="signup"><img src="{{asset('tem/images/user.svg')}}"></a></li>
						</ul>
				</div>
			</div>
				
		</nav>




<div class="hero">
				<div class="container">
					<div class="row justify-content-between">


                <div class="col-md-8 col-lg-5 pb-4">                          
                    <div class="row mb-5">
                    <form action="{{url('/')}}/login" method="POST">
                            @csrf
                            <div class="row">
                            <div class="form-group">
                                   <label class="text-white" >Email address</label>
                                   <input type="email" name="email"class="form-control">
                            </div>
                            </div>
                            <div class="form-group">
                                   <label class="text-white" >Password</label>
                                   <input type="password" name="pass" class="form-control">
                            </div>
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <button type="submit" class="btn btn-secondary mt-4">Login</button>
                        </form>
                    </div> 
                </div>


<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="{{asset('tem/images/couch.png')}}" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>

            
		<script src="{{asset('tem/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('tem/js/tiny-slider.js')}}"></script>
		<script src="{{asset('tem/js/custom.js')}}"></script>
	</body>

</html>



