@extends('app.main')
@section('content')
<!--Start Breadcrumb Area -->
<section class="breadcrumb-areav2">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeInLeft">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">E-Commerce Development Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Futurealiti focuses on creating E-commerce solutions that are both technically powerful and unique in the market, giving you a competitive advantage. You require someone to manage your existing digital assets and provide your company with a positive client experience.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeInRight">
				<img src="images/e-commerce-app-development/e-commerce-app-banner-img.webp" class="img-fluid" alt="E-Commerce App Development">
			</div>
		</div>
	</div>
	</div>
</section>
<!--End Breadcrumb Area -->

<!--Start About -->
<section class="service py-5">
	<div class=" container">
		<div class="row">
			<div class="col-lg-5 wow fadeInLeft">
				<div class="image-block">
					<img src="images/e-commerce-app-development/e-commerce-app-development.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeInRight my-auto">
				<div class="common-heading text-l pl25">
					<h2>Our<span class="flup-theme"> E-Commerce Application Development</span> Portfolio:</h2>
					<p>Futurealiti is a custom e-Commerce development company that specialises in creating beautiful platforms and accelerating e-Commerce initiatives. </p>
					<p>As a reputable ecommerce website design company, we unlock the power of eCommerce platforms to provide you with feature-rich, distinctive, and dependable eCommerce websites. </p>
					<p>Using Drupal, Magento development, WooCommerce, Shopify, and BigCommerce, our skilled team of highly qualified web developers produces customer-focused digital products Ecommerce web apps</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About -->

<!--Start Service -->
<section class="service-section-app py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 wow fadeInLeft">
				<div class="common-heading ptag">
					<h2>E-Commerce Development Services</h2>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight">
				<div class="common-heading ptag">
					<p>IoT software development company can help you start a revolution in the IoT arena and accelerate business growth and progress. Utilize the power of our IoT solutions to create a digital bridge between machines and people through the convergence of innovative technologies.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-3 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="custom-e-comm-dev-img"></div>
					</div>
					<div class="service-heading">
						<h4>Custom E-Commerce Development</h4>
					</div>
					<div class="services-text-div">
						<p>We specialize in creating the proper digital product for your company by assisting you with the ideal technology platform for your company, whether you're a startup or a large corporation.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="m-comm-service-img"></div>
					</div>
					<div class="service-heading">
						<h4>M-commerce Services</h4>
					</div>
					<div class="services-text-div">
						<p>We provide helpful features such as online ordering, payments, location-based m-commerce, delivery applications, real-time tracking, and more as the finest M-commerce service provider.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="dev-multi-store-e-comm-img"></div>
					</div>
					<div class="service-heading">
						<h4>Development of Multi Store E-Commerce Platform</h4>
					</div>
					<div class="services-text-div">
						<p>To intelligently tie all of these threads together and prevent them from becoming a tangled mess, you'll need a versatile and intuitive multi-store eCommerce. We have a proven track record of building multi-store best eCommerce platforms for some of the world's most well-known businesses.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="cus-e-comm-des-dev-img"></div>
					</div>
					<div class="service-heading">
						<h4>Custom E-Commerce Design and Development</h4>
					</div>
					<div class="services-text-div">
						<p>While being flexible and entirely customised, our eCommerce solutions provide the finest in standard features and functionality. Our team can create fully customised eCommerce capabilities, integrate with ERP systems, collect data from different sources, and customise a solution to fit your brand and eCommerce objectives.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="magento-e-com-dev-img"></div>
					</div>
					<div class="service-heading">
						<h4>Magento E-Commerce Development</h4>
					</div>
					<div class="services-text-div">
						<p>Magento provides eCommerce platform solutions that are flexible, resilient, scalable, and intuitive, making it simple to expand your online store. A better grasp of Magento eCommerce development is required to explore the endless possibilities that Magento can provide.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="saas-e-comm-solu-img"></div>
					</div>
					<div class="service-heading">
						<h4>SAAS E-Commerce Solutions</h4>
					</div>
					<div class="services-text-div">
						<p>Both front-end and back-end integration tools are available in SaaS eCommerce systems, allowing you to integrate them effortlessly into your development and deployment process.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="mod-plugin-dev-img"></div>
					</div>
					<div class="service-heading">
						<h4>Modules and Plugins Development</h4>
					</div>
					<div class="services-text-div">
						<p>In the group of woo commerce/Magneto/ Drupal/ Word Press/ Joomla, E-Commerce web developers give top quality plug-in and module development services.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="data-analytics-img"></div>
					</div>
					<div class="service-heading">
						<h4>Data Analytics</h4>
					</div>
					<div class="services-text-div">
						<p>We use the most up-to-date data analysis techniques and solutions to assist organisations in turning their jumbled data into actionable intelligence and achieving success through well-informed decisions.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service -->

<!--Start Hire Dedicated Developer -->
<section class="service-block">
	<div class="container">
		<div class="-cta-btn mt50 mb50">
			<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.1s">
				<p>Hire a
					<span>Dedicated Developer</span>
				</p>
				<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Hire Now
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End Hire Dedicated Developer -->

<!--Start Service -->
<section class="service-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeInLeft">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="maint-mig-img"></div>
					</div>
					<div class="service-heading">
						<h4>Maintenance & Migration</h4>
					</div>
					<div class="services-text-div">
						<p>We are delighted to assist you in making your decision, whether to keep your current application or migrate. We speed up and responsibly load your website or application.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="e-comm-int-img"></div>
					</div>
					<div class="service-heading">
						<h4>E-commerce Integrations</h4>
					</div>
					<div class="services-text-div">
						<p>We connect various systems to your present operation to create a smooth experience. We assist firms with integrating CRM, CMS, ERP, POS, and other systems for smooth workflows.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="e-comm-rec-sys-img"></div>
					</div>
					<div class="service-heading">
						<h4>E-commerce Recommendation System</h4>
					</div>
					<div class="services-text-div">
						<p>We specialize in implementing machine learning and artificial intelligence (AI) into algorithms that propose products to customers based on their demographics and previous purchasing history.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInRight">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="market-dev-img"></div>
					</div>
					<div class="service-heading">
						<h4>Marketplace Development</h4>
					</div>
					<div class="services-text-div">
						<p>We provide everything you need to quickly build a marketplace and begin working with sellers.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInRight">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="shop-cart-dev-img"></div>
					</div>
					<div class="service-heading">
						<h4>Shopping Cart Development</h4>
					</div>
					<div class="services-text-div">
						<p>Our expert developers will collaborate closely with you, offering a full explanation of all possibilities as well as a precise timeline. E-commerce development agency provides top-notch quality ecommerce shopping cart development services at a reasonable price.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInRight">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="online-store-cust-img"></div>
					</div>
					<div class="service-heading">
						<h4>Online Store Customization</h4>
					</div>
					<div class="services-text-div">
						<p>You can rest easy knowing that you're working with one of the world's best ecommerce website developers, who has built a reputation for producing high-quality, innovative products on time and on budget.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInLeft">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="pay-gateway-int-img"></div>
					</div>
					<div class="service-heading">
						<h4>Payment Gateway Integration</h4>
					</div>
					<div class="services-text-div">
						<p>We employ integrated gateways to comply with the PCI DSS, which means they're in charge of storing, safeguarding, and performing initial transaction verification.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInLeft">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="app-maint-supp-img"></div>
					</div>
					<div class="service-heading">
						<h4>Application Maintenance and Support</h4>
					</div>
					<div class="services-text-div">
						<p>Our eCommerce mobile app solutions are capable of meeting the immediate needs of the current market scenario and digitally aligning every retail operation procedure to assure business continuity.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInLeft">
				<div class="service-card home-services gradient-border">
					<div class="services-img-div">
						<div class="cust-opt-ecomm-app-img"></div>
					</div>
					<div class="service-heading">
						<h4>Customize and Optimize Existing E-Commerce Applications</h4>
					</div>
					<div class="services-text-div">
						<p>Amazon AWS IoT services, Microsoft Azure, Google Cloud, and IBM Bluemix are just a few of the cloud computing platforms that our IoT Developers use.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service -->

<!--Start About -->
<section class="service py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInLeft">
					<h2>Our <span class="flup-theme">E-Commerce</span> Core Expertise</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInRight">
					<p>We offer e-commerce applications in several formats:</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="image-block wow fadeInLeft">
					<img src="images/e-commerce-app-development/b2b.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeInRight my-auto">
				<div class="common-heading text-l pl25">
					<h3>Business to Business E-commerce (B2B) Application</h3>
					<p>Accelerate your digital transformation with B2B e-commerce solutions. Quickly persuade and convert. Branding that is consistent. Channels of information that are very engaging and appealing.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeInLeft my-auto">
				<div class="common-heading text-l pl25">
					<h3>Business to Consumer E-Commerce (B2C) Application</h3>
					<p>With our mobile-based B2C e-commerce solutions, you can provide a better buying experience. Catalogues that are appealing. Shopping carts with artificial intelligence. Interfaces that change the game.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="image-block wow fadeInRight">
					<img src="images/e-commerce-app-development/b2c.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6">
				<div class="image-block wow fadeInLeft">
					<img src="images/e-commerce-app-development/c2c.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeInRight my-auto">
				<div class="common-heading text-l pl25">
					<h3>Consumer to Consumer E-Commerce (C2C) Application</h3>
					<p>Create a user-friendly e-commerce mobile app that provides a better shopping experience so that users may sell products and services to one another.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeInLeft my-auto">
				<div class="common-heading text-l pl25">
					<h3>Consumer to Business E-Commerce (C2B) Application</h3>
					<p>Create a user-friendly interface for your customers to provide direct feedback or product suggestions to your company.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="image-block wow fadeInRight">
					<img src="images/e-commerce-app-development/c2b.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6">
				<div class="image-block wow fadeInLeft">
					<img src="images/e-commerce-app-development/b2a.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeInRight my-auto">
				<div class="common-heading text-l pl25">
					<h3>Business to Administration E-Commerce (B2A) Application</h3>
					<p>Development of cutting-edge e-commerce mobile apps to let businesses communicate with government agencies and administration for improved tendering and contracting.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeInLeft my-auto">
				<div class="common-heading text-l pl25">
					<h3>Consumer to Administration E-Commerce (C2A) Application</h3>
					<p>Create a user-friendly mobile experience that allows your customers to contact directly with administration for information and utility purposes and usage.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="image-block wow fadeInRight">
					<img src="images/e-commerce-app-development/c2a.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About -->

<!--Start E-Commerce Data Security -->
<section class="service-section web-servic py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading wow fadeInLeft">
					<h2 class="mb30">We Do Best Practices for E-Commerce Data Security</h2>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="avoid-stor-sens-img"></div>
					</div>
					<div class="service-heading">
						<h4>Avoid Storing Sensitive Data</h4>
					</div>
					<div class="services-text-div">
						<p>We don't collect sensitive information from clients, such as banking or credit card information, because we don't want attackers to steal from you.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="int-trust-pay-proc-img"></div>
					</div>
					<div class="service-heading">
						<h4>Integrate Trusted Payment Processors</h4>
					</div>
					<div class="services-text-div">
						<p>We recognize the importance of your banking credentials. As a result, we make certain that each link in the payment process chain is properly secured.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="two-fact-auth-img"></div>
					</div>
					<div class="service-heading">
						<h4>Two-Factor Authentication</h4>
					</div>
					<div class="services-text-div">
						<p>Having two-factor authentication, whether you do it yourself or use a third-party service, will significantly increase the security of your application.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="update-plat-frame-lib-img"></div>
					</div>
					<div class="service-heading">
						<h4>Updated Platform, Frameworks, & Libraries</h4>
					</div>
					<div class="services-text-div">
						<p>Unpatched software and extensions might put your e-commerce platform at risk, so we make sure you have the most up-to-date versions.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End E-Commerce Data Security -->

<!--Start Advanced Features -->
<section class="service-block py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInLeft">
					<h2>Advanced Features Of Our E-Commerce App that Maximise User Base</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeInLeft">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="smart-search-img"></div>
					</div>
					<div class="service-heading">
						<h4>Smart Search</h4>
					</div>
					<div class="services-text-div">
						<p>We've incorporated an advanced search feature that uses a filter, sorting choices, and an appropriate algorithm to help you locate products quickly. It might be a game-changer for your business even if you already have a catalogue.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="instant-support-img"></div>
					</div>
					<div class="service-heading">
						<h4>Instant Support</h4>
					</div>
					<div class="services-text-div">
						<p>E-commerce app development specializes in developing strong chatbots that help companies and customers communicate more effectively. You may provide immediate assistance thanks to the instant support tool, which saves you time and effort.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="multiple-payment-img"></div>
					</div>
					<div class="service-heading">
						<h4>Multiple Payment Options</h4>
					</div>
					<div class="services-text-div">
						<p>For the convenience of our consumers, we combine numerous payment alternatives under one roof. Our programmers use dependable approaches and incorporate payment options such as net banking, credit cards, and debit cards.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInRight">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="social-media-img"></div>
					</div>
					<div class="service-heading">
						<h4>Social Media Integration</h4>
					</div>
					<div class="services-text-div">
						<p>The integration of social media allows for faster login, registration, and sharing of product information. To raise brand recognition, you can share numerous discount coupons or promotional campaigns on social media channels.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInRight">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="quick-checkout-img"></div>
					</div>
					<div class="service-heading">
						<h4>Quick Checkout</h4>
					</div>
					<div class="services-text-div">
						<p>Social media integration enables for speedier login, registration, and sharing of product information. You can use social media to promote your brand by sharing a variety of discount coupons or promotional activities.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInRight">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="e-wallet-img"></div>
					</div>
					<div class="service-heading">
						<h4>E-Wallet</h4>
					</div>
					<div class="services-text-div">
						<p>Our professionals combine dependable and secure payment methods via a digital wallet, which are available through our online shopping apps. Customers can use this option to obtain quick checkout, EMIs, and much more.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInLeft">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="chatbots-img"></div>
					</div>
					<div class="service-heading">
						<h4>Chatbots</h4>
					</div>
					<div class="services-text-div">
						<p>We provide 24x7 help for your consumers by building and integrating an intelligent chatbot with cognitive abilities into your eCommerce website. By asking customers the proper questions, the chatbot improves customer service.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInLeft">
				<div class="service-card home-services gradient-border ">
					<div class="services-img-div">
						<div class="pos-integration-img"></div>
					</div>
					<div class="service-heading">
						<h4>POS Integration</h4>
					</div>
					<div class="services-text-div">
						<p>With Point-of-Sale (POS) Integration and to effectively compete and expand the company's reach, our eCommerce web developers have practical competence in the design, creation, and promotion of eCommerce websites.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeInLeft">
				<div class="service-card home-services gradient-border">
					<div class="services-img-div">
						<div class="erp-crm-int-img"></div>
					</div>
					<div class="service-heading">
						<h4>ERP/CRM Integration</h4>
					</div>
					<div class="services-text-div">
						<p>The goal of ERP and CRM integration is to ensure that both systems share automated and consistent information, resulting in a single source of truth. We make sure your e-commerce app platform have it.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Advanced Features -->

<!--Start Why Choose -->
<section class="why-choose bg-gradient3 my-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInLeft">
					<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInRight">
					<p class="text-white">AppsNation is a global leader in the design, launch, and optimization of eCommerce applications, enabling businesses to take advantage of the increasing online purchasing market while also delighting their consumers with innovative features. </p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-3 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="scalable-solutuions-img"></div>
					</div>
					<div class="service-heading">
						<h4>Scalable Solutions</h4>
					</div>
					<div class="services-text-div">
						<p>Because you want to grow your online business, scalability is a crucial factor to consider when selecting an ecommerce platform. We have a wide range of scalable solutions for your business.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="mobile-friendly-img"></div>
					</div>
					<div class="service-heading">
						<h4>Mobile Friendly</h4>
					</div>
					<div class="services-text-div">
						<p>Your website should be mobile-friendly as well. A mobile-optimized site can enhance your SEO rankings and gain more sales from on-the-go shoppers with our flexible and smart solutions.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="superior-ui-ux-img"></div>
					</div>
					<div class="service-heading">
						<h4>Superior UI/UX</h4>
					</div>
					<div class="services-text-div">
						<p>You'll have a lightning-fast website that allows visitors to travel from browsing to checkout in seconds, thanks to the newest technology and standards.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeInLeft">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="quick-deployment-img"></div>
					</div>
					<div class="service-heading">
						<h4>Quick Deployment</h4>
					</div>
					<div class="services-text-div">
						<p>With our best e-commerce platforms, you will the quick deployment of your perfectly created e-commerce mobile app.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="specialized-ecommerce-img"></div>
					</div>
					<div class="service-heading">
						<h4>Specialized in E-Commerce</h4>
					</div>
					<div class="services-text-div">
						<p>Our e-commerce solutions are not just versatile but our developers hold the specialization in the e-commerce field which means you will get a fruitful outcome from our services.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="innovative-designs-img"></div>
					</div>
					<div class="service-heading">
						<h4>Innovative Designs</h4>
					</div>
					<div class="services-text-div">
						<p>We've got you covered on everything from fundamental eCommerce functionality to advanced product selections, characteristics, and filters. We don't turn down any requests for features or integrations.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="on-time-delivery-img"></div>
					</div>
					<div class="service-heading">
						<h4>On-time Delivery</h4>
					</div>
					<div class="services-text-div">
						<p>We promise to deliver the product i.e. the application being design and developed on time.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 wow fadeInRight">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="dedicated-team-img"></div>
					</div>
					<div class="service-heading">
						<h4>Dedicated Team</h4>
					</div>
					<div class="services-text-div">
						<p>Assistance according to the client's time zone, as well as post-deployment support from a dedicated project manager.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why Choose -->

<!--Start New Project-->
<section class="service-block">
	<div class="container">
		<div class="-cta-btn">
			<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s">
				<p>Let's Start a <span>New Project</span> Together</p>
				<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Inquire Now
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End New Project-->

<!--Start Features-->
<section class="features-section-app dark-bg2 my-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5 wow fadeInLeft">
				<div class="tab-content" id="imagetab">

					@foreach($agencystack as $k=>$items)
					@if($k==0)

					<div class="tab-pane active" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<img src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@else
					<div class="tab-pane fade" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<img src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@endif

					@endforeach
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeInRight">
				<h2>Creative E-Commerce App Development Agency</h2>
				<p class="py-3">We help a diverse clientele build result-driven mobile apps for different industries.</p>
				<ul class="nav nav-tabs features-tab" id="headingtab" role="tablist">
					@foreach($agencystack as $k=>$items)
                    @if($k==0)
                    <li class="nav-item">
                        <a class="nav-link active" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
                    </li>

                    @else
                    <li class="nav-item">
                        <a class="nav-link" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
                    </li>
                    @endif
                    @endforeach
				</ul>
				
				<div class="tab-content pt-3" id="texttab">
					@foreach($agencystack as $k=>$items)
					@if($k==0)
					<div class="tab-pane active" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p>{!!$items['content']!!}</p>
					</div>
					@else
					<div class="tab-pane fade" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p>{!!$items['content']!!}</p>
					</div>
					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Features-->

<!--Start Process-->
<section class="process-block bg-gradient3">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInLeft">
					<h2>Our <span>Android App</span> Development Process</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInRight">
					<p>AppsNation offers clients an easy and agile android app development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card timeline wow fadeInLeft h-100">
					<div class="card-body">
						<p class="timeline-year">01</p>
						<h3 class="title">Consultancy</h3>
						<p class="description">With the best consultation by our e-commerce app developers, you will get the best services from our experts.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-md-0">
				<div class="card timeline wow fadeInLeft h-100">
					<div class="card-body">
						<p class="timeline-year">02</p>
						<h3 class="title">Research and Analyze your Requirement</h3>
						<p class="description">We start by reviewing and analyzing our client's requirements. Our ecommerce mobile app development team assists you in getting the right e-commerce app for your business by measuring the business area and taking into account your needs.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="card timeline wow fadeInLeft h-100">
					<div class="card-body">
						<p class="timeline-year">03</p>
						<h3 class="title">Creating a Wireframe</h3>
						<p class="description">Next, our ecommerce mobile app development team compiles all of the information and creates a draught for each page and panel, which we show to our customers for feedback.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="card timeline wow fadeInLeft h-100">
					<div class="card-body">
						<p class="timeline-year">04</p>
						<h3 class="title">Designing and Developing the Application</h3>
						<p class="description">Following that, our UI designers give the accepted draft a framework to work with, and our coding engineers code the app to run on all Android and iOS platforms.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card timeline wow fadeInRight h-100">
					<div class="card-body">
						<p class="timeline-year">05</p>
						<h3 class="title">Choosing Best Techniques</h3>
						<p class="description">We have the top-notch techniques and robust methods to integrate the best features in your e-commerce app business.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card timeline wow fadeInRight h-100">
					<div class="card-body">
						<p class="timeline-year">06</p>
						<h3 class="title">Testing and Review</h3>
						<p class="description">If any flaws or malfunctions are discovered, they are fixed, as well as the performance rate, and other qualifying variables are taken into account.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card timeline wow fadeInRight h-100">
					<div class="card-body">
						<p class="timeline-year">07</p>
						<h3 class="title">Deploying</h3>
						<p class="description">We will publish the app to live once it meets the quality standards and security requirements of the App Store and Playstore.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card timeline wow fadeInRight h-100">
					<div class="card-body">
						<p class="timeline-year">08</p>
						<h3 class="title">Maintenance</h3>
						<p class="description">We offer the excellent solution of maintenance in your e-commerce app development procedures and facilitate you with our best options and services.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Tech-->
<div class="techonology-used py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInLeft">
					<h2>Technology Stack</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeInRight">
					<p class="mb30">We build cross-platform mobile apps using a scalable and robust technology stack to produce high-quality apps.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 wow fadeInLeft">
				<ul class="nav nav-tabs android-tech-tabs mt-5">
					@foreach($techstack as $k=>$item)

					@if($k==0)
					<li class="active">
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed">
							<img src="uploads/{{$item['image']}}" alt="">
						</a>
					</li>

					@else

					<li>
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed">
							<img src="uploads/{{$item['image']}}" alt="">
						</a>
					</li>
					@endif

					@if(($k+1)%3==0 )
					@if($k==0)

					@else
				</ul>
				<ul class="nav nav-tabs android-tech-tabs mt-5">
					@endif
					@endif
					@endforeach
				</ul>
			</div>

			<div class="col-md-7 my-auto wow fadeInRight">
				<div class="tab-content tab-body">

					@foreach($techstack as $k=>$items)
					@if($k==0)
					<div id="a{{$items['id']}}" class="tab-pane fade in active">
						<div class="boxseo-data text-start">
							<img src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
							<h3 class="font-size-24 mt-0">{{$items['heading']}}</h3>
							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>

					@else
					<div id="a{{$items['id']}}" class="tab-pane fade">
						<div class="boxseo-data text-start">
							<img src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
							<h3 class="font-size-24 mt-0">{{$items['heading']}}</h3>

							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>

					@endif

					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Tech-->

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row wow fadeInLeft">
			<div class="col-lg-6">
				<div class="common-heading w-tdxt">
					<h2>Ranked as #1 <span>E-Commerce App</span> Development Company</h2>
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

<!--Start Testinomial -->
<section class="testinomial-section-app bg-none py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 wow fadeInLeft">
				<div class="common-heading text-l">
					<span>What our clients say about AppsNation.</span>
					<h2>Over 1200+ Satisfied Clients and Growing</h2>
				</div>
				<div class="review-title-ref mt40">
					<h4>Read More Reviews</h4>
				</div>
				<div class="row mt30 justify-content-center">
					<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".2s">
						<img src="images/about/reviews-icon-1.webp" alt="review" class="img-fluid">
					</a>
					<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".4s">
						<img src="images/about/reviews-icon-2.webp" alt="review" class="img-fluid">
					</a>
					<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".6s">
						<img src="images/about/reviews-icon-3.webp" alt="review" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-lg-7 wow fadeInRight">
				<div class="pl50">
					<div class="shape shape-a1"><img src="images/shape/shape-3.svg" alt="shape"></div>
					<div class="testimonial-card-a tcd owl-carousel">

						@foreach($testimonials as $item)
						<div class="testimonial-card">
							<div class="tt-text">
								<p>{{$item['title']}}</p>
							</div>
							<div class="client-thumbs mt30">
								<div class="media v-center upset">
									<div class="media-body user-info v-center">
										<h5>{{$item['name']}}</h5>
										<p>{{$item['location']}}</p> <i class="fas fa-quote-right posiqut"></i>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Testinomial -->

<!--Start FAQS-->
<section class="faq-section py-3 py-md-4 pt-lg-5" id="faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="common-heading">
                    <h2 class="mb0 common-heading">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 wow fadeInRight">
                <div class="accordion" id="accordionExample-a">
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-b">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								What is E-Commerce development?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Ecommerce development is the process of correctly structuring and operating an online retail firm. Various components of the process are covered, including increasing supplies, cooperating with a transportation firm, and expanding the network.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								Which technology is the best for E-Commerce application development?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Front-end and back-end technologies are critical for eCommerce website development. The front-end is responsible for app development, while the back-end is responsible for the organization's digital foundations and management. Another technological consideration is the operating system (OS), such as macOS, Microsoft Windows, or Android, on which the entire system can run.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost to build an E-Commerce application?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
									<p>Because there are so many variables to designing an eCommerce website, the pricing might vary greatly. The cost of development is also determined by the size of the website and the options available to customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Can my E-Commerce application be hacked/ attacked by a virus?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, your eCommerce website can be easily hacked and infected with a virus. Websites are frequently targeted by hackers as a source of large amounts of data.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								Does your company offer custom E-Commerce application development solutions?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, our company provides a bespoke E-Commerce development service that can assist you in effectively managing your business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								How much time will it take to develop an E-Commerce application?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>In most cases, an efficient team can create a high-performing E-Commerce website in 6 to 10 weeks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								Will I get dedicated resources for my project?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>When it comes to E-Commerce website development, you may rest assured that the project will be adequately resourced. You can clarify your vision for the E-Commerce business and the goal you want to attain while speaking with our executives.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								Do you provide E-Commerce application development services in the USA?
                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, AppsNation provides E-Commerce development services in the United States. All you have to do is go to our website and look up our contact information. You can reach out to our team directly for assistance with the E-Commerce development process.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								Will you support me after the E-Commerce application is developed?
                            </button>
                        </h2>
                        <div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>All of the company's leaders have extensive expertise designing E-Commerce websites. Our devoted team will work with you to minimise any negative situations that arise as a result of an issue with your website.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
								Why choose AppsNation as an E-Commerce development company for online store development?
                            </button>
                        </h2>
                        <div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>With their E-Commerce knowledge, development, and execution skills, AppsNation has altered a number of organisations. This ability benefits E-Commerce businesses, allowing them to pursue the route of recognition and achievement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-11a" aria-expanded="true" aria-controls="collapseOne">
								Which platform is best for E-Commerce web development for my project?
                            </button>
                        </h2>
                        <div id="collapse-11a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The challenge of selecting a platform necessitates the advice of a professional. Experts can look at a variety of aspects, including functions, design, structure, and features, to determine which platform is best for your E-Commerce web development project.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-12a" aria-expanded="true" aria-controls="collapseOne">
							How can I hire E-Commerce website developers from AppsNation?
                            </button>
                        </h2>
                        <div id="collapse-12a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>With only a few clicks, you can hire an E-Commerce website developer from AppsNation. You can either send us an email or call us and we will assist you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-13a" aria-expanded="true" aria-controls="collapseOne">
								Are your E-Commerce developers certified?
                            </button>
                        </h2>
                        <div id="collapse-13a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Our E-Commerce programmers are certified and have a lot of experience. AppsNation is a haven for skilled and competent developers who can help your company make the most of E-Commerce dynamics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-14a" aria-expanded="true" aria-controls="collapseOne">
								What are the benefits of hiring E-Commerce web developers?
                            </button>
                        </h2>
                        <div id="collapse-14a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The most obvious benefit of hiring E-Commerce web developers is that you can avoid costly mistakes. They have a brilliant grasp of what works and apply it to E-Commerce businesses. This way, the well-designed E-Commerce website might bring in much-needed revenue for your company.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End FAQS -->

<!--Start Blogs-->
<section class="blogs-section py-5">
@if($data['status'] && count($data['data']) > 0)
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading wow fadeInDown">
					<h2 class="mb30">Latest Stories</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($data['data'] as $post)
			<div class="col-lg-4 col-sm-6 mt30 wow fadeInUp">
				<div class="card h-100">
					<a href="{{ $post['guid'] }}">
						<img src="https://blog.appsnation.co/wp-content/uploads/{{$post['featured_image_url']}}" alt="{{$post['post_title']}}" class="img-fluid">
					</a>
					<div class="entry-blog-post dg-bg2">
						<span class="bypost-">
							<a href="{{ $post['guid'] }}">
								<i class="fas fa-tag"></i> Appsnation
							</a>
						</span>
						<span class="posted-on-">
							<a href="{{ $post['guid'] }}">
								<i class="fas fa-clock"></i> {{ date('M d, Y', strtotime($post['post_date'])) }}
							</a>
						</span>
					</div>
					<div class="card-body">
						<h4 class="mb-0">
							<a href="{{ $post['guid'] }}">{{$post['post_title']}}</a>
						</h4>
					</div>
				</div>
			</div>
			@endforeach
			@else
		</div>
	</div>
	@endif
</section>

<div class="container">
	<div class="row mb-4 text-center wow fadeInLeft">
		<div class="col-12">
			<a href="https://blog.appsnation.co/category/e-commerce-app/" class="btn-main button-arounder lnk">View More
				<i class="fas fa-chevron-right fa-icon"></i>
				<span class="circle"></span>
			</a>
		</div>
	</div>
</div>
<!--End Blogs-->
@endsection