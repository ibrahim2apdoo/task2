@extends('website.home')
@section('content')

    <section style="margin-top: 200px" class="container  pb-5">
        <div class="row mb-5 pb-5">

            @foreach($projects as $project)
            <div class="col-md-4 col-sm-12">

                <div class="projectCard">
                    @if(!$project->cover)
                        <img class="index_image"
                             src="{{asset('uploads/default_image.png')}}" alt="logo">
                    @else
                        <img class="index_image"
                             src="{{$project->cover}}"
                             onerror="this.src='{{asset('uploads/default_image.png')}}'"
                             alt="logo">
                    @endif
                    <div class="projectCard-content">
                        <a href="{{route('project.show',$project->id)}}">
                            <p class="projectCard-category">{!! $project->title !!}</p>
                        </a>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </section>
@endsection
