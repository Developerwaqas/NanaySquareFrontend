@extends('app_layout.app')
@section('content')
<section>
    <div class="header_section_bg_img vertically-center-45">
        <div class="d-flex justify-content-center ">
            <div>
                <div class="font_size_45 line_height_55 color_theme font_weight_700 font_family_popins">About us
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
                            About us</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="bg_about_choose_section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="bage_title font_size_15 font_family_popins font_weight_600">WHY CHOOSE US</div>
                    <div class="mt-3 font_size_50 font_wieght_400 line_height_60 font_family_popins color_light_blue">
                        Childcare for your Busy
                        Life</div>
                </div>
                <div class="col-md-7">
                    <div>
                        <div class="font_size_15 font_weight_400 font_family_popins color_grey_300 mx-3">
                            <div>
                                Nanny Square was founded in 2022 by an immigrant couple from Nigeria who had a hard time
                            finding care that they needed for their two young children. They also discovered that there
                            was a culture mismatch with some of the care givers they found. With no family close by, it
                            was difficult to raise their kids the way they wanted without having to sacrifice their
                            careers. They understood that building a platform that connects immigrants with childcare
                            tailored to their needs was a first step in providing the environment for success in a new
                            country. They hope that Nanny Square will be that platform and environment for you and your
                            family.
                            <div class="mt-2">
                                Nanny Square is a Limited Liability Company registered in the US state of Delaware.

                            </div>
                            </div>
                            <div class="mt-4">
                                person you hire will you’re naturally cautious and want to be certain the actually take
                                care of your child
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="d-flex">
                        <div class="choose_us_icon_container">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('asset/images/infobox-icon1.png.png') }}" alt="img"
                                    class="w_35 h_35">
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="font_size_26 font_weight_600 color_light_blue font_family_popins">Demand
                                childcare
                            </div>
                            <div class="grey_200 font_size_15 font_family_popins font_weight_400 line_height_25">Regular
                                support after-school, weekday, and
                                weekends.</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex">
                        <div class="choose_us_icon_container">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('asset/images/infobox-icon2.png.png') }}" alt="img"
                                    class="w_35 h_35">
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="font_size_26 font_weight_600 color_light_blue font_family_popins">Nanny
                                Wellbeing
                            </div>
                            <div class="grey_200 font_size_15 font_family_popins font_weight_400 line_height_25">
                                Regular support after-school, weekday, and
                                weekends.</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-4">
                    <div class="d-flex">
                        <div class="choose_us_icon_container">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('asset/images/infobox-icon3.png.png') }}" alt="img"
                                    class="w_35 h_35">
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="font_size_26 font_weight_600 color_light_blue font_family_popins">Safeguarding
                            </div>
                            <div class="grey_200 font_size_15 font_family_popins font_weight_400 line_height_25">
                                Regular support after-school, weekday, and
                                weekends.</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mt-4">
                    <div class="d-flex">
                        <div class="choose_us_icon_container">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('asset/images/infobox-icon8.png.png') }}" alt="img"
                                    class="w_35 h_35">
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="font_size_26 font_weight_600 color_light_blue font_family_popins">Nanny jobs
                            </div>
                            <div class="grey_200 font_size_15 font_family_popins font_weight_400 line_height_25">
                                Regular support after-school, weekday, and
                                weekends.</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mt-4">
                    <div class="d-flex">
                        <div class="choose_us_icon_container">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('asset/images/infobox-icon5.png.png') }}" alt="img"
                                    class="w_35 h_35">
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="font_size_26 font_weight_600 color_light_blue font_family_popins">Evening
                                Sitters
                            </div>
                            <div class="grey_200 font_size_15 font_family_popins font_weight_400 line_height_25">
                                Regular support after-school, weekday, and
                                weekends.</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="d-flex">
                        <div class="choose_us_icon_container">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('asset/images/infobox-icon6.png.png') }}" alt="img"
                                    class="w_35 h_35">
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="font_size_26 font_weight_600 color_light_blue font_family_popins">Support 24/7
                            </div>
                            <div class="grey_200 font_size_15 font_family_popins font_weight_400 line_height_25">
                                Regular support after-school, weekday, and
                                weekends.</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<section>
    <div class="container mt-25">
        <div class="row p-20 align-items-center">
            <div class="col-md-5">
                <div>
                    <img src="{{ asset('asset/images/about-us-img-min.jpg.png') }}" alt="abput_us"
                        class="abuot_us_img_size">
                </div>
            </div>
            <div class="col-md-7">
                <div class="ml-5">
                    <div>
                        <div class="bage_title font_size_15 font_family_popins font_weight_600">about us</div>
                        <div
                            class="mt-3 font_size_50 font_weight_600 line_height_60 font_family_popins color_light_blue">
                            Childcare for your Busy
                            Life</div>
                        <div class="mt-4 font_size_15 font_weight_400 font_family_popins grey_200">
                            Finding a nanny is a tedious task. Of course, you can't trust any random person to look
                            after your kid. As a parent, you're naturally cautious and want to be certain the person
                            you hire will actually take care of your child.

                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="d-flex align-items-center mt-3">
                            <div class="tick_icon_container">
                                <div class="d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                                        fill="none">
                                        <g clip-path="url(#clip0_225_7995)">
                                            <path
                                                d="M14.3738 0.933506C14.0938 0.777951 13.7671 0.793507 13.3938 0.980173C13.2071 1.10462 12.9427 1.3224 12.6005 1.63351C12.2271 1.97573 11.6982 2.55128 11.0138 3.36017C10.5471 3.92017 10.2049 4.32462 9.98714 4.57351L8.86714 5.78684C8.05825 6.65795 7.45158 7.30351 7.04714 7.72351C6.64269 8.14351 6.34714 8.4624 6.16047 8.68017C5.84936 9.05351 5.60047 9.39573 5.4138 9.70684L4.5738 8.82017C3.82714 8.07351 3.2438 7.52906 2.8238 7.18684C2.4038 6.84462 2.00714 6.67351 1.6338 6.67351C1.19825 6.67351 0.980469 6.96906 0.980469 7.56017C1.01158 8.30684 1.32269 9.13128 1.9138 10.0335C2.31825 10.718 2.87825 11.4335 3.5938 12.1802C4.21602 12.8335 4.80714 13.1602 5.36714 13.1602C5.74047 13.1913 6.14491 13.0357 6.58047 12.6935C6.82936 12.5068 7.14047 12.1957 7.5138 11.7602L7.60714 11.6668C7.98047 11.2624 8.47825 10.6402 9.10047 9.80017C9.53602 9.24017 9.86269 8.83573 10.0805 8.58684L11.1538 7.28017C12.1182 6.12906 12.8182 5.25795 13.2538 4.66684L13.5805 4.29351C14.2027 3.54684 14.6071 2.95573 14.7938 2.52017C15.136 1.77351 14.996 1.24462 14.3738 0.933506ZM2.0538 7.46684C2.02269 7.46684 1.99158 7.46684 1.96047 7.46684C1.86714 7.43573 1.7738 7.40462 1.68047 7.37351C1.74269 7.31128 1.86714 7.3424 2.0538 7.46684Z"
                                                fill="#B996FE" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_225_7995">
                                                <rect width="14" height="14" fill="white"
                                                    transform="matrix(1 0 0 -1 0.980469 14)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="mx-3 color_light_blue font_size_16 font_weight_600 font_family_popins">Best
                                Babysitter or Nanny​ Services for Your Kids</div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="tick_icon_container">
                                <div class="d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                                        fill="none">
                                        <g clip-path="url(#clip0_225_7995)">
                                            <path
                                                d="M14.3738 0.933506C14.0938 0.777951 13.7671 0.793507 13.3938 0.980173C13.2071 1.10462 12.9427 1.3224 12.6005 1.63351C12.2271 1.97573 11.6982 2.55128 11.0138 3.36017C10.5471 3.92017 10.2049 4.32462 9.98714 4.57351L8.86714 5.78684C8.05825 6.65795 7.45158 7.30351 7.04714 7.72351C6.64269 8.14351 6.34714 8.4624 6.16047 8.68017C5.84936 9.05351 5.60047 9.39573 5.4138 9.70684L4.5738 8.82017C3.82714 8.07351 3.2438 7.52906 2.8238 7.18684C2.4038 6.84462 2.00714 6.67351 1.6338 6.67351C1.19825 6.67351 0.980469 6.96906 0.980469 7.56017C1.01158 8.30684 1.32269 9.13128 1.9138 10.0335C2.31825 10.718 2.87825 11.4335 3.5938 12.1802C4.21602 12.8335 4.80714 13.1602 5.36714 13.1602C5.74047 13.1913 6.14491 13.0357 6.58047 12.6935C6.82936 12.5068 7.14047 12.1957 7.5138 11.7602L7.60714 11.6668C7.98047 11.2624 8.47825 10.6402 9.10047 9.80017C9.53602 9.24017 9.86269 8.83573 10.0805 8.58684L11.1538 7.28017C12.1182 6.12906 12.8182 5.25795 13.2538 4.66684L13.5805 4.29351C14.2027 3.54684 14.6071 2.95573 14.7938 2.52017C15.136 1.77351 14.996 1.24462 14.3738 0.933506ZM2.0538 7.46684C2.02269 7.46684 1.99158 7.46684 1.96047 7.46684C1.86714 7.43573 1.7738 7.40462 1.68047 7.37351C1.74269 7.31128 1.86714 7.3424 2.0538 7.46684Z"
                                                fill="#B996FE" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_225_7995">
                                                <rect width="14" height="14" fill="white"
                                                    transform="matrix(1 0 0 -1 0.980469 14)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="mx-3 color_light_blue font_size_16 font_weight_600 font_family_popins">
                                Experienced Team of Babysitter or Nanny</div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="tick_icon_container">
                                <div class="d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                                        fill="none">
                                        <g clip-path="url(#clip0_225_7995)">
                                            <path
                                                d="M14.3738 0.933506C14.0938 0.777951 13.7671 0.793507 13.3938 0.980173C13.2071 1.10462 12.9427 1.3224 12.6005 1.63351C12.2271 1.97573 11.6982 2.55128 11.0138 3.36017C10.5471 3.92017 10.2049 4.32462 9.98714 4.57351L8.86714 5.78684C8.05825 6.65795 7.45158 7.30351 7.04714 7.72351C6.64269 8.14351 6.34714 8.4624 6.16047 8.68017C5.84936 9.05351 5.60047 9.39573 5.4138 9.70684L4.5738 8.82017C3.82714 8.07351 3.2438 7.52906 2.8238 7.18684C2.4038 6.84462 2.00714 6.67351 1.6338 6.67351C1.19825 6.67351 0.980469 6.96906 0.980469 7.56017C1.01158 8.30684 1.32269 9.13128 1.9138 10.0335C2.31825 10.718 2.87825 11.4335 3.5938 12.1802C4.21602 12.8335 4.80714 13.1602 5.36714 13.1602C5.74047 13.1913 6.14491 13.0357 6.58047 12.6935C6.82936 12.5068 7.14047 12.1957 7.5138 11.7602L7.60714 11.6668C7.98047 11.2624 8.47825 10.6402 9.10047 9.80017C9.53602 9.24017 9.86269 8.83573 10.0805 8.58684L11.1538 7.28017C12.1182 6.12906 12.8182 5.25795 13.2538 4.66684L13.5805 4.29351C14.2027 3.54684 14.6071 2.95573 14.7938 2.52017C15.136 1.77351 14.996 1.24462 14.3738 0.933506ZM2.0538 7.46684C2.02269 7.46684 1.99158 7.46684 1.96047 7.46684C1.86714 7.43573 1.7738 7.40462 1.68047 7.37351C1.74269 7.31128 1.86714 7.3424 2.0538 7.46684Z"
                                                fill="#B996FE" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_225_7995">
                                                <rect width="14" height="14" fill="white"
                                                    transform="matrix(1 0 0 -1 0.980469 14)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="mx-3 color_light_blue font_size_16 font_weight_600 font_family_popins">Contact
                                the ones you like</div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="tick_icon_container">
                                <div class="d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                                        fill="none">
                                        <g clip-path="url(#clip0_225_7995)">
                                            <path
                                                d="M14.3738 0.933506C14.0938 0.777951 13.7671 0.793507 13.3938 0.980173C13.2071 1.10462 12.9427 1.3224 12.6005 1.63351C12.2271 1.97573 11.6982 2.55128 11.0138 3.36017C10.5471 3.92017 10.2049 4.32462 9.98714 4.57351L8.86714 5.78684C8.05825 6.65795 7.45158 7.30351 7.04714 7.72351C6.64269 8.14351 6.34714 8.4624 6.16047 8.68017C5.84936 9.05351 5.60047 9.39573 5.4138 9.70684L4.5738 8.82017C3.82714 8.07351 3.2438 7.52906 2.8238 7.18684C2.4038 6.84462 2.00714 6.67351 1.6338 6.67351C1.19825 6.67351 0.980469 6.96906 0.980469 7.56017C1.01158 8.30684 1.32269 9.13128 1.9138 10.0335C2.31825 10.718 2.87825 11.4335 3.5938 12.1802C4.21602 12.8335 4.80714 13.1602 5.36714 13.1602C5.74047 13.1913 6.14491 13.0357 6.58047 12.6935C6.82936 12.5068 7.14047 12.1957 7.5138 11.7602L7.60714 11.6668C7.98047 11.2624 8.47825 10.6402 9.10047 9.80017C9.53602 9.24017 9.86269 8.83573 10.0805 8.58684L11.1538 7.28017C12.1182 6.12906 12.8182 5.25795 13.2538 4.66684L13.5805 4.29351C14.2027 3.54684 14.6071 2.95573 14.7938 2.52017C15.136 1.77351 14.996 1.24462 14.3738 0.933506ZM2.0538 7.46684C2.02269 7.46684 1.99158 7.46684 1.96047 7.46684C1.86714 7.43573 1.7738 7.40462 1.68047 7.37351C1.74269 7.31128 1.86714 7.3424 2.0538 7.46684Z"
                                                fill="#B996FE" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_225_7995">
                                                <rect width="14" height="14" fill="white"
                                                    transform="matrix(1 0 0 -1 0.980469 14)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="mx-3 color_light_blue font_size_16 font_weight_600 font_family_popins">Hire
                                Babysitters or nanny</div>
                        </div>

                    </div>
                    <div class="mt-5">
                        <a href="/contact_us">
                            <button class="btn btn-contact-us">Contact us</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container mt_100 mb_100">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <div class="bage_title font_size_15 font_family_popins font_weight_600">about us</div>
                    <div class="mt-3 font_size_50 font_weight_700 line_height_60 font_family_popins color_light_blue">
                        Getting Started on Baby
                        First Year </div>
                    <div class="mt-4 color_light_blue font_size_21 font_weight_600 font_family_popins">We offer
                        dedicated
                        babysitters to parents, who are
                        professionally.</div>
                    <div class="mt-4 font_size_15 font_weight_400 font_family_popins grey_200">
                        joy of caring for your little ones. Baby care services for new-borns & kids entails hiring
                        the best possible nanny or a babysitter who can dedicate herself towards the care of
                        your little ones. hiring the best possible nanny or a babysitter who can dedicate
                        herself towards the care of your little ones.
                    </div>
                </div>

                <div class="mt-5 d-flex mb-4">
                    <a href="/services">
                        <button class="btn btn_services">Services</button>
                    </a>

                    <a href="/contact_us">
                        <button class="btn btn_contact_us mx-3">Contact Us</button>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <img src="{{ asset('asset/images/baby_img.png') }}" alt="img" class="image_size_responsive">
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="about_us_page_slider_bg">
        <div class="">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="swiper-slide mb-5" style="width: 50% !important;">
                            <div class="d-flex">
                                <div class="vector_img_container">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('asset/images/Vector.png') }}" alt="vector" class="verctor">
                                    </div>
                                </div>
                                <div class="mx__20 mt-4">
                                    <div
                                        class="font_family_popins font_size_30 font_weight_600 color_light_blue ml__30">
                                        Johnson
                                        Andrea</div>
                                    <div
                                        class="font_family_popins font_size_14 font_weight_500 color_pink text-uppercase ml__30">
                                        General Manager</div>
                                    <div class="testimonial-text color_light_blue mt-4">We are impressed with the team
                                        leader
                                        and care supervisor along with
                                        their daily monitoring of the carers' reports of Star Home Care.</div>

                                    <div class="star-rating">★★★★★</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-5" style="width: 50% !important;">
                            <div class="d-flex">
                                <div class="vector_img_container">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('asset/images/Vector.png') }}" alt="vector" class="verctor">
                                    </div>
                                </div>
                                <div class="mx__20 mt-4">
                                    <div
                                        class="font_family_popins font_size_30 font_weight_600 color_light_blue ml__30">
                                        Johnson
                                        Andrea</div>
                                    <div
                                        class="font_family_popins font_size_14 font_weight_500 color_pink text-uppercase ml__30">
                                        General Manager</div>
                                    <div class="testimonial-text color_light_blue mt-4">We are impressed with the team
                                        leader
                                        and care supervisor along with
                                        their daily monitoring of the carers' reports of Star Home Care.</div>

                                    <div class="star-rating">★★★★★</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-5" style="width: 50% !important;">
                            <div class="d-flex">
                                <div class="vector_img_container">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('asset/images/Vector.png') }}" alt="vector" class="verctor">
                                    </div>
                                </div>
                                <div class="mx__20 mt-4">
                                    <div
                                        class="font_family_popins font_size_30 font_weight_600 color_light_blue ml__30">
                                        Johnson
                                        Andrea</div>
                                    <div
                                        class="font_family_popins font_size_14 font_weight_500 color_pink text-uppercase ml__30">
                                        General Manager</div>
                                    <div class="testimonial-text color_light_blue mt-4">We are impressed with the team
                                        leader
                                        and care supervisor along with
                                        their daily monitoring of the carers' reports of Star Home Care.</div>

                                    <div class="star-rating">★★★★★</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-5" style="width: 50% !important;">
                            <div class="d-flex">
                                <div class="vector_img_container">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('asset/images/Vector.png') }}" alt="vector" class="verctor">
                                    </div>
                                </div>
                                <div class="mx__20 mt-4">
                                    <div
                                        class="font_family_popins font_size_30 font_weight_600 color_light_blue ml__30">
                                        Johnson
                                        Andrea</div>
                                    <div
                                        class="font_family_popins font_size_14 font_weight_500 color_pink text-uppercase ml__30">
                                        General Manager</div>
                                    <div class="testimonial-text color_light_blue mt-4">We are impressed with the team
                                        leader
                                        and care supervisor along with
                                        their daily monitoring of the carers' reports of Star Home Care.</div>

                                    <div class="star-rating">★★★★★</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div> -->
                <div class="swiper-pagination mt-5"></div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 2,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },

            },
        });
    </script>
</section>
@endsection
