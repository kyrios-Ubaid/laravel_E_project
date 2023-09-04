@include('header')




	<!-- Start Hero Section -->
    <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						@yield('hero-section')
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="{{asset('tem/images/couch.png')}}" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

<div class="container">
    @yield('main-section')
</div>
@include('footer')

