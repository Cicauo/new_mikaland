@extends('web.layouts.content')
@section('content')
<section class="page-header padding" style="background-image: url('{{url("storage/".$header->image)}}');">
    <div class="container">
        <div class="page-content text-center">
            <h2>{{$header->title}}</h2>
            <p>{{$header->subtitle}}</p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="about-section section-2 padding">
    <div class="container">
        <div class="row about-wrap">
            <div class="col-md-6 xs-padding">
                <div class="about-content">
                    <h2>{{$about->title}}</h2>
                    <p>@php
                        echo $about->content;
                    @endphp</p>
                    <ul class="about-list">
                        @foreach ($detail as $details)
                            <li><i class="fas fa-check"></i>{{$details->title}}</li>
                        @endforeach
                        

                    </ul>
                    <br>
                    <h2>Visi</h2>
                    <p>
                        @php
                            echo $visi->content;
                        @endphp
                    </p>
                    <br>
                    <h2>Misi</h2>
                    <ul class="about-list">
                        @foreach ($misi as $mis)
                            <li><i class="fas fa-check"></i>{{$mis->subtitle}}</li>
                        @endforeach
                        

                    </ul>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-bg" style="background-image: url('{{url("storage/".$about->image)}}');">
                    <div class="about-bg"></div>
                    <div class="dots"></div>
                    <div class="year-text">
                        <div class="year-content">
                            <h2>8</h2>
                            <span>Years of experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br>
        <div class="container">
            <H2>Sertifikasi</H2> <br>

            <div class="row">
                @foreach ($sertivikat as $serv)
                    <div class="col-lg-3 col-sm-6 padding-15">
                        <div class="project-item">
                            <img src="{{url('storage/'.$serv->image)}}" alt="projects">
                            <div class="overlay"></div>
                            <a href="{{url('storage/'.$serv->image)}}" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</section>
<!--/.about-section-->



<section class="service-section section-2 bg-grey bd-bottom padding">
    <div class="dots"></div>
    <div class="container">
            
        <div class="row service-wrap">
            @foreach(Helper::spesialis() as $spesial)
            <div class="col-lg-3 col-sm-6 padding-15">
                <div class="service-item">
                    <i class="{{$spesial->icon}}"></i>
                    <h3>{{$spesial->title}}</h3>
                    <p>{{$spesial->subtitle}}</p>
                </div>
            </div>

            @endforeach
        </div>

    </div>
</section>

< <section class="sponsor-section bg-grey">
    <div class="dots"></div>
    <div class="container">
        <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
            
            @foreach (Helper::customer() as $customers)
                <div class="sponsor-item">
                    <img src="{{url('storage/'.$customers->image)}}" alt="sponsor">
                </div>
            @endforeach

        </div>
    </div>
    </section>
    <!--/.sponsor-section-->
    @endsection
