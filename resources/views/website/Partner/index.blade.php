@extends('website.home')
@section('content')

    <!-- Start of about section
        ============================================= -->
    <section style="margin-top: 100px" class="container pt-5">
        <div class="about_content_s2 mt-4">
            @foreach(partners() as $partner)
            <div class="wow fadeFromLeft it-nw-section-title headline pera-content text-center middle-align wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeFromLeft;">
                <span class="it-nw-title-tag"> {{$partner->title}}</span>
                {!! $partner->description !!}

            </div>
            @endforeach
        </div>
    </section>
    <!-- End of About  section
        ============================================= -->
    <!-- Start of About Us section
        ============================================= -->
    <section class="mb-5">
        <div class="container mb-5 mt-5">

            <div class="row mb-5">
                @foreach($partners as $partner)
                <div class="col-lg-3">
                    <div class="post-slide">
                        <div class="post-img">
                            @if(!$partner->image)
                                <img class="index_image"
                                     src="{{asset('uploads/default_image.png')}}" alt="logo">
                            @else
                                <img class="index_image"
                                     src="{{$partner->image}}"
                                     onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                     alt="logo">
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </section>
    <!-- End of About Ud section
        ============================================= -->


@endsection
