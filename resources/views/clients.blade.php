@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 clients">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow fadeInLeft">
				<div class="bread-inner">
					<div class="bread-title">
						<h1 class="text-white">Our Clients</h1>
						<p class="text-white pt-3">We are constantly creating something that meets your expectations.<br>
							Client satisfaction is our priority. We care for our clients.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start Clients-->
<section class="py-5 bg-gradient3">
	<div class="container">
		<div class="row wow fadeInLeft">
			<div class="col-lg-6">
				<div class="common-heading">
					<!-- <span>Our happy customers</span> -->
					<!-- <h2 class="mb30">Some of our Clients</h2> -->
				</div>
			</div>
		</div>
		<div class="row justify-content-center wow fadeInLeft">
			<div class="col-lg-12">
				<div class="client-logoset">
					<ul class="row text-center clearfix apppg justify-content-center">

						@foreach($clients as $item)
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 custom-border" data-wow-delay=".2s">
							<div class="brand-logo hoshd">
								<img src="uploads/{{$item['image']}}" alt="{{$item['alt']}}" class="img-fluid">
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Clients-->

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading w-tdxt fadeInLeft">
					<h2>Ranked as #1 <span>Game App</span> Development Companies</h2>
				</div>
			</div>
		</div>
		<div class="row mt-5 wow fadeInRight">
			<div class="col-12">
				<div class="awards-slider owl-carousel owl-theme">

					@foreach($awards as $k => $item)

					@if($k%2==0)
					
					 @if($item['heading']=="Top Website design Agencies")
					 <a href="{{$item['comment']}}" target="_blank">
					 <div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="award-img">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									<p class="text-center pt-2">{{$item['content']}}</p>
								</div>
							</div>
						</div>
					 </div>
					 </a>

					 @else
					 <div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="award-img">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									<p class="text-center pt-2">{{$item['content']}}</p>
								</div>
							</div>
						</div>
					 </div>
					 @endif

					@else
					@if($item['heading']=="Top Website design Agencies")
					 <a href="{{$item['comment']}}" target="_blank">
					<div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="award-img">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									<p class="text-center pt-2">{{$item['content']}}</p>
								</div>
							</div>
						</div>
					</div>
					 </a>
					 @else
					 <div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="award-img">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									<p class="text-center pt-2">{{$item['content']}}</p>
								</div>
							</div>
						</div>
					</div>
					@endif
					@endif
					@endforeach

				</div>
			</div>
		</div>


		<div class="-cta-btn mt70">
			<div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
				<p>We <span>Promise.</span> We <span>Deliver.</span> </p>
				<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End Badges-->

@endsection