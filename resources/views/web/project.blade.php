@extends('web.layouts.content')
@section('content')
{{-- <section class="page-header padding"> --}}
<section class="page-headers padding" style="background-image: url(img/fotoutama.jpg">
    <div class="container">
        <div class="page-content text-center">
            <h2>Cluster Savana Park</h2>
            <p>Green living to make it better the future</p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="about-section padding">
    <div class="container">
        <div class="row about-wrap d-flex align-items-center">
            <div class="col-md-6 xs-padding">
                <div class="about-content">
                    <h2>Menerapkan gaya hidup hijau <br>untuk memperbaiki masa depan.</h2>
                    <p>Slogan ini menjadi panduan dalam pembangunan perumahan Savana Park. Dengan konsep ini, Savana Park hadir dengan desain modern yang ramah lingkungan dan memperhatikan keberlanjutan, sehingga memberikan dampak positif bagi lingkungan dan masa depan kita semua.</p>
                    <ul class="about-list">
                        <li><i class="fas fa-check"></i>4 Menit Ke Pasar Gudang Tigaraksa</li>
                        <li><i class="fas fa-check"></i>8 Menit Ke Pusat Pemerintahan Kab.Tangerang</li>
                        <li><i class="fas fa-check"></i>10 Menit Ke Rencana Tol Balaraja - Serpong</li>
                        <li><i class="fas fa-check"></i>10 Menit Ke Universitas Tangerang Raya</li>
                        <li><i class="fas fa-check"></i>16 Menit Ke fasilitas Kesehatan / Rumah Sakit </li>
                        <li><i class="fas fa-check"></i>18 Menit Ke Stasiun Commuter Line Tigaraksa</li>
                        <li><i class="fas fa-check"></i>23 Menit Ke Tol Balaraja Timur / Cikupa</li>
                    </ul>
                    <a class="default-btn" href="img/browsur-savana.pdf" class="button">
                        <i class="fa fa-download"></i>
                        Download Browsur
                    </a>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-projects">
                    <div class="about-projects"><img src="/img/savana-home-primary-project.jpg" alt=""></div>
                    <div class="dots"></div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/.about-section-->

{{-- Project-section  --}}
<section class="project-section project-2 bg-grey padding">
    <div class="dots"></div>
    <div class="container">
        <div class="section-heading text-center mb-40">
            <span>Cluster Savana Park</span>
            <h2>Pilihan Tipe Rumah</h2>
        </div>
        <!--/.section-heading-->
        <div id="project-carousel-2" class="project-carousel-2 owl-carousel">
            <div class="project-item">
                <div class="project-thumb">
                    <img src="img/savana-home-primary-project.jpg" alt="">
                </div>
                <div class="project-content">
                    <h3><a href="savana-type-50">Type 50/60</a></h3>
                    <p>Rumah Savana Park tipe 50/60 menawarkan rumah dengan 2 lantai, 3 kamar tidur, dan 2 kamar mandi. Desainnya yang modern dan hijau membuat rumah ini tidak hanya nyaman dan fungsional, tetapi juga memberikan kesan yang estetik dan berkelas. Savana Park memastikan bahwa setiap aspek dari hunian ini memperhatikan keberlanjutan, sehingga memberikan nilai dan manfaat yang positif bagi penghuninya dan lingkungan sekitar.</p>
                    <a href="savana-type-50" class="default-btn">Lihat Detail</a>
                </div>
            </div>

            <div class="project-item">
                <div class="project-thumb">
                    <img src="img/savana-33.png" alt="">
                </div>
                <div class="project-content">
                    <h3><a href="savana-type-33">Type 33/60</a></h3>
                    <p>Rumah Savana Park tipe 33/60 menawarkan rumah dengan 1 lantai, 2 kamar tidur, dan 1 kamar mandi. Meskipun ukurannya lebih kecil, rumah ini tetap memiliki desain modern dan hijau yang memperhatikan keberlanjutan. Savana Park memastikan bahwa setiap detail dan bagian dari hunian ini memiliki nilai dan manfaat yang bermanfaat bagi penghuninya dan lingkungan sekitar, sehingga menjadikannya sebagai pilihan hunian yang tepat bagi keluarga kecil atau pasangan</p>
                    <a href="savana-type-33" class="default-btn">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>

</section>
<!--/.project-section-->



{{-- Fasilitas-section  --}}
<section class="projects-section padding">
    <div class="container ">
        <div class="page-content  text-center">
            <h2 style="color:#263a4f;">Fasilitas</h2>
            <h3>Cluster Savana Park</h3>
        </div>
        <br>
        <div class="row project-item">
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/playgrounds.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="" class="category">KidZone</a>
                        <h3><a href="" class="tittle">Taman bermain anak</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/reflexology.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="" class="category">Health</a>
                        <h3><a href="" class="tittle">Reflexology Path</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="img/comunity.jpg" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="" class="category">Connect</a>
                        <h3><a href="" class="tittle">Community Corner</a></h3>
                    </div>
                </div>
            </div>

            {{-- Site-map  --}}
            <div>
                <img src="/img/siteplan-savana.jpg" class="img-fluid" alt="Responsive image">
            </div>
            {{-- Site-map  --}}
            {{-- Maps Project  --}}
            <div id="google-map">
                {{-- <img src="img/maps-savana.jpg" class="mx-auto d-block" alt="Responsive image"> --}}
                <iframe class="mx-auto d-block" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.4687659506736!2d106.45726555208627!3d-6.280151282357816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e420665f6135b0b%3A0x5ef21bfb0413ac65!2sKantor%20Pemasaran%20Mika%20Land!5e0!3m2!1sid!2sid!4v1678956138187!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- /#google-map -->
        </div>
    </div>



</section>
<!--/.Fasilitas-section-->


<section class="service-section bg-grey bd-bottom padding">
    <div class="dots"></div>
    <div class="container">
        <div class="service-wrap row">
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-refinery"></i>
                    <div class="service-info">
                        <h3>Lokasi</h3>
                        <p>Terletak di kawasan Kab.Tangerang yang menjadi pertemuan 3 provinsi.</p>
                    </div>
                </div>
            </div>
            <!--item-1-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-industrial-robot"></i>
                    <div class="service-info">
                        <h3>Konsep</h3>
                        <p>Kawasan hunian bernuansa alami, nyaman, dan dilengkapi fasilitas lengkap.</p>
                    </div>
                </div>
            </div>
            <!--item-2-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-worker"></i>
                    <div class="service-info">
                        <h3>Developer</h3>
                        <p>Didukung oleh developer yang handal dan berpengalaman.</p>
                    </div>
                </div>
            </div>
            <!--item-3-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-assembly-line"></i>
                    <div class="service-info">
                        <h3>Landscape</h3>
                        <p>Jauh dari mobilitas kendaraan umum dan aman dari banjir.</p>
                    </div>
                </div>
            </div>
            <!--item-4-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-tank-truck"></i>
                    <div class="service-info">
                        <h3>Sunrise Property</h3>
                        <p>Lokasi strategis dekat pusat pemerintahan dan akses tol sedang dibangun.</p>
                    </div>
                </div>
            </div>
            <!--item-5-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Spesifikasi</h3>
                        <p>Bangunan menggunakan material berkualitas dan konsep terupdate.</p>
                    </div>
                </div>
            </div>
            <!--item-6-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Fasilitas</h3>
                        <p>Berbagai fasilitas cluster lengkap seperti Playground, Community Corner, dan Reflexology Path.</p>
                    </div>
                </div>
            </div>
            <!--item-7-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Princing & Sales Program</h3>
                        <p>Kemudahan pembelian dengan harga property yang kompetitif.</p>
                    </div>
                </div>
            </div>
            <!--item-8-->
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="m-flaticon-factory-1"></i>
                    <div class="service-info">
                        <h3>Investasi</h3>
                        <p>Potensi pertumbuhan nilai properti di masa depan tinggi karena terletak di daerah berkembang.</p>
                    </div>
                </div>
            </div>
            <!--item-9-->
        </div>
    </div>
</section>
<!--/.service-section-->

{{-- Promotion-Section  --}}
{{-- <section class="projects-section padding">
    <div class="container-fluid">
        <div class="section-heading text-center mb-40">
            <span>MikaLand</span>
            <h2>Promo Bulan Ini</h2>
        </div>
        <!--/.section-heading-->
        <div id="projects-carousel" class="projects-carousel owl-carousel">
            <div class="project-item">
                <img src="img/project-1.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="img/project-1.jpg" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <h3><a href="project-single.html" class="tittle">Rectangular house near italy</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-2.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="img/project-2.jpg" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <h3><a href="project-single.html" class="tittle">Cathedral of brasilia brasilia</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-3.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="img/project-3.jpg" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <h3><a href="project-single.html" class="tittle">Harpa concert hall reykjavik</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-4.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="img/project-4.jpg" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <h3><a href="project-single.html" class="tittle">Milwauke museum wisconsin</a></h3>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-5.jpg" alt="projects">
                <div class="overlay"></div>
                <a href="img/project-5.jpg" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <h3><a href="project-single.html" class="tittle">The dancing house prague</a></h3>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--/.Promotion-section-->



{{-- /.cta-section --}}
<section class="cta-section padding">
    <div class="container">
        <div class="cta-content text-center">
            <h2>Dapatkan harga terbaik <br>dan layanan memuaskan</h2>
            <p>Jangan lewatkan kesempatan investasi properti yang <br> menguntungkan di daerah yang sedang berkembang.</p>
            <a href="https://api.whatsapp.com/send?phone=6282122620425" style="display: inline-block; padding:16px; border-radius: 8px; background-color: #25D366; color: #fff; text-decoration: none; font-family: sans-serif; font-size: 16px;">WhatsApp Kami</a>
        </div>
    </div>
</section>
<!--/.cta-section-->

<div class="sponsor-section bg-grey">
    <div class="dots"></div>
    <div class="container">
        <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
            <div class="sponsor-item">
                <img src="img/logo-apersi.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/logo-pupr.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/logo-bank-bni.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/logo-bank-btn.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/logo-bank-bsi.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/logo-bank-bri.png" alt="sponsor">
            </div>

        </div>
    </div>
</div>
<!--/.sponsor-section-->

@endsection
