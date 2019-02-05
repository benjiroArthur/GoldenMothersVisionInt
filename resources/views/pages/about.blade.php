@extends('layouts.app')


@section('content')


    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>About Us</h2>
                {{--<p style="color: black">Lorem Ipsum is simply text of the industry. </p>--}}
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="about-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row about-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="about-image">
                        <img src="img/about.jpg" alt="about image">
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="about-content">
                        <h2>You are definitely intrigued to <br> discover who we are.</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only centuries, but also the electronic more typesetting, remaining essentially unchanged.Nullam id dolor ultricies vehicula ut id elit.</p>
                        <a href="#" class="default-btn">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->

    <section class="team-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Meet Out Volunteers</h2>
                <span class="heading-border"></span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> It has survived not only five centuries.</p>
            </div><!-- /Section Heading -->
            <div class="team-wrapper row">
                <div class="col-lg-6 sm-padding">
                    <div class="team-wrap row">
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-1.jpg" alt="team">
                                <div class="hover">
                                    <h3>Jonathan Smith <span>Communicator</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-1 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-2.jpg" alt="team">
                                <div class="hover">
                                    <h3>Angelina Rose <span>Certified Reader</span></h3>
                                </div>
                            </div>

                        </div><!-- /Team-2 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-3.jpg" alt="team">
                                <div class="hover">
                                    <h3>Taylor Swift <span>Event Creator</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-3 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-4.jpg" alt="team">
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
                        <p>
                            Become a volunteer of GMVINT today. Be a teacher to our village school and our
                            community medical screening. Volunteer today with us as a foreigner
                            and you stand a great chance of becoming part of our Ghanaian society.
                        </p>
                        <ul class="check-list">
                            <li><i class="fa fa-check"></i>Free accommodation for volunteers coming from outside Ghana.</li>
                            <li><i class="fa fa-check"></i>Foreigners stand a chance of becoming part of our Ghanaian Community.</li>
                            <li><i class="fa fa-check"></i>Its an opportunity to help poor children.</li>
                            <li><i class="fa fa-check"></i>You decide which Region you volunteer in.</li>
                            <li><i class="fa fa-check"></i>Joining is totally free. We don't need any money from you.</li>
                        </ul>
                        <a href="#" class="default-btn">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Team Section -->

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

    <div class="sponsor-section bd-bottom">
        <div class="container">
            <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                <li class="sponsor-item">
                    <img src="img/sponsor-1.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-2.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-3.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-4.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-5.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-6.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-7.png" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="img/sponsor-8.png" alt="sponsor-image">
                </li>
            </ul>
        </div>
    </div><!-- ./Sponsor Section -->




@endsection