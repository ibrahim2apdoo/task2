@extends('website.home')

@section('content')
    @include('website.includes.banner')
    @include('website.includes.feature')
    @include('website.includes.about')
{{--    @include('website.includes.service')--}}
    @include('website.includes.cta-section')
{{--    @include('website.includes.project')--}}
    @include('website.includes.why-choose')
    @include('website.includes.fun-fact')
{{--    @include('website.includes.team')--}}
{{--    @include('website.includes.testimonial')--}}
{{--    @include('website.includes.parteners')--}}
    @include('website.includes.blog',$blogs)

@endsection

