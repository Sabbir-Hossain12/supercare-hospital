{{--		<!-- Preloader -->--}}
{{--        <div class="preloader">--}}
{{--            <div class="loader">--}}
{{--                <div class="loader-outter"></div>--}}
{{--                <div class="loader-inner"></div>--}}

{{--                <div class="indicator">--}}
{{--                    <svg width="16px" height="12px">--}}
{{--                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>--}}
{{--                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- End Preloader -->--}}

		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-7 col-12 offset-lg-6 offset-md-5">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i><a href="tel:{{$basicInfo->phone}}">{{$basicInfo->phone}}</a></li>
								<li><i class="fa fa-envelope"></i><a href="mailto:{{$basicInfo->email}}">{{$basicInfo->email}}</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->

			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="{{ url('/') }}">
										@if ( !empty($basicInfo->logo) )
										   <img src="{{ asset($basicInfo->logo) }}" style="width: 180px; height:50px " alt="#">		
										@else 
										  <img src="{{ asset('public/frontend/img/logo.png') }}" style="width: 180px; height:50px " alt="#">
										@endif
									</a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">

											<li class=" @if(request()->is('/')) active  @endif"><a href="{{ url('/') }}">Home </a></li>
											<li class="@if(request()->is('doctor')) active  @endif"><a href="{{ url('/doctor') }}">Doctors </a></li>
											<li class="@if(request()->is('service')) active  @endif"><a href="{{ url('/service') }}">Services </a></li>
											<li class="@if(request()->routeIs('blogList')) active  @endif"><a href="{{route('blogList')}}">Blogs </a></li>
											<li class="@if(request()->is('contact')) active  @endif"><a href="{{ route('contact.index') }}">Contact Us</a></li>

										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="{{ url('/appointment') }}" class="btn">Book Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
