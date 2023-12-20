<header class="header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="index.html" class="navbar-brand logo">
                    <img src="assets/img/logo_lakbai.svg" class="img-fluid" alt="Logo">
                </a>
                <a href="index.html" class="navbar-brand logo-small">
                    <img src="assets/img/logo-small.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img src="assets/img/logo_lakbai.svg" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="<?php echo $title == 'Home' ? 'active' : '';?>"><a href="/">Home</a></li>
                    <li class="<?php echo $title == 'WhyUs' ? 'active' : '';?>"><a href="{{url('why-us')}}">Why Us</a></li>
                    <li class="<?php echo $title == 'CarList' ? 'active' : '';?>"><a href="{{url('car-list')}}">Our Car</a></li>
                    <li class="<?php echo $title == 'Review' ? 'active' : '';?>"><a href="{{url('reviews')}}">Reviews</a></li>
                    <li class="<?php echo $title == 'ContactUs' ? 'active' : '';?>"><a href="{{url('contact-us')}}">Contact Us</a></li>
                    <li class="login-link">
                        <a href="car-list">Book Now</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-reg" href="car-list"><span><i class="fa-solid fa-calendar-days"></i></span>Book Now</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
