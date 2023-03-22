@extends('web.layouts.content')
@section('content')
<section class="page-headers padding" style="background-image: url('{{url('storage/'.$header->image)}}')">
    <div class="container">
        <div class="page-content text-center">
            <h2>{{$header->title}}</h2>
            <p>{{$header->subtitle}}</p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="project-single-section bg-grey padding">
    <div class="dots"></div>
    <div class="container">
        <div class="row project-single-wrap">
            <div class="col-sm-6 padding-15">
                <div id="project-single-carousel" class="project-single-carousel owl-carousel">

                    @foreach ($image as $images)

                    <div class="single-carousel">
                        <img src="{{url('storage/'.$images->image)}}" alt="img">
                    </div>
                        
                    @endforeach
                    
                    
                </div>
            </div>
            <div class="col-sm-6 padding-15">
                <div class="project-single-content">
                    <h2>{{$row->projects}} {{$row->name}}</h2>
                    <p>
                        @php
                            echo $row->content;
                        @endphp
                    </p>
                    <ul class="project-details">
                        @foreach ($description as $des)
                        <li><span>{{$des->name}}</span>{{$des->content}}</li>
                        @endforeach
                        
                    </ul><br>
                    <a href="https://api.whatsapp.com/send?phone=6282122620425" style="display: inline-block; padding:16px; border-radius: 8px; background-color: #25D366; color: #fff; text-decoration: none; font-family: sans-serif; font-size: 16px;">WhatsApp Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.project-single-section-->
<br>
<section class="section" id="section-spesifikasi">
    <div class="container">
        <h2 class="heading">Spesifikasi</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tbody>

                        @foreach ($spesifikasi_1 as $spek1)
                        <tr>
                            <th>{{$spek1->name}}</th>
                            <td>{{$spek1->content}}</td>
                        </tr>
                        @endforeach
                       

                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <tbody>

                        @foreach ($spesifikasi_2 as $spek2)
                        <tr>
                            <th>{{$spek2->name}}</th>
                            <td>{{$spek2->content}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
            <span>Savana Park Resident</span>
            <h2>Tipe Rumah Lainnya</h2>
        </div>
        <!--/.section-heading-->
        <div id="project-carousel-2" class="project-carousel-2 owl-carousel">
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
</section>
<!--/.sponsor-section-->
@endsection
