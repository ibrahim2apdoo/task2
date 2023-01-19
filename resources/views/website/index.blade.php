@extends('website.home')

@section('content')
    @include('website.includes.banner')
    @include('website.includes.feature')
    @include('website.includes.about')
    @include('website.includes.cta-section')
    @include('website.includes.why-choose')
    @include('website.includes.project')
    @include('website.includes.fun-fact')
    @include('website.includes.blog',$blogs)
@endsection

