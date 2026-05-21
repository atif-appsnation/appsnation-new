@extends('app.main')
@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 our-process-banner">

	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	
	<div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeIn">
                <div class="bread-inner">
                    <div class="bread-title">
                        <h1 class="text-white">Our Process</h1>
                        <!-- <p class="text-white pt-3">The great revolution starts here process that meets quality.</p> -->
                        <p class="text-white pt-3">AppsNation, work on all of our Apps development projects professionally with creative moralistic methods to provide accurate results to our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb -->

<!--Start Process-->
<!-- <section class="our-process-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="common-heading ptag">
                    <h2>Our <span>Process</span></h2>
                    <p>Appsnation, work on all of our Web and App development projects professionally with creative moralistic methods to provide accurate results to our clients.</p>
                </div>
            </div>
        </div>

        <div class="main-timeline mt-5">
            <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">01</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">Project Analysis of Requirements</h5>
                    <p class="description">Appsnation's experienced team will assist you in conceptualizing ideas and making them into a functional application. Our web development company will help your company establish a huge customer base by making an app loaded with features. The project begins with the initial planning process. Our creative team will initially analyze your needs, goals, and requirements. Based on these details, we'll develop a plan for the whole application development process, including design and technical implementation.</p>
                </div>
            </div>
            <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">02</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">Wireframing & Designing</h5>
                    <p class="description text-end">After gathering sufficient information, it is time to create the wireframes. A wireframe is a visual representation of the user interface. It provides a visual description of an application. This step can be a crucial task in setting up your business application, but the process will go smoothly if you know what you want to achieve. We start working on the User Interface. The UI design will determine how easily users can connect with your application, so we plan excellent care.</p>
                </div>
            </div>
            <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">03</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">App Development</h5>
                    <p class="description">We are now ready to start making your application according to your needs. Elements designed in the previous steps are now utilized to create an actual app design. This is the most crucial step in development as, at this stage, programmers run the codes to make the application fully functional and run smoothly. After designing, our app developers work with your feedback and make changes accordingly. They will also put different features of your project into practice that will make your application user-friendly.</p>
                </div>
            </div>
            <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">04</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">App Testing</h5>
                    <p class="description text-end">Our QA team will check the application for zero functionality errors at this stage. Every Task and Page are tested before launching the application to ensure everything works smoothly. Our application testing team will ensure your application is free of any technical errors before publishing it. Our App testing process ensures that your app is ready to launch by testing it across multiple devices.</p>
                </div>
            </div>
            <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">05</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">App Deployment</h5>
                    <p class="description">Our team of experts considers it their main duty to ensure that the app meets the standards of professional app development. We adhere to all of your requirements, including design and content. The application is now entirely built using advanced technologies and frameworks, equipped with excellent design, and successfully passes the standards of the Quality Assurance section. So at this stage, we will deploy the application.</p>
                </div>
            </div>
            <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">06</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">Deployment</h5>
                    <p class="description">When the ultimate practical product successfully passes the standards of the Assurance section, we tend to locate the project and build it live. We also take further steps to ensure that there isn't any single error or bug once your project is prepared to satisfy your targeted audience. Our team conjointly likes to keep in grips with our valuable client to assist on the means. Now it's time to hit the Launch button!</p>
                </div>
            </div>
        </div>

    </div>
</section> -->

<section class="process-section">

  <div class="container">

    <div class="section-box">


      <div class="eyebrow">
        <span class="eyebrow-dot"></span>
        5 Simple Steps
      </div>

      <h2 class="main-heading">
        Our Apps development ,<br>
         Process
      </h2>

      <div class="divider"></div>


      <div class="row g-4">


        <div class="col-xxl-3 col-lg-6">

          <div class="step-card">

            <div class="step-number">
              01.
            </div>

            <h3 class="step-title">
              Project Analysis of Requirements

            </h3>

            <p class="step-desc">
              Our expert team transforms your ideas into a powerful, feature-rich application tailored to your business goals.
            </p>

          </div>

        </div>


        <div class="col-xxl-3 col-lg-6">

          <div class="step-card">

            <div class="step-number">
              02.
            </div>

            <h3 class="step-title">
              Wireframing & <br> Designing

            </h3>

            <p class="step-desc">
             Our team creates smart wireframes and engaging UI designs for a seamless user experience.
            </p>

          </div>

        </div>


        <div class="col-xxl-3 col-lg-6">

          <div class="step-card">

            <div class="step-number">
              03.
            </div>

            <h3 class="step-title">
             App Development

            </h3>

            <p class="step-desc">
              We develop your application using the approved designs and features, ensuring smooth performance, functionality, and a user-friendly experience.
            </p>

          </div>

        </div>


        <div class="col-xxl-3 col-lg-6 ">

          <div class="step-card">

            <div class="step-number">
              04.
            </div>

            <h3 class="step-title">
              App Testing
            </h3>

            <p class="step-desc">
             Our QA team thoroughly tests every feature and page to ensure your application is smooth, error-free, and ready for launch across all devices.
            </p>

          </div>

        </div>
        <div class="col-xxl-12 col-lg-12 col-md-12">

          <div class="step-card">

            <div class="step-number">
              05.
            </div>

            <h3 class="step-title">
              App Deployment

            </h3>

            <p class="step-desc">
            Our experts finalize and deploy your application using modern technologies, ensuring high performance, quality, and a seamless launch experience.
            </p>

          </div>

        </div>

      </div>


      <div class="footer-bar">

        <div class="d-flex justify-content-between align-items-center flex-wrap footer-flex">

          <div class="d-flex align-items-center gap-3">

            <div class="avatar-stack">

              <div class="avatar"><img src="{{asset('images/case-studies/stitch-and-wash/Avatar.webp')}}" loading="lazy" alt=""></div>
              <div class="avatar"><img src="{{asset('images/case-studies/stitch-and-wash/Avatar2.webp')}}" loading="lazy" alt="" srcset=""></div>
              <div class="avatar"><img loading="lazy" src="{{asset('images/case-studies/stitch-and-wash/Avatar3.webp')}}" alt="Ahmed Al-Kuwari Avatar"></div>

            </div>

            <div class="footer-text">
              Align with Businesses that
              <strong>Choose Quality</strong>
            </div>

          </div>

          <a data-bs-toggle="modal" data-bs-target="#menu-popup" href="#" class="btn-start">

            <span class="btn-icon">
              →
            </span>

            Start Now

          </a>

        </div>

      </div>

    </div>

  </div>

</section>
<!--End Process-->


<!-- Start Why Choose -->
<section class="why-choose-section py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-lg-6 my-auto">
				<div data-text="Partner" class="light-bg-text bg-text">
					<h2>Why Choose <span>AppsNation</span> As Your <span>Development Partner</span></h2>
				</div>
				<p class="pt-2">AppsNation has been working in the software development field since 2016. We have worked with 300+ businesses. Moreover, AppsNation has its own play store where we have 50+ different apps and software, which most development companies don't have. AppsNation has its own 50+ certified developers and designers team that helps you convert the idea into reality.</p>
				<a href="pdf/company-profile-appsnation.pdf" target="_blank" class="btn-main button-arounder lnk mt-4">Download Company Profile
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
			<div class="col-lg-6">
				 <img loading="lazy" src="images/why-choose/why-choose.webp" class="img-fluid mt-4" width="100%" height="100%">
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6 col-lg-3">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/why-choose/team-scalibility.webp" class="img-fluid my-3" width="100%" height="100%" alt="Team Scalability">
						<h3>Team Scalability</h3>
						<p class="mb-0">Boost your team with domain specialists whenever required.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 mt-md-0">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/why-choose/quick-time-to-market.webp" class="img-fluid my-3" width="100%" height="100%" alt="Quick Time to Market">
						<h3>Quick Time to Market</h3>
						<p class="mb-0">Streamlined delivery is intended to achieve efficiency on time.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/why-choose/cost-saving.webp" class="img-fluid my-3" width="100%" height="100%" alt="Cost Saving">
						<h3>Cost Saving</h3>
						<p class="mb-0">Get experienced and competent developers at a reasonable price.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/why-choose/skilled-resources.webp" class="img-fluid my-3" width="100%" height="100%" alt="Skilled Resources">
						<h3>Skilled Resources</h3>
						<p class="mb-0">Get access to skilled mobile gaming experts with domain knowledge.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Why Choose -->
@endsection