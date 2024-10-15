@extends('app_layout.app')
@section('content')
<section>
    <div class="header_section_bg_img vertically-center-45">
        <div class="d-flex justify-content-center ">
            <div>
                <div class="font_size_45 line_height_55 color_theme font_weight_700 font_family_popins">Services Detail
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <div class="d-flex">
                        <div
                            class="color_theme font_size_15 font_weight_600 font_family_popins hover_effect text-uppercase">
                            Home</div>
                        <div class="mx-3">
                            <i class="fa-solid fa-angle-double-right"></i>
                        </div>
                        <div
                            class="color_purple font_size_15 font_weight_600 font_family_popins hover_effect text-uppercase">
                            Services</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-4">
                    <div class="outer-border">
                        <div class="inner-box-header">
                            <div class="d-flex align-items-center">
                                <div class="inner-left-dash"></div>
                                <div class="details-page-title"> Our Services</div>
                            </div>
                        </div>
                        <div class="inner-box">
                            <ul>
                                <li class="mb-4">Part-time care</li>
                                <li class="mb-4">Morning nanny</li>
                                <li class="mb-4">Party helpers</li>
                                <li class="mb-4">Experienced Nannies</li>
                                <li class="mb-4">Household helpers</li>
                                <li>School pod nannies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <div>
                        <img src="{{ asset('asset/images/service-img1-1000x600.jpg.png') }}" alt="img"
                            class="img-details-card">
                    </div>
                    <div class="details-title mt-4">
                        Start Journey Finding Yourperfect Nanny.
                    </div>
                    <div class="mt-4 details-content">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti
                        quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. At vero eos et
                        accusamus et iusto odio
                        dignissimos ducimus.
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="tick_icon_container">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 14 14" fill="none">
                                                <g clip-path="url(#clip0_225_8845)">
                                                    <path
                                                        d="M13.3933 0.933506C13.1133 0.777951 12.7867 0.793507 12.4133 0.980173C12.2267 1.10462 11.9622 1.3224 11.62 1.63351C11.2467 1.97573 10.7178 2.55128 10.0333 3.36017C9.56667 3.92017 9.22444 4.32462 9.00667 4.57351L7.88667 5.78684C7.07778 6.65795 6.47111 7.30351 6.06667 7.72351C5.66222 8.14351 5.36667 8.4624 5.18 8.68017C4.86889 9.05351 4.62 9.39573 4.43333 9.70684L3.59333 8.82017C2.84667 8.07351 2.26333 7.52906 1.84333 7.18684C1.42333 6.84462 1.02667 6.67351 0.653333 6.67351C0.217778 6.67351 0 6.96906 0 7.56017C0.0311111 8.30684 0.342222 9.13128 0.933333 10.0335C1.33778 10.718 1.89778 11.4335 2.61333 12.1802C3.23556 12.8335 3.82667 13.1602 4.38667 13.1602C4.76 13.1913 5.16444 13.0357 5.6 12.6935C5.84889 12.5068 6.16 12.1957 6.53333 11.7602L6.62667 11.6668C7 11.2624 7.49778 10.6402 8.12 9.80017C8.55556 9.24017 8.88222 8.83573 9.1 8.58684L10.1733 7.28017C11.1378 6.12906 11.8378 5.25795 12.2733 4.66684L12.6 4.29351C13.2222 3.54684 13.6267 2.95573 13.8133 2.52017C14.1556 1.77351 14.0156 1.24462 13.3933 0.933506ZM1.07333 7.46684C1.04222 7.46684 1.01111 7.46684 0.98 7.46684C0.886667 7.43573 0.793333 7.40462 0.7 7.37351C0.762222 7.31128 0.886667 7.3424 1.07333 7.46684Z"
                                                        fill="#B996FE" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_225_8845">
                                                        <rect width="14" height="14" fill="white"
                                                            transform="matrix(1 0 0 -1 0 14)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mx-3 color_light_blue font_size_20 font_weight_600 font_family_popins">
                                        Receive guidance at every step</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="tick_icon_container">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 14 14" fill="none">
                                                <g clip-path="url(#clip0_225_8845)">
                                                    <path
                                                        d="M13.3933 0.933506C13.1133 0.777951 12.7867 0.793507 12.4133 0.980173C12.2267 1.10462 11.9622 1.3224 11.62 1.63351C11.2467 1.97573 10.7178 2.55128 10.0333 3.36017C9.56667 3.92017 9.22444 4.32462 9.00667 4.57351L7.88667 5.78684C7.07778 6.65795 6.47111 7.30351 6.06667 7.72351C5.66222 8.14351 5.36667 8.4624 5.18 8.68017C4.86889 9.05351 4.62 9.39573 4.43333 9.70684L3.59333 8.82017C2.84667 8.07351 2.26333 7.52906 1.84333 7.18684C1.42333 6.84462 1.02667 6.67351 0.653333 6.67351C0.217778 6.67351 0 6.96906 0 7.56017C0.0311111 8.30684 0.342222 9.13128 0.933333 10.0335C1.33778 10.718 1.89778 11.4335 2.61333 12.1802C3.23556 12.8335 3.82667 13.1602 4.38667 13.1602C4.76 13.1913 5.16444 13.0357 5.6 12.6935C5.84889 12.5068 6.16 12.1957 6.53333 11.7602L6.62667 11.6668C7 11.2624 7.49778 10.6402 8.12 9.80017C8.55556 9.24017 8.88222 8.83573 9.1 8.58684L10.1733 7.28017C11.1378 6.12906 11.8378 5.25795 12.2733 4.66684L12.6 4.29351C13.2222 3.54684 13.6267 2.95573 13.8133 2.52017C14.1556 1.77351 14.0156 1.24462 13.3933 0.933506ZM1.07333 7.46684C1.04222 7.46684 1.01111 7.46684 0.98 7.46684C0.886667 7.43573 0.793333 7.40462 0.7 7.37351C0.762222 7.31128 0.886667 7.3424 1.07333 7.46684Z"
                                                        fill="#B996FE" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_225_8845">
                                                        <rect width="14" height="14" fill="white"
                                                            transform="matrix(1 0 0 -1 0 14)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mx-3 color_light_blue font_size_20 font_weight_600 font_family_popins">
                                        Receive guidance at every step</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="tick_icon_container">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 14 14" fill="none">
                                                <g clip-path="url(#clip0_225_8845)">
                                                    <path
                                                        d="M13.3933 0.933506C13.1133 0.777951 12.7867 0.793507 12.4133 0.980173C12.2267 1.10462 11.9622 1.3224 11.62 1.63351C11.2467 1.97573 10.7178 2.55128 10.0333 3.36017C9.56667 3.92017 9.22444 4.32462 9.00667 4.57351L7.88667 5.78684C7.07778 6.65795 6.47111 7.30351 6.06667 7.72351C5.66222 8.14351 5.36667 8.4624 5.18 8.68017C4.86889 9.05351 4.62 9.39573 4.43333 9.70684L3.59333 8.82017C2.84667 8.07351 2.26333 7.52906 1.84333 7.18684C1.42333 6.84462 1.02667 6.67351 0.653333 6.67351C0.217778 6.67351 0 6.96906 0 7.56017C0.0311111 8.30684 0.342222 9.13128 0.933333 10.0335C1.33778 10.718 1.89778 11.4335 2.61333 12.1802C3.23556 12.8335 3.82667 13.1602 4.38667 13.1602C4.76 13.1913 5.16444 13.0357 5.6 12.6935C5.84889 12.5068 6.16 12.1957 6.53333 11.7602L6.62667 11.6668C7 11.2624 7.49778 10.6402 8.12 9.80017C8.55556 9.24017 8.88222 8.83573 9.1 8.58684L10.1733 7.28017C11.1378 6.12906 11.8378 5.25795 12.2733 4.66684L12.6 4.29351C13.2222 3.54684 13.6267 2.95573 13.8133 2.52017C14.1556 1.77351 14.0156 1.24462 13.3933 0.933506ZM1.07333 7.46684C1.04222 7.46684 1.01111 7.46684 0.98 7.46684C0.886667 7.43573 0.793333 7.40462 0.7 7.37351C0.762222 7.31128 0.886667 7.3424 1.07333 7.46684Z"
                                                        fill="#B996FE" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_225_8845">
                                                        <rect width="14" height="14" fill="white"
                                                            transform="matrix(1 0 0 -1 0 14)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mx-3 color_light_blue font_size_20 font_weight_600 font_family_popins">
                                        Focused on safety</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="tick_icon_container">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 14 14" fill="none">
                                                <g clip-path="url(#clip0_225_8845)">
                                                    <path
                                                        d="M13.3933 0.933506C13.1133 0.777951 12.7867 0.793507 12.4133 0.980173C12.2267 1.10462 11.9622 1.3224 11.62 1.63351C11.2467 1.97573 10.7178 2.55128 10.0333 3.36017C9.56667 3.92017 9.22444 4.32462 9.00667 4.57351L7.88667 5.78684C7.07778 6.65795 6.47111 7.30351 6.06667 7.72351C5.66222 8.14351 5.36667 8.4624 5.18 8.68017C4.86889 9.05351 4.62 9.39573 4.43333 9.70684L3.59333 8.82017C2.84667 8.07351 2.26333 7.52906 1.84333 7.18684C1.42333 6.84462 1.02667 6.67351 0.653333 6.67351C0.217778 6.67351 0 6.96906 0 7.56017C0.0311111 8.30684 0.342222 9.13128 0.933333 10.0335C1.33778 10.718 1.89778 11.4335 2.61333 12.1802C3.23556 12.8335 3.82667 13.1602 4.38667 13.1602C4.76 13.1913 5.16444 13.0357 5.6 12.6935C5.84889 12.5068 6.16 12.1957 6.53333 11.7602L6.62667 11.6668C7 11.2624 7.49778 10.6402 8.12 9.80017C8.55556 9.24017 8.88222 8.83573 9.1 8.58684L10.1733 7.28017C11.1378 6.12906 11.8378 5.25795 12.2733 4.66684L12.6 4.29351C13.2222 3.54684 13.6267 2.95573 13.8133 2.52017C14.1556 1.77351 14.0156 1.24462 13.3933 0.933506ZM1.07333 7.46684C1.04222 7.46684 1.01111 7.46684 0.98 7.46684C0.886667 7.43573 0.793333 7.40462 0.7 7.37351C0.762222 7.31128 0.886667 7.3424 1.07333 7.46684Z"
                                                        fill="#B996FE" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_225_8845">
                                                        <rect width="14" height="14" fill="white"
                                                            transform="matrix(1 0 0 -1 0 14)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mx-3 color_light_blue font_size_20 font_weight_600 font_family_popins">
                                        Focused on safety</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="tick_icon_container">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 14 14" fill="none">
                                                <g clip-path="url(#clip0_225_8845)">
                                                    <path
                                                        d="M13.3933 0.933506C13.1133 0.777951 12.7867 0.793507 12.4133 0.980173C12.2267 1.10462 11.9622 1.3224 11.62 1.63351C11.2467 1.97573 10.7178 2.55128 10.0333 3.36017C9.56667 3.92017 9.22444 4.32462 9.00667 4.57351L7.88667 5.78684C7.07778 6.65795 6.47111 7.30351 6.06667 7.72351C5.66222 8.14351 5.36667 8.4624 5.18 8.68017C4.86889 9.05351 4.62 9.39573 4.43333 9.70684L3.59333 8.82017C2.84667 8.07351 2.26333 7.52906 1.84333 7.18684C1.42333 6.84462 1.02667 6.67351 0.653333 6.67351C0.217778 6.67351 0 6.96906 0 7.56017C0.0311111 8.30684 0.342222 9.13128 0.933333 10.0335C1.33778 10.718 1.89778 11.4335 2.61333 12.1802C3.23556 12.8335 3.82667 13.1602 4.38667 13.1602C4.76 13.1913 5.16444 13.0357 5.6 12.6935C5.84889 12.5068 6.16 12.1957 6.53333 11.7602L6.62667 11.6668C7 11.2624 7.49778 10.6402 8.12 9.80017C8.55556 9.24017 8.88222 8.83573 9.1 8.58684L10.1733 7.28017C11.1378 6.12906 11.8378 5.25795 12.2733 4.66684L12.6 4.29351C13.2222 3.54684 13.6267 2.95573 13.8133 2.52017C14.1556 1.77351 14.0156 1.24462 13.3933 0.933506ZM1.07333 7.46684C1.04222 7.46684 1.01111 7.46684 0.98 7.46684C0.886667 7.43573 0.793333 7.40462 0.7 7.37351C0.762222 7.31128 0.886667 7.3424 1.07333 7.46684Z"
                                                        fill="#B996FE" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_225_8845">
                                                        <rect width="14" height="14" fill="white"
                                                            transform="matrix(1 0 0 -1 0 14)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mx-3 color_light_blue font_size_20 font_weight_600 font_family_popins">
                                        Babysitting In-Home Care</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="tick_icon_container">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 14 14" fill="none">
                                                <g clip-path="url(#clip0_225_8845)">
                                                    <path
                                                        d="M13.3933 0.933506C13.1133 0.777951 12.7867 0.793507 12.4133 0.980173C12.2267 1.10462 11.9622 1.3224 11.62 1.63351C11.2467 1.97573 10.7178 2.55128 10.0333 3.36017C9.56667 3.92017 9.22444 4.32462 9.00667 4.57351L7.88667 5.78684C7.07778 6.65795 6.47111 7.30351 6.06667 7.72351C5.66222 8.14351 5.36667 8.4624 5.18 8.68017C4.86889 9.05351 4.62 9.39573 4.43333 9.70684L3.59333 8.82017C2.84667 8.07351 2.26333 7.52906 1.84333 7.18684C1.42333 6.84462 1.02667 6.67351 0.653333 6.67351C0.217778 6.67351 0 6.96906 0 7.56017C0.0311111 8.30684 0.342222 9.13128 0.933333 10.0335C1.33778 10.718 1.89778 11.4335 2.61333 12.1802C3.23556 12.8335 3.82667 13.1602 4.38667 13.1602C4.76 13.1913 5.16444 13.0357 5.6 12.6935C5.84889 12.5068 6.16 12.1957 6.53333 11.7602L6.62667 11.6668C7 11.2624 7.49778 10.6402 8.12 9.80017C8.55556 9.24017 8.88222 8.83573 9.1 8.58684L10.1733 7.28017C11.1378 6.12906 11.8378 5.25795 12.2733 4.66684L12.6 4.29351C13.2222 3.54684 13.6267 2.95573 13.8133 2.52017C14.1556 1.77351 14.0156 1.24462 13.3933 0.933506ZM1.07333 7.46684C1.04222 7.46684 1.01111 7.46684 0.98 7.46684C0.886667 7.43573 0.793333 7.40462 0.7 7.37351C0.762222 7.31128 0.886667 7.3424 1.07333 7.46684Z"
                                                        fill="#B996FE" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_225_8845">
                                                        <rect width="14" height="14" fill="white"
                                                            transform="matrix(1 0 0 -1 0 14)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mx-3 color_light_blue font_size_20 font_weight_600 font_family_popins">
                                        Babysitting In-Home Care</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details-title mt-5">
                        The best nanny experience.
                    </div>
                    <div class="mt-4 details-content">
                        Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis maiores alias consequatur
                        aut perferendis doloribus
                        asperiores repellat
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div>
                                <img src="{{ asset('asset/images/home1-slide1.png') }}" alt="img"
                                    class="details-sub-images">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <img src="{{ asset('asset/images/home1-slide2.png') }}" alt="img"
                                    class="details-sub-images">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="details-title mt-4">
                            All your nanny for a better value.
                        </div>
                    </div>
                    <div class="mt-5">
                        {{-- accordions --}}
                        @include('services.details.accordions')
                    </div>
                    <div>
                        <div class="row mt-5">
                            <div class="col-md-6 mb-4">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ asset('asset/images/babysitter-team4.jpg.png') }}" alt="team"
                                            class="team_img">
                                    </div>
                                    <div class="mx-4">
                                        <div class="font_family_Paytone font_size_24 color_light_blue font_weight_400">
                                            Steve Smith
                                        </div>
                                        <div
                                            class="font_family_Popins font_size_15 font_weight_500 color_pink text-uppercase">
                                            Manager
                                        </div>
                                        <div class="mt-4 d-flex">
                                            <div class="social_icons_container">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i class="fa-brands fa-facebook-f color_theme"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social_icons_container mx-3">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i
                                                            class="fa-brands fa-twitter icons_size_contact color_theme"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social_icons_container">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i
                                                            class='fa-brands fa-linkedin-in color_theme icons_size_contact'></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ asset('asset/images/babysitter-team6.jpg.png') }}" alt="team"
                                            class="team_img">
                                    </div>
                                    <div class="mx-4">
                                        <div class="font_family_Paytone font_size_24 color_light_blue font_weight_400">
                                            Emily Taylor
                                        </div>
                                        <div
                                            class="font_family_Popins font_size_15 font_weight_500 color_purple text-uppercase">
                                            NANY
                                        </div>
                                        <div class="mt-4 d-flex">
                                            <div class="social_icons_container">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i class="fa-brands fa-facebook-f color_theme"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social_icons_container mx-3">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i
                                                            class="fa-brands fa-twitter icons_size_contact color_theme"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social_icons_container">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i
                                                            class='fa-brands fa-linkedin-in color_theme icons_size_contact'></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ asset('asset/images/babysitter-team1.jpg.png') }}" alt="team"
                                            class="team_img">
                                    </div>
                                    <div class="mx-4">
                                        <div class="font_family_Paytone font_size_24 color_light_blue font_weight_400">
                                            John Deo
                                        </div>
                                        <div
                                            class="font_family_Popins font_size_15 font_weight_500 color_green text-uppercase">
                                            Bebysitter
                                        </div>
                                        <div class="mt-4 d-flex">
                                            <div class="social_icons_container">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i class="fa-brands fa-facebook-f color_theme"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social_icons_container mx-3">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i
                                                            class="fa-brands fa-twitter icons_size_contact color_theme"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social_icons_container">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i
                                                            class='fa-brands fa-linkedin-in color_theme icons_size_contact'></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4 mt-4">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ asset('asset/images/babysitter-team5.jpg.png') }}" alt="team"
                                            class="team_img">
                                    </div>
                                    <div class="mx-4">
                                        <div class="font_family_Paytone font_size_24 color_light_blue font_weight_400">
                                            David Hanso
                                        </div>
                                        <div
                                            class="font_family_Popins font_size_15 font_weight_500 color_yellow text-uppercase">
                                            babycare
                                        </div>
                                        <div class="mt-4 d-flex">
                                            <div class="social_icons_container">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i class="fa-brands fa-facebook-f color_theme"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social_icons_container mx-3">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i
                                                            class="fa-brands fa-twitter icons_size_contact color_theme"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social_icons_container">
                                                <div class="d-flex justify-content-center">
                                                    <div class="vertically_midle">
                                                        <i
                                                            class='fa-brands fa-linkedin-in color_theme icons_size_contact'></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
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
@endsection
