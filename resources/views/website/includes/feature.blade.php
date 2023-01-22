<!-- Start of Feature section
	============================================= -->
<section id="it-nw-feature" class="it-nw-feature-section position-relative">
    <div class="container">
        <div class="it-nw-section-title headline pera-content text-center middle-align wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">
            @foreach(Solution_We_Offer() as $Solution_We_Offer)
            <span class="it-nw-title-tag"> {!! $Solution_We_Offer->title !!}</span>
            <h2> {!! $Solution_We_Offer->sub_title !!}</h2>
            @endforeach
        </div>
        <div class="it-nw-feature-content">
            <div class="row justify-content-center">
                @foreach($features as $feature)
                <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="it-nw-feature-innerbox text-center position-relative custom-feature">
                        <div class="it-nw-feature-inner-icon position-absolute d-flex justify-content-center align-items-center">
                            <i class="{{$feature->icon}}"></i>
                        </div>
                        <div class="it-nw-feature-inner-text headline pera-content">
                            <h3>{{$feature->title}}</h3>
                            <div>{!! $feature->short_description !!}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End of Feature section
