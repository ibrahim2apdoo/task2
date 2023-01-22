
<!-- Start of Project section
	============================================= -->
<section id="it-nw-project" class="it-nw-project-section">
    <div class="it-nw-section-title headline pera-content text-center middle-align wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        @foreach(Latest_Project() as $Latest_Project)
        <span class="it-nw-title-tag">{!! $Latest_Project->title !!} </span>
        <h2>{!! $Latest_Project->sub_title !!} </h2>
        <p>{!! $Latest_Project->description !!}
        </p>
        @endforeach
    </div>
    <div class="it-nw-project-content">
        <div class="it-nw-project-slider-area" dir="ltr"  >
            @foreach( Project() as $project)
            <div class="it-nw-project-innerbox position-relative wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style=" width: 700px">

                <div class="it-nw-project-inner-img" style="height: 500px; width: 500px">
                    @if(!$project->cover)
                        <img src="{{asset('uploads/default_image.png')}}" alt="logo" style="width: 100%">
                    @else
                        <img src="{{$project->cover}}" onerror="this.src='{{asset('uploads/default_image.png')}}'" style="width: 100%">
                    @endif
                </div>
                <div class="it-nw-project-inner-text position-absolute headline">
                    <span>{{$project->title}}</span>
                    <h3><a href="#">{{Str::limit($project->description, 50)}}  </a></h3>
                </div>
                <div class="it-nw-project-link">
                    <a class="d-flex align-items-center justify-content-center" href="{{route('project.show',$project->id)}}"><i class="fa fa-link"></i></a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- End of Project section
	============================================= -->
