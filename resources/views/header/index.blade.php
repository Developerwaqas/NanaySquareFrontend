<header>
    <nav class="navbar navbar-expand-lg navbar-light h_100">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('asset/images/Logo.png') }}" alt="logo" class="header_logo">
            </a>
            <button class="navbar-toggler d-none d-md-none " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button class="navbar-toggler d-block d-md-block d-lg-none d-xl-none" type="button"
                data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarScroll">
                <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about_us') ? 'active' : '' }}" href="/about_us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('services') ? 'active' : '' }}"
                            href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('help') ? 'active' : '' }}" href="/#help">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="/blogs">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact_us') ? 'active' : '' }}" href="/contact_us">Contact
                            Us</a>
                    </li>
                </ul>
                <div class="d-flex mr_60">
                    <a href="https://www.facebook.com/profile.php?id=100088067353309" class="anker">
                        <div class="social_icons_container_header">
                            <div class="d-flex justify-content-center">
                                <div class="vertically_midle">
                                    <i class="fa-brands fa-facebook "></i>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/nanny.square/" class="anker">
                    <div class="social_icons_container_header mx-3">
                        <div class="d-flex justify-content-center">
                            <div class="vertically_midle">
                                <i class="fa-brands fa-instagram icons_size_contact "></i>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="https://www.linkedin.com/company/nanny-square/" class="anker">
                    <div class="social_icons_container_header">
                        <div class="d-flex justify-content-center">
                            <div class="vertically_midle">
                                <i class='fa-brands fa-linkedin-in icons_size_contact'></i>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="d-flex ms-lg-auto">
                    <a href="https://app.nannysquare.com/login">
                        <button class="btn btn-primary-custom-login" type="submit">login</button>
                    </a>

                    <a href="https://app.nannysquare.com/register">
                        <button class="btn btn-primary-custom-register" type="submit">Register</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('asset/images/Logo.png') }}" alt="logo" class="header_logo">
            </a>
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about_us') ? 'active' : '' }}" href="/about_us">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('help') ? 'active' : '' }}" href="/help">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact_us') ? 'active' : '' }}" href="/contact_us">Contact
                        Us</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="https://www.facebook.com/profile.php?id=100088067353309" class="anker">
                    <div class="social_icons_container_header">
                        <div class="d-flex justify-content-center">
                            <div class="vertically_midle">
                                <i class="fa-brands fa-facebook "></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/nanny.square/" class="anker">
                <div class="social_icons_container_header mx-3">
                    <div class="d-flex justify-content-center">
                        <div class="vertically_midle">
                            <i class="fa-brands fa-instagram icons_size_contact "></i>
                        </div>
                    </div>
                </div>
                </a>
                <a href="https://www.linkedin.com/company/nanny-square/" class="anker">
                <div class="social_icons_container_header">
                    <div class="d-flex justify-content-center">
                        <div class="vertically_midle">
                            <i class='fa-brands fa-linkedin-in icons_size_contact'></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="d-flex ms-lg-auto mt-4">
                <a href="https://app.nannysquare.com/login">
                    <button class="btn btn-primary-custom-login" type="submit">login</button>
                </a>

                <a href="https://app.nannysquare.com/register">
                    <button class="btn btn-primary-custom" type="submit">Register</button>
                </a>
            </div>
        </div>
    </div>
</div>
