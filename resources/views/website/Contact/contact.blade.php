@extends('website.home')
@section('content')
    <!-- Start of Contact inner page section
        ============================================= -->
    <div class="container row m-auto mt-60">
        <h2 style="margin: auto; font-weight: 600; margin-bottom:60px; font-size: 40px">{{trans('main.Contact us')}}</h2>
        <div style="margin-bottom: 100px" class="col-md-12">
            <div class="card contact-us-card mb-3 border-0">
                <div class="row g-0 contact-card-row">
                    <div class="col-md-6 col-sm-12 contact-card-map"
                         style="overflow: hidden; border-radius: 20px; height:100%; padding: 0; margin: 0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463876.93971471715!2d46.542344118761015!3d24.725555344345064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2seg!4v1670835444651!5m2!1sen!2seg"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>


                    <div class="col-md-2 col-sm-12">
                        <div class="card-body h-100 d-flex justify-content-center flex-column">
                            @foreach($contacts as $contact)
                            <div class="card-text">
                                <i class="{{$contact->icon}} m-3 contact-phone-icon" style="display: flex;"><p style="margin: 0px 20px 0px 20px">{{$contact->contact}}</p></i>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End of Contact inner page section
        =============================================  -->
@endsection
