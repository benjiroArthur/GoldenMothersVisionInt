<div class="site-preloader-wrap">
    <div class="spinner">
        <img src="{{asset('img/gm-loader.png')}}" style="height: 100px; width: 100px">
    </div>
    {{--<P>GOLDEN MOTHERS VISION INTERNATIONAL</P>--}}
</div><!-- Preloader -->

<header id="header" class="header-section">
    <div class="top-header">
        <div class="container">
            <div class="top-content-wrap row">
                <div class="col-sm-8">
                    <ul class="left-info">
                        <li><a href="#"><i class="ti-email"></i>Info@goldenmothersvisionint.com</a></li>
                        <li><a href="#"><i class="ti-mobile"></i>+(233) 0247719755</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 d-none d-md-block">
                    <ul class="right-info">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="bottom-content-wrap row">
                <div class="col-sm-4">
                    <div class="site-branding">
                        <a href="#"><img src="{{asset('img/gm_logo.png')}}" alt="Brand"></a>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <ul id="mainmenu" class="nav navbar-nav nav-menu">
                        <li class="active"> <a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="{{url('/event')}}">Event</a>
                            <ul>
                                <li><a href="#upcomingEvent">Upcoming Events</a></li>
                                <li><a href="#pastEvent">Past Events</a></li>

                            </ul>
                        </li>
                        <li><a href="{{url('/pages')}}">Pages</a>
                            <ul>
                                <li><a href="#gallary">Gallery</a></li>
                                <li><a href="#volunteers">Volunteers</a></li>

                            </ul>
                        </li>
                        <li><a href="blog-grid.html">Blog</a>
                            <ul>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-list-classic.html">Classic List</a></li>
                                <li><a href="blog-list-modern.html">Modern List</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li> <a href="contact.html">Contact</a></li>
                    </ul>
                    <a href="{{url('/payment')}}" class="default-btn">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</header><!-- /Header Section -->
<div class="header-height"></div>