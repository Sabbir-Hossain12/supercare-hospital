
@extends('frontend.layout.master')


@push('meta-title')
    {{ env('APP_NAME') }}
@endpush


@section('body-content')

		<!-- Slider Area [Done] -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider  -->
                @foreach($sliders as $slider) 
					<div class="single-slider" style="background-image:url('{{ asset($slider->banner_img) }}')">
						<div class="container">
							<div class="row">
								<div class="col-lg-7">
									<div class="text">
										<h1>{!! $slider->title !!}</h1>
										<p>{{$slider->description}} </p>
										<div class="button">
											<a href="{{$slider->appointment_url}}" class="btn">Get Appointment</a>
											<a href="{{$slider->learn_more_url}}" class="btn primary">Learn More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                @endforeach
			
			</div>
		</section>
		<!--/ End Slider Area -->


		<!-- Start Schedule Area [Done] -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
                        @foreach($schedules as $schedule) 
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>{{$schedule->schedule_title_1}}</span>
										<h4>{{$schedule->schedules_title_2}}</h4>

										<div class="text-light schedule_desc">{!!$schedule->schedules_desc!!}</div>
										{{-- <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a> --}}
									</div>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->


        <!-- Start Fun-facts [Done] -->
        <div id="fun-facts" class="fun-facts section overlay" style="background: #45AC8B!important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="icofont @if( !empty($basicInfo->room_icons) ) {{ $basicInfo->room_icons }} @else icofont-home @endif"></i>
                            <div class="content">
                                <span class="counter">@if( !empty($basicInfo->room_number) ) {{ $basicInfo->room_number }} @else 3468 @endif</span>
                                <p>@if( !empty($basicInfo->room_icons) ) {{ $basicInfo->room_title }} @else Hospital Rooms @endif</p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>



                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="icofont @if( !empty($basicInfo->doctor_icons) ) {{ $basicInfo->doctor_icons }} @else icofont-user-alt-3 @endif"></i>
                            <div class="content">
                                <span class="counter">@if( !empty($basicInfo->doctor_number) ) {{ $basicInfo->doctor_number }} @else 557 @endif</span>
                                <p>@if( !empty($basicInfo->doctor_title) ) {{ $basicInfo->doctor_title }} @else Specialist Doctors @endif </p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="@if( !empty($basicInfo->patient_icons) ) {{ $basicInfo->patient_icons }} @else icofont-simple-smile @endif"></i>
                            <div class="content">
                                <span class="counter">@if( !empty($basicInfo->patient_number) ) {{ $basicInfo->patient_number }} @else 4379 @endif</span>
                                <p>@if( !empty($basicInfo->patient_title) ) {{ $basicInfo->patient_title }} @else Happy Patients @endif </p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="icofont @if( !empty($basicInfo->experience_icons) ) {{ $basicInfo->experience_icons }} @else icofont-table @endif"></i>
                            <div class="content">
                                <span class="counter">@if( !empty($basicInfo->experience_number) ) {{ $basicInfo->experience_number }} @else 32 @endif</span>
                                <p>@if( !empty($basicInfo->experience_title) ) {{ $basicInfo->experience_title }} @else Years of Experience @endif</p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Fun-facts-->


		<!-- Start Why choose [Done] -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							{{-- <img src="{{ asset('public/frontend/img/section-img.png') }}" alt="#"> --}}
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>{{ $about->title ?? ''}}</h3>


							<div class="about-contents">
								{{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>

								<ul>
									<li>Maecenas vitae luctus nibh. </li>
									<li>Duis massa massa.</li>
									<li>Aliquam feugiat interdum.</li>
									<li>Maecenas vitae luctus nibh. </li>
									<li>Duis massa massa.</li>
									<li>Aliquam feugiat interdum.</li>
								</ul> --}}

								{!! $about->description ?? '' !!}
							</div>

						</div>
						<!-- End Choose Left -->
					</div>

					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right" style="background-image: url('{{ asset($about->image) }}');">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="{{ ($about->video) }}" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->


		<!-- Start Call to action [Done] -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5" style="	background-image:url({{ asset('public/frontend/img/call-bg.jpg') }});">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Do you need Emergency Medical Care? Call @ {{ $basicInfo->phone ?? 1234567890 }}</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
							<div class="button">
								<a href="{{ url('/contact') }}" class="btn">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->


		<!-- Start portfolio [Done] -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
							<img src="{{ asset('public/frontend/img/section-img.png') }}" alt="#">
{{--							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>--}}
						</div>
					</div>
				</div>
			</div>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">

							@foreach ($projects as $project)
								<div class="single-pf">
									<img src="{{ asset($project->image) }}" alt="{{ $project->title }}">
									<a href="{{ route('project-details', $project->id) }}" class="btn">View Details</a>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->

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


		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent Medical News.</h2>
							<img src="{{ asset('public/frontend/img/section-img.png') }}" alt="#">
{{--							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>--}}
						</div>
					</div>
				</div>
				<div class="row">
                    @foreach($blogs as $blog)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="{{ asset( $blog->blog_image ) }}" alt="#">
							</div>
                            @php
                                $blogDate = \Carbon\Carbon::parse($blog->blog_date);
                            @endphp
							<div class="news-body">
								<div class="news-content">
									<div class="date">{{ $blogDate->diffForHumans()}}</div>
									<h2><a href="{{route('blogDetail',$blog->id)}}">{{$blog->blog_title}}</a></h2>
									<p class="text">{{$blog->blog_short_desc}}</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
                    @endforeach
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

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
										<input name="name" type="text" placeholder="Name">
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
                                        
                                            <select class="form-control form-select" name="department" id="department">
                                                <option value="" disabled selected>Department</option>
                                                @foreach($departments as $department) 
                                                <option value="{{$department->department_name}}">{{$department->department_name}}</option>
                                               
                                                @endforeach
                                            </select>
											
										
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="date" name="date" class="form-control" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
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
