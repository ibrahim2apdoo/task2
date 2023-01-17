@extends('website.home')
@section('content')
    <!-- Start of Service page section
        ============================================= -->
    <section style="margin-top: 200px" id="news-feed" class="news-feed-section mb-5">
        <div class="container">
            <div class="blog-feed-content">
                <div class="row">
                    <div class="col-md-8">

                        <div class="saasio-blog-details-content">
                            <div class="blog-details-img aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="100" data-aos-duration="1000">
                                @if(!$service->image)
                                    <img class="index_image"
                                         src="{{asset('uploads/default_image.png')}}" alt="logo" style="margin-bottom: 100px;">
                                @else
                                    <img class="index_image"
                                         src="{{$service->image}}"
                                         onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                         alt="logo" style="margin-bottom: 100px;">
                                @endif
                            </div>
                            <div class="blog-details-text dia-headline aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                                <h2>{{$service->title}}</h2>
                                <article>
                                    <ul>
                                        <li style="text-align:justify"> {{$service->short_description}}</li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service section
        ============================================= -->

@endsection
