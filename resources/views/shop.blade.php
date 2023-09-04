@extends('main')
@section('hero-section')
<div class="col-lg-5">
	<div class="intro-excerpt">
		<h1>Shop: <br><span clsas="d-block">Explore your Want's</span></h1>
		<p class="mb-4">this is the paragrapf of Shop page</p>
		<p><a href="shop" class="btn btn-secondary me-2">Shop Now</a><a href="services" class="btn btn-white-outline">Explore</a></p>
	</div>
</div>
@endsection

@section('shop')
class="nav-item active"
@endsection

@section('main-section')

	
	

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">
				  @foreach($pro as $d)
		      		<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 justify-content-center">
						<a class="product-item" href="#">
							<img src="{{asset('tem/images/pro/'.$d->img)}}" height="250px" width="250px" border-radius="5px" class="img-fluid product-thumbnail">
							<h3 class="product-title">{{$d->name}}</h3>
							<strong class="product-price">${{$d->price}}</strong>

							<span class="icon-cross">
								<img src="{{asset('tem/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->
					@endforeach
				
			
			
				

		      	</div>
		    </div>
		</div>
        @endsection


