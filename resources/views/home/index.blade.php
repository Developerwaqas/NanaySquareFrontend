@extends('app_layout.app')
@section('content')
@include('home.home_slider')
@include('home.section_what_we_do')
@include('home.section_need_nany')

@include('home.work_section')
{{-- Want toBecome Nanny --}}

<section class="">
    <div>
        <div class="container mt-25">
            <div class="d-flex align-items-end justify-content-between">
                <div class="ml__19 d-none d-md-none d-lg-block">
                    <div class="floating">
                        <img src="{{ asset('asset/images/icon-1.png.png') }}" alt="book" class="img_book">
                    </div>
                </div>
                <div class="bg_nanay_section">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div>
                                <img src="{{ asset('asset/images/nany.png') }}" alt="abput_us"
                                    class="abuot_us_img_size">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="ml-5">
                                <div>
                                    <div class="bage_title font_size_15 font_family_popins font_weight_600">Become Nanny
                                    </div>
                                    <div
                                        class="mt-3 font_size_50 font_wieght_400 line_height_60 font_family_Paytone color_light_blue">
                                        Want toBecome Nanny</div>

                                </div>
                                <div class="mt-4">
                                    <div class="d-flex">
                                        <div class="become_nanay_icon_container">
                                            <div class="d-flex justify-content-center">
                                                <div class="font_family_Paytone font_weight_400 font_size_22">
                                                    01
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-3">
                                            <div
                                                class="font_size_26 font_weight_400 color_light_blue font_family_Paytone">
                                                Need
                                                Job as Nanny
                                            </div>
                                            <div
                                                class="grey_200 font_size_15 font_family_popins font_weight_400 line_height_25">
                                                Regular
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                blanditiis
                                                praesentium voluptatum deleniti atque.</div>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-3">
                                        <div class="become_nanay_icon_container_purple">
                                            <div class="d-flex justify-content-center">
                                                <div class="font_family_Paytone font_weight_400 font_size_22">
                                                    02
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-3">
                                            <div
                                                class="font_size_26 font_weight_400 color_light_blue font_family_Paytone">
                                                Need
                                                Go to Nannysquare.com
                                            </div>
                                            <div
                                                class="grey_200 font_size_15 font_family_popins font_weight_400 line_height_25">
                                                Regular
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                blanditiis
                                                praesentium voluptatum deleniti atque.</div>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-3">
                                        <div class="become_nanay_icon_container_green">
                                            <div class="d-flex justify-content-center">
                                                <div class="font_family_Paytone font_weight_400 font_size_22">
                                                    03
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-3">
                                            <div
                                                class="font_size_26 font_weight_400 color_light_blue font_family_Paytone">
                                                Need
                                                Create Free Profile
                                            </div>
                                            <div
                                                class="grey_200 font_size_15 font_family_popins font_weight_400 line_height_25">
                                                Regular
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                blanditiis
                                                praesentium voluptatum deleniti atque.</div>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-3">
                                        <div class="become_nanay_icon_container_blue">
                                            <div class="d-flex justify-content-center">
                                                <div class="font_family_Paytone font_weight_400 font_size_22">
                                                    04
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-3">
                                            <div
                                                class="font_size_26 font_weight_400 color_light_blue font_family_Paytone">
                                                Need
                                                Recipient will search you
                                            </div>
                                            <div
                                                class="grey_200 font_size_15 font_family_popins font_weight_400 line_height_25">
                                                Regular
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                blanditiis
                                                praesentium voluptatum deleniti atque.</div>
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
{{-- section cogressive --}}
<div>
    @include('home.section_cogressive')
</div>

<section class="mt-59 mb-5">
    <div class="container">
        <div class="bg_navy_blue">
            <div class="row">
                <div class="col-sm-3 mb-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('asset/images/Icon.png') }}" alt="icon" class="icon_size_medium">
                        </div>
                        <div class="mx-4">
                            <div class="font_family_Paytone font_size_45 font_weight_400 text-white">19+</div>
                            <div class="font_family_Popins font_size_15 font_weight_500 text-white text-capitalize">
                                team
                                member</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 mb-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('asset/images/Icon1.png') }}" alt="icon" class="icon_size_medium">
                        </div>
                        <div class="mx-4">
                            <div class="font_family_Paytone font_size_45 font_weight_400 text-white">79+</div>
                            <div class="font_family_Popins font_size_15 font_weight_500 text-white text-capitalize">
                                Happy Clients</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 mb-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('asset/images/Icon2.png') }}" alt="icon" class="icon_size_medium">
                        </div>
                        <div class="mx-4">
                            <div class="font_family_Paytone font_size_45 font_weight_400 text-white">519+</div>
                            <div class="font_family_Popins font_size_15 font_weight_500 text-white text-capitalize">
                                Team
                                Experts</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 mb-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('asset/images/Icon3.png') }}" alt="icon" class="icon_size_medium">
                        </div>
                        <div class="mx-4">
                            <div class="font_family_Paytone font_size_45 font_weight_400 text-white">29+</div>
                            <div class="font_family_Popins font_size_15 font_weight_500 text-white text-capitalize">
                                Projects Done</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div>
    @include('home.section_testimanial')
</div>

<section class="mt-5 mb-5" id="blog">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="bage_title font_size_15 font_family_popins font_weight_600">blog post</div>
        </div>
        <div class="text-center">
            <div class="mt-3 font_size_50 font_wieght_400 line_height_60 font_family_Paytone color_light_blue">
                Our Recent Update</div>
        </div>
        <div class="floating rotating_img_container">
            <img src="{{ asset('asset/images/icon-1.png.png') }}" alt="icon" class="rotate-image">
        </div>

        <div class="mb_100">

            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="mb_100">
                                <div class="">
                                    <div>
                                        <div class="image-container"><img
                                                src="{{ asset('asset/images/service-img6-800x600.jpg.png') }}" alt="img"
                                                class="services_slider_img">
                                            <div class="date-box">
                                                <div
                                                    class="date font_size_18 font_weight_600 font_family_Popins line_height_18">
                                                    04
                                                </div>
                                                <div
                                                    class="date font_size_14 font_weight_400 font_family_Popins line_height_20">
                                                    Aug
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex mt-3 mb-2">
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/user.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    admin</div>
                                            </div>
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/book.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    nany</div>
                                            </div>
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/message.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    0</div>
                                            </div>
                                        </div>

                                        <div class="font_family_Paytone font_size_21 font_weight_400 color_light_blue">
                                            Going Back To
                                            Work After Parental</div>


                                        <div class="grey_200 font_weight_500 font_family_Popins font_size_15 mt-4">
                                            Holistically pontificate installed base portals after
                                            maintainable products.
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <div class="">
                                    <div>
                                        <div class="image-container"><img
                                                src="{{ asset('asset/images/project-img3-800x600.jpg.png') }}" alt="img"
                                                class="services_slider_img">
                                            <div class="date-box-purple">
                                                <div
                                                    class="date font_size_18 font_weight_600 font_family_Popins line_height_18">
                                                    03
                                                </div>
                                                <div
                                                    class="date font_size_14 font_weight_400 font_family_Popins line_height_20">
                                                    Aug
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex mt-3 mb-2">
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/user.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    admin</div>
                                            </div>
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/book.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    nany</div>
                                            </div>
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/message.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    0</div>
                                            </div>
                                        </div>

                                        <div class="font_family_Paytone font_size_21 font_weight_400 color_light_blue">
                                            Consider When
                                            Hiring a New Nanny</div>


                                        <div class="grey_200 font_weight_500 font_family_Popins font_size_15 mt-4">
                                            Holistically pontificate installed base portals after
                                            maintainable products.
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <div class="">
                                    <div>
                                        <div class="image-container"><img
                                                src="{{ asset('asset/images/service-img4-800x600.jpg.png') }}" alt="img"
                                                class="services_slider_img">
                                            <div class="date-box-green">
                                                <div
                                                    class="date font_size_18 font_weight_600 font_family_Popins line_height_18">
                                                    03
                                                </div>
                                                <div
                                                    class="date font_size_14 font_weight_400 font_family_Popins line_height_20">
                                                    Aug
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex mt-3 mb-2">
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/user.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    admin</div>
                                            </div>
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/book.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    nany</div>
                                            </div>
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/message.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    0</div>
                                            </div>
                                        </div>

                                        <div class="font_family_Paytone font_size_21 font_weight_400 color_light_blue">
                                            babysitter for a child with special
                                            needs</div>


                                        <div class="grey_200 font_weight_500 font_family_Popins font_size_15 mt-4">
                                            Holistically pontificate installed base portals after
                                            maintainable products.
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <div class="">
                                    <div>
                                        <div class="image-container"><img
                                                src="{{ asset('asset/images/service-img6-800x600.jpg.png') }}" alt="img"
                                                class="services_slider_img">
                                            <div class="date-box">
                                                <div
                                                    class="date font_size_18 font_weight_600 font_family_Popins line_height_18">
                                                    04
                                                </div>
                                                <div
                                                    class="date font_size_14 font_weight_400 font_family_Popins line_height_20">
                                                    Aug
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex mt-3 mb-2">
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/user.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    admin</div>
                                            </div>
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/book.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    nany</div>
                                            </div>
                                            <div class="d-flex">
                                                <div><img src="{{ asset('asset/images/message.png') }}" alt="img"
                                                        class="user_img_size">
                                                </div>
                                                <div
                                                    class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                                    0</div>
                                            </div>
                                        </div>

                                        <div class="font_family_Paytone font_size_21 font_weight_400 color_light_blue">
                                            Going Back To
                                            Work After Parental</div>


                                        <div class="grey_200 font_weight_500 font_family_Popins font_size_15 mt-4">
                                            Holistically pontificate installed base portals after
                                            maintainable products.
                                        </div>

                                    </div>
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
    </div>
</section>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script>
    var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
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
                950: {
                    slidesPerView: 3,
                },
            },
        });
</script>
@endsection
