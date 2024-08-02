@extends('frontend.layout.master')


@push('meta-title')
    Danpite Tech
@endpush


@section('body-content')

<!-- Banner Section start-->
<section class="detail_banner_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner_content_details">Related Banner</div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section end-->


<!-- Service Details Section start-->
<section class="service_details">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('public/asset/images/about-image.jpg') }}" alt="">
            </div>

            <div class="col-lg-5 offset-lg-1">
                <div class="service-details-container">
                    <h2>Accelery innovation with world class teams. We'll match you to an entire remote team.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, cum? Aliquid obcaecati eaque fugit, odit dolorem, eos minus soluta harum sapiente, veniam voluptas tenetur dolore!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Details Section end-->


<!-- service section start -->
<section class="service-section" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-container">
                    <h1>See Our Services</h1>

                    <div class="service-list">
                        @foreach ($services as $service)
                            <div class="service-details" data-aos="fade-right" data-aos-duration="1500">
                                <img src="{{ asset( $service->service_img ) }}" alt="">

                                <div class="service-content">
                                    <h2>{{ $service->title }}</h2>
                                    <div class="star-ratings">
                                        @if ( $service->ratings == 2 )
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                        @elseif( $service->ratings == 3 )
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                        @elseif( $service->ratings == 4 )
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                        @elseif( $service->ratings == 5 )
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                        @endif
                                    </div>

                                    <div class="action-service">
                                        <a href=""><span>Read More</span>
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>

                                        <a href="tel:{{ $service->whatsapp }}">
                                            <button class="chat-btn">Chat Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service section end -->

<!-- Description & Review Section start -->
<section class="desc_review_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shuffle_tab_menu">
                    <ul>
                        <li class="shuffle_active">Description</li>
                        <li>Review</li>
                    </ul>
                </div>

                <div class="main-menu-body-content">
                      <div class="shuffle_content content_active">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime dolor atque non qui voluptatem fuga amet ipsa, accusamus corporis libero! Illum dolores inventore veritatis, quod a explicabo cupiditate accusamus nobis voluptatem amet nam ullam expedita fuga nostrum, aperiam repellat molestias sit. Quae quos cum, neque perspiciatis, tempore, enim aliquam cupiditate recusandae eum optio nesciunt alias. Atque omnis veritatis totam fugiat deserunt fuga praesentium quaerat autem ducimus dicta. Animi soluta quod exercitationem blanditiis facere est similique!
                      </div>

                      <div class="shuffle_content">
                         <div class="review_section">
                            <h3>23 Reviews for This details page content.</h3>

                            <div class="">
                                <div class="review_details">
                                    <div class="review_titles">
                                        <h4>Jhon Doe</h4>
                                        <p><span>27 Feb 2017</span> <span>10:57:43</span></p>
                                    </div>

                                    <div class="review_ratings">
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <span>(5)</span>
                                    </div>

                                    <div class="review_paragragh">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti enim reiciendis, ipsa culpa minima possimus quasi cumque? Odit omnis voluptatum labore sint odio, quo nisi?</p>
                                    </div>
                                </div>

                                <div class="review_details">
                                    <div class="review_titles">
                                        <h4>Jhon Doe</h4>
                                        <p><span>27 Feb 2017</span> <span>10:57:43</span></p>
                                    </div>

                                    <div class="review_ratings">
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <span>(5)</span>
                                    </div>

                                    <div class="review_paragragh">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti enim reiciendis, ipsa culpa minima possimus quasi cumque? Odit omnis voluptatum labore sint odio, quo nisi?</p>
                                    </div>
                                </div>
                            </div>
                         </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Description & Review Section end -->


<!-- step section start -->
<section class="step_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="step_details">
                    <h2>3 Step to start</h2>
                    <p>There are many variations of passengers of lorem ipsum available, but the majority have suffered alternation in some form.</p>

                    <div class="step_details_container">
                        <div class="step_start">
                            <div class="step_count">
                                <span>01</span>
                            </div>

                            <div class="step_count_details">
                                <h3>Create Your Wallet</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos similique ullam ducimus dicta eum corporis.</p>
                            </div>
                        </div>

                        <div class="step_start">
                            <div class="step_count">
                                <span>02</span>
                            </div>

                            <div class="step_count_details">
                                <h3>MAke Payment</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos similique ullam ducimus dicta eum corporis.</p>
                            </div>
                        </div>


                        <div class="step_start">
                            <div class="step_count">
                                <span>03</span>
                            </div>

                            <div class="step_count_details">
                                <h3>Buy & Sell Coins</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos similique ullam ducimus dicta eum corporis.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- step section end -->


<!-- pricelist section start -->
<section class="pricelist_section" id="price">
    <div class="container">
        <div class="row">
            <div class="price_head">
                <h1>Our Price List</h1>
            </div>
        </div>

        <div class="row">
            @foreach ($pricePlans as $pricePlan)

               @if ( $pricePlans->count() === 1 )
                  <div class="col-lg-6 offset-lg-3" data-aos="zoom-out-right" data-aos-duration="1500">

               @elseif( $pricePlans->count() === 2 )
                  <div class="col-lg-6" data-aos="zoom-out-right" data-aos-duration="1500">

               @else
                  <div class="col-lg-4" data-aos="zoom-out-right" data-aos-duration="1500">
               @endif

                    <div class="main-price-list">
                        <div class="price-headlist" style="background-color: {{ $pricePlan->color_theme }};">
                            <h3>{{ $pricePlan->price_title }}</h3>
                            <p>{{ $pricePlan->price_package }}</p>
                        </div>

                        <div class="price-list-menu">
                            {!! $pricePlan->price_desc !!}
                        </div>

                        <div class="text-center">
                            <a href="tel:{{ $pricePlan->whatsapp }}" class="price-btn" style="background-color: {{ $pricePlan->color_theme }};">
                                <div class="whatsapp-icon">
                                    <i class='bx bxl-whatsapp'></i>
                                    <label class="chat-text">Let's Chat</label>
                                </div>
                                <span>get best price</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- pricelist section end -->


<!-- service-place section start -->
<section class="service_place_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="quickest_service_content">
                    <h2>Easiest way to get a service</h2>
                </div>
            </div>

            <div class="col-lg-6">
                 <div class="">
                    <img src="{{ asset('public/asset/images/easiest_service.png') }}" alt="">
                 </div>
            </div>

            <div class="col-lg-5 offset-lg-1">
                <ul class="service_list_procedure">
                    <li>
                        <div class="service_process">
                            <div class="service_count">
                                <span>01</span>
                            </div>

                            <div class="service_process_content">
                                <h3>Select The Service</h3>
                                <p>pick the service you are looking for - from the website or the app.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="service_process">
                            <div class="service_count">
                                <span>02</span>
                            </div>

                            <div class="service_process_content">
                                <h3>Pick Your Schedule</h3>
                                <p>pick the service you are looking for - from the website or the app.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="service_process">
                            <div class="service_count">
                                <span>03</span>
                            </div>

                            <div class="service_process_content">
                                <h3>Select The Service</h3>
                                <p>pick the service you are looking for - from the website or the app.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- service-place section end -->


<!-- Contact section start -->
<section class="contact-section">
    <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6">
             <div class="contact-img">
                 <img src="{{ asset('public/asset/images/contact-image.png') }}" alt="">
             </div>
          </div>

          <div class="col-lg-6" >
              <div class="contact-form">
                  <h6>Free Quote</h6>
                  <h1>Get A Free Quote</h1>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, ex quod! In laudantium ipsa optio nulla quibusdam id enim molestiae magni accusantium veritatis. Praesentium animi repellendus expedita perferendis asperiores eveniet in quidem assumenda aperiam. Dolore, accusantium? Nulla iure soluta optio.</p>

                  <form id="createForm" method="POST">
                    @csrf

                      <div class="row">
                          <div class="col-lg-6">
                              <div class="mb-3">
                                  <input class="form-control form-control-lg" type="text" name="name" id="" placeholder="Your Name">
                              </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="mb-3">
                                  <input class="form-control form-control-lg" type="text" name="mobile" id="" placeholder="Your Mobile">
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="mb-3">
                            <input class="form-control form-control-lg" type="email" name="email" id="" placeholder="Your Email">
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="mb-3">
                              <select class="form-select form-select-lg mb-3" name="service">
                                  <option selected>Open this select menu</option>
                                  @foreach ($services as $service)
                                     <option value="{{ $service->id }}">{{ $service->title }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="note" style="height: 100px"></textarea>
                              <label for="floatingTextarea2">Special Notes</label>
                          </div>
                      </div>

                      <div class="d-flex justify-content-end">
                          <button class="contact-btn-submit">Submit</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
 </section>
<!-- Contact section end -->

@endsection



@push('script-tag')
   <script>
        let shuffle_list = document.querySelectorAll('.shuffle_tab_menu ul li');
        let shuffle_content = document.querySelectorAll('.shuffle_content');

        shuffle_list.forEach((item, index) =>{
            item.addEventListener("click", function(){
                    // console.log(item, index)
                item.classList.add('shuffle_active');

                shuffle_list.forEach((item2, i) => {
                    if( i!= index){
                        item2.classList.remove('shuffle_active');
                    }
                })


                shuffle_content.forEach((content, i) =>{
                    if( i!= index){
                        content.classList.remove('content_active');
                    }
                    else{
                        content.classList.add('content_active');
                    }
                })
            })
        })

   </script>
@endpush
