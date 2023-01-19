



<!-- Start of Slider section
	============================================= -->
@foreach(banner() as $banner)
    @if($banner->image)
<section id="it-nw-banner" class="it-nw-banner-section position-relative" data-background="{{$banner->image}}">
    @endif
    <div class="it-nw-banner-content">
        <div class="container">
            <div class="it-nw-banner-item position-relative">
                <div class="it-nw-banner-text headline pera-content">
                    <h1>{{$banner->title}}
                        <b id="typer">{{$banner->description}}</b></h1>
                </div>

            </div>
        </div>
    </div>
</section>
@endforeach
<!-- End of Slider section
