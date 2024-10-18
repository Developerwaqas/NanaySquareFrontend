@extends('app_layout.app')
@section('content')
<section>
    <div class="header_section_bg_img vertically-center-45">
        <div class="d-flex justify-content-center ">
            <div>
                <div class="font_size_45 line_height_55 color_theme font_weight_400 font_family_Paytone">Services
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
<section class="margin-bottom-100">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg">
                        <div class="services-overlay">
                            <div class="servicers_content">
                                <div class="services-card-text">Tutoring Service</div>
                                <div class="servicers-description mt-3">
                                    Helping kids with their homework, assignments, projects, or focused study to improve
                                    their skills at specific subjects.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-maid">
                        <div class="services-overlay">
                            <div class="servicers_content">
                                <div class="services-card-text">Maid Services
                                </div>
                                <div class="servicers-description mt-3">
                                    Help with cleaning, laundry, and other household tasks to make things easy for you.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-cook">
                        <div class="services-overlay">
                            <div class="servicers_content">
                                <div class="services-card-text">Cook / Chef
                                </div>
                                <div class="servicers-description mt-3">
                                    Enjoy home cooked meals in the comfort of your home. Meals cooked daily or in bulk. Grocery shopping can be included for your convenience.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-driver">
                        <div class="services-overlay">
                            <div class="servicers_content">
                                <div class="services-card-text">Driver / Chauffeur Services
                                </div>
                                <div class="servicers-description mt-3">
                                    Get around in comfort, ease and style either with your own vehicle or vehicle provided by the driver / chauffeur.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-gardening">
                        <div class="services-overlay">
                            <div class="servicers_content">
                                <div class="services-card-text">Gardening Services</div>
                                <div class="servicers-description mt-3">
                                    Grass cutting / lawn mowing services, lawn care, garden maintenance, flower planting, etc.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-shopper">
                        <div class="services-overlay">
                            <div class="servicers_content">
                                <div class="services-card-text">Personal Shopper</div>
                                <div class="servicers-description mt-3">
                                    Help with shopping for a variety of things – grocery, school supplies, clothing, and other household needs.
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-baby">
                        <div class="services-overlay-bottom">

                            <div class="services-overlay">
                                <div class="servicers_content">
                                    <div class="services-card-text">Full-time nanny</div>
                                    <div class="card-subtitle mt-3">
                                        BABY
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-childcare">
                        <div class="services-overlay-bottom">
                            <div class="servicers_content">
                            <div class="services-card-text">Nanny Jobs</div>
                            <div class="card-subtitle mt-3">
                                Childcare
                            </div>
                        </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
