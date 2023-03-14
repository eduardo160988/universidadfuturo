    <!-- Start Header -->
    <header>
        <div class="header_top_area my-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_top d-flex justify-content-between">
                            <div class="site_logo">
                                <a href="index.html"><img src="{$WEB_ROOT}/images/logo.png?v=1" alt="logo" class="img-fluid"></a>
                            </div>
                            <div class="site_info d-flex justify-content-between">
                             <!--
                               <div class="single_info">
                                    <img src="assets/images/location.png" alt="Location" class="img-fluid">
                                    <div class="info_data">
                                        <h6>Location</h6>
                                        <p>1010 New York, NY 10018 US</p>
                                    </div>
                                </div>
                             
                                <div class="single_info">
                                    <img src="assets/images/phone.png" alt="Location" class="img-fluid">
                                    <div class="info_data">
                                        <h6>Phone</h6>
                                        <p>+880 2456 547</p>
                                    </div>
                                </div>
                            -->
                                <div class="single_info">
                                    <button class="special-button"
                                        onclick="window.location.href = 'apply_form.html';">Información <i
                                            class="fa fa-angle-right"></i> <span class="button_icon"><i
                                                class="far fa-file-alt"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area bg_dark_mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu default_bg">
                            <nav class="navbar navbar-expand-lg">
                                <div class="mobile_site_logo d-none">
                                    <a href="index.html"><img src="assets/images/footer_logo.png" alt="logo"
                                            class="img-fluid"></a>
                                </div>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                      <!--  <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Home
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="index.html">Home - University</a>
                                                <a class="dropdown-item" href="index-2.html">Home - Modern
                                                    University</a>
                                                <a class="dropdown-item" href="index-3.html">Home - Online Courses</a>
                                                <a class="dropdown-item" href="index-4.html">Home - Kindergarten</a>
                                            </div>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">Inicio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="courses.html">Conocenos</a>
                                        </li>
                                       <!-- <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-bs-toggle="dropdown">
                                                Pages
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="departments.html">Departments</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#" id="blogDropdown1"
                                                        role="button" data-bs-toggle="dropdown">
                                                        Blog
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="blogDropdown1">
                                                        <li><a class="dropdown-item" href="blog_01.html">Blog 1</a></li>
                                                        <li><a class="dropdown-item" href="blog_02.html">Blog 2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="blog_details.html">Blog Details</a>
                                                </li>
                                                <li><a class="dropdown-item" href="teachers.html">Teachers</a></li>
                                                <li><a class="dropdown-item" href="teacher_details.html">Teacher
                                                        Details</a></li>
                                                <li><a class="dropdown-item" href="events.html">Events</a></li>
                                                <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                                                <li><a class="dropdown-item" href="apply_form.html">Apply Form</a></li>
                                            </ul>
                                        </li>-->
                                        <li class="nav-item">
                                            <a href="students.html" class="nav-link" id="blod_pages">
                                                Conocenos
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="result.html" class="nav-link">Estudiantes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="notice.html" class="nav-link">Academia</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact.html" class="nav-link">Noticias</a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="contact.html" class="nav-link">Biblioteca</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#search_modal" data-bs-toggle="modal"
                                                data-bs-target="#search_modal" class="nav-link"><i
                                                    class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                    <div class="collapse-bar">
                                        <a class="navbar-brand" data-bs-toggle="collapse" href="#languages_options"><i
                                                class="fa fa-bars"></i></a>
                                        <div class="option-menu collapse" id="languages_options">
                                            <nav>
                                                <ul>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">English</a>
                                                        <a class="nav-link" href="#">Bangla</a>
                                                        <a class="nav-link" href="#">Hindi</a>
                                                        <a class="nav-link" href="#">Spanish</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <!-- Start Search Modal -->
            <div class="modal fade" id="search_modal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title sm-sub-title">Search Here</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Search Here">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="search-results">
                                <h5 class="my-4 sm-sub-title">10 Search Results Found</h5>
                                <div class="theme-list">
                                    <ul>
                                        <li><a href="#">Smply dummy text of the printing and typesetting industry</a>
                                        </li>
                                        <li><a href="#">Mauris at varius orci. Vestibulum um felis eu nisl pulvinar</a>
                                        </li>
                                        <li><a href="#">Welcome To Our Campus For Learn</a></li>
                                        <li><a href="#">The point of using Lorem Ipsum is that it has a more-or-less
                                            </a></li>
                                        <li><a href="#">has a more-or-less normal distribution of letters, as opposed to
                                                using.</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. </a>
                                        </li>
                                        <li><a href="#">Build Education Website Using WP</a></li>
                                        <li><a href="#">Build Education Website Using WordPress </a></li>
                                        <li><a href="#">And Other Modern Technology</a></li>
                                        <li><a href="#">assumenda est. Our friendly support team is standing.</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button_one" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Modal -->
        </div>
    </header>
    <!-- End Header -->