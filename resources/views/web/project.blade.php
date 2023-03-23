@extends('web.layouts.content')
@section('content')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
@endpush
{{-- <section class="page-header padding"> --}}
<section class="page-headers padding" style="background-image: url('{{url('storage/'.$header->image)}}')">
    <div class="container">
        <div class="page-content text-center">
            <h2>{{$header->title}}</h2>
            <p>{{$header->subtitle}}</p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="about-section padding">
    <div class="container">
        <div class="row about-wrap d-flex align-items-center">
            <div class="col-md-6 xs-padding">
                <div class="about-content">
                    <h2>{{$about->title}} <br>{{$about->subtitle}}</h2>
                    <p>@php
                        echo $about->content;
                    @endphp</p>
                    <ul class="about-list">
                        @foreach ($detail as $det)
                            <li><i class="fas fa-check"></i>{{$det->title}}</li>
                        @endforeach
                        
                    </ul>
                    {{-- <a class="default-btn" href="{{$download->link}}" class="button">
                        <i class="fa fa-download"></i>
                        Download Browsur
                    </a> --}}
                    <br>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#download">
                        <i class="fa fa-download"></i>&nbsp;Download Browsur
                    </button>

                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-projects">
                    <div class="about-projects"><img src="{{url("storage/".$about->image)}}" alt=""></div>
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
        <div id="project-slide" class="project-slide owl-carousel">

            @foreach($home_type as $home)
                <div class="project-item">
                    <div class="project-thumb">
                        <img src="{{url('storage/'.$home->image)}}" alt="">
                    </div>
                    <div class="project-content">
                        <h3><a href="{{url('project/detail/'.$home->id)}}">{{$home->name}}</a></h3>
                        <p> @php
                                echo $home->content;
                            @endphp
                        </p>
                        <a href="{{url('project/detail/'.$home->id)}}" class="default-btn">Lihat Detail</a>
                    </div>
                </div>
            @endforeach

  
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

            @foreach ($facilities as $fac)

            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="project-item">
                    <img src="{{url('storage/'.$fac->image)}}" alt="projects">
                    <div class="overlay"></div>
                    <a href="" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="" class="category">{{$fac->title}}</a>
                        <h3><a href="" class="tittle">{{$fac->subtitle}}<</a></h3>
                    </div>
                </div>
            </div>
                
            @endforeach
            

            {{-- Site-map  --}}
            <div>
                <img src="{{url('storage/'.$site_plan->image)}}" class="img-fluid" alt="Responsive image">
            </div>
            {{-- Site-map  --}}
            {{-- Maps Project  --}}
            <div id="google-map">
                {{-- <img src="img/maps-savana.jpg" class="mx-auto d-block" alt="Responsive image"> --}}
                @php
                    echo $map->link;
                @endphp
            </div><!-- /#google-map -->
        </div>
    </div>



</section>
<!--/.Fasilitas-section-->


<section class="service-section bg-grey bd-bottom padding">
    <div class="dots"></div>
    <div class="container">
        <div class="service-wrap row">

            @foreach ($usp as $k)
                
           
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="service-box">
                    <i class="{{$k->icon}}"></i>
                    <div class="service-info">
                        <h3>{{$k->title}}</h3>
                        <p>{{$k->subtitle}}</p>
                    </div>
                </div>
            </div>

            @endforeach

            <!--item-9-->
        </div>
    </div>
</section>
<!--/.service-section-->

<!--/.Promotion-section-->



{{-- /.cta-section --}}
<section class="cta-section padding" style="background-image: url('{{url('storage/'.$whatsapp->image)}}')">
    <div class="container">
        <div class="cta-content text-center">
            <h2>{{$whatsapp->title}} <br>{{$whatsapp->subtitle}} </h2>
            <p>
                @php
                    echo $whatsapp->content;
                @endphp
            </p>
            <a href="{{$whatsapp->link}}" style="display: 
            inline-block; padding:16px; border-radius: 8px; background-color: 
            #25D366; color: #fff; text-decoration: none; font-family: sans-serif; 
            font-size: 16px;">WhatsApp Kami</a>
        </div>
    </div>
</section>
<!--/.cta-section-->

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
</div>
<!--/.sponsor-section-->

<!-- Modal -->
<div class="modal fade" id="download" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Download Browsur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('contact/store')}}" method="POST" id="ajax_form" class="form-horizontal">
            @csrf
            <div class="modal-body">

                <input type="hidden" name="email" value="example@gmail.com">

                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="name" class="form-control" name="name" id="name" placeholder="nama lengkap" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">phone</label>
                    <input type="number" class="form-control" name="message" id="message" placeholder="message" required>
                </div>
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
@if(session()->has('message'))
    <script>
        $(document).ready(function () {
            window.location.href = "{{$download->link}}";
        });
    </script>
@endif
    
@endpush
@endsection
