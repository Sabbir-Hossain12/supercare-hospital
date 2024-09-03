@extends('frontend.layout.master')


@push('meta-title')
    {{ env('APP_NAME') }} | Doctor Page
    
    
@endpush

@push('add-css') 
    
    <link rel="stylesheet" href="{{ asset('public/frontend/css/tab.css') }}">
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

<!-- Portfolio Section Start -->
<section class="portfolio_section pb-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio_menu d-flex justify-content-center mt-4">
                    <ul class="text-center">
                        
                        @foreach($departments as $key =>$department) 
                        <li class="menu_listing {{ $key == 0 ? 'active_portfolio' : '' }}"
                            id="{{ $key == 0 ? 'defaultTab' : '' }}" 
                            onclick="updateDepartmentTab('{{ $department->id }}', $(this))">
                            <i class='bx bx-plus-medical'></i> {{ $department->department_name }}</li>
                        @endforeach
{{--                        active_portfolio--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Portfolio Section end -->

<!-- Start Team -->
<section id="team" class="team section single-page pt-0 mt-0">
    <div class="container">
        <div class="row" id="doctorList">
            

{{--            @foreach ($doctor as $item)--}}
{{--                <div class="col-lg-4 col-md-6 col-12">--}}
{{--                    <!-- Single Team -->--}}
{{--                    <div class="single-team">--}}
{{--                        <div class="t-head">--}}
{{--                            <img src="{{ asset($item->image) }}" alt="#">--}}
{{--                            --}}{{-- <div class="t-icon">--}}
{{--                                <a href="appointment.html" class="btn">Get Appointment</a>--}}
{{--                            </div> --}}
{{--                        </div>--}}
{{--                        <div class="t-bottom">--}}
{{--                            <p>{{ $item->department->department_name }}</p>--}}
{{--                            <h2><a href="javascript:void()">{{ $item->title }}</a></h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single Team -->--}}
{{--                </div>--}}
{{--            @endforeach--}}
	



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

{{--    <script>--}}
{{--        // Portfolio Section  --}}
{{--        let menu_listing = document.querySelectorAll('ul .menu_listing');--}}
{{--        let portfolio_container = document.querySelectorAll('.portfolio_container');--}}

{{--        menu_listing.forEach((element, i) => {--}}
{{--            element.addEventListener('click', (e) => {--}}
{{--                // Fade out the currently active container--}}
{{--                portfolio_container.forEach((container, index) => {--}}
{{--                    if (container.classList.contains('active_portfolio')) {--}}
{{--                        container.style.opacity = '0';--}}
{{--                        setTimeout(() => {--}}
{{--                            container.classList.remove('active_portfolio');--}}
{{--                            if (i !== index) {--}}
{{--                                menu_listing[index].classList.remove('active_portfolio');--}}
{{--                            }--}}
{{--                        }, 300); // match the CSS transition duration--}}
{{--                    }--}}
{{--                });--}}

{{--                // Delay fade in of the new container--}}
{{--                setTimeout(() => {--}}
{{--                    element.classList.add('active_portfolio');--}}
{{--                    portfolio_container[i].classList.add('active_portfolio');--}}
{{--                    portfolio_container[i].style.opacity = '1';--}}
{{--                }, 300); // match the CSS transition duration--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
    
    
    
    <script>

        $(document).ready(function() {
            // Trigger click on the first tab to load its content
            $('#defaultTab').trigger('click');
        });

        function updateDepartmentTab(departmentId,$element) {
            $.ajax({
                url: "{{url('/doctors-by-department')}}/" + departmentId,
                method: 'GET',
                success: function(response) {
                    // Remove active class from all tabs
                    $('.menu_listing').removeClass('active_portfolio');

                    // Add active class to the clicked tab
                    $element.addClass('active_portfolio');
                    
                    // Clear the current team section
                    $('#doctorList').empty();

                    // Loop through the response and append the doctors to the team section
                    response.forEach(function(doctor) {
                        $('#doctorList').append(`
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-team">
                            <div class="t-head">
                                <img src="${doctor.image}" alt="#">
                            </div>
                            <div class="t-bottom">
                    <p>${doctor.department.department_name}</p>
                                <h2><a href="javascript:void(0)">${doctor.title}</a></h2>
                            </div>
                        </div>
                    </div>
                `);
                        
                        $()
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching doctors:', error);
                }
            });
        }
    </script>
@endpush