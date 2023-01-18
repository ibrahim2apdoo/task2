@extends('website.home')
@section('content')
    <!-- Start of Service page section
        ============================================= -->
    <section style="margin-top: 200px" id="news-feed" class="news-feed-section mb-5">
        <div class="container">
            <div class="blog-feed-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="saasio-blog-sidebar">
                            <div class="side-bar-widget">
                                <div class="category-widget dia-headline ul-li-block">
                                    <h3 class="widget-title-2">{{trans('main.All Services')}}</h3>
                                    <ul>
                                        @foreach($services as $AllServices)
                                            <li class="">
                                                <a class="singleServiceCat" href="{{route('service.show',$AllServices->id)}}">{{$AllServices->title}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <li style="text-align:justify"> {{$service->description}}</li>
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
