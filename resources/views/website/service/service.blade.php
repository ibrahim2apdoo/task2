@extends('website.home')
@section('content')
    <!-- Start of Service page section
        ============================================= -->
    <section id="saas_two_service" class="saas_two_service_section">
        <div class="container mb-5 pb-5">
            <div class="row mb-5 pb-5">
                <!-- /section title -->
                <div class="service_content">
                    <div class="row justify-content-md-center">
                        <!-- /service-content -->
                        @foreach($services as $service)
                             <div class="col-lg-4 col-md-6 wow fadeFromUp">
                                <div class="service_content_box relative-position">
                                    <div class="service_icon_box relative-position">
                                        @if(!$service->image)
                                            <img class="index_image"
                                                 src="{{asset('uploads/default_image.png')}}" alt="logo">
                                        @else
                                            <img class="index_image"
                                                 src="{{$service->image}}"
                                                 onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                                 alt="logo">
                                        @endif
                                    </div>
                                    <div class="service_text_box saas2-headline pera-content">
                                        <h5 class="card-title">{!! $service->title !!}</h5>
                                        <p class="card-title"><a href="{{route('service.show',$service->id)}}" class="serviceTitle">{{trans('main.Read more')}}</a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End of Service section
        ============================================= -->

@endsection
