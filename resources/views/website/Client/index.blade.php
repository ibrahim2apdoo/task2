@extends('website.home')
@section('content')

    <!-- Start of about section
        ============================================= -->
    <section style="margin-top: 200px" class="container mb-2 pb-2">
        <div class="about_content_s2 mt-4">
            @foreach(Clients() as $clientsinfo)
            <div class="wow fadeFromLeft it-nw-section-title headline pera-content text-center middle-align wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeFromLeft;">
                <span class="it-nw-title-tag"> {{$clientsinfo->title}}</span>
                <p>{!! $clientsinfo->description !!}</p>

            </div>
            @endforeach
        </div>
    </section>
    <!-- End of About  section
        ============================================= -->
    <!-- Start of About Us section
        ============================================= -->

    <section class="container mt-5 mb-5 pb-5">
    <div class="row mb-5 mt-5 pb-5 pt-5" style="margin:auto;display: flex;align-items: center;justify-content: center;">

        @foreach($clients as $client)
        <div class="col-md-3 col-sm-12 m-4 clientImg aos-init aos-animate" style="height: 250px; border-radius:25px;" data-aos="fade-up" data-aos-duration="1500">
            @if(!$client->image)
                <img class="img-fluid"
                     src="{{asset('uploads/default_image.png')}}" style="object-fit: scale-down; height: 100%; width: 100%;"  alt="">
            @else
                <img class="img-fluid"
                     src="{{$client->image}}"
                     onerror="this.src='{{asset('uploads/default_image.png')}}'"
                     style="object-fit: scale-down; height: 100%; width: 100%;"   alt="">
            @endif
        </div>
        @endforeach

    </div>
    </section>

@endsection
