@extends('website.home')
@section('content')
    <!-- Start of Contact inner page section
        ============================================= -->
    <section style="margin-top: 200px" id="sa-contact-inner"
             class="sa-contact-inner-section inner-page-padding mb-5 p-0">
        <div class="container mb-5 pb-5">
            <div class="saas_two_section_title saas2-headline text-center">
                <span class="title_tag"> {{trans('main.Get In Touch')}}</span>
                <h2>{{trans('main.Get A Quote')}} <span>
                    </span></h2>
            </div>

            <div class="sa-contact-inner-form">
                @include('website.layouts.massage')
                <form method="post" action="{{route('user.contact.store')}}" enctype="multipart/form-data"
                      id="contact-us">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <input class="form-control " type="text" name="name" id="name" value=""
                                   placeholder="{{trans('main.your name')}}">
                        </div>
                        <div class="col-md-6">
                            <input class="form-control " type="email" name="email" id="email" value=""
                                   placeholder="{{trans('main.your email')}}">
                        </div>
                        <div class="col-md-6">
                            <input class="form-control " type="text" name="phone" id="phone" value=""
                                   placeholder="{{trans('main.your phone')}}">
                        </div>
                        <div class="col-md-6">
                            <input class="form-control " type="text" name="subject" id="subject" value=""
                                   placeholder=" {{trans('main.your Subject')}}">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control " name="massage" id="message"
                                      placeholder="{{trans('main.your message')}}"></textarea>
                        </div>

                        <div class="it-nw-btn contactBtn text-center" style="margin: auto;">
                            <button><span class="subscribeBtn">{{trans('main.Send Now')}}</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End of Contact inner page section
        =============================================  -->
@endsection
