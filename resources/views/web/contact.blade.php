@extends('web.layouts.content')
@section('content')
<div id="google-map">
 {{-- <img src="img/maps-savana.jpg" class="mx-auto d-block" alt="Responsive image"> --}}
 <iframe class="mx-auto d-block" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.4687659506736!2d106.45726555208627!3d-6.280151282357816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e420665f6135b0b%3A0x5ef21bfb0413ac65!2sKantor%20Pemasaran%20Mika%20Land!5e0!3m2!1sid!2sid!4v1678956138187!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div><!-- /#google-map -->

<section class="contact-section bg-grey padding">
    <div class="dots"></div>
    <div class="container">
        <div class="contact-wrap d-flex align-items-center row">
            <div class="col-md-6 padding-15">
                <div class="contact-info">
                    <h2>Jangan ragu hubungi kita & <br>kirim pesanmu hari ini juga!</h2>
                    
                    <p>PT. MIDA KARYA ABADI LAND fokus pada pembangunan perumahan dan real estate berkualitas, termasuk rumah sederhana, untuk masyarakat.</p>
                    <h3>Jalan Ranca Gede No.34, Munjul, Kec. Solear<br>, Kabupaten Tangerang, Banten 15730</h3>
                    <h4><span>Email:</span> cs@mikakaryaabadiland.cmo <br> <span>Phone:</span> (+021) 599 5 888 <br> 
                </div>
            </div>
            <div class="col-md-6 padding-15">
                <div class="contact-form">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form action="{{ route('contact.store')}}" method="POST" id="ajax_form" class="form-horizontal">
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
                                <textarea id="description" name="description" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
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
