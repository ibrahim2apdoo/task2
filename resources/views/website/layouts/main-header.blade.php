<header id="it-nw-header" class="it-nw-header-area">
    <div class="container">
        <div class="it-nw-header-top-content d-flex justify-content-between">
            <div class="it-nw-header-cta-social d-flex">
                <div class="it-nw-header-cta ul-li">
                    <ul>
                        <li><a href="https://mail.google.com/mail/?view=cm&source=mailto&to={{email()}}" target="_blank">
                            <img src="{{asset('website/assets/img/its-2/icon/ic1.png')}}" alt=""> {{email()}}
                            </a></li>
                        <li><a href="https://wa.me/{{phone()}}" target="_blank">
                                <img src="{{asset('website/assets/img/its-2/icon/ic2.png')}}" alt="">{{phone()}}
                            </a></li>

                        <li>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="{{LaravelLocalization::getCurrentLocaleNative() == $properties['native'] ? 'd-none' : '' }}"
                                   rel="alternate" hreflang="{{ $localeCode }}"
                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <span class="symbol symbol-30 mr-3">
                                    <img rel="alternate"  style="width: 15px;" src="{{asset('dashboard/media/svg/flags/'.$localeCode .'.svg')}}" alt=""/>
                                        <span class="navi-text">{{ $properties['native'] }}</span>
                                </span>
                                </a>

                            @endforeach
                            <!--end::Languages-->
                        </li>
                    </ul>
                </div>
                <div class="it-nw-header-social">
                    @foreach(social() as $social)
                    <a href="{{$social->contact}}" target="_blank"><i class="{{$social->icon}}"></i></a>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="it-nw-header-main d-flex justify-content-between">
            <div class="it-nw-header-logo">
                <a href="#"><img src="{{asset('website/assets/img/its-2/logo/logo1.png')}}" alt=""></a>
            </div>
            <div class="it-nw-main-menu-wrap d-flex">
                <nav class="it-nw-main-navigation  ul-li">
                    <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                        <li class="side-demo position-relative"><a href="{{route('home')}}">{{trans('main.Home')}}</a></li>
                        <li><a href="{{route('about')}}">{{trans('main.About')}}</a></li>
                        <li><a href="{{route('service')}}">{{trans('main.Service')}}</a></li>
                        <li><a href="{{route('partners')}}">{{trans('main.Partners')}}</a></li>
                        <li><a href="{{route('clients')}}">{{trans('main.clients')}}</a></li>
                        <li><a href="{{route('projects')}}">{{trans('main.Projects')}}</a></li>
                        <li><a href="{{route('contact')}}">{{trans('main.Contact us')}}</a></li>

                        <li class="dropdown">
                            <a href="#">{{trans('main.Blog')}}+</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a href="{{route('user.blog.index')}}">{{trans('main.Blog Page')}}</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="it-nw-btn  text-center">
                    <a class="d-flex justify-content-center align-items-center" href="{{route('contact.index')}}"> {{trans('main.Get A Quote')}}<i class="fas fa-arrow-right"></i></a>
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
                            <li ><a href="{{route('home')}}">{{trans('main.Home')}}</a></li>
                            <li><a href="{{route('about')}}"  >{{trans('main.About')}}</a></li>
                            <li><a href="{{route('service')}}"  >{{trans('main.Service')}}</a></li>
                            <li><a href="{{route('partners')}}"  >{{trans('main.Partners')}}</a></li>
                            <li><a href="{{route('clients')}}"  >{{trans('main.clients')}}</a></li>
                            <li><a href="{{route('projects')}}">{{trans('main.Projects')}}</a></li>
                            <li><a href="{{route('contact')}}">{{trans('main.Contact us')}}</a></li>
                            <li class="dropdown">
                                <a href="#">{{trans('main.Blog')}}+</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="{{route('user.blog.index')}}">{{trans('main.Blog Page')}}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
