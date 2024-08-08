
@extends('frontend.layout.master')


@push('meta-title')
    {{ env('APP_NAME') }}
@endpush


@section('body-content')


    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Blog Details</h2>
                        <ul class="bread-list">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <!-- News Head -->
                                <div class="news-head">
                                    <img src="{{asset($blog->blog_image)}}" alt="blog Image">
                                </div>
                                <!-- News Title -->
                                <h1 class="news-title"><a href="">{{$blog->blog_title}}</a></h1>
                                <!-- Meta -->
                                <div class="meta">
                                    <div class="meta-left">
                                        <span class="author"><a href="#"><img src="https://st3.depositphotos.com/6672868/13701/v/450/depositphotos_137014128-stock-illustration-user-profile-icon.jpg" alt="#">{{$blog->blog_author}}</a></span>
                                        <span class="date"><i class="fa fa-clock-o"></i>{{$blog->created_at->format('M d, Y')}}</span>
                                    </div>
{{--                                    <div class="meta-right">--}}
{{--                                        <span class="comments"><a href="#"><i class="fa fa-comments"></i>05 Comments</a></span>--}}
{{--                                        <span class="views"><i class="fa fa-eye"></i>33K Views</span>--}}
{{--                                    </div>--}}
                                </div>
                                <!-- News Text -->
                                <div class="news-text">
                                    {!! $blog->blog_long_desc !!}
                                </div>
                          
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="blog-comments">
                                <h2>All Comments</h2>
                                <div class="comments-body">
                                    @foreach($comments as $comment) 
                                    <!-- Single Comments -->
                                    <div class="single-comments">
                                        <div class="main">
                                            <div class="head">
                                                <img src="https://st3.depositphotos.com/6672868/13701/v/450/depositphotos_137014128-stock-illustration-user-profile-icon.jpg" alt="#">
                                            </div>
                                            <div class="body">
                                                <h4>{{$comment->name}}</h4>
{{--                                                <div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>{{ $comment->created_at->format('M d, Y') ?? ''}}</span><span class="meta"><i class="fa fa-clock-o"></i>{{$comment->created_at->format('h:i A') ?? ''}}</span></div>--}}
                                                <p>{{$comment->message}}</p>
{{--                                                <a href="#"><i class="fa fa-reply"></i>replay</a>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Single Comments -->
                                    @endforeach
                                    
                                </div>
                                <div class="mt-3 text-center">{{$comments->links()}}</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="comments-form">
                                <h2>Leave Comments</h2>
                                <!-- Contact Form -->
                                <form class="form" method="post" action="{{route('blog.comment.store')}}">
                                    
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="name" placeholder="Full Name" required="required">
                                            </div>
                                        </div>
                                        
                                      
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <i class="fa fa-pencil"></i>
                                                <textarea name="message" rows="7" placeholder="Type Your Message Here"></textarea>
                                            </div>
                                        </div>
                                        <input type="text" name="blog_id" value="{{$blog->id}}" hidden>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn primary"><i class="fa fa-send"></i>Submit Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--/ End Contact Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget search">
                            <form class="form" method="post" action="{{route('blogSearch')}}" >
                                @csrf
                                <input type="text" name="blog_title" placeholder="Search Here...">
                                <button class="button" type="submit" href="#"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    
                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Recent post</h3>
                            
                            @foreach($recentBlogs as $recentBlog) 
                            <!-- Single Post -->
                            <div class="single-post">
                                <div class="image">
                                    <img src="{{asset($recentBlog->blog_image)}}" alt="#">
                                </div>
                                <div class="content">
                                    <h5><a href="{{route('blogDetail',$recentBlog->id)}}">{{$recentBlog->blog_title}}</a></h5>
                                    <ul class="comment">
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$recentBlog->created_at->format('M d, Y')}}</li>
{{--                                        <li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>--}}
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            @endforeach
                        </div>
                        <!--/ End Single Widget -->
                   
                      
                        <!--/ End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection



@push('script-tag')

@endpush