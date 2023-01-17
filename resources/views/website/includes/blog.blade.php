<!-- Start of Blog section
	============================================= -->
<section id="it-nw-blog" class="it-nw-blog-section position-relative">
    <div class="it-nw-blog-sh position-absolute"><img src="{{asset('website/assets/img/its-2/blg-bg.png')}}" alt=""></div>
    <div class="container">
        <div class="it-nw-blog-top-wrap d-flex justify-content-between align-items-center">
            <div class="it-nw-btn text-center">
                <a class="d-flex justify-content-center align-items-center" href="#">{{trans('main.More Blogs')}}<i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="it-nw-blog-content">
            <div class="it-nw-blog-slider">
                @foreach($blogs as $blog)
                <div class="it-nw-blog-innerbox">
                    <div class="it-nw-blog-inner-img">
                        @if(!$blog->image)
                            <img class="index_image"
                                 src="{{asset('uploads/default_image.png')}}" alt="logo">
                        @else
                            <img class="index_image"
                                 src="{{$blog->image}}"
                                 onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                 alt="logo">
                        @endif
                    </div>
                    <div class="it-nw-blog-inner-text headline">
                        <div class="it-nw-blog-meta d-flex justify-content-between">
{{--                            <a href="#"><i class="far fa-user"></i> Philip Hobs</a>--}}
                            <a href="#"><i class="fas fa-calendar-alt"></i>{{createdAtFormat($blog->created_at)}}</a>
                        </div>
                        <h3><a href="#">{{$blog->title}}</a></h3>
                        <a class="blog-more" href="#">{{trans('main.Read more')}}<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End of Blog section
