@extends('app.main')
@section('body-id', 'spot-the-worng-one')
@section('content')

<!--Breadcrumb Area-->
<!--start hero section bomb defuse -->
<section class="spot-the-wrong-one-hero   mt-6 wow fadeIn">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif
<div class="container wow fadeIn" data-wow-delay="0.2s">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="spot-the-wrong-one-hero-img-1">
                <img src="{{ asset('images/case-studies/spot-the-wrong-one/girl.webp') }}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="spot-the-wrong-one-hero-img-2">
                <img src="{{ asset('images/case-studies/spot-the-wrong-one/play-1.webp') }}" class="img-fluid pt-md-5" alt="">
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="spot-the-wrong-one-hero-img-3">
                <img src="{{ asset('images/case-studies/spot-the-wrong-one/boy-1.webp') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>
</section>

<!-- End Breadcrumb Area-->

<!--start introduction section  -->
<section class="game-space-advanture-introduction-section introduction-section  my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/dinasor-5.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/dinasor-3.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/perrot-1.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Introduction <span> Spot The Wrong</span></h2>

                    <p>"Spot The Wrong One" is a brain-boosting puzzle game designed to enhance <br> children’s visual logic and cognitive skills. Developed by BabyApps for kids <br> aged 4–10, it turns learning into a fun visual challenge. Players identify the<br> odd one out among objects in colorful, engaging layouts. The game is<br> offline-friendly and free from ads, making it ideal for safe, focused screen <br> time. It’s perfect for both casual play and educational environments. </p>
                </div>

            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/dinasor-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/doll.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/cat-1.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/Introduction-screen.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start introduction section  -->


<!--start project overview section  -->
<section class="game-space-advanture-introduction-section introduction-section  my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/dog.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/tran-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/perrot-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Project <span> Overview</span></h2>

                    <p>Our goal was to develop a smart, tap-based puzzle experience for children <br> that improves focus, pattern recognition, and logic. The game features <br>three difficulty levels — easy, medium, and hard — tailored to different age<br> groups. Each level is designed to gently increase challenge, building <br>confidence as kids progress. The interface is intuitive and requires<br> no reading, ideal for younger learners. The project aligns with BabyApps’ <br> mission to blend play and learning seamlessly.</p>
                </div>

            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/dinasor-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/doll.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/cat-1.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/project-overview-screen-1.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/project-overview-screen-2.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start project overview section  -->

<!--start project goal section  -->
<section class="game-space-advanture-introduction-section introduction-section  my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/cycle.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-2 col-4 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/dinasor-4.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Game <span> Goal</span></h2>

                    <p>"We set out to build a puzzle game that supports early cognitive <br> development in a playful, stress-free setting. The game needed<br> to be fun, visually stimulating, and suitable for independent use.<br>Our aim was to enhance attention to detail and reasoning <br>through gamified spotting challenges. The product had to serve<br> parents, teachers, and kids alike. Ultimately, we wanted to make <br>screen time more purposeful and enriching. </p>
                </div>

            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/bird.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-2 col-4 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/cat-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/game-goal-screen.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start project goal section  -->



<!--start character  section  -->
<section class="game-space-advanture-introduction-section introduction-section  my-5">
    <div class="container mt-6">
        <div class="row">





            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/taddy.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="col-4 text-center">
                        <h2 class="title mt-5">Characters </h2>

                    </div>

                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/dinasor-egg-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/Characters-morkup.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--End  character  section  -->


<!--start  player feedback  section  -->
<section class="game-space-advanture-introduction-section introduction-section">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/dinasor-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="col-4 text-center">
                        <h2 class="title mt-5">Player <span>Feedback</span> </h2>

                    </div>

                    <div class="offset-2 col-2 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/dinasor.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/player-feedback-screen-1.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/player-feedback-screen-2.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--End  player feedback  section  -->

 <!--start Target Audience section  -->
<section class="game-space-advanture-introduction-section introduction-section  my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/perrot-3.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-2 col-4 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/doll.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Target  <span> Audience</span></h2>

                    <p>The game is designed for kids aged 4 to 10, including preschoolers, early <br> learners, and curious young gamers. It also serves parents looking for <br>safe, educational apps and teachers who use games for classroom<br> engagement. Non-readers benefit from easy controls, while older kids<br> tackle more advanced logic challenges. It’s also a handy travel<br> companion due to its offline functionality. The broad design makes it <br>enjoyable and useful across learning stages. </p>
                </div>

            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/dinasor-egg-1.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-2 col-4 ">
                        <div class="imageFloteRight wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/dinasor-6.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/target-audience-screen.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start Target Audience section  -->



 <!--start Results & Impact section  -->
<section class="game-space-advanture-introduction-section introduction-section  my-5">
    <div class="container mt-6">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/octubas.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/tran-2.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                    <div class="offset-2 col-2 ">
                        <div class="imageFloteLeft wow fadeInRight d-flex" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/robot.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-12 text-center ">
                <div class="introduction-background">
                    <h2 class="title mb-4">Results &   <span> Impact</span></h2>

                    <p>"Spot The Wrong One" has become a favorite among kids, parents, and <br> teachers seeking logic-based entertainment. Children enjoy solving  <br>puzzles while unknowingly sharpening focus, memory, and reasoning. <br> Parents appreciate its calm interface, developmental value, and offline  <br>usability. Teachers find it useful for reinforcing attention <br> and discrimination skills in a game format. It’s proven that learning  <br>through play can be both fun and effective. </p>
                </div>

            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/taddy.webp')}}" alt="Duck Toy">
                        </div>
                    </div>

                   
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/Introduction-screen.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
            <div class="col-12">
                <img loading="lazy" src="{{asset('images/case-studies/spot-the-wrong-one/morkup.webp')}}" class="img-fluid" alt="Duck Toy">

            </div>
        </div>
    </div>
</section>
<!--start Results & Impact section  -->
@endsection