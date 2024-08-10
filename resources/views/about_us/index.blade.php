@extends('app_layout.app')
@section('content')
<section>
    <div class="header_section_bg_img vertically-center-45">
        <div class="d-flex justify-content-center ">
            <div>
                <div class="font_size_45 line_height_55 color_theme font_weight_400 font_family_Paytone">About us
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
                            class="mt-3 font_size_50 font_wieght_400 line_height_60 font_family_Paytone color_light_blue">
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
                                    <i class="fa-solid fa-check color_purple"></i>
                                </div>
                            </div>
                            <div class="mx-3 color_light_blue font_size_16 font_weight_600 font_family_popins">Best
                                Babysitter or Nanny​ Services for Your Kids</div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="tick_icon_container">
                                <div class="d-flex justify-content-center">
                                    <i class="fa-solid fa-check color_purple"></i>
                                </div>
                            </div>
                            <div class="mx-3 color_light_blue font_size_16 font_weight_600 font_family_popins">
                                Experienced Team of Babysitter or Nanny</div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="tick_icon_container">
                                <div class="d-flex justify-content-center">
                                    <i class="fa-solid fa-check color_purple"></i>
                                </div>
                            </div>
                            <div class="mx-3 color_light_blue font_size_16 font_weight_600 font_family_popins">Contact
                                the ones you like</div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="tick_icon_container">
                                <div class="d-flex justify-content-center">
                                    <i class="fa-solid fa-check color_purple"></i>
                                </div>
                            </div>
                            <div class="mx-3 color_light_blue font_size_16 font_weight_600 font_family_popins">Hire
                                Babysitters or nanny</div>
                        </div>

                    </div>
                    <div class="mt-5">
                        <button class="btn btn-contact-us">Contact us</button>
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
                    <div class="mt-3 font_size_50 font_wieght_400 line_height_60 font_family_Paytone color_light_blue">
                        Childcare for your Busy
                        Life</div>
                </div>
                <div class="col-md-7">
                    <div>
                        <div class="font_size_15 font_weight_400 font_family_popins color_grey_300 mx-3">
                            <div>
                                Finding a nanny is a tedious task. Of course, you can’t trust any random person to look
                                after
                                your kid. As a parent, you’re naturally cautious and want to be certain the person you
                                hire
                                will
                                actually take care of your child.
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
                            <div class="font_size_26 font_weight_400 color_light_blue font_family_Paytone">Demand
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
                            <div class="font_size_26 font_weight_400 color_light_blue font_family_Paytone">Nanny
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
                            <div class="font_size_26 font_weight_400 color_light_blue font_family_Paytone">Safeguarding
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
                            <div class="font_size_26 font_weight_400 color_light_blue font_family_Paytone">Nanny jobs
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
                            <div class="font_size_26 font_weight_400 color_light_blue font_family_Paytone">Evening
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
                            <div class="font_size_26 font_weight_400 color_light_blue font_family_Paytone">Support 24/7
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
    <div class="container mt_100 mb_100">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <div class="bage_title font_size_15 font_family_popins font_weight_600">about us</div>
                    <div class="mt-3 font_size_50 font_wieght_400 line_height_60 font_family_Paytone color_light_blue">
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
                    <button class="btn btn_services">Services</button>
                    <button class="btn btn_contact_us mx-3">Contact Us</button>
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
                                    <div class="font_family_Paytone font_size_30 font_weight_400 color_light_blue">
                                        Johnson
                                        Andrea</div>
                                    <div
                                        class="font_family_popins font_size_14 font_weight_500 color_pink text-uppercase">
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
                                    <div class="font_family_Paytone font_size_30 font_weight_400 color_light_blue">
                                        Johnson
                                        Andrea</div>
                                    <div
                                        class="font_family_popins font_size_14 font_weight_500 color_pink text-uppercase">
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
                                    <div class="font_family_Paytone font_size_30 font_weight_400 color_light_blue">
                                        Johnson
                                        Andrea</div>
                                    <div
                                        class="font_family_popins font_size_14 font_weight_500 color_pink text-uppercase">
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
                                    <div class="font_family_Paytone font_size_30 font_weight_400 color_light_blue">
                                        Johnson
                                        Andrea</div>
                                    <div
                                        class="font_family_popins font_size_14 font_weight_500 color_pink text-uppercase">
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
