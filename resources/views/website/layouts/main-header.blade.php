<header id="it-nw-header" class="it-nw-header-area">
    <div class="container">
        <div class="it-nw-header-top-content d-flex justify-content-between">
            <div class="it-nw-header-cta-social d-flex">
                <div class="it-nw-header-cta ul-li">
                    <ul>
                        <li><img src="{{asset('website/assets/img/its-2/icon/ic1.png')}}" alt=""> office@example.com</li>
                        <li><img src="{{asset('website/assets/img/its-2/icon/ic2.png')}}" alt=""> + (291) 1800-567-9090</li>
                    </ul>
                </div>
                <div class="it-nw-header-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                </div>
            </div>
            <div class="it-nw-header-login ul-li">
                <ul>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </div>
        </div>
        <div class="it-nw-header-main d-flex justify-content-between">
            <div class="it-nw-header-logo">
                <a href="#"><img src="{{asset('website/assets/img/its-2/logo/logo1.png')}}" alt=""></a>
            </div>
            <div class="it-nw-main-menu-wrap d-flex">
                <nav class="it-nw-main-navigation  ul-li">
                    <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                        <li class="side-demo position-relative"><a href="#!">Demos</a> <span>New</span></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('team')}}">Team</a></li>
                        <li><a href="{{route('service')}}">Service</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li class="dropdown">
                            <a href="#">Blog</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a href="{{route('blog')}}">Blog Page</a></li>
                                <li><a href="blog-single.html">Blog Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="it-nw-btn  text-center">
                    <a class="d-flex justify-content-center align-items-center" href="#">Consultation <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="it_nw_mobile_menu relative-position">
            <div class="it_nw_mobile_menu_button it_nw_open_it_nw_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="it_nw_it_nw_mobile_menu_wrap">
                <div class="it_nw_it_nw_mobile_menu_overlay it_nw_open_it_nw_mobile_menu"></div>
                <div class="it_nw_it_nw_mobile_menu_content">
                    <div class="it_nw_it_nw_mobile_menu_close it_nw_open_it_nw_mobile_menu">
                        <i class="far fa-times-circle"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <img src="{{asset('website/assets/img/its-2/logo/logo2.png')}}" alt="">
                    </div>
                    <nav class="main-navigation it_nw_it_nw_mobile_menu-dropdown  clearfix ul-li">
                        <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                            <li ><a href="#">Demos</a></li>
                            <li><a href="{{route('about')}}"  >About</a></li>
                            <li><a href="{{route('team')}}"  >Team</a></li>
                            <li><a href="{{route('service')}}"  >Service</a></li>
                            <li><a href="{{route('contact')}}"  >Contact</a></li>
                            <li class="dropdown">
                                <a href="#">Blog</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="{{route('blog')}}">Blog Page</a></li>
                                    <li><a  href="blog-single.html">Blog Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
