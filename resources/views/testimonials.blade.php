@extends('app.main')
@section('content')
<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 testimonials">
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
						<h1 class="text-white">Testimonials</h1>
						<p class="text-white pt-3">We settle for a 100% client satisfaction only! <br>
						Our clients love working with us because we treat their projects like our own</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb -->

<!-- Start Testimonials -->
<section class="reviews-block bg-gradient5 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag">
					<!-- <span>Reviews</span> -->
					<!-- <h2>Client Testimonials</h2>
					<p class="mb30">Check our customers success stories.</p> -->
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($testimonials as $item)

			<div class="col-md-6 col-lg-4 mt30">
				<div class="reviews-card pr-shadow">
					<div class="row v-center">
						<div class="col"><span class="revbx-lr"><i class="fas fa-quote-left"></i></span></div>
						<!-- <div class="col"><span class="revbx-rl"><img src="images/client/freelancer-logo.webp" alt="review service logo"></span></div> -->
					</div>
					<div class="review-text">
						<p>{{$item['title']}}</p>
						<!--<div class="scrollbar">-->
						<!--	<p>{{$item['title']}}</p>-->
						<!--</div>-->
					</div>
					<div class="-client-details-">
						<div class="reviewer-text">
							<h4>{{$item['name']}}</h4>
							<p>{{$item['location']}}
								<!-- <small>Jaipur</small> -->
							</p>
							<div class="star-rate">
								<ul>
									<li><a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a></li>
									<li><a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a></li>
									<li><a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a></li>
									<li><a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a></li>
									<li><a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- End Testimonials -->

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
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<p class="text-center text-lg-start">We <span>Promise.</span> We <span>Deliver.</span> </p>
					</div>
					<div class="col-lg-5 text-center text-lg-start mt-lg-0">
						<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
							<i class="fas fa-chevron-right fa-icon"></i>
							<span class="circle"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Badges-->

@endsection