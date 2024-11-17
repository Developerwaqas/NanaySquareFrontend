@extends('app_layout.app')
@section('content')
<div data-aos="fade-up">
    @include('home.home_slider')
</div>
<div data-aos="fade-up">
    @include('home.section_what_we_do')
</div>
<div class="mt-5" data-aos="fade-up">
    @include('home.section_need_nany')
</div>

<div data-aos="fade-up">
    @include('home.work_section')
</div>

{{-- Want toBecome Nanny --}}

<section class="" data-aos="fade-up">
    <div>
        <div class="container mt-25">
            <div class="d-flex align-items-end justify-content-between">

                <div class="bg_nanay_section">
                    <div class="row align-items-end">
                        <div class="col-md-5">
                            <div>
                                <img src="{{ asset('asset/images/nany.png') }}" alt="abput_us"
                                    class="abuot_us_img_size">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="ml-5 mt-4 mb-4">
                                <div>
                                    <div class="bage_title font_size_15 font_family_popins font_weight_600">Become a
                                        caregiver
                                    </div>
                                    <div
                                        class="mt-3 font_size_35 font_weight_800 line_height_50 font_family_popins color_light_blue">
                                        Do you want to become a caregiver?</div>

                                </div>
                                <div class="mt-4">
                                    <div class="d-flex">
                                        <div>
                                            <div class="become_nanay_icon_container">
                                                <div class="d-flex justify-content-center">
                                                    <div class="font_family_Paytone font_weight_400 font_size_22">
                                                        01
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-3">
                                            <div
                                                class="font_size_20 font_weight_400 color_light_blue font_family_Paytone">
                                                I need a job as a caregiver
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
                                        <div>
                                            <div class="become_nanay_icon_container_purple">
                                                <div class="d-flex justify-content-center">
                                                    <div class="font_family_Paytone font_weight_400 font_size_22">
                                                        02
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-3">
                                            <div
                                                class="font_size_20 font_weight_400 color_light_blue font_family_Paytone">
                                                Need
                                                Go to <span class="text-info">Nannysquare.com</span>
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
                                        <div>
                                            <div class="become_nanay_icon_container_green">
                                                <div class="d-flex justify-content-center">
                                                    <div class="font_family_Paytone font_weight_400 font_size_22">
                                                        03
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-3">
                                            <div
                                                class="font_size_20 font_weight_400 color_light_blue font_family_Paytone">
                                                Create a free profile
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
                                        <div>
                                            <div class="become_nanay_icon_container_blue">
                                                <div class="d-flex justify-content-center">
                                                    <div class="font_family_Paytone font_weight_400 font_size_22">
                                                        04
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-3">
                                            <div
                                                class="font_size_20 font_weight_400 color_light_blue font_family_Paytone">
                                                Complete required information
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
                                        <div>
                                            <div class="become_nanay_icon_container_orange">
                                                <div class="d-flex justify-content-center">
                                                    <div class="font_family_Paytone font_weight_400 font_size_22">
                                                        05
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-3">
                                            <div
                                                class="font_size_20 font_weight_400 color_light_blue font_family_Paytone">
                                                Show up in search results for caregivers
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
<div data-aos="fade-up">
    @include('home.section_cogressive')
</div>

<section class="mt-59 mb-5" data-aos="fade-up">
    <div class="container">
        <div class="bg_navy_blue">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('asset/images/Icon.png') }}" alt="icon" class="icon_size_medium">
                        </div>
                        <div class="mx-4">
                            <div class="font_family_Paytone font_size_45 font_weight_400 text-white">19+</div>
                            <div class="font_family_Popins font_size_15 font_weight_500 text-white text-capitalize">
                                team
                                members</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('asset/images/Icon1.png') }}" alt="icon" class="icon_size_medium">
                        </div>
                        <div class="mx-4">
                            <div class="font_family_Paytone font_size_45 font_weight_400 text-white">200+</div>
                            <div class="font_family_Popins font_size_15 font_weight_500 text-white text-capitalize">
                                Happy Clients</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('asset/images/Icon2.png') }}" alt="icon" class="icon_size_medium">
                        </div>
                        <div class="mx-4">
                            <div class="font_family_Paytone font_size_45 font_weight_400 text-white">519+</div>
                            <div class="font_family_Popins font_size_15 font_weight_500 text-white text-capitalize">
                                Care Givers
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('asset/images/Icon3.png') }}" alt="icon" class="icon_size_medium">
                        </div>
                        <div class="mx-4">
                            <div class="font_family_Paytone font_size_45 font_weight_400 text-white">100+</div>
                            <div class="font_family_Popins font_size_15 font_weight_500 text-white text-capitalize">
                                Complete Care Engagements</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div data-aos="fade-up">
    @include('home.section_testimanial')
</div>

<div data-aos="fade-up">
    @include('home.section_care_provider')
</div>

<section class="blog-mt-150 mb-5" id="blog" data-aos="fade-up">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="bage_title font_size_15 font_family_popins font_weight_600">blog post</div>
        </div>
        <div class="text-center">
            <div class="mt-3 font_size_40 font_weight_700 line_height_60 font_family_popins color_light_blue">
                Our Recent Update</div>
        </div>
        <div class=" mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="zoom-in-up">
                    <div class="">
                        <div>
                            <div class="image-container"><img
                                    src="{{ asset('asset/images/service-img6-800x600.jpg.png') }}" alt="img"
                                    class="services_slider_img">
                                <div class="date-box">
                                    <div class="date font_size_18 font_weight_600 font_family_Popins line_height_18">
                                        04
                                    </div>
                                    <div class="date font_size_14 font_weight_400 font_family_Popins line_height_20">
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
                                    <div class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                        admin</div>
                                </div>
                                <div class="d-flex">
                                    <div><img src="{{ asset('asset/images/book.png') }}" alt="img"
                                            class="user_img_size">
                                    </div>
                                    <div class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                        nany</div>
                                </div>
                                <div class="d-flex">
                                    <div><img src="{{ asset('asset/images/message.png') }}" alt="img"
                                            class="user_img_size">
                                    </div>
                                    <div class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                        0</div>
                                </div>
                            </div>

                            <div class="title-blog-post-home">
                                Going Back To Work After Parental</div>


                            <div class="post-content mt-3">
                                Holistically pontificate installed base portals after
                                maintainable products.
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="zoom-in-up">
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
                                        <div class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                            admin</div>
                                    </div>
                                    <div class="d-flex">
                                        <div><img src="{{ asset('asset/images/book.png') }}" alt="img"
                                                class="user_img_size">
                                        </div>
                                        <div class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                            nany</div>
                                    </div>
                                    <div class="d-flex">
                                        <div><img src="{{ asset('asset/images/message.png') }}" alt="img"
                                                class="user_img_size">
                                        </div>
                                        <div class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                            0</div>
                                    </div>
                                </div>

                                <div class="title-blog-post-home">
                                    Consider When Hiring a New Nanny</div>


                                <div class="post-content mt-3">
                                    Holistically pontificate installed base portals after
                                    maintainable products.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4" data-aos="zoom-in-up">
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
                                        <div class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                            admin</div>
                                    </div>
                                    <div class="d-flex">
                                        <div><img src="{{ asset('asset/images/book.png') }}" alt="img"
                                                class="user_img_size">
                                        </div>
                                        <div class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                            nany</div>
                                    </div>
                                    <div class="d-flex">
                                        <div><img src="{{ asset('asset/images/message.png') }}" alt="img"
                                                class="user_img_size">
                                        </div>
                                        <div class="grey_200 font_weight_500 font_family_Popins font_size_14 mx-2">
                                            0</div>
                                    </div>
                                </div>

                                <div class="title-blog-post-home">
                                    babysitter for a child with special
                                    needs</div>


                                <div class="post-content mt-3">
                                    Holistically pontificate installed base portals after
                                    maintainable products.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5 mt-4">
                <div class="">
                    <a href="/blogs" class="anker-style">
                        <button class="btn btn-primary-custom-blog" type="submit">See More</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
