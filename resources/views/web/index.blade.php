@extends('web.layouts.content')
@section('content')
<div class="header-height"></div>

        <div id="main-slider" class="dl-slider">
            <div class="single-slide">
                <div class="bg-img kenburns-top-right" style="background-image: url('{{url('web/img/fotoutama.jpg')}}');"></div>
                <div class="overlay"></div>
                <div class="slider-content-wrap d-flex align-items-center text-left">
                    <div class="container">
                        <div class="slider-content">
                            <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="1s">Cluster</div></div></div>
                            <div class="dl-caption dl-border" data-animation="fade-in-left" data-delay="0s"></div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2s">Savana Park</div></div>
                            </div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2.5s">Residential</div></div></div>
                            <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="3s">Green living to make it better the future</div></div></div>
                            <div class="dl-btn-group">
                                <div class="inner-layer">
                                    <a href="savana-list" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">Lihat Project <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div><!--Slide-1-->
            <div class="single-slide">
                <div class="bg-img kenburns-top-right" style="background-image: url('{{url('web/img/rajawali-utama.png')}}');"></div>
                <div class="overlay"></div>
                <div class="slider-content-wrap d-flex align-items-center text-left">
                    <div class="container">
                        <div class="slider-content">
                            <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="1s">Cluster</div></div></div>
                            <div class="dl-caption dl-border" data-animation="fade-in-left" data-delay="4s"></div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2s">Rajawali</div></div>
                            </div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2.5s">Residential</div></div></div>
                            <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="3s">Building a sustainable future with modern futurism.</div></div></div>
                            <div class="dl-btn-group">
                                <div class="inner-layer">
                                    <a href="rajawali-list" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">Lihat Project <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div><!--Slide-2-->
            <div class="single-slide">
                <div class="bg-img kenburns-top-right" style="background-image: url('{{url('web/img/mega-pesona-utama.png')}}');"></div>
                <div class="overlay"></div>
                <div class="slider-content-wrap d-flex align-items-center text-left">
                    <div class="container">
                        <div class="slider-content">
                            <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="1s">Cluster</div></div></div>
                            <div class="dl-caption dl-border" data-animation="fade-in-left" data-delay="0s"></div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2s">Mega Pesona</div></div>
                            </div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2.5s">Residential</div></div></div>
                            <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="3s">Everything's has value</div></div></div>
                            <div class="dl-btn-group">
                                <div class="inner-layer">
                                    <a href="mega-pesona-list" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">Lihat Project <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div><!--Slide-3-->
        </div><!--/.slider-section-->
        
        <section class="about-section padding">
            <div class="container">
                <div class="row about-wrap d-flex align-items-center">
                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
                            <h2>Hunian modern dengan <br>kualitas hidup lebih baik.</h2>
                            <p>PT. MIDA KARYA ABADI LAND, perusahaan properti yang berdedikasi untuk memberikan hunian berkualitas bagi masyarakat,
                                 dengan fokus pada pembangunan perumahan, termasuk rumah sederhana dan real estate</p>
                            <p>Kami hadir sebagai solusi properti untuk perumahan berkualitas, termasuk rumah sederhana dan real estate yang memenuhi kebutuhan Anda.</p>
                            <a href="about-company" class="default-btn">More About Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="about-bg">
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
                    <div class="col-lg-3 col-sm-6 padding-15">
                        <div class="service-item">
                            <i class="flaticon-refinery"></i>
                            <h3>Desaign & Planing</h3>
                            <p>Spesialis dalam desain dan perencanaan bangunan perumahan modern.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 padding-15">
                        <div class="service-item">
                            <i class="flaticon-industrial-robot-1"></i>
                            <h3>Building</h3>
                            <p>Bertanggung jawab atas konstruksi dan pengembangan proyek perumahan.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 padding-15">
                        <div class="service-item">
                            <i class="flaticon-tanks"></i>
                            <h3>Management Estate</h3>
                            <p> Bertanggung jawab atas manajemen keseluruhan proyek perumahan dari awal hingga akhir.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 padding-15">
                        <div class="service-item">
                            <i class="flaticon-factory"></i>
                            <h3>Property Market</h3>
                            <p> Bertanggung jawab untuk memasarkan dan menjual properti perumahan yang sedang dikembangkan.</p>
                        </div>
                    </div>
                   
                   
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
                    <div class="testi-item d-flex align-items-center">
                        <img src="{{url('web/img/testi-1.png')}}" alt="img">
                        <div class="testi-content">
                            <p>"Akses strategis ..dkt jalan raya ... perkembangan ke tahun depan akan pasti majau"</p>
                            <h3>SBC Pagedangan</h3>
                            <ul class="rattings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>SAVANA PARK</span>
                        </div>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    <div class="testi-item d-flex align-items-center">
                        <img src="{{url('web/img/testi-2.png')}}" alt="img">
                        <div class="testi-content">
                            <p>"perumahan yg lumayan baru di munjul, lumayan strategis karena dekat dengan stasiun kereta"</p>
                            <h3>Saripin "Mang Ipin"</h3>
                            <ul class="rattings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            
                            <span>SAVANA PARK</span>
                        </div>
                        <i class="fa fa-quote-right"></i>
                    </div>
                     <div class="testi-item d-flex align-items-center">
                        <img src="{{url('web/img/testi-4.png')}}" alt="img">
                        <div class="testi-content">
                            <p>"Kakak ipar saya tinggal disini.. Perumahnnya sih cukup bagus... Tapi jalanan untuk masuk ke komplek masih bebatuan.. Belum diaspal atau papingblok.. Tapi jalanan tiap depan rumah sudah bagus dan diaspal.. Katanya karena masih ada pembangunan.. Tempat bolak balik truk.."</p>
                            <h3>Ema MTV</h3>
                            <ul class="rattings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            
                            <span>MEGA PESONA</span>
                        </div>
                        <i class="fa fa-quote-right"></i>
                    </div>
                     <div class="testi-item d-flex align-items-center">
                        <img src="{{url('web/img/testi-5.png')}}" alt="img">
                        <div class="testi-content">
                            <p>"Cluster idaman semua orang. Tempatnya rapi,  dekat dengan indomaret, dan alfamaret, deket toko bangunan, deket pemberhentian angkot, banyak tempat makan , klinik juga dekat. Masjid jami al falahiyah dekat juga. Sekurity nya ada, pengembangan tahap 2 masih belum lanjut.  Tahap 1 ada 43 unit. Nanti tahap 2 rencananya 70 unit. Hayo siapa yang mau beli"</p>
                            <h3>Jono Apri</h3>
                            <ul class="rattings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            
                            <span>CLUSTER RAJAWALI</span>
                        </div>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    <div class="testi-item d-flex align-items-center">
                        <img src="{{url('web/img/testi-5.png')}}" alt="img">
                        <div class="testi-content">
                            <p>"Perum aman , cluster,  nyaman nib perumahan"</p>
                            <h3>Yosef</h3>
                            <ul class="rattings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            
                            <span>CLUSTER RAJAWALI</span>
                        </div>
                        <i class="fa fa-quote-right"></i>
                    </div>
                   
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