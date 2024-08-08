@extends('frontend.layout.master')


@push('meta-title')
    {{ env('APP_NAME') }} | Doctor Page
@endpush


@section('body-content')

<div class="breadcrumbs overlay" style="background-image: url({{ asset('public/frontend/img/bread-bg.jpg') }});">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Doctor</h2>
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<!-- Start Team -->
<section id="team" class="team section single-page">
    <div class="container">
        <div class="row">

            @foreach ($doctor as $item)
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ asset($item->image) }}" alt="#">
                            {{-- <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div> --}}
                        </div>
                        <div class="t-bottom">
                            <p>{{ $item->category }}</p>
                            <h2><a href="javascript:void()">{{ $item->title }}</a></h2>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
            @endforeach
	



            {{-- <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <!-- Team Head -->
                    <div class="t-head">
                        <img src="img/team2.jpg" alt="#">
                        <div class="t-icon">
                            <a href="appointment.html" class="btn">Get Appointment</a>
                        </div>
                    </div>
                    <!-- Team Bottom -->
                    <div class="t-bottom">
                        <p>Neurosurgeon</p>
                        <h2><a href="doctor-details.html">Domani Plavon</a></h2>
                    </div>
                    <!--/ End Team Bottom -->
                </div>
                <!-- End Single Team -->
            </div>	
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <!-- Team Head -->
                    <div class="t-head">
                        <img src="img/team3.jpg" alt="#">
                        <div class="t-icon">
                            <a href="appointment.html" class="btn">Get Appointment</a>
                        </div>
                    </div>
                    <!-- Team Bottom -->
                    <div class="t-bottom">
                        <p>Dental Surgeon</p>
                        <h2><a href="doctor-details.html">John Mard</a></h2>
                    </div>
                    <!--/ End Team Bottom -->
                </div>
                <!-- End Single Team -->
            </div>		
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <!-- Team Head -->
                    <div class="t-head">
                        <img src="img/team4.jpg" alt="#">
                        <div class="t-icon">
                            <a href="appointment.html" class="btn">Get Appointment</a>
                        </div>
                    </div>
                    <!-- Team Bottom -->
                    <div class="t-bottom">
                        <p>Neurosurgeon</p>
                        <h2><a href="doctor-details.html">Amanal Frond</a></h2>
                    </div>
                    <!--/ End Team Bottom -->
                </div>
                <!-- End Single Team -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="t-head">
                        <img src="img/team1.jpg" alt="#">
                        <div class="t-icon">
                            <a href="appointment.html" class="btn">Get Appointment</a>
                        </div>
                    </div>
                    <div class="t-bottom">
                        <p>Neurosurgeon</p>
                        <h2><a href="doctor-details.html">Collis Molate</a></h2>
                    </div>
                </div>
                <!-- End Single Team -->
            </div>	
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <!-- Team Head -->
                    <div class="t-head">
                        <img src="img/team2.jpg" alt="#">
                        <div class="t-icon">
                            <a href="appointment.html" class="btn">Get Appointment</a>
                        </div>
                    </div>
                    <!-- Team Bottom -->
                    <div class="t-bottom">
                        <p>Neurosurgeon</p>
                        <h2><a href="doctor-details.html">Domani Plavon</a></h2>
                    </div>
                    <!--/ End Team Bottom -->
                </div>
                <!-- End Single Team -->
            </div>			 --}}
        </div>
    </div>
</section>

@endsection


@push('script-tag')

@endpush