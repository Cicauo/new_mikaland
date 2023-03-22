@extends('web.layouts.content')
@section('content')
<div id="google-map" style="margin-top:100px;">
 {{-- <img src="img/maps-savana.jpg" class="mx-auto d-block" alt="Responsive image"> --}}
@php echo $map->link; @endphp
</div><!-- /#google-map -->

<section class="contact-section bg-grey padding">
    <div class="dots"></div>
    <div class="container">
        <div class="contact-wrap d-flex align-items-center row">
            <div class="col-md-6 padding-15">
                <div class="contact-info">
                    <h2>{{$header->title}} <br>{{$header->subtitle}} </h2>
                    <p>@php
                        echo $header->content;
                    @endphp</p>
                    
                    @foreach ($detail as $details)
                        <h4><span>{{$details->title}}:</span> {{$details->subtitle}}<br>
                    @endforeach
                    
                </div>
            </div>
            <div class="col-md-6 padding-15">
                <div class="contact-form">

                    @include('web.layouts.alert')

                    <form action="{{ url('contact/store')}}" method="POST" id="ajax_form" class="form-horizontal">
                        @csrf
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="10" class="form-control message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn" type="submit">Send Message</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/.contact-section-->
@endsection
