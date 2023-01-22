<!-- Start of Why choose us section
	============================================= -->
<section id="it-nw-why-choose" class="it-nw-why-choose-section position-relative">
    <div class="it-nw-whc-shape position-absolute"><img src="{{asset('website/assets/img/its-2/net2.png')}}" alt=""></div>
    <div class="container">
        <div class="it-nw-why-choose-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="it-nw-why-choose-text">
                        @foreach(OurProcess() as $process)
                        <div class="it-nw-section-title headline pera-content  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <span class="it-nw-title-tag">{!! $process->title !!} </span>
                            <p>{!! $process->sub_title !!}  </p>
                        </div>
                        @endforeach
                        <div class="it-nw-why-choose-feature">
                            @foreach($processesItem as $processItem)
                            <div class="it-nw-why-choose-feature-list d-flex align-items-center  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <div class="it-nw-why-choose-feature-icon">
                                    <i class="{!! $processItem->icon !!}"></i>
                                </div>
                                <div class="it-nw-why-choose-feature-text headline pera-content">
                                    <h3>{{$processItem->title}}</h3>
                                    <p>{!! $processItem->short_description !!}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="it-nw-why-choose-video position-relative">
                        <div class="it-nx-wc-video-img">
                            <img src="{{asset('website/assets/img/its-2/about/web.webp')}}" alt="">
                        </div>
                        <div class="it-nw-why-choose-video-play position-absolute">
                            <a class="video_box" href="https://www.youtube.com/watch?v=6zsr22OeF2I">
                                <i class="fas fa-play"></i>
                                <span class="video_btn_border border_wrap-1"></span>
                                <span class="video_btn_border border_wrap-2"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Why choose us section
