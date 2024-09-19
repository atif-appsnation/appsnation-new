@if ($message = Session::get('success'))
<!-- <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{-- $message --}}</strong>
</div> -->
@endif

<!--Start Enquire Form-->
<section class="contact py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 mt-4 mt-md-4 mt-lg-0">
				<div class="niwax23form shadow">
                    <div class="common-heading text-l">-
                        <!-- <span>Contact Now</span> -->
							{!! NoCaptcha::renderJs() !!}

                        <h2 class="mt0 mb0">Have Question? Write a Message</h2>
                        <p class="mb60 mt20 text-start">We will catch you as early as we receive the message</p>
                    </div>
					<div class="form-block contact-us-form">
					<form id="contactForm33" method="post" data-toggle="validator" class="shake" action="{{route('leads')}}">
						@csrf
						<div class="row">
							<div class="form-group col-sm-6">
								<input type="text" name="name" id="name" placeholder="Enter name" required="" data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-6">
								<input type="email" name="email" id="email" placeholder="Enter email" required="">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6">
								<input type="text" id="mobile" name="mobile" placeholder="Enter mobile" required="" data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-6">
								<select name="service" class="custom-select">
									<option selected="">Select</option>
									<option value="mobile-app-development">Mobile App Development</option>
									<option value="ar-vr-app-development">AR & VR App Development</option>
									<option value="strategic-design-consultancy">Strategic Design Consultancy</option>
									<option value="mobile-app-qa-and-testing">Mobile App QA and Testing</option>
									<option value="web-portal-development">Web Portal Development</option>
									<option value="connected-devices">Connected Devices</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6">
								<input type="text" id="company" name="company" placeholder="Enter company name (optional)" required="" data-error="">
							</div>
							<div class="form-group col-sm-6">
								<input type="text" id="subject" name="subject" placeholder="Enter subject" required="" data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<textarea id="message" name="message" rows="5" placeholder="Enter your message" required=""></textarea>
							<div class="help-block with-errors"></div>
						</div>
						
                        <div class="form-group mb-2 captchaContainer3" id="captchaContainer" style="display: none;">
								{!! NoCaptcha::display() !!}
							</div>
						<button type="submit" name="submit" id="form-submit" class="btn button-arounder lnk">Submit
							<i class="fas fa-chevron-right fa-icon"></i>
						</button>
						<div id="msgSubmit" class="h3 text-center hidden"></div>
						<div class="clearfix"></div>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Enquire Form-->

<!--Start Enquire Form-->
<section class="location py-5">
	<div class="container">
		<div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 col-xl">
                <img src="{{asset('images/location/california.webp')}}" alt="USA" class="pt-4 img-fluid w-100">
                <h4 class="pt-4">California, USA</h4>
                <p class="pt-3">3415 S Sepulveda Blvd, Los Angeles, CA, USA</p>
                <a href="https://maps.app.goo.gl/TqBHrPsEMyjLiEHP6" target="blank" class="btn-outline mt-3">View on Map
                    <i class="fas fa-chevron-right fa-icon"></i>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl">
                <img src="{{asset('images/location/montana.webp')}}" alt="USA" class="pt-4 img-fluid w-100">
                <h4 class="pt-4">Montana, USA</h4>
                <p class="pt-3">1001 S. Main St., Kalispell, MT 59901, USA</p>
                <a href="https://maps.app.goo.gl/naWDhdSXjXCBXpzq6" target="blank" class="btn-outline mt-3">View on Map
                    <i class="fas fa-chevron-right fa-icon"></i>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl">
                <img src="{{asset('images/location/saudia-arabia.webp')}}" alt="Saudia Arabia" class="pt-4 img-fluid w-100">
                <h4 class="pt-4">Riyadh, KSA</h4>
                <p class="pt-3">Floor 3, Building 7264, Ibn Al Fourat, Riyadh, KSA</p>
                <a href="https://maps.app.goo.gl/fEeqH5rq3gdBEMsJA" target="blank" class="btn-outline mt-3">View on Map
                    <i class="fas fa-chevron-right fa-icon"></i>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl">
                <img src="{{asset('images/location/united-arab-emirates.webp')}}" alt="Saudia Arabia" class="pt-4 img-fluid w-100">
                <h4 class="pt-4">Dubai, UAE</h4>
                <p class="pt-3">Cluster D - Jumeirah Lake Towers - Dubai - UAE</p>
                <a href="https://maps.app.goo.gl/fEeqH5rq3gdBEMsJA" target="blank" class="btn-outline mt-3">View on Map
                    <i class="fas fa-chevron-right fa-icon"></i>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl">
                <img src="{{asset('images/location/pakistan.webp')}}" alt="Pakistan" class="pt-4 img-fluid w-100">
                <h4 class="pt-4">Karachi, PAK</h4>
                <p class="pt-3">Suite# 309، Tariq Centre, Tariq Rd, Karachi, PAK</p>
                <a href="https://maps.app.goo.gl/ZT38EBPEhifKzRaN9" target="blank" class="btn-outline mt-3">View on Map
                    <i class="fas fa-chevron-right fa-icon"></i>
                </a>
            </div>
		</div>
	</div>
</section>
<!--End Enquire Form-->

<footer class="footer footerdex dark-footer">
    <div class="container py-3">
        <div class="row justify-content-between">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4  pt40 pb40">
                <div class="footer-a">
                    <h2>We would love to hear from you.</h2>
                    <p class="mt10 text-white">Feel free to reach out if you want to collaborate with us, or simply have a call.</p>
                    <div class="contactinfo mt30">
                        <a href="mailto:info@appsnation.co"><span><i class="fa-solid fa-envelope pe-2"></i></span> info@appsnation.co</a>
                        <a href="tel:+13237989803"><span><i class="fa-solid fa-mobile pe-2"></i></span> +1 (323) 798-9803</a>
                    </div>
                    <div class="fttlnks flexend mt-3">
                        <h5>Follow Us</h5>
                        <div class="ff-social-icons mt30">
                            <a href="https://www.facebook.com/appsnation.co" target="blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="https://x.com/AppsnationCo" target="blank">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/appsnation/" target="blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.instagram.com/appsnation.us/" target="blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="row fttlnks">
                    <div class="col-12 col-sm-4 pt40">
                        <h5>Our Address</h5>
                        <h6 class="mt20 mb-0">CA, USA</h6>
                        <p>3415 S Sepulveda Blvd #1100, Los Angeles, CA 90034, United States</p>
                        <h6 class="mt20 mb-0">Montana, USA</h6>
                        <p>1001 South Main Street, Kalispell, MT 59901, USA</p>
                        <h6 class="mt20 mb-0">Saudi Arabia</h6>
                        <p>Floor 3, Building 7264, Ibn Al Fourat, Jareer, P.O 12837 Riyadh, Saudi Arabia</p>
                        <!-- <h4 class="mt20 mb-0">Pakistan</h4>
                        <p>Plot # 115-B, P.E.C.H.S Block 2, 75400, Karachi, Pakistan</p> -->
                    </div>
                    <div class="col-12 col-sm-4 pt40">
                        <h5>Useful Link</h5>
                        <ul class="footer-address-list link-hover">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/about-us')}}">About Us</a></li>
                            <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                            <li><a href="{{url('/career')}}">Career</a></li>
                            <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                            <li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
                            <li><a href="{{url('/company-policy')}}">Company Policy</a></li>
                            <li><a href="https://hub.appsnation.co/" target="_blank">Hub</a></li>
                            <li><a href="https://hub.appsnation.co/register" target="_blank">Register as New Customer</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-4 pt40">
                        <h5>Services</h5>
                        <ul class="footer-address-list link-hover">
                            <li><a href="{{url('/android-app-development')}}">Android App Development</a></li>
                            <li><a href="{{url('/ios-app-development')}}">iOS App Development</a></li>
                            <li><a href="{{url('/game-app-development')}}">Game App Development</a></li>
                            <li><a href="{{url('/cross-platform-app-development')}}">Cross App Development</a></li>
                            <li><a href="{{url('/ar-app-development')}}">AR App Development</a></li>
                            <li><a href="{{url('/vr-app-development')}}">VR App Development</a></li>
                            <li><a href="{{url('/e-commerce-app-development')}}">Ecommerce App Development</a></li>
                            <li><a href="{{url('/web-app-development')}}">Web App Development</a></li>
                            <li><a href="{{url('/iot-app-development')}}">IoT App Development</a></li>
                            <li><a href="{{url('/wearable-app-development')}}">Wearable App Development</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-copyrights">
                <p class="py-2 text-white">© Copyrights 2024. All Rights Reserved. Appsnation.co</p>
            </div>
        </div>
    </div>
</footer>

<!-- lead generaton popup start -->
<div class="modal leadpopup" id="leadModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="innerbody">
                    <div class="innerleft">
                        <div class="leadbtnclose">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
                        </div>
                        <h3>LET'S GET IN TOUCH</h3>
                        <div class="form-block mt20">
                            <form action="{{route('leadsservices')}}" id="quotes-form" method="post">
                                @csrf
                                <div class="fieldsets row">
                                    <div class="col-md-12">
                                        <label class="form-label">Your Name</label>
                                        <input type="text" name="name" required="required" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Your Email</label>
                                        <input type="email" name="email" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="fieldsets row">
                                    <div class="col-md-12">
                                    <label class="form-label">Your Mobile Number</label>
                                        <input type="tel" required="required" name="mobile" class="form-control">
                                    </div>
                                </div>
                                <div class="fieldsets row">
                                    <div class="col-md-12">
                                        <label class="form-label">Your Message</label>
                                        <textarea class="form-control" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="fieldsets mt20">
                                    <button type="submit" name="submit" class="lnk btn-main button-arounder">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="innerright">
                        <h2 class="text-white">Ready To Become A Digital Titan In Your Niche?</h2>
                        <p class="text-white pt-4">With modern technology, unparalleled experience &amp; a desire for innovation, our team is ready to bring your digital business idea to life.</p>
                        <p class="text-white pt-5">Fill in this form to start the process</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- lead generaton popup end -->

<!-- End Footer -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Get A Quote</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-block header-quote-form">
                    <form action="{{route('leads')}}" method="post" id="contactForm" data-toggle="validator" class="shake">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" id="name" name="name" placeholder="Enter name" required="" data-error="Please fill Out" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" id="email" name="email" placeholder="Enter email" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" id="mobile" name="mobile" placeholder="Enter mobile" required="" data-error="Please fill Out">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <select name="service" class="custom-select">
                                    <option selected="">Select</option>
                                    <option value="mobile-app-development">Mobile App Development</option>
                                    <option value="ar-vr-app-development">AR & VR App Development</option>
                                    <option value="strategic-design-consultancy">Strategic Design Consultancy</option>
                                    <option value="mobile-app-qa-and-testing">Mobile App QA and Testing</option>
                                    <option value="web-portal-development">Web Portal Development</option>
                                    <option value="connected-devices">Connected Devices</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" name="company" id="company" placeholder="Enter company name (optional)" required="" data-error="">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" id="subject" name="subject" placeholder="Enter subject" required="" data-error="Please fill Out">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" rows="5" placeholder="Enter your message" required=""></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group mb-2">
							{!! NoCaptcha::renderJs() !!}
							{!! NoCaptcha::display() !!}
						</div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" id="form-submit" class="btn lnk button-arounder bg-btn">Submit <i class="fas fa-chevron-right fa-icon"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>


<script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/plugin.min.js')}}"></script>
<script src="{{asset('js/swiper.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/image-comparison-slider.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>


<script>

    $(window).on('load', function() {

        // checkCookie.click();
        // var now = new Date();
        // var time = now.getTime();
        // var expireTime = time + 1000 * 36000;
        // now.setTime(expireTime);


        // console.log(expireTime);

        // if (aa == 'cookie=ok') {
        //     console.log("yes");
        // } else {
        //     console.log("no");
        //     var aa = document.cookie = 'cookie=ok';

        // }

        // var delayMs = 3000; // delay in milliseconds
        // setTimeout(function() {
        //     $('#leadModal').modal('show');
        // }, delayMs);

        // $.cookie('popup', 'seen', {
        //     expires: 365,
        //     path: '/'
        // });


        // }

        // $("#focus-error").focus();  
    });

</script>
<script>
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + ((exdays * 0.000694444) * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        let user = getCookie("username11");
        if (user != "") {
            // alert("Welcome again " + user);
            console.log("no");
        } else {

            var delayMs = 3000; // delay in milliseconds
            setTimeout(function() {
                $('#leadModal').modal('show');
            }, delayMs);
            console.log("yes");

            user = "talha";
            // user = prompt("Please enter your name:", "");
            if (user != "" && user != null) {
                setCookie("username11", user, 1);
            }
        }
    }
</script>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        
		if(document.getElementsByClassName('captchaContainer1')[0].style.display == 'none')
		{
			event.preventDefault(); 

		}
        document.getElementsByClassName('captchaContainer1')[0].style.display = 'block';
    });

    document.getElementById('contactForm1').addEventListener('submit', function(event) {
        
		if(document.getElementsByClassName('captchaContainer')[0].style.display == 'none')
		{
			event.preventDefault(); 

		}
        document.getElementsByClassName('captchaContainer')[0].style.display = 'block';
    });

	document.getElementById('contactForm2').addEventListener('submit', function(event) {
        
		if(document.getElementsByClassName('captchaContainer2')[0].style.display == 'none')
		{
			event.preventDefault(); 

		}
        document.getElementsByClassName('captchaContainer2')[0].style.display = 'block';
    });

	document.getElementById('contactForm33').addEventListener('submit', function(event) {
		// if(document.getElementsByClassName('captchaContainer3')[0].style.display == 'none')
		// {
			event.preventDefault(); 

		// }
        document.getElementsByClassName('captchaContainer3')[0].style.display = 'block';
    });
</script>

<!-- <body onload="checkCookie()"></body> -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/65c63c218d261e1b5f5e588c/1hm75lpju';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<script>
window.onload = function() {
     setTimeout(function() {
        document.querySelector('.main-ban').classList.remove('hidden');
    }, 500);
    
};
</script>
</body>

</html>