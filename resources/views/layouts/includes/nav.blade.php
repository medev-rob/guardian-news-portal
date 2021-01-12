<!-- partial:partials/_navbar.html -->
<header id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="navbar-top-left-menu">
                        <li class="nav-item">
                            <a href="pages/index-inner.html" class="nav-link not-a-link">Advertise</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/aboutus.html" class="nav-link not-a-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link not-a-link">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link not-a-link">Write for Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link not-a-link">In the Press</a>
                        </li>
                    </ul>
                    <ul class="navbar-top-right-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link not-a-link"><i class="mdi mdi-magnify"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link not-a-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link not-a-link">Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a class="navbar-brand" href="#"
                        ><img src="{{asset('preneur-lab-news/images/logo.svg')}}" alt=""
                            /></a>
                    </div>
                    <div>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div
                            class="navbar-collapse justify-content-center collapse"
                            id="navbarSupportedContent"
                        >
                            <ul
                                class="navbar-nav d-lg-flex justify-content-between align-items-center"
                            >
                                <li>
                                    <button class="navbar-close">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link not-a-link" href="pages/magazine.html">MAGAZINE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link not-a-link" href="pages/business.html">Business</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link not-a-link" href="pages/sports.html">Sports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link not-a-link" href="pages/art.html">Art</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link not-a-link" href="pages/politics.html">POLITICS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link not-a-link" href="pages/travel.html">Travel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link not-a-link" href="pages/contactus.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="social-media">
                        <li>
                            <a href="#">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
