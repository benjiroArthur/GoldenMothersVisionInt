@extends('layouts.app')


@section('content')
    <section class="slider-section">
        <div class="slider-wrapper">
            <div id="main-slider" class="nivoSlider">
                <img src="{{asset('img/slider-1.jpg')}}" alt="" title="#slider-caption-1"/>
                <img src="{{asset('img/slider-5.jpg')}}" alt="" title="#slider-caption-2"/>
                <img src="{{asset('img/slider-3.jpg')}}" alt="" title="#slider-caption-3"/>
            </div><!-- /#main-slider -->

            <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                                <h1 class="wow cssanimation leFadeInRight sequence">Better Life for People</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-1 -->
            <div id="slider-caption-2" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">Together we  <br>can make a Difference</h1>
                                <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-2 -->
            <div id="slider-caption-3" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                                <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">Give a little. Change a lot.</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-3 -->
        </div>
    </section><!-- /#slider-Section -->

    <section class="promo-section bd-bottom">
        <div class="promo-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="{{asset('img/icon-1.png')}}" alt="prmo icon">
                            <h3>MAKE A DONATION</h3>
                            <p>
                                Every second, every minute, every hour, a child dies of malaria, Tuberculosis (TB) and other infectious diseases. Vulnerable women all over the world go through thick and thin to bring a standard to their children.
                            </p>
                            <p>
                                Donate $1 dollar to give a life to that child who needs medical help and to the woman who needs empowerment.
                            </p>
                            {{--<a href="#">Read More</a>--}}
                            <h3>DONATE NOW, DONATE TODAY.</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="{{asset('img/icon-2.png')}}" alt="prmo icon">
                            <h3>FUNDRAISING</h3>
                            <p>
                                Golden Mothers Vision International and coalition of NGO for Women and Children seeks to bring formal education to every child in every town or village in Ghana.
                            </p>
                            <br>
                            <P>
                                We are raising funds to support school building blocks and provision of educational materials in
                                the Rural and Deprived communities in the country.
                            </P>
                            {{--<a href="#">Read More</a>--}}
                            <h3>HELLO, DONATE NOW!</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="{{asset('img/icon-3.png')}}" alt="prmo icon">
                            <h3>Become A Volunteer</h3>
                            <p>
                                Become a volunteer of GMVINT today. Be a teacher to our village school and our
                                community medical screening. Volunteer today with us as a foreigner
                                and you stand a great chance of becoming part of our Ghanaian society.
                            </p>
                            <a href="#volunteers">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Promo Section -->

    <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Recent Causes</h2>
                <span class="heading-border"></span>
                <p>Golden Mothers Vision Internation<br>is embacking on a number of projects
                 to improve the life of people in the <br><strong>Deprived Areas</strong></p>
            </div><!-- /Section Heading -->
            <div class="causes-wrap row">
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('img/causes-1-1.jpg')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/causes-1-2.jpg')}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/causes-1-3.jpg')}}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">25%</span></div>
                            </div>
                        </div>
                        <div class="causes-details">
                            <h3>Face Of Golden Mother.</h3>
                            <p>
                                Maternal and Child Mortality is one of the biggest and challenging problems we face as a Nation.<br><br>
                            </p>

                            <div class="donation-box">
                                {{--<p><i class="ti-bar-chart"></i>Goal: $450000</p>--}}
                                {{--<p><i class="ti-thumb-up"></i>Raised: $55000</p>--}}
                            </div>
                            <a href="#" class="read-more" data-toggle="modal" data-target="#gmModal">Read More</a>
                        </div>
                    </div>
                </div><!-- /Causes-1 -->
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('img/causes-2-1.jpg')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/causes-2-2.jpg')}}" alt="Second slide">
                                    </div>
                                    {{--<div class="carousel-item">--}}
                                        {{--<img class="d-block w-100" src="{{asset('img/causes-2.jpg')}}" alt="Third slide">--}}
                                    {{--</div>--}}
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only dot">Next</span>
                                </a>
                            </div>
                            <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">45%</span></div>
                            </div>
                        </div>
                        <div class="causes-details">
                            <h3>Face Of Mother Ghana.</h3>
                            <p>As part of our vision to bring health to every child, woman and youth, we are embarking on a 3-day campaign on sanitation.</p>
                            <a href="#" class="read-more" data-toggle="modal" data-target="#mgModal">Read More</a>
                        </div>
                    </div>
                </div><!-- /Causes-2 -->

                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('img/causes-3-1.jpg')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/causes-3-2.jpg')}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/causes-3-3.jpg')}}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only text-primary">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">75%</span></div>
                            </div>
                        </div>
                        <div class="causes-details">
                            <h3>Women In The Oil And Gas Industry.</h3>
                            <p>Human resource is an essential ingredient in the growth process especially if the
                                quality of the human capital is high irrespective of sex.</p>
                            <a href="#" class="read-more" data-toggle="modal" data-target="#weModal">Read More</a>
                        </div>
                    </div>
                </div><!-- /Causes-3 -->
            </div>
        </div>
    </section><!-- /Causes Section -->

    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="{{asset('img/profile.jpg')}}" alt="profile">
                        <h3>Mrs Aggrey Abundant <span>CEO & Founder of GMVINT.</span></h3>
                        <p>Lorem Ipsum is simply dummy printing and industry. It has survived not only five centuries, but also the leap.</p>
                        <img src="{{asset('img/sign.png')}}" alt="sign">
                    </div>
                </div>
                <div class="col-md-8 xs-padding">
                    <div class="about-wrap row">
                        <div class="col-md-6 xs-padding">
                            <img src="{{asset('img/history.jpg')}}" alt="about-thumb">
                            <h3>Our History</h3>
                            <p>
                                GOLDEN MOTHERS VISION INTERNATIONAL with her board,
                                executives are the founders of the Coalition for Women
                                and Children Affairs (CONWAC), after careful study of Human
                                Rights violation and Discrimination in the World particularly that
                                of Ghana and the sub-Saharan Africa.
                                GOLDEN MOTHERS VISION INTERNATIONAL is
                                Also aware of our responsibility to support and protect every individual,
                                to safe guard the welfare of the poor and desirous of making optimum utilization
                                of the benefits that can be accrued from Advocacy and sensitization Programmes.
                            </p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                        <div class="col-md-6 xs-padding">
                            <img src="{{asset('img/mission.jpg')}}" alt="about-thumb">
                            <h3>Our Mission</h3>
                            <p>Lorem Ipsum is simply dummy printing and industry. It has survived not only five centuries, but also the leap electronic type essentially unchanged.</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->

    <section class="campaigns-section bd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="campaigns-wrap">
                        <h4>Featured Campaigns</h4>
                        <h2>Featured project to built a School.</h2>
                        <div style="background-color: #2a2a2a;">
                            <p>
                                Golden Mothers Vision International and coalition of NGO for Women and Children seeks to bring formal education to every child in every town or village in Ghana. We are raising funds to support school building blocks and
                                provision of educational materials in the Rural and Deprived communities in the country.
                            </p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">35%</span></div>
                        </div>
                        {{--<div class="donation-box">--}}
                            {{--<h3><i class="ti-bar-chart"></i>Goal: $450000</h3>--}}
                            {{--<h3><i class="ti-thumb-up"></i>Raised: $55000</h3>--}}
                        {{--</div>--}}
                        <a href="#" class="default-btn">Donate Now</a>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="video-wrap">
                        <img src="{{asset('img/video.jpg')}}" alt="video">
                        <div class="play">
                            <a class="img-popup" data-autoplay="true" data-vbtype="video" href="http://youtu.be/y_a-wB_1hHk"><i class="ti-control-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Featured Campaigns Section -->

    <section class="team-section bg-grey bd-bottom circle shape padding" id="volunteers">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Meet Out Volunteers</h2>
                <span class="heading-border"></span>
                {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> It has survived not only five centuries.</p>--}}
            </div><!-- /Section Heading -->
            <div class="team-wrapper row">
                <div class="col-lg-6 sm-padding">
                    <div class="team-wrap row">
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="{{asset('img/team-1.jpg')}}" alt="team">
                                <div class="hover">
                                    <h3>Jonathan Smith <span>Communicator</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-1 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="{{asset('img/team-2.jpg')}}" alt="team">
                                <div class="hover">
                                    <h3>Angelina Rose <span>Certified Reader</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-2 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="{{asset('img/team-3.jpg')}}" alt="team">
                                <div class="hover">
                                    <h3>Taylor Swift <span>Event Creator</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-3 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="{{asset('img/team-4.jpg')}}" alt="team">
                                <div class="hover">
                                    <h3>Michel Brown <span>Internet Specialist</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-4 -->
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="team-content">
                        <h2>Become a Volunteer?</h2>
                        <h3>Join your hand with us for a better life and beautiful future.</h3>
                        <p>Become a volunteer of GMVINT today. Be a teacher to our village school and our community medical screening. There will be Women empowerment programs all over the country.</p>

                        <ul class="check-list">
                            <li><i class="fa fa-check"></i>Free accommodation for volunteers coming from outside Ghana.</li>
                            <li><i class="fa fa-check"></i>Foreigners stand a chance of becoming part of our Ghanaian Community.</li>
                            <li><i class="fa fa-check"></i>Its an opportunity to help poor children.</li>
                            <li><i class="fa fa-check"></i>You decide which Region you volunteer in.</li>
                            <li><i class="fa fa-check"></i>Joining is totally free. We don't need any money from you.</li>
                        </ul>
                        <a href="#" class="default-btn" data-toggle="modal" data-target="#volunteerModal">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Team Section -->
{{--All Modals Starts Here--}}
    <div class="modal" tabindex="-1" role="dialog" id="volunteerModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Contact The Following Numbers To Become A Volunteer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>+233 247719755</p>
                    <p>+233 206224004</p>
                    <p>+233 0240922752</p>
                    <p>Or you can email us at gmvint@yahoo.com or conwaac@gmail.com</p>
                </div>

            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="mgModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center">Face Of Mother Ghana</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>As part of our vision to bring health to every child, woman and youth, we are embarking on a 3-day campaign on sanitation.</p>
                    <p>This we know will eliminate Cholera, one of the health issues associated with improper sanitation in Ghana. This is in collaboration with the Ministry of Health, Zoomlion Ghana, all Regional Coordinating Officers, all MCE’s and DCE’s.</p>
                    <p>The search for Sanitation ambassador is still on going.</p>
                    <p>To become a sponsor, please call: 0247719755</p>
                    <p>To become a partner, please call: 0240992252</p>
                    <p>“PRA 3FIN” #make change now</p>
                </div>

            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="weModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center">Women In The Oil and Gas Industry</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>Human resource is an essential ingredient in the growth process especially if the
                        quality of the human capital is high irrespective of sex. It is therefore worrying to note
                        that the literacy rate among adults in Ghana is 45.9%. It is also important to note that illiteracy is higher for females than males in all
                        regions of the country and much worse for the northern sector of the country. It is in this
                        direction that this Organisation seeks to identify some of the challenges that women
                        face in their economic activities and to find solutions to them in order to enhance
                        the participation of women in productive activity in Ghana.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="gmModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center">Women In The Oil and Gas Industry</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>
                        Maternal and Child Mortality is one of the biggest and challenging problems we face as a Nation. GMVINT is embarking on finding the grass root solution to have both mother and child safe. We believe in the power of education and information sharing. Thus, a voice is needed to champion this.
                    </p>
                    <p>
                        For more information please contact: 0247719755.<br>
                        To sponsor our maternal health project please call: 0206224004/ 0240922752.

                    </p>
                </div>

            </div>
        </div>
    </div>

    {{--All Modals End Here--}}

    <section id="counter" class="counter-section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-money"></i>
                        <h3 class="counter">85389</h3>
                        <h4 class="text-white">Money Donated</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-face-smile"></i>
                        <h3 class="counter">10693</h3>
                        <h4 class="text-white">Volunteer Around The World</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-user"></i>
                        <h3 class="counter">50177</h3>
                        <h4 class="text-white">People Impacted</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-comments"></i>
                        <h3 class="counter">669</h3>
                        <h4 class="text-white">Positive Feedbacks</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Counter Section -->

    <section class="events-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Upcoming Events</h2>
                <span class="heading-border"></span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> It has survived not only five centuries.</p>
            </div><!-- /Section Heading -->
            <div id="event-carousel" class="events-wrap owl-Carousel">
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="{{asset('img/events-1.jpg')}}" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Let's talk about the poor children education.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.It has survived not only five centuries.</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-1 -->
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="{{asset('img/events-2.jpg')}}" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Insure clean water to everyone in Africa.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.It has survived not only five centuries.</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-2 -->
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="{{asset('img/events-3.jpg')}}" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Nepal Earthquake Clean Water Initiative.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.It has survived not only five centuries.</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-3 -->
            </div>
        </div>
    </section><!-- Events Section -->

    <section class="testimonial-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>What People Say</h2>
                <span class="heading-border"></span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> It has survived not only five centuries.</p>
            </div><!-- /Section Heading -->
            <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                <div class="testimonial-item">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="testi-footer">
                        <img src="{{asset('img/team-1.jpg')}}" alt="profile">
                        <h4>Jonathan Smith <span>Marketer</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="testi-footer">
                        <img src="{{asset('img/team-2.jpg')}}" alt="profile">
                        <h4>Angelina Rose <span>Designer</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="testi-footer">
                        <img src="{{asset('img/team-3.jpg')}}" alt="profile">
                        <h4>Taylor Swift <span>Developer</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="testi-footer">
                        <img src="{{asset('img/team-4.jpg')}}" alt="profile">
                        <h4>Michel Brown <span>Programer</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Testimonial Section -->

    <section class="blog-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Recent Stories</h2>
                <span class="heading-border"></span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> It has survived not only five centuries.</p>
            </div><!-- /Section Heading -->
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="{{asset('img/home-blog-1.jpg')}}" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                    <h3><a href="#">Standard gallery post</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div><!-- Post 1 -->
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="{{asset('img/home-blog-2.jpg')}}" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                    <h3><a href="#">Blog post with couple photos</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div><!-- Post 2 -->
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="{{asset('img/home-blog-3.jpg')}}" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                    <h3><a href="#">Standard gallery post</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div><!-- Post 3 -->
                    </div>
                </div><!-- Blog Posts -->
            </div>
        </div>
    </section><!-- Blog Section -->

    <div class="sponsor-section bd-bottom">
        <div class="container">
            <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                <li class="sponsor-item">
                    <img src="{{asset('img/sponsor-1.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('img/sponsor-2.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('img/sponsor-3.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('img/sponsor-4.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('img/sponsor-5.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('img/sponsor-6.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('img/sponsor-7.png')}}" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{asset('img/sponsor-8.png')}}" alt="sponsor-image">
                </li>
            </ul>
        </div>
    </div><!-- ./Sponsor Section -->





@endsection