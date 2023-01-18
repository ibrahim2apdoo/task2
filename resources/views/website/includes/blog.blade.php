<!-- Start of Blog section
	============================================= -->
<section id="it-nw-blog" class="it-nw-blog-section position-relative">
    <div class="it-nw-blog-sh position-absolute"><img src="{{asset('website/assets/img/its-2/blg-bg.png')}}" alt=""></div>
    <div class="container" dir="ltr">
        <div class="it-nw-blog-top-wrap d-flex justify-content-between align-items-center">
            <div class="it-nw-btn text-center">
                <a class="d-flex justify-content-center align-items-center" href="{{route('user.blog.index')}}">{{trans('main.More Blogs')}}<i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="it-nw-blog-content" >
            <div class="it-nw-blog-slider" >
                @foreach($blogs as $blog)
                <div class="it-nw-blog-innerbox">
                    <div class="it-nw-blog-inner-img" style="height: 250px">
                        @if(!$blog->image)
                            <img class="index_image" style="height: 250px"
                                 src="{{asset('uploads/default_image.png')}}" alt="logo">
                        @else
                            <img class="index_image" style="height: 250px"
                                 src="{{$blog->image}}"
                                 onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                 alt="logo">
                        @endif
                    </div>
                    <div class="it-nw-blog-inner-text headline">
                        <div class="it-nw-blog-meta d-flex justify-content-between">
{{--                            <a href="#"><i class="far fa-user"></i> Philip Hobs</a>--}}
                            <a href="#" style="color: #00133e !important"><i class="fas fa-calendar-alt" ></i>{{createdAtFormat($blog->created_at)}}</a>
                        </div>
                        <h3><a href="#" style="color: #00133e !important">{{$blog->title}}</a></h3>
                        <a class="blog-more" href="{{route('user.blog.show',$blog->id)}}" style="color: #00133e !important">{{trans('main.Read more')}}<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End of Blog section
