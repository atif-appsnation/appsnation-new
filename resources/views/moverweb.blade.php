@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 mover-web">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
			<img src="images/case-studies/mover-web/header-logo.webp" class="img-fluid" alt="Mover Web Logo">
				<div class="bread-titlev2 mt-4">
					<h1>Welcome To</h1>
					<h1 class="span">Deliverables</h1>
					<p class="pt-3">Relocate, Transfer, <Param></Param>cking</p>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<img src="images/case-studies/mover-web/header-web.webp" class="img-fluid" alt="Mover Web">
			</div>
		</div>
	</div>

</section>
<!--End Breadcrumb Area-->

<!--Start About Project-->
<section class="mover-about py-5 wow fadeIn" data-wow-delay="0.4s">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-lg-8">
				<div class="common-heading">
					<h2 class="text-center">About Deliverables</h1>
					<p class="text-center">At Mover App, our mission is clear, revolutionize the moving experience. With a steadfast commitment to innovation, we've crafted a seamless platform that bridges the gap between customers and reliable moving professionals. Our dedication to excellence ensures that every interaction, from booking to the final move-in, is smooth, efficient, and stress-free. Join us as we transform the way people move, one seamless connection at a time.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About Project-->

<!--Start Design-->
<section class="mover-design-process py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center design-text">
					<h2 class="mb30">Design Process</h2>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<div class="mover-web-user-and-research">
					<img src="images/case-studies/mover-web/user-and-research-analytics-icon.webp" alt="User And Reseaarch Analysis" class="img-fluid">
				</div>
				<h5 class="pt-3">User And Research Analysis</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<div class="mover-web-problem-and-solutions">
					<img src="images/case-studies/mover-web/problem-and-solutions-icon.webp" alt="Problem And Solution" class="img-fluid">
				</div>
				<h5 class="pt-3">Problem And Solution</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.8s">
				<div class="mover-web-competitive-analysis">
					<img src="images/case-studies/mover-web/competitive-analysis-icon.webp" alt="Competitive Analysis" class="img-fluid">
				</div>
				<h5 class="pt-3">Competitive Analysis</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="1.0s">
				<div class="mover-web-wireframe-icons">
					<img src="images/case-studies/mover-web/wireframe-icon.webp" alt="Wire Frame" class="img-fluid">
				</div>
				<h5 class="pt-3">Wire Frame</h5>
			</div>
		</div>
	</div>
</section>
<!--End Design-->

<!--Start Project Idea-->
<section class="mover-project-idea py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Idea</h2>
					<p class="text-middle">Take your mover website from informative to indispensable with this innovative project: an interactive moving guide seamlessly integrated with a real-time quote engine. The guide will transform into a trusted companion for your visitors, offering a step-by-step moving planner complete with customizable checklists to keep them organized. They'll also have access to a treasure trove of expert tips and resources, from packing strategies to essential paperwork reminders. But the magic doesn't stop there! The built-in quote engine empowers users with instant cost estimates based on their specific needs. Whether it's a local apartment move or a long-distance relocation of a spacious house, users can simply input details like origin, destination, and estimated belongings to receive a transparent pricing picture. This not only fosters trust with informed customers who can confidently plan their budget, but also generates highly qualified leads for your business. With this interactive duo on your website, you'll be the go-to resource for smooth and stress-free moves, attracting a wave of potential customers ready to book your services.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img src="images/case-studies/mover-web/mover-web-visuals-1.webp" alt="Mover Web Visuals" class="img-fluid">
			</div>
		</div>
	</div>
</section> 
<!--End Project Idea-->

<!--Start Target Audience-->
<section class="mover-target-audience py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img src="images/case-studies/mover-web/mover-web-visuals-2.webp" alt="Mover Web Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Target Audience</h2>
					<p class="text-middle">Young professionals facing a move often juggle demanding careers and new opportunities, leaving little time for the moving process. This project tackles that by transforming your mover website into a one-stop shop designed specifically for them. Imagine an interactive moving guide, broken down into manageable chunks that fit their busy schedules. They can personalize checklists based on their move size and access quick video tutorials for packing and paperwork. Plus, an instant quote engine provides real-time cost estimates based on their specific needs, including origin, destination, and belongings. They can even explore different service options to see how it impacts the final price. By offering ease of use, transparency, and time-saving features, this website makeover will convert young professionals into qualified leads ready to book your services with confidence. This interactive duo - the moving guide and quote engine - will make you the go-to resource for smooth and stress-free moves for busy young professionals.</p>
				</div>
			</div>	
		</div>
	</div>
</section> 
<!--End Target Audience-->

<!--Start Project Challenges-->
<section class="mover-project-challanges py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Challenges</h2>
					<p class="text-middle">While this project promises a smooth experience, there are a few challenges. First, ensuring the interactive guide and quote engine work flawlessly across all devices, especially mobiles, is crucial. Young professionals rely on smartphones, so a clunky mobile experience could lose you leads. Next, keeping the guide's content accurate is key. Regulations and services change, so maintaining fresh and relevant information requires ongoing maintenance. This might involve a dedicated team to monitor updates and adjust the guide accordingly. Finally, integrating the real-time quote engine with your existing pricing system could require technical expertise. Depending on your pricing structure, you might need developers to ensure the engine accurately reflects costs and service options. Despite these hurdles, by prioritizing a user-friendly mobile experience, dedicating resources to ongoing content maintenance, and collaborating with technical experts if needed, you can transform this project into a powerful tool. It will streamline the moving process for young professionals and position your business as a leader in the market.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img src="images/case-studies/mover-web/mover-web-visuals-1.webp" alt="Mover Web Visuals" class="img-fluid">
			</div>
		</div>
	</div>
</section> 
<!--End Project Challenges-->

<!--Start Solutions Delivered-->
<section class="mover-solutions-delivered py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img src="images/case-studies/mover-web/mover-web-visuals-2.webp" alt="Mover Web Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Solution Delivered</h2>
					<p class="text-middle">We prioritize a responsive design for both the interactive guide and quote engine. Young professionals rely on their smartphones, so a user-friendly mobile experience is crucial. Our responsive design ensures the content adapts perfectly to any device, allowing them to access information and get quotes on the go. Keeping the guide's content accurate is paramount. We'll implement a user-friendly CMS, allowing your dedicated team to easily update information whenever regulations or services change. This ensures the guide remains a reliable resource for young professionals navigating the moving process. For a seamless quote engine integration, our team possesses the expertise to leverage APIs (Application Programming Interfaces). This allows smooth communication between your existing pricing system and the quote engine. We'll configure the API to translate your pricing structure into real-time quotes, ensuring transparency for young professionals seeking accurate cost estimates. By implementing these solutions, Solutions Delivered empowers you to overcome challenges and deliver a powerful tool. This will not only streamline the moving process for young professionals but also position your business as a leader in the competitive market.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Solutions Delivered-->

<!--Start Results/Impact-->
<section class="mover-results-impact py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Results/Impact</h2>
					<p class="text-middle">The implementation of the Avenue real estate platform has yielded significant results and made a substantial impact on the real estate market. Firstly, the enhanced accuracy and timeliness of property listings have greatly increased user trust and engagement, leading to higher transaction volumes. The user-friendly interface and robust functionality have attracted a diverse user base, from first-time homebuyers to seasoned investors, significantly expanding the platform's reach. The robust security measures implemented have successfully protected user data, minimizing risks and boosting user confidence in the platform. Scalability solutions have allowed Avenue to accommodate a growing number of users and listings without compromising on performance. The responsive design has improved user retention and satisfaction rates by providing a consistent and efficient experience across all devices. SEO optimizations have increased the site's visibility, attracting more organic traffic and improving market positioning. Lastly, adherence to regulatory compliance has positioned Avenue as a reliable and trustworthy platform, fostering strong relationships with users and stakeholders in the real estate sector. These results collectively demonstrate Avenue's successful transformation of the property buying, selling, and management processes.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img src="images/case-studies/mover-web/mover-web-visuals-1.webp" alt="Mover Web Visuals" class="img-fluid">
			</div>
		</div>
	</div>
</section> 
<!--End Results/Impact-->

<!--Start Conclusion-->
<section class="mover-conclusion py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img src="images/case-studies/mover-web/mover-web-visuals-2.webp" alt="Mover Web Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Conclusion</h2>
					<p class="text-middle">In conclusion, the Avenue real estate platform has successfully transformed the way individuals and professionals interact with the property market. Through its innovative design and strategic implementations, Avenue has addressed critical challenges, delivering a reliable, secure, and user-friendly platform that enhances property transactions. The comprehensive features and intuitive interface have significantly improved user engagement and satisfaction, establishing Avenue as a leader in the digital real estate space. The platform's scalability and robust infrastructure ensure it is well-positioned to adapt to future market demands and technological advancements. The positive feedback and growing user base are testaments to its effectiveness and impact. Moving forward, Avenue will continue to evolve, leveraging new technologies and insights to further refine and expand its offerings, ensuring it remains at the forefront of the real estate industry.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Conclusion-->

<!--Start Project Timeline-->
<section class="mover-project-timeline py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb25">Project Timeline</h2>
				</div>
			</div>
			<div class="col-12 wow fadeIn" data-wow-delay="0.4s">
				<div class="project-timeline-img-div pt-3">
					<img src="images/case-studies/mover-web/timeline.webp" alt="Project Timeline" class="img-fluid w-100">
				</div>
			</div>
		</div>
	</div>
	
</section>
<!--End Project Timeline-->

<!--Start Sitemap-->
<section class="mover-sitemap py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb25">Sitemap</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="mover-sitemap-img pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img src="images/case-studies/mover-web/sitemap.webp" alt="Sitemap" class="img-fluid w-100">
	</div>
</section>
<!--End Sitemap-->

<!--Start Wireframe-->
<section class="mover-wireframe py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb30">Wireframes</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img src="images/case-studies/mover-web/wireframes.webp" alt="Wireframe" class="img-fluid w-100">
	</div>
</section>
<!--End Wiregrame-->

<!--Start UI/UX-->
<section class="mover-visuals py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center visuals-text">
					<h2 class="mb30">UI/UX</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="pt50">
		<div class="row mt-4 mt-lg-0 wow fadeIn" data-wow-delay="0.4s">
			<div class="col-12">
				<img src="images/case-studies/mover-web/ui-ux.webp" alt="Mover Web UI/UX" class="img-fluid w-100">
			</div>
		</div>
	</div>
</section>
<!--End Visuals-->

<!--Start Color Pallate-->
<section class="mover-color py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2">
				<div class="common-heading text-center">
					<h2 class="mb30">Color Pallate</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-5 wow fadeIn text-center" data-wow-delay="0.4s">
				<h4 class="text-center">Tints</h4>
				<img src="images/case-studies/mover-app/tints.webp" alt="Tints" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<h4 class="text-center">Shades</h4>
				<img src="images/case-studies/mover-app/shades.webp" alt="Shades" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!--End Color Pallate-->

<!--Start Typography-->
<section class="mover-typography py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Typography</h2>
				</div>
			</div>
			<div class="col-12 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<img src="images/case-studies/mover-web/typography.webp" alt="Typography" class="img-fluid">
			</div>
		</div> 
	</div>
</section>
<!--End Typography-->

<!--Start Features-->
<section class="mover-features py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb-0">Admin Features</h2>
				</div>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.4s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="mover-sub-heading">Customers Management</h5>
				<p>Premium User's Management option offers Block User Enable / Disable User.</p>
				<hr class="my-5">
				<h5 class="mover-sub-heading">Riders Management</h5>
				<p>Block User Enable / Disable User option is available in this feature.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img src="images/case-studies/mover-web/admin-features-01.webp" alt="Mover Web Visuals" class="img-fluid">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img src="images/case-studies/mover-web/admin-features-03.webp" alt="Mover Web Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="mover-sub-heading">Notifications</h5>
				<p class="text-end">Send Push Notifications to Customers or Riders for the convenience of both parties.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="mover-sub-heading">Promotions</h5>
				<p class="text-end">Management of Discount, Promo Codes, Management of Coupons, and Premium Packages available.</p>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.8s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="mover-sub-heading">Orders Management</h5>
				<p>Create unique promos and discounts to entice customers to purchase your products and take advantage of varied discounts./p>
				<hr class="my-5">
				<h5 class="mover-sub-heading">Reports Management</h5>
				<p>Reporting on product usage on a daily, weekly, and monthly basis.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img src="images/case-studies/mover-web/admin-features-02.webp" alt="Mover Web Visuals" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!--End Features-->

<!--Start Features-->
<section class="mover-features py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12 wow fadeIn">
				<div class="common-heading text-center">
					<h2 class="mb-0">Features</h2>
				</div>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.4s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="mover-sub-heading">Profile Management</h5>
				<p>Change your password or edit your profile. You can also View Courier's Reviews and Ratings.</p>
				<hr class="my-5">
				<h5 class="mover-sub-heading">Nearby Courier</h5>
				<p>For the customer’s ease, the app searches for close or nearby courier persons.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img src="images/case-studies/mover-web/mover-web-visuals-1.webp" alt="Mover Web Visuals" class="img-fluid">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img src="images/case-studies/mover-web/mover-web-visuals-2.webp" alt="Mover Web Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="mover-sub-heading">Track Order</h5>
				<p class="text-end">With the Live Tracking of Courier person feature on Map, you can keep an eye on the movement of your order.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="mover-sub-heading">Subscription</h5>
				<p class="text-end">Customers can avail of Promo Code and Discount Coupons of Premium with the availability of User Subscription plans.</p>
			</div>
		</div>
	</div>
</section>
<!--End Features-->
@endsection