@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 boujee-beachin-app">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
			<img src="{{asset('images/case-studies/boujee-beachin/header-logo.webp')}}" class="w-50" alt="Boujee Beachin App Logo" width="100%" height="100%">
				<div class="bread-titlev2 mt-4">
					<h1>
                        <span>100+</span> Goals Achieved,
                        <span>1,000+</span> Active Users, and
                        <span>2</span> Magnificent Years of Innovation.
                    </h1>
					<p class="pt-3">Discover Rise Up Kings, Where Personal Development Meets Community!</p>
                    <p class="case-tag mt-3">Case Study</p>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<img src="{{asset('images/case-studies/boujee-beachin/header-web.webp')}}" class="img-fluid" alt="Boujee Beachin App" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb Area-->

<!-- Start Problem Section -->
<section class="boujee-beachin-problem py-5 wow fadeIn" data-wow-delay="0.4s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img src="{{asset('images/case-studies/boujee-beachin/problem-statement.webp')}}" alt="Boujee Beachin Problem Statement" width="100%" height="100%">
			</div>
            <div class="col-lg-6 my-lg-auto">
                <div class="common-heading">
					<h2>Problem Statement</h1>
					<p>Many beachgoers struggle with finding aesthetically pleasing, exclusive, and well-reviewed beach experiences. Standard apps don’t cater to the trendy, upscale, Instagram-worthy lifestyle many modern beach lovers seek.</p>
                    <p>Boujee Beachin’ aims to provide curated, premium beach experience discovery with features like reservations, fashion tips, and local recommendations.</p>
				</div>
            </div>
		</div>
	</div>
</section>
<!-- End Problem Section -->

<!-- Start Objective & Goal Section -->
<section class="boujee-beachin-objectives wow fadeIn py-5">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 my-auto">
                <h2 class="my-4">Objectives & Goals</h2>
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="info-card">
                            <div class="card-number-circle">01</div>
                            <h5>Royal Experience in Qatar</h5>
                            <p>Create Qatar's most luxurious ride-booking app with a smooth, stylish, and safe user experience.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <div class="info-card">
                            <div class="card-number-circle">02</div>
                            <h5>Easy & Elegant Booking</h5>
                            <p>Simplify ride booking with an elegant UI, fast navigation, car previews, and real-time tracking.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <div class="info-card">
                            <div class="card-number-circle">03</div>
                            <h5>VIP Features for Trust</h5>
                            <p>Build user trust with features like chauffeur info, elite car options, and premium support.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7">
                        <div class="info-card">
                            <div class="card-number-circle">04</div>
                            <h5>Premium User Support</h5>
                            <p>Deliver a top-tier support experience to enhance user satisfaction and reliability.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <img src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-objectives.webp')}}" alt="Boujee Beachin Objectives" class="img-fluid d-block mx-auto">
            </div>
        </div>
    </div>
</section>

<!-- End Objectives & Goals Section -->

<!-- Start Design Goals Section -->
<section class="boujee-beachin-designs my-5 wow fadeIn">
    <div class="container">
        <h2 class="mb-3">Design Goals</h2>
        <div class="central-line"></div>
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-box-group">
                    <div class="feature-box mb-5 left-item">
                        <h4 class="text-theme-blue mb-3">User-Centric Interface</h4>
                        <p class="text-muted mb-0">Create a clean, intuitive, and visually aesthetic interface that prioritizes user experience and ease of navigation.</p>
                    </div>
                    <div class="feature-box mb-5 left-item">
                        <h4 class="text-theme-blue mb-3">Seamless Booking Flow</h4>
                        <p class="text-muted mb-0">Design a simple yet efficient beach reservation system that enables quick planning with minimal steps.</p>
                    </div>
                    <div class="feature-box mb-5 left-item">
                        <h4 class="text-theme-blue mb-3">Community Interaction</h4>
                        <p class="text-muted mb-0">Allow users to upload photos, write reviews, and engage with a like-minded beachgoer community.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 right-column-wrapper">
                <div class="feature-box-group">
                    <div class="feature-box mb-5 right-item">
                        <h4 class="text-theme-blue mb-3">Lifestyle-Based Curation</h4>
                        <p class="text-muted mb-0">Present beach content tailored to users' lifestyle preferences, including luxury, aesthetics, and social relevance.</p>
                    </div>
                    <div class="feature-box mb-5 right-item">
                        <h4 class="text-theme-blue mb-3">Style Guidance</h4>
                        <p class="text-muted mb-0">Offer fashion and beachwear recommendations aligned with trends, trip types, and destination vibes.</p>
                    </div>
                    <div class="feature-box mb-5 right-item">
                        <h4 class="text-theme-blue mb-3">Visual Storytelling</h4>
                        <p class="text-muted mb-0">Use imagery, animations, and transitions to convey luxury and create emotional resonance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Design Goals Section -->

<!-- Start Mockup Section  -->
<section class="my-5 wow fadeIn boujee-beachin-mockup">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-mockup.webp')}}" alt="Boujee Beachin Mockup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->

<!-- Start Wireframes Section -->
<section class="boujee-beachin-wireframe my-5">
    <div class="container">
        <h2 class="mb-3">Wireframes</h2>
        <p class="mb-4">An overview of the initial wireframes created during the design process:</p>
        <ul class="mb-4">
            <li>Low-fidelity sketches</li>
            <li>Iterative design process</li>
            <li>Feedback received from peers</li>
        </ul>

        <div class="row g-3">
            <div class="col-6 col-md-3 col-xl-2">
                <img src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-1.webp')}}" alt="Boujee Beachin Wireframe 1" class="img-fluid rounded">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-2.webp')}}" alt="Boujee Beachin Wireframe 2" class="img-fluid rounded">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-3.webp')}}" alt="Boujee Beachin Wireframe 3" class="img-fluid rounded">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-4.webp')}}" alt="Boujee Beachin Wireframe 4" class="img-fluid rounded">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-5.webp')}}" alt="Boujee Beachin Wireframe 5" class="img-fluid rounded">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-6.webp')}}" alt="Boujee Beachin Wireframe 6" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>
<!-- End Wireframes Section -->

    <!-- by hassan Target Users-->
    <section class="my-5 wow fadeIn">
        <div class="container">
            <h3 class="mb-4">Target Users</h3>

            <div class="row gy-3">

                <div class="col-md-6">
                    <div class="Target-Users-card">
                        <img src="{{asset('images/case-studies/boujee-beachin/Vector.webp')}}" alt="">
                        <p>Age Group: 20–35 Years</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="Target-Users-card">
                        <img src="{{asset('images/case-studies/boujee-beachin/Vector.webp')}}" alt="">
                        <p>Primary Users: Beach Tourists</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="Target-Users-card">
                        <img src="{{asset('images/case-studies/boujee-beachin/Vector.webp')}}" alt="">
                        <p>Frequent Travelers</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="Target-Users-card">
                        <img src="{{asset('images/case-studies/boujee-beachin/Vector.webp')}}" alt="">
                        <p>Vacation Planners</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end hassanTarget Users -->

    <!-- by hassan Challenges & Iterations section -->
    <section class="Challenges-section wow fadeIn">
            <div class="container">
                <div class="row align-items-center">

                    <!-- LEFT CONTENT -->
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <div class="Challenges-heading text-center text-md-start">
                            <span>Challenges & Iterations</span>
                            <p>Briefly explain the main design challenges faced during the process:</p>
                        </div>

                        <div class="Challenges">
                            <ul>
                                <li>
                                    <img src="{{asset('images/case-studies/boujee-beachin/VectorRRO.webp')}}" alt="">
                                    <p>Keeping the design boujee but still very user-friendly</p>
                                </li>
                                <li>
                                    <img src="{{asset('images/case-studies/boujee-beachin/VectorRRO.webp')}}" alt="">
                                    <p>Ensuring a premium look without affecting loading speed</p>
                                </li>
                                <li>
                                    <img src="{{asset('images/case-studies/boujee-beachin/VectorRRO.webp')}}" alt="">
                                    <p>Making the interface consistent across all devices</p>
                                </li>
                                <li>
                                    <img src="{{asset('images/case-studies/boujee-beachin/VectorRRO.webp')}}" alt="">
                                    <p>Maintaining visual balance with vibrant brand colors</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- RIGHT IMAGE -->
                    <div class="col-12 col-md-6   text-center text-md-end">
                        <img class="Challenges-img" src="{{asset('images/case-studies/boujee-beachin/5.webp')}}" alt="">
                    </div>

                </div>
            </div>
    </section>

    <!-- End hassan Challenges & Iterations section -->
    <!-- persona section -->
    <section class="my-5 wow fadeIn persona-section">
        <div class="container">
            <div class="persona-wrapper">
                <div class="row g-4">

                    <div class="col-lg-4">
                        <div class="card persona-card text-center h-100">
                            <div class="card-body d-flex flex-column justify-content-center">

                                <div class="profile-img-container">
                                    <img src="{{asset('images/case-studies/boujee-beachin/User.webp')}}" alt="James Whitmore" class="profile-img">
                                </div>

                                <h3 class="persona-heading">James Whitmore</h3>
                                <p class="text-secondary-light mb-4">Luxury Travel Enthusiast & Digital Marketer</p>


                                <div class="pernal-info">
                                    <div class="left-info">
                                        <table class="demographics-table">
                                            <tr>
                                                <td class="demog-label">Age</td>
                                            </tr>
                                            <tr>
                                                <td class="demog-label">Gender</td>
                                            </tr>
                                            <tr>
                                                <td class="demog-label">Status</td>
                                            </tr>
                                            <tr>
                                                <td class="demog-label">Education</td>
                                            </tr>
                                            <tr>
                                                <td class="demog-label">Location</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="right-info">
                                        <table class="demographics-table">
                                            <tr>
                                                <td class="demog-value">29</td>
                                            </tr>
                                            <tr>
                                                <td class="demog-value">Male</td>
                                            </tr>
                                            <tr>
                                                <td class="demog-value">Single</td>
                                            </tr>
                                            <tr>
                                                <td class="demog-value">BA(Hons)</td>
                                            </tr>
                                            <tr>
                                                <td class="demog-value">London</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center flex-wrap gap-2 mt-auto">
                                    <span class="badge rounded-pill personality-tag">Empathetic</span>
                                    <span class="badge rounded-pill personality-tag">Independent</span>
                                    <span class="badge rounded-pill personality-tag">Organised</span>
                                    <span class="badge rounded-pill personality-tag">Punctual</span>
                                    <span class="badge rounded-pill personality-tag">Practical</span>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-8">
                        <div class="row g-4">

                            <div class="col-12">
                                <div class="card persona-card border-top-accent">
                                    <div class="card-body">
                                        <h4 class="persona-heading">Bio</h4>
                                        <p class="text-secondary-light">James is a digital marketing professional with a passion
                                            for travel and content creation. On weekends and during holidays, he explores
                                            premium beach destinations with his partner and documents his trips through
                                            Instagram and his blog. He's always on the lookout for a stylish and seamless way to
                                            plan, book, and style every trip he takes. He dislikes clunky, boring apps and
                                            expects design to match his lifestyle.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row g-4 row-cols-1 row-cols-md-3">

                                    <div class="col">
                                        <div class="card persona-card h-100">
                                            <div class="card-body">
                                                <h4 class="persona-heading">Frustrations</h4>

                                                <span class="progress-label">Generic beach apps</span>
                                                <div class="progress" role="progressbar" aria-label="Generic beach apps"
                                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-accent" style="width: 85%"></div>
                                                </div>

                                                <span class="progress-label">Slow trip planning</span>
                                                <div class="progress" role="progressbar" aria-label="Slow trip planning"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-accent" style="width: 75%"></div>
                                                </div>

                                                <span class="progress-label">Poor, cluttered design</span>
                                                <div class="progress" role="progressbar" aria-label="Poor, cluttered design"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-accent" style="width: 90%"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card persona-card h-100 border-top-accent">
                                            <div class="card-body">
                                                <h4 class="persona-heading">Influences</h4>
                                                <ul class="custom-list">
                                                    <li>Instagram</li>
                                                    <li>Pinterest</li>
                                                    <li>Airbnb</li>
                                                    <li>Google Maps</li>
                                                    <li>YouTube</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card persona-card h-100">
                                            <div class="card-body">
                                                <h4 class="persona-heading">Interests</h4>
                                                <ul class="custom-list">
                                                    <li>Fashion & Coastal Styling</li>
                                                    <li>Social Media Curation</li>
                                                    <li>Beach Getaways</li>
                                                    <li>Photography & Editing</li>
                                                    <li>Slow Luxury Travel</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-4 row-cols-1 row-cols-md-2">

                                    <div class="col">
                                        <div class="card persona-card h-100">
                                            <div class="card-body">
                                                <h4 class="persona-heading">Goals</h4>
                                                <ul class="custom-list">
                                                    <li>Discover premium, stylish beach destinations with ease</li>
                                                    <li>Plan, book, and organize trips all in one seamless flow</li>
                                                    <li>Ensure every trip fits his personal and social brand aesthetic</li>
                                                    <li>Save valuable time during the beach planning process</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card persona-card h-100">
                                            <div class="card-body">
                                                <h4 class="persona-heading">Motivations</h4>

                                                <span class="progress-label">Boost content engagement</span>
                                                <div class="progress" role="progressbar" aria-label="Boost content engagement"
                                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-accent" style="width: 80%"></div>
                                                </div>

                                                <span class="progress-label">Quality time with partner</span>
                                                <div class="progress" role="progressbar" aria-label="Quality time with partner"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-accent" style="width: 70%"></div>
                                                </div>

                                                <span class="progress-label">Brand collaborations</span>
                                                <div class="progress" role="progressbar" aria-label="Brand collaborations"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-accent" style="width: 60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- persona section -->

    <!-- by hassan app screens section -->

    <section class="my-5 wow fadeIn">
        <div class="container">
            <h3 class="my-4 text-center">App Screens</h3>

            <div class="row">
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (1).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (2).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (3).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (4).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (5).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (6).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (7).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (8).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (9).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (10).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (11).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/App (12).webp')}}" alt=""></div>

            </div>
        </div>
    </section>

    <!-- end hassan app screens section -->

    <!-- by hassan  User Testing & Feedback -->
    <section class="py-5 wow fadeIn">
        <div class="container">
            <h3 class="my-5 text-sm-center">User Testing & Feedback</h3>
            <div class="row g-4 align-items-stretch">

                <div class="col-md-6">
                    <div class="userTestingCard">
                        <div class="userTesting-img-section">
                            <img src="{{asset('images/case-studies/boujee-beachin/HEART.webp')}}" alt="Liked">
                            <p>Liked</p>
                        </div>
                        <ul>
                            <li>Aesthetic, clean, and modern interface</li>
                            <li>Easy navigation and booking flow</li>
                            <li>Fashion-travel combo felt fresh and useful</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="userTestingCard">
                        <div class="userTesting-img-section">
                            <img src="{{asset('images/case-studies/boujee-beachin/RESAT.webp')}}" alt="RESAT">
                            <p>Liked</p>
                        </div>
                        <ul>
                            <li>Home screen felt slightly crowded initially</li>
                            <li>Users wanted clearer call-to-action buttons</li>
                            <li>Some icons were unclear without labels</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End hassan  User Testing & Feedback -->

    <!-- by hassan Tech Behind the App section  -->
   <section class="my-5 tech-behind-section  wow fadeIn">
    <div class="container">
        <h3 class="text-center mb-4">Tech Behind the App</h3>

        <div class="row g-4 justify-content-center">

            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Frontend</h6>
                    <img src="{{asset('images/case-studies/boujee-beachin/PLATFROM (1).webp')}}" alt="">
                    <p>React Native</p>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Backend</h6>
                    <img src="{{asset('images/case-studies/boujee-beachin/PLATFROM (2).webp')}}" alt="">
                    <p>Node.js</p>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Database</h6>
                    <img src="{{asset('images/case-studies/boujee-beachin/PLATFROM (3).webp')}}" alt="">
                    <p>MongoDB</p>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Cloud</h6>
                    <img src="{{asset('images/case-studies/boujee-beachin/PLATFROM (4).webp')}}" alt="">
                    <p>AWS</p>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Payments</h6>
                    <img src="{{asset('images/case-studies/boujee-beachin/PLATFROM (5).png')}}" alt="">
                    <p>Stripe • G Pay</p>
                </div>
            </div>

        </div>
    </div>
</section>

    <!--End hassan Tech Behind the App section  -->

    <!-- start hassan Conclusion section -->
    <section class="my-5 conclusion-section">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-md-6">
                    <div class="conclusion-left">
                        <h3 class="conclusion-heading">Conclusion</h3>
                        <p class="conclusion-paragraph">
                            Boujee Beachin’ blends luxury travel and fashion into one clean, curated app.
                            This project taught me how to balance premium aesthetics with practical UX,
                            prioritize user needs, and improve design through testing and iteration.
                            It was a valuable experience in designing for a modern, lifestyle-driven audience.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 text-center">
                    <div class="conclusion-right">
                        <img src="{{asset('images/case-studies/boujee-beachin/6.webp')}}"
                            alt="Boujee Beachin Conclusion Image"
                            class="img-fluid rounded-3 shadow-sm">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End hassan Conclusion section-->

    <!-- by hassan app screens section -->
    <section class="my-5 wow fadeIn">
        <div class="container">
            <h3 class="my-4 text-center">VENDOR APP</h3>

            <div class="row">
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/VANDOR-APP (1).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/VANDOR-APP (2).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/VANDOR-APP (3).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/VANDOR-APP (4).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/VANDOR-APP (5).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/VANDOR-APP (6).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/VANDOR-APP (7).webp')}}" alt=""></div>
                <div class="col-md-3 col-6 my-3"><img src="{{asset('images/case-studies/boujee-beachin/VANDOR-APP (8).webp')}}" alt=""></div>

            </div>
        </div>
    </section>
    <!-- end hassan app screens section -->

    <!-- by hassan  Client Testimonial  -->
    <section class="py-5 wow fadeIn  boujee-Testimonial">
        <div class="container">
            <h4 class="my-5 text-center">Client Testimonial</h4>

            <div class="text-center mb-3">
                <img src="{{asset('images/case-studies/boujee-beachin/star.webp')}}"
                    alt="Rating" class="img-fluid" style="max-width:120px;">
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="testimonialsCard text-center p-4">

                        <!-- User Image Section -->
                        <div class="testimonials-img-section mb-3">
                            <img src="{{asset('images/case-studies/boujee-beachin/uSER2.webp')}}"
                                alt="Liked"
                                class="rounded-circle img-fluid"
                                style="width:90px; height:90px; object-fit:cover;">
                        </div>

                        <!-- Review Text -->
                        <p class="testimonial-text">
                            “I’ve tried a ton of travel apps, but Boujee Beachin’ stands out.
                            It combines luxury beach discovery, outfit planning, and smooth booking —
                            all in one clean interface. It saves me time and makes my trips look
                            10x better on social media!”
                        </p>

                        <!-- Name -->
                        <b class="d-block mt-3">— James W., Digital Marketer & Travel Blogger</b>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end hassan  Client Testimonial  -->

    <!-- by hassan last mork-up  -->
    <section class="my-5 wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="{{asset('images/case-studies/boujee-beachin/88.webp')}}" alt="" srcset="" class="img-fluid">
                </div>
            </div>

        </div>
    </section>
    <!-- end hassan  last mark-up  -->
@endsection