@extends('website.home')
@section('content')

    <!-- Start of about section
        ============================================= -->
    <section style="margin-top: 100px" id="saas_two_about" class="saas_two_about_section relative-position">
        <div class="container">
            <div class="about_content_s2">
                <div class="row">
                    @foreach(Vision() as $vision)

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
                                <h3>{{$vision->title}}</h3>
                                <p>{{$vision->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <br>
                <br>
                <div class="row">
                    @foreach(Mission() as $mission)
                    <div class="col-lg-6 col-md-12 wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="s2-about_text_icon">
                            <div class="s2-about_text saas2-headline pera-content">
                                <h3>{{$mission->title}}</h3>
                                <p>{{$mission->description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="s2-about_img" style="height: 450px">
                            @if(!$mission->image)
                                <img style="height: 100%" alt=""
                                     src="{{asset('uploads/default_image.png')}}">
                            @else
                                <img src="{{$mission->image}}"
                                     onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                     style="height: 100%" alt="">
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <!-- /about first content  ()  -->
            <div class="about_content_s2">
                <div class="row">
                    @foreach(Quality() as $quality)
                    <div class="col-lg-6 col-md-12 wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="s2-about_img" style="height: 450px">
                            @if(!$quality->image)
                                <img style="height: 100%" alt=""
                                     src="{{asset('uploads/default_image.png')}}">
                            @else
                                <img src="{{$quality->image}}"
                                     onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                     style="height: 100%" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="s2-about_text_icon">
                            <div class="s2-about_text saas2-headline pera-content">
                                <h3>{{$quality->title}}</h3>
                                <p>{{$quality->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <br>
                <br>
                <div class="row">
                    @foreach(Partners() as $partners)
                    <div class="col-lg-6 col-md-12 wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="s2-about_text_icon">
                            <div class="s2-about_text saas2-headline pera-content">
                                <h3>{{$partners->title}}</h3>
                                <p>{{$partners->description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="s2-about_img" style="height: 450px">
                            @if(!$partners->image)
                                <img style="height: 100%" alt=""
                                     src="{{asset('uploads/default_image.png')}}">
                            @else
                                <img src="{{$partners->image}}"
                                     onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                     style="height: 100%" alt="">
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /about first content -->
        </div>
    </section>
    <!-- End of About  section
        ============================================= -->
    @include('website.includes.fun-fact')
@endsection
