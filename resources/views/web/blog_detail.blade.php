@extends('web.layouts.content')
@section('content')
<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-md-8 padding-15">
                <div class="blog-single-wrap">
                    <div class="blog-thumb">
                        <img src="{{url('storage/'.$row->image)}}" alt="img">
                    </div>
                    <div class="blog-single-content">
                        <h2><a href="">{{$row->title}}</a></h2>
                        <ul class="single-post-meta">
                            <li><i class="fa fa-user"></i> <a href="">{{$row->users}}</a></li>
                            <li><i class="fa fa-calendar"></i> <a href="">{{Date::blogDate($row->created_at)}}</a></li>
                        </ul>

                        @php
                            echo $row->content;
                        @endphp

                    </div>
                </div>
                <!--/.blog-single-->
            </div>
            <!--/.col-md-8-->
            <div class="col-md-4 padding-15">
                <div class="sidebar-wrap">
                    <div class="widget-content">
                        <form action="" class="search-form">
                            <input type="text" class="form-control" placeholder="Type here">
                            <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget-content">
                        <h4>Categories</h4>
                        <ul class="widget-links">
                            @foreach (Helper::blog_category() as $cat)
                            <li><a href="{{url('blog/category/'.$cat->id)}}">{{$cat->category}}</a></li>                            
                        @endforeach
                        </ul>
                    </div>
                     <!--categories-->
                    <div class="widget-content">
                        <h4>Recent Posts</h4>
                        <ul class="thumb-post">
                            @foreach (Helper::blog_recent() as $recent)
                            <li><img src="{{url('storage/'.$recent->image)}}" alt="post">
                                <a href="{{url('blog/detail/'.$recent->slug)}}">{{$recent->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!--tag clouds-->
                    <div class="widget-content">
                        <h4>Tag Clouds</h4>
                        <ul class="tags">
                            @foreach (Helper::blog_category() as $cat)
                                <li><a href="{{url('blog/category/'.$cat->id)}}">{{$cat->category}}</a></li>                            
                            @endforeach
                        </ul>
                    </div>
                    <!--tag clouds-->
                </div>
                <!--/.sidebar-wrap-->
            </div>
            <!--/.col-md-4-->
        </div>
        <!--/.blog-wrap-->
    </div>
</section>
<!--/.blog-section-->
@endsection
