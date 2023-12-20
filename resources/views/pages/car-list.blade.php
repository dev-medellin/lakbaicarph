<div>
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Car Listings</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="sortby-sec">
        <div class="container">
            <div class="sorting-div">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-4 col-lg-3 col-sm-12 col-12">
                        <div class="count-search">
                            <p>Showing <span>1-8</span> of 10 Results</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-sm-12 col-12">
                        <div class="product-filter-group">
                            <div class="sortbyset">
                                <span class="sortbytitle">Show : </span>
                                <div class="sorting-select select-three">
                                    <select class="form-control select">
                                        <option>Popular</option>
                                        <option>Toyota Camry SE 350</option>
                                        <option>Audi A3 2019 new</option>
                                        <option>Ferrari 458 MM Speciale</option>
                                        <option>Chevrolet Camaro</option>
                                        <option>Acura Sport Version</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Car Grid View -->
    <section class="section car-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="row">
                        <!-- col -->
                        @for ($x=0;$x<12;$x++)
                            <div class="col-xl-4 col-lg-4 col-md-4 col-4" data-aos="fade-down">
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
                                                    <span><img src="assets/img/icons/car-parts-05.svg" alt="Auto"></span>
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
                    <!--Pagination-->
                    <div class="blog-pagination">
                        <nav>
                            <ul class="pagination page-item justify-content-center">
                                <li class="previtem">
                                    <a class="page-link" href="#"><i class="fas fa-regular fa-arrow-left me-2"></i> Prev</a>
                                </li>
                                <li class="justify-content-center pagination-center">
                                    <div class="page-group">
                                        <ul>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="active page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                        </li>
                                        <li class="page-item">
                                                <a class="page-link" href="#">5</a>
                                        </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nextlink">
                                    <a class="page-link" href="#">Next <i class="fas fa-regular fa-arrow-right ms-2"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--/Pagination-->
                </div>
            </div>
          </div>
    </section>
    <!-- /Car Grid View -->
</div>
