@extends('website.home')
@section('content')

    <!-- Start of about section
        ============================================= -->
    <section style="margin-top: 100px" id="saas_two_about" class="saas_two_about_section relative-position">
        <div class="container">
            <div class="about_content_s2">
                <div class="row">
                    @foreach(about() as $vision)
                        @if($loop->index % 2 == 1)
                        <div class="col-lg-6 col-md-12 wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="s2-about_img" style="height: 450px">
                                {{--                            <img src="{{asset('website/assets/img/its-2/about/imag1.1.jpg')}}" >--}}
                                @if(!$vision->image)
                                    <img style="height: 100%" alt=""
                                         src="{{asset('uploads/default_image.png')}}">
                                @else
                                    <img src="{{$vision->image}}"
                                         onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                         style="height: 100%" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="s2-about_text_icon">
                                <div class="s2-about_text saas2-headline pera-content">
                                    <h3 >{{$vision->title}}</h3>
                                    {!!  $vision->description !!}
                                </div>
                            </div>
                        </div>
                        @else
                            <div class="col-lg-6 col-md-12 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="s2-about_text_icon">
                                    <div class="s2-about_text saas2-headline pera-content">
                                        <h3>{{$vision->title}}</h3>
                                        <p>{!! $vision->description !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="s2-about_img" style="height: 450px">
                                    {{--                            <img src="{{asset('website/assets/img/its-2/about/imag1.1.jpg')}}" >--}}
                                    @if(!$vision->image)
                                        <img style="height: 100%" alt=""
                                             src="{{asset('uploads/default_image.png')}}">
                                    @else
                                        <img src="{{$vision->image}}"
                                             onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                             style="height: 100%" alt="">
                                    @endif
                                </div>
                            </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End of About  section
        ============================================= -->
    @include('website.includes.fun-fact')
@endsection
