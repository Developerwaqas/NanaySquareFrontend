@extends('app_layout.app')
@section('content')
<section>
    <div class="header_section_bg_img vertically-center-45">
        <div class="d-flex justify-content-center ">
            <div>
                <div class="font_size_45 line_height_55 color_theme font_weight_700 font_family_popins">Contact us
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
                            Contact us</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-25">
        <div class="row  p-25">
            <div class="col-md-6">
                {{-- email --}}
                <div class="d-flex align-items-center mt-5">
                    <div class="email_container">
                        <div class="icon_container">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('asset/images/email.png') }}" alt="email" class="w_25 h_20">
                            </div>
                        </div>
                    </div>
                    <div class="mx-4">
                        <div class="color_light_blue font_size_23 font_family_popins font_weight_600 line_height_33">
                            Email
                        </div>
                        <div class="grey_200 font_size_16 font_weight_500 font_family_popins">
                            contactus@nannysquare.com
                        </div>
                    </div>
                </div>

                {{-- phone --}}
                <div class="d-flex align-items-center mt-40">
                    <div class="phone_container">
                        <div class="icon_container">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('asset/images/phone.png') }}" alt="email" class="w_24 h_24">
                            </div>
                        </div>
                    </div>
                    <div class="mx-4">
                        <div class="color_light_blue font_size_23 font_family_popins font_weight_600 line_height_33">
                            Phone
                        </div>
                        <div class="grey_200 font_size_16 font_weight_500 font_family_popins">
                            +12 (3) 456 0000
                        </div>
                    </div>
                </div>

                {{-- address --}}
                <div class="d-flex align-items-center mt-40">
                    <div class="address_container">
                        <div class="icon_container">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('asset/images/location.png') }}" alt="location" class="w_18 h_24">
                            </div>
                        </div>
                    </div>
                    <div class="mx-4">
                        <div class="color_light_blue font_size_23 font_family_popins font_weight_600 line_height_33">
                            Address
                        </div>
                        <div class="grey_200 font_size_16 font_weight_500 font_family_popins">
                            Houston, TX, USA
                        </div>
                    </div>
                </div>
                <div class="mt-5 d-flex">
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
            </div>
            <div class="col-md-6">
                <div class="mt-4">
                    <form action="#">
                        <div class="mb-4">
                            <input type="text"
                                class="form-control contact_us_input  font_family_popins font_size_16 font_weight_500"
                                placeholder="First Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                            <input type="text"
                                class="form-control contact_us_input  font_family_popins font_size_16 font_weight_500"
                                placeholder="Last Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                            <input type="email"
                                class="form-control contact_us_input  font_family_popins font_size_16 font_weight_500"
                                placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div>
                            <textarea
                                class="form-control contact_us_textarea  font_family_popins font_size_16 font_weight_500"
                                id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="btn btn_contact_us font_weight_400 font_family_Paytone font_size_16">Send
                                Message</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-20">
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="560" id="gmap_canvas"
                src="https://maps.google.com/maps?q=636+5th+Ave%2C+New+York&t=&z=9&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://www.analarmclock.com"></a><br><a href="https://www.onclock.net"></a><br>
            <a href="https://www.ongooglemaps.com">google maps embed iframe</a>

        </div>
    </div>
</section>



@endsection
