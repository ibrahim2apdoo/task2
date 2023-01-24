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
                            src="{{mapLink()}}"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
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
