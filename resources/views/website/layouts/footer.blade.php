




<!-- Start of Footer section
	============================================= -->



<a id="whats" class="whats" href="https://wa.me/{{phone()}}" target="_blank">
    <div style="width: 40px;">
        <img style="width:100%;" src="https://cdn3.iconfinder.com/data/icons/social-media-logos-flat-colorful/2048/5302_-_Whatsapp-512.png">
    </div>
</a>
<footer id="it-nw-fooer" class="it-nw-footer-section  position-relative" data-background="{{asset('website/assets/img/its-2/logo/image.jpg')}}">
    <div class="it-nw-fooer-widget-wrapper">
        <div class="container">
            <div class="it-nw-fooer-widget-area">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="it-nw-fooer-widget headline pera-content ul-li-block">
                            <div class="it-nw-logo-widget">
                                <a href="#"><img src="{{asset('website/assets/img/its-2/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="it-nw-fooer-widget headline pera-content ul-li-block">
                            <div class="it-nw-fooer-menu">
                                <h3 class="widget-title">{{trans('main.links')}}</h3>
                                <ul>
                                    <li><a href="{{route('about')}}">{{trans('main.About')}}</a></li>
                                    <li><a href="{{route('service')}}">{{trans('main.Service')}}</a></li>
                                    <li><a href="{{route('partners')}}">{{trans('main.Partners')}}</a></li>
                                    <li><a href="{{route('clients')}}">{{trans('main.clients')}}</a></li>
                                    <li><a href="{{route('projects')}}">{{trans('main.Projects')}}</a></li>
                                    <li><a href="{{route('contact')}}">{{trans('main.Contact us')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="it-nw-fooer-widget headline pera-content ul-li-block">
                            <div class="it-nw-fooer-menu">
                                <h3 class="widget-title">{{trans('main.Projects')}}</h3>
                                <ul>
                                    @foreach(Projects() as $title)
                                    <li><a href="{{route('project.show',$title->id)}}">{!! $title->title !!}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="it-nw-fooer-widget headline pera-content ul-li-block">
                            <div class="it-nw-contact-widget">
                                <h3 class="widget-title">{{trans('main.Contact info')}}</h3>
                                <ul>
                                    <li><i class="fas fa-phone"></i> <span style="margin-right: 26px;margin-left: 26px;"> {{phone()}} </span>  </li>
                                    <li><i class="fas fa-envelope"></i> <span style="margin-right: 26px;margin-left: 26px;"> {{email()}}  </span> </li>
                                    <li><i class="fas fa-map-marker-alt"></i> <span style="margin-right: 26px;margin-left: 26px;">380 St Kilda Road, Melbourne
										VIC 3004, Australia </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="it-nw-fooer-copyright">
        <div class="container">
            <div class="it-nw-copyright-wrap pera-content d-flex justify-content-between align-items-center">
                <div class="it-nw-copyright-text">
                    <p>© 2022 iTSource All rights reserved</p>
                </div>
                <div class="it-nw-copyright-menu ul-li">
                    <ul>
                        <li><a href="#">Privacy Policy </a></li>
                        <li><a href="#">Cookie Policy </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer section
	============================================= -->


<!-- For Js Library -->

<script src="{{asset('/website/assets/js/jquery.js')}}"></script>
<script src="{{asset('/website/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/website/assets/js/popper.min.js')}}"></script>
<script src="{{asset('website/assets/js/owl.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('website/assets/js/appear.js')}}"></script>
<script src="{{asset('website/assets/js/wow.min.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('website/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('website/assets/js/side-demo.js')}}"></script>
<script src="{{asset('website/assets/js/it-source-2.js')}}"></script>
</body>
</html>
