@extends('frontend.layout.master')


@push('meta-title')
    {{ env('APP_NAME') }} | Service Page
@endpush


@section('body-content')

<div class="breadcrumbs overlay" style="background-image: url({{ asset('public/frontend/img/bread-bg.jpg') }});">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Service</h2>
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<!-- Start service [Done] -->
<section class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Offer Different Services To Improve Your Health</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service) 
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="{{$service->service_icon}}"></i>
                    <h4><a href="">{{$service->service_title}}</a></h4>
                    <p>{{$service->service_desc}} </p>
                </div>
                <!-- End Single Service -->
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<!--/ End service -->


<!-- Start Appointment -->
<section class="appointment" id="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You. Book An Appointment</h2>
                    <img src="{{ asset('public/frontend/img/section-img.png') }}" alt="#">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="{{route('admin.appointment.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">

                                <select class="form-control form-select" name="department" id="department" required>
                                    <option value="" disabled selected>Department</option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->department_name}}">{{$department->department_name}}</option>

                                    @endforeach
                                </select>


                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input type="date" name="date" class="form-control" placeholder="Date" id="datepicker" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Write Your Message Here....." required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Book An Appointment</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-12">
                            <p>( We will be confirm by an Text Message )</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="{{ asset('public/frontend/img/contact-img.png') }}" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Appointment -->


@endsection


@push('script-tag')

@endpush