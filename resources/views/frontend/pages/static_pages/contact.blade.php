
@extends('frontend.layout.master')


@push('meta-title')
    {{ env('APP_NAME') }} | Contact Page
@endpush


@section('body-content')

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                    <ul class="bread-list">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<!-- Start Contact Us -->
<section class="contact-us section">
    <div class="container">
        <div class="inner">
            <div class="row">
{{--                <div class="col-lg-6">--}}
{{--                    <div class="contact-us-left">--}}
{{--                        <!--Start Google-map -->--}}
{{--                        <iframe class="google_maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4341.028551296312!2d90.37009060428387!3d23.805959849389655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b5097024c1%3A0xda38a77770f5ab46!2sSHAH%20ALI%20PLAZA!5e0!3m2!1sen!2sbd!4v1722776392014!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
{{--                        <!--/End Google-map -->--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-12">
                    <div class="contact-us-form">
                        <h2>Contact With Us</h2>
                        <p>If you have any questions please fell free to contact with us.</p>
                        <!-- Form -->
                        <form class="form" method="post" action="{{ route('admin.contact.store') }}">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="mobile" placeholder="Phone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">Send</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>
<!-- End Contact Us -->

@endsection


@push('script-tag')

@endpush
