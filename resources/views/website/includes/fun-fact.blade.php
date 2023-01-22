<!-- Start of Fun_fact section
	============================================= -->
<section style="margin-bottom: 100px" id="it-nw-fun-fact" class="it-nw-fun-fact-section position-relative">
    <div class="container">
        <div class="it-nw-fun-fact-content position-relative">
            <div class="row">
                @foreach(facts() as $fact)
                <div class="col-lg-3 col-md-6">
                    <div class="it-nw-fun-fact-innerbox d-flex align-items-center">
                        <div class="it-nw-fun-fact-icon d-flex justify-content-center align-items-center">
                            <i class="{{$fact->icon}}"></i>
                        </div>
                        <div class="it-nw-fun-fact-text headline pera-content">
                            <h3 dir="ltr"><span class="counter">{{$fact->fact_number}}</span>+</h3>
                            <p>{!! $fact->title !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section >
<!-- End of Fun fact section
