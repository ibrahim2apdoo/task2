@extends('website.home')
@section('content')
    <section style="margin-top: 200px" id="news-feed" class="news-feed-section">
        <div class="container">
            <div class="blog-feed-content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="saasio-blog-details-content">
                            <div class="blog-details-img">
                                @if(!$blog->image)
                                    <img class="index_image"
                                         src="{{asset('uploads/default_image.png')}}" alt="logo" style="margin-bottom: 100px;">
                                @else
                                    <img class="index_image"
                                         src="{{$blog->image}}"
                                         onerror="this.src='{{asset('uploads/default_image.png')}}'"
                                         alt="logo" style="margin-bottom: 100px;">
                                @endif
                            </div>
                            <div class="blog-details-text dia-headline">
                                <div class="saasio-post-meta" style="margin-bottom: 20px">
                                    <a style="color: black !important" href="#"><i class="fas fa-calendar-alt"></i>
                                        {{createdAtFormat($blog->created_at)}}</a>
                                </div>

                                <h2 ><strong>{{$blog->title}}</strong></h2>


                                    {!! $blog->description !!}

                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="saasio-blog-sidebar">
                            <div class="side-bar-widget">
                                <div class="category-widget dia-headline ul-li-block">
                                    <h3 class="widget-title-2">{{trans('main.All Blogs')}}</h3>
                                    <ul>
                                        @foreach($blogs as $AllBlogs)
                                            <li class="">
                                                <a class="singleServiceCat" href="{{route('user.blog.show',$AllBlogs->id)}}">{{$AllBlogs->title}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
