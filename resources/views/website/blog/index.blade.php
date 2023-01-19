@extends('website.home')
@section('content')
    <section style="margin-top: 200px" id="news-feed" class="news-feed-section">
        <div class="container">
            <div class="blog-feed-content">
                <div class="row">
                    <div class="col-md-8">
                        @foreach($blogs as $blog)
                        <div class="blog-feed-post">
                            <div class="blog-feed-img-txt">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="saasio-blog-img">
                                            @if(!$blog->image)
                                                <img style="height: 247px; object-fit:cover; width:100%" alt=""
                                                     src="{{asset('uploads/default_image.png')}}">
                                            @else
                                                <img src="{{$blog->image}}"
                                                     onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                                     style="height: 247px; object-fit:cover; width:100%" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="saasio-blog-text">
                                            <h3>
                                                <a style="color: #000 !important; font-size: 18px" href="{{route('user.blog.show',$blog->id)}}">{{$blog->title}}</a>
                                            </h3>
                                            <div class="saasio-post-meta">
                                                    <span style="font-size: 15px; color:grey;"><i class="fas fa-calendar-alt"></i>
                                                        {{createdAtFormat($blog->created_at)}}</span>
                                            </div>
                                            <p style="padding: 0px; margin: 5px;"> {{Str::limit($blog->description, 50)}}</p>
                                            <a style="color: #000 !important;" class="blog-read-more" href="{{route('user.blog.show',$blog->id)}}">{{trans('main.Read more')}} </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        <div class="saasio-blog-sidebar">

                            <div class="side-bar-widget">
                                <div class="category-widget dia-headline ul-li-block">
                                    <h3 class="widget-title-2">{{trans('main.More Blogs')}}</h3>
                                    @foreach($blogs as $AllBlog)
                                    <div class="recent-post-area">
                                        <div class="recent-post-img-text">
                                            <div class="recent-post-img float-left mr-4" >
                                                @if(!$AllBlog->image)
                                                    <img src="{{asset('uploads/default_image.png')}}">
                                                @else
                                                    <img src="{{$AllBlog->image}}"
                                                         onerror="this.src='{{asset('uploads/default_image.png')}}'">
                                                @endif
                                            </div>
                                            <div class="recent-post-text dia-headline" style="display: table;">
                                                <h3 style="color: black !important;"><a style="color: black !important;" href="{{route('user.blog.show',$AllBlog->id)}}">{{$AllBlog->title}} </a></h3>
                                                <span class="rec-post-meta">
                                                            {{createdAtFormat($AllBlog->created_at)}}</span>
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
    </section>
@endsection
