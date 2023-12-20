<div>
    <section class="banner-section banner-slider">
        <div class="container">
               <div class="home-banner">
               <div class="row align-items-center">
                       <div class="col-lg-6" data-aos="fade-down">
                        <p class="explore-text"> <span><i class="fa-solid fa-thumbs-up me-2"></i></span>100% Trusted car rental platform in the World</p>
                        <h1>Find Your Best <br>
                        <span>Dream Car for Rental</span></h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <div class="view-all">
                            <a href="listing-grid.html" class="btn btn-view d-inline-flex align-items-center">View all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
                        </div>
                       </div>
                       <div class="col-lg-6" data-aos="fade-down">
                           <div class="banner-imgs">
                            <img src="{{url('assets/img/car-right.png')}}" class="img-fluid aos" alt="bannerimage">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
    </section>

    <section class="section services">
        <div class="service-right">
            <img src="assets/img/bg/service-right.svg" class="img-fluid" alt="services right">
        </div>
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>How It Works</h2>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <!-- /Heading title -->
            <div class="services-work">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="services-group">
                            <div class="services-icon border-secondary">
                                <img class="icon-img bg-secondary" src="assets/img/icons/services-icon-01.svg" alt="Choose Locations">
                            </div>
                            <div class="services-content">
                                <h3>1. Choose Locations</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="services-group">
                            <div class="services-icon border-warning">
                                <img class="icon-img bg-warning" src="assets/img/icons/services-icon-02.svg" alt="Choose Locations">
                            </div>
                            <div class="services-content">
                                <h3>2. Pick-Up Locations</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="services-group">
                            <div class="services-icon border-dark">
                                <img class="icon-img bg-dark" src="assets/img/icons/services-icon-03.svg" alt="Choose Locations">
                            </div>
                            <div class="services-content">
                                <h3>3. Book your Car</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section popular-services popular-explore">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>Explore Most Popular Cars</h2>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <!-- /Heading title -->
                {{-- <div class="row justify-content-center">
                    <div class="col-lg-12" data-aos="fade-down">
                        <div class="listing-tabs-group">
                            <ul class="nav listing-buttons gap-3" data-bs-tabs="tabs">
                                <li>
                                    <a class="active" aria-current="true" data-bs-toggle="tab" href="#Carmazda">
                                        <span>
                                            <img src="assets/img/icons/car-icon-01.svg" alt="Mazda">
                                        </span>
                                        Mazda
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}

            <div class="tab-content">
                <div class="tab-pane active" id="Carmazda">
                    <div class="row">
                        <!-- col -->
                        @for ($x=0;$x<12;$x++)
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{url('list/details/'.$x)}}">
                                        <img src="assets/img/cars/car-01.jpg" class="img-fluid" alt="Toyota">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">Toyota</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="assets/img/profiles/avatar-0.jpg" alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="{{url('list/details/'.$x)}}">Toyota Camry SE 350</a>
                                        </h3>
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(5.0)</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="assets/img/icons/car-parts-01.svg" alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="assets/img/icons/car-parts-02.svg" alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="assets/img/icons/car-parts-03.svg" alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="assets/img/icons/car-parts-04.svg" alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="assets/img/icons/car-parts-05.svg" alt="2018"></span>
                                                <p>2018</p>
                                            </li>
                                            <li>
                                                <span><img src="assets/img/icons/car-parts-06.svg" alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Germany
                                        </div>
                                        <div class="listing-price">
                                            <h6>$400 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{url('list/details/'.$x)}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                        <!-- /col -->
                    </div>
                </div>
            </div>
            <div class="view-all text-center" data-aos="fade-down">
                <a href="listing-grid.html" class="btn btn-view d-inline-flex align-items-center">View all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
            </div>
        </div>
    </section>

    <section class="section why-choose popular-explore">
        <div class="choose-left">
            <img src="assets/img/bg/choose-left.png" class="img-fluid" alt="Why Choose Us">
        </div>
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>Why Choose Us</h2>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <!-- /Heading title -->
            <div class="why-choose-group">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="choose-img choose-black">
                                    <img src="assets/img/icons/bx-selection.svg" alt="Icon">
                                </div>
                                <div class="choose-content">
                                    <h4>Easy & Fast Booking</h4>
                                    <p>Completely carinate e business testing process whereas fully researched customer service. Globally extensive content with quality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="choose-img choose-secondary">
                                    <img src="assets/img/icons/bx-crown.svg" alt="Icon">
                                </div>
                                <div class="choose-content">
                                    <h4>Many Pickup Location</h4>
                                    <p>Enthusiastically magnetic initiatives with cross-platform sources. Dynamically target testing procedures through effective.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="choose-img choose-primary">
                                    <img src="assets/img/icons/bx-user-check.svg" alt="Icon">
                                </div>
                                <div class="choose-content">
                                    <h4>Customer Satisfaction</h4>
                                    <p>Globally user centric method interactive. Seamlessly revolutionize unique portals corporate collaboration.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about-testimonial testimonials-section">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2 class="title text-white">What People say about us? </h2>
                <p class="description text-white">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <!-- /Heading title -->
            <div class="owl-carousel about-testimonials testimonial-group mb-0 owl-theme">

                <!-- Carousel Item -->
                <div class="testimonial-item d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="quotes-head"></div>
                            <div class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="assets/img/profiles/avatar-02.jpg" class="img-fluid" alt="img">
                                    </div>
                                </div>
                                <div class="review-details">
                                    <h6>Rabien Ustoc</h6>
                                    <div class="list-rating">
                                        <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        </div>
                                        <p><span>(5.0)</span></p>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="testimonial-item d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="quotes-head"></div>
                            <div class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="assets/img/profiles/avatar-03.jpg" class="img-fluid" alt="img">
                                    </div>
                                </div>
                                <div class="review-details">
                                    <h6>Valerie L. Ellis</h6>
                                    <div class="list-rating">
                                        <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        </div>
                                        <p><span>(5.0)</span></p>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="testimonial-item d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="quotes-head"></div>
                            <div class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="assets/img/profiles/avatar-04.jpg" class="img-fluid" alt="img">
                                    </div>
                                </div>
                                <div class="review-details">
                                    <h6>Laverne Marier</h6>
                                    <div class="list-rating">
                                        <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        </div>
                                        <p><span>(5.0)</span></p>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="testimonial-item d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="quotes-head"></div>
                            <div class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="assets/img/profiles/avatar-06.jpg" class="img-fluid" alt="img">
                                    </div>
                                </div>
                                <div class="review-details">
                                    <h6>Sydney Salmons</h6>
                                    <div class="list-rating">
                                        <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        </div>
                                        <p><span>(5.0)</span></p>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->

                <!-- Carousel Item -->
                <div class="testimonial-item d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="quotes-head"></div>
                            <div class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="assets/img/profiles/avatar-07.jpg" class="img-fluid" alt="img">
                                    </div>
                                </div>
                                <div class="review-details">
                                    <h6>Lucas Moquin</h6>
                                    <div class="list-rating">
                                        <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        </div>
                                        <p><span>(5.0)</span></p>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->
            </div>
        </div>
    </section>

    <section class="section faq-section bg-light-primary">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>Frequently Asked Questions </h2>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <!-- /Heading title -->
            <div class="faq-info">
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapseds" data-bs-toggle="collapse" href="#faqOne" aria-expanded="true">What is about rental car deals?</a>
                    </h4>
                    <div id="faqOne" class="card-collapse collapse show">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">In which areas do you operate?</a>
                    </h4>
                    <div id="faqTwo" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium?</a>
                    </h4>
                    <div id="faqThree" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia?</a>
                    </h4>
                    <div id="faqFour" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor?</a>
                    </h4>
                    <div id="faqFive" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqSix" aria-expanded="false">eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit?</a>
                    </h4>
                    <div id="faqSix" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapsed" data-bs-toggle="collapse" href="#faqSeven" aria-expanded="false">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod?</a>
                    </h4>
                    <div id="faqSeven" class="card-collapse collapse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
