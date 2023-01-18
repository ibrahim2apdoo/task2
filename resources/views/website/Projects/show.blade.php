@extends('website.home')
@section('content')

    <section style="margin-top: 200px" id="it-nw-project" class="it-nw-project-section container">
        <div class="wow fadeFromLeft it-nw-section-title headline pera-content text-center middle-align wow fadeInUp"
             data-wow-delay="300ms" data-wow-duration="1500ms"
             style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeFromLeft;">
            <span class="it-nw-title-tag">{{$project->title}}</span>
            <ul>
                <li>{{$project->description}}</li>
            </ul>


        </div>
        @if($images)
            <div class="row">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">

                                <div class="card-body">
                                    <div class="row">
                                        @foreach($images as $file)
                                            <div class="col-md-3">
                                                <div class="rounded border m-1">
                                                    <div style="  height: 250px">

                                                        <img src="{{$file->path}}"
                                                             class="img-fluid mb-2 w-100 image-galley"
                                                             alt="product image" style="width: 250px; height: 250px"/>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
