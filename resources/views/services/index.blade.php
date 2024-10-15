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
                            <div class="services-card-text">Tutoring Service</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-maid">
                        <div class="services-overlay-bottom">
                            <div class="services-card-text">Maid Services </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-cook">
                        <div class="services-overlay-bottom">
                            <div class="services-card-text">Cook / Chef</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-driver">
                        <div class="services-overlay-bottom">
                            <div class="services-card-text">Driver / Chauffeur Services</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-gardening">
                        <div class="services-overlay-bottom">
                            <div class="services-card-text">Gardening Services</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-shopper">
                        <div class="services-overlay-bottom">
                            <div class="services-card-text">Personal Shopper </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-baby">
                        <div class="services-overlay-bottom">

                            <div class="services-card-text">
                                <div class="card-subtitle">baby</div>
                                Full-time nanny
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mb-4 mt-2">
                <a href="/services/details" class="anker-style">
                    <div class="services-card-bg-childcare">
                        <div class="services-overlay-bottom">
                            <div class="services-card-text">
                                <div class="card-subtitle">Childcare</div>
                                Nanny Jobs
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
