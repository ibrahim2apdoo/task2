<!-- Start of About section
	============================================= -->
<section id="it-nw-about" class="it-nw-about-section position-relative">
    <div class="it-nw-side-bg text-center position-absolute"><img src="{{asset('website/assets/img/its-2/side-line.png')}}" alt=""></div>
    <div class="it-nw-dot-bg text-center position-absolute"><img src="{{asset('website/assets/img/its-2/dot.png')}}" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="it-nw-about-img-wrapper">
                    <div class="it-nw-about-img-area d-flex">
                        <div class="it-nw-about-img">
                            <img src="{{asset('website/assets/img/its-2/about/amage11.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="it-nw-about-text-wrapper">
                    <div class="it-nw-section-title headline pera-content">
                        <span class="it-nw-title-tag">{{trans('AboutourCompany.About our Company')}}</span>
                        <h2>{{trans('AboutourCompany.10 years of excellence')}}</h2>
                        <p style="text-align:justify">{{trans('AboutourCompany.Manarat Al-Shabakat Almutatawirah')}} </p>
                    </div>
                    <div class="it-nw-about-tab-wrapper">
                        <div class="it-nw-about-tab-btn">
                            <ul id="tabs" class="nav text-capitalize nav-tabs">
                                <li class="nav-item"><a href="#" data-target="#mission" data-toggle="tab" class="nav-link text-capitalize">{{trans('AboutourCompany.Mission')}} </a></li>
                                <li class="nav-item"><a href="#" data-target="#vision" data-toggle="tab" class="nav-link text-capitalize">{{trans('AboutourCompany.Vision')}} </a></li>
                            </ul>
                        </div>
                        <div class="it-nw-about-tab-content ul-li-block pera-content">
                            <div id="tabsContent" class="tab-content">

                                <div id="mission" class="tab-pane fade">
                                    <div class="it-nw-about-tab-content">
                                        <p>{{trans('AboutourCompany.MissionDescription')}}  </p>
                                    </div>
                                </div>
                                <div id="vision" class="tab-pane fade">
                                    <div class="it-nw-about-tab-content">
                                        <p>{{trans('AboutourCompany.VisionDescription')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="it-nw-about-bottom d-flex position-relative">
                            <div class="it-nw-btn  text-center">
                                <a class="d-flex justify-content-center align-items-center" href="#">{{trans('main.Learn More')}} <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <span class="it-nw-about-arrow position-absolute"><img src="{{asset('website/assets/img/its-2/logo/arrow.png')}}" alt=""></span>
                            <div class="it-nw-about-cta d-flex">
                                <div class="it-nw-ab-cta-icon d-flex justify-content-center align-items-center">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="it-nx-about-cta-text headline">
                                    <span>{{trans('main.Contact Us')}}</span>
                                    <h4>+091 547 458 458</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About section
