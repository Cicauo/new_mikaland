@extends('web.layouts.content')
@section('content')
<div class="header-height"></div>

        <div id="main-slider" class="dl-slider">

            @foreach($coursel as $coursels)
            <div class="single-slide">
                <div class="bg-img kenburns-top-right" style="background-image: url('{{url('storage/'.$coursels->image)}}');"></div>
                <div class="overlay"></div>
                <div class="slider-content-wrap d-flex align-items-center text-left">
                    <div class="container">
                        <div class="slider-content">
                            <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="1s">Cluster</div></div></div>
                            <div class="dl-caption dl-border" data-animation="fade-in-left" data-delay="0s"></div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2s">{{$coursels->title}}</div></div>
                            </div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2.5s">{{$coursels->subtitle}}</div></div></div>
                            <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="3s">
                                @php
                                    echo $coursels->content;
                                @endphp
                            </div></div></div>
                            <div class="dl-btn-group">
                                <div class="inner-layer">
                                    <a href="savana-list" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">Lihat Project <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div><!--Slide-1-->
            @endforeach

        </div><!--/.slider-section-->
        
        <section class="about-section padding">
            <div class="container">
                <div class="row about-wrap d-flex align-items-center">
                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
                            <h2>{{$about->title}}<br>{{$about->subtitle}}</h2>
                            <p>@php echo $about->content; @endphp</p>
                            <a href="about-company" class="default-btn">More About Us</a>
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
                </div>
            </div>
        </section><!--/.about-section-->
        
       <section class="page-header padding">
		    <div class="container">
		        <div class="page-content text-center">
		            <h2>Our speciallization</h2>
		            <p>Mida Karya Abadi Land</p>
		        </div>
		    </div>
		</section><!--/.page-header-->
		
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
        </section><!--/.service-section-->
        
        <section class="projects-section padding">
            <div class="container-fluid">
                <div class="section-heading text-center mb-40">
                   <span>Projects</span>
                   <h2>Latest works</h2>
                </div><!--/.section-heading-->
                <div id="projects-carousel" class="projects-carousel owl-carousel">
                    <div class="project-item">
                        <img src="{{url('web/img/savana-home-primary-project.jpg')}}" alt="projects">
                        <div class="overlay"></div>
                        <a href="{{url('web/img/savana-home-primary-project.jpg')}}" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                        <div class="projects-content">
                            <a href="savana-type-50" class="category">Cluster</a>
                            <h3><a href="savana-type-50" class="tittle">Savana Park Type 50/60</a></h3>
                        </div>
                    </div>
                    <div class="project-item">
                        <img src="{{url('web/img/savana-home-secondary-projects-2.jpg')}}" alt="projects">
                        <div class="overlay"></div>
                        <a href="{{url('web/img/savana-home-secondary-projects-2.jpg')}}" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                        <div class="projects-content">
                            <a href="savana-type-33" class="category">Cluster</a>
                            <h3><a href="savana-type-33" class="tittle">Savana Park Typer 33/60</a></h3>
                        </div>
                    </div>
                    <div class="project-item">
                        <img src="{{url('web/img/rajawali36.jpg')}}" alt="projects">
                        <div class="overlay"></div>
                        <a href="{{url('web/img/rajawali-type-36.jpg')}}" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                        <div class="projects-content">
                            <a href="rajawal-type-36" class="category">Cluster</a>
                            <h3><a href="rajawali-type-36" class="tittle">Rajawali Type 36/72</a></h3>
                        </div>
                    </div>
                    <div class="project-item">
                        <img src="{{url('web/img/pesona-33.jpg')}}" alt="projects">
                        <div class="overlay"></div>
                        <a href="{{url('web/img/pesoa-33.jpg')}}" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                        <div class="projects-content">
                            <a href="mega-pesona-type-33" class="category">Cluster</a>
                            <h3><a href="mega-pesona-type-33" class="tittle">Mega Pesona</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.projects-section-->
        
        
        
        <section class="testimonial-section bg-grey padding">
           <div class="dots"></div>
            <div class="container">
                <div class="section-heading text-center mb-40">
                   <span>Testimonial</span>
                   <h2>What people says</h2>
                </div><!--/.section-heading-->
                <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                    @foreach($testimoni as $testi)
                    <div class="testi-item d-flex align-items-center">
                        <img src="{{url('storage/'.$testi->image)}}" alt="img">
                        <div class="testi-content">
                            <p>@php echo $testi->content; @endphp</p>
                            <h3>{{$testi->title}}</h3>
                            <ul class="rattings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>{{$testi->subtitle}}<</span>
                        </div>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    @endforeach

                </div>
            </div>
        </section><!--/.testimonial-section-->
        
        <section class="blog-section padding">
            <div class="container">
               <div class="section-heading text-center mb-40">
                   <span>From Blog</span>
                   <h2>Berita & Event</h2>
                </div><!--/.section-heading-->
                <div class="row blog-wrap">
                    <div class="col-lg-4 col-sm-6 sm-padding">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{url('web/img/blogsrh1.png')}}" alt="post">
                                <span class="category"><a href="#">Serah Terima</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="blog-detail">Serah Terima Unit Konsumen | Tahap ke-1</a></h3>
                                <p>Setelah melalui proses yang panjang dan penuh antisipasi, akhirnya Cluster Savana Park siap menyerahkan unit...</p>
                                <a href="blog-detail" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 sm-padding">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{url('web/img/blogsrh-4.png')}}" alt="post">
                                <span class="category"><a href="#">Pembangunan</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="blog-detail-2">Savana Park 2 Lantai, Solusi Hunian Modern dan Nyaman</a></h3>
                                <p>Savana Park kembali hadir dengan solusi hunian modern dan nyaman, yaitu perumahan Sava...</p>
                                <a href="blog-detail-2" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 sm-padding">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{url('web/img/gate1.png')}}" alt="post">
                                <span class="category"><a href="#">Informasi</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="blog-detail-3">Savana Park mulai merealisasikan kampanye one-gate system.</a></h3>
                                <p>Keamanan adalah salah satu aspek penting yang menjadi pertimbangan utama dalam memilih hunian. Sa...</p>
                                <a href="blog-detail-3" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.blog-section-->
        
        <div class="sponsor-section bg-grey">
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
        </div><!--/.sponsor-section-->
        @endsection