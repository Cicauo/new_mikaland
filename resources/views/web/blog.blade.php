@extends('web.layouts.content')
@section('content')

<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-md-8 sm-padding">
                <div class="row">
                    @foreach ($artikel as $art)
                        
                    
                    <div class="col-sm-6 padding-15">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{url('storage/'.$art->image)}}" alt="post">
                                <span class="category"><a href=" ">{{$art->category}}</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="{{url('blog/detail/'.$art->slug)}}">{{$art->title}}</a></h3>
                                <p>Setelah melalui proses yang panjang dan penuh antisipasi, akhirnya Cluster Savana Park siap menyerahkan unit...</p>
                                <a href="{{url('blog/detail/'.$art->slug)}}" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                   
                </div>
                {{ $artikel->links('vendor.pagination.simple-bootstrap-4') }}
            </div>
            <!--/.col-md-8-->
            <div class="col-md-4 padding-15">
                <div class="sidebar-wrap">
                    <div class="widget-content">
                        <form action="{{url('blog/search')}}" method="POST" class="search-form">
                            @csrf
                            <input type="text" name="title" class="form-control" placeholder="Type here" required>
                            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
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