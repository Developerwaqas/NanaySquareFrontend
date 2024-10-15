@extends('app_layout.app')
@section('content')
<section>
    <div class="header_section_bg_img vertically-center-45">
        <div class="d-flex justify-content-center ">
            <div>
                <div class="font_size_45 line_height_55 color_theme font_weight_700 font_family_popins">Going Back To
                    Work After Parental
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
                            class="color_theme font_size_15 font_weight_600 font_family_popins hover_effect text-uppercase">
                            Nanny</div>
                        <div class="mx-3">
                            <i class="fa-solid fa-angle-double-right"></i>
                        </div>
                        <div
                            class="color_purple font_size_15 font_weight_600 font_family_popins hover_effect text-uppercase">
                            Going Back To Work After Parental</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container mt-5 mb-5">
        <div class="row">

            <div class="col-md-8">
                <div>
                    <div class="p-relative">
                        <img src="{{ asset('asset/images/service-img6-1000x600.jpg.png') }}" alt="img"
                            class="img-details-card">
                        <div class="position-absolute">
                           <div class="user-container-post">
                            <img src="{{ asset('asset/images/Symbol.png') }}" alt="user" class="userSymbol">
                            <div class="post-user-role">
                                admin
                            </div>
                           </div>
                        </div>
                    </div>
                    <div class="d-flex aling-items-center flex-wrap mt-3">
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="{{ asset('asset/images/Symbol (6).png') }}" alt="" class="post-symbols-icons">
                            </div>
                            <div class="date-of-post mt-2">
                                August 4, 2022
                            </div>
                        </div>
                        <div class="d-flex align-items-center px-4">
                            <div>
                                <img src="{{ asset('asset/images/Symbol (5).png') }}" alt="" class="post-symbols-icons">
                            </div>
                            <div class="date-of-post mt-2">
                                Nanny
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="{{ asset('asset/images/Symbol (4).png') }}" alt="" class="post-symbols-icons">
                            </div>
                            <div class="date-of-post mt-2">
                                babysitter
                            </div>
                        </div>
                        <div class="d-flex align-items-center px-4">
                            <div>
                                <img src="{{ asset('asset/images/Symbol (1).png') }}" alt="" class="post-symbols-icons">
                            </div>
                            <div class="date-of-post mt-2">
                                0 comments
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 details-content">
                        Faucibus interdum posuere habitant morbi tristique senectus netus et malesuada. Euismod nisi
                        porta lorem mollis aliquam
                        ut porttitor.Faucibus interdum posuere habitant morbi tristique senectus netus Faucibus interdum
                        posuere habitant morbi
                        tristique senectus netus et malesuada. Euismod nisi porta lorem mollis aliquam ut
                        porttitor.Faucibus interdum posuere
                        habitant morbi tristique senectus netus.
                    </div>
                    <div class="author-card mt-4">
                        <div class="d-flex align-items-center">
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="66" height="32" viewBox="0 0 66 32"
                                    fill="none">
                                    <path
                                        d="M24.4041 6.4001C22.8396 6.4001 21.5241 6.95121 20.4574 8.05343C19.3908 9.15565 18.8574 10.4712 18.8574 12.0001C18.8574 13.529 19.3908 14.8445 20.4574 15.9468C21.5241 17.049 22.8396 17.6001 24.4041 17.6001C25.3996 17.6001 26.3241 17.3512 27.1774 16.8534H27.2841H27.4974C27.5685 16.9245 27.6041 17.0312 27.6041 17.1734C27.4619 18.9512 26.9996 20.5868 26.2174 22.0801C25.5774 23.4312 24.7596 24.6045 23.7641 25.6001C25.3285 24.7468 26.6441 23.5912 27.7108 22.1334C28.7774 20.6757 29.5063 19.0934 29.8974 17.3868C30.2885 15.6801 30.3596 14.009 30.1108 12.3734C29.8619 10.7379 29.3108 9.38676 28.4574 8.3201C27.3908 7.0401 26.0396 6.4001 24.4041 6.4001ZM40.2974 6.4001C38.8041 6.4001 37.5063 6.95121 36.4041 8.05343C35.3019 9.15565 34.7508 10.4712 34.7508 12.0001C34.7508 13.529 35.3019 14.8445 36.4041 15.9468C37.5063 17.049 38.8041 17.6001 40.2974 17.6001C41.293 17.6001 42.2174 17.3512 43.0708 16.8534H43.2841H43.3908C43.533 16.9245 43.6041 17.0312 43.6041 17.1734C43.3908 18.9512 42.9285 20.5868 42.2174 22.0801C41.5774 23.4312 40.7241 24.6045 39.6574 25.6001C41.293 24.7468 42.6263 23.5912 43.6574 22.1334C44.6885 20.6757 45.4174 19.0934 45.8441 17.3868C46.2708 15.6801 46.3596 14.009 46.1108 12.3734C45.8619 10.7379 45.2752 9.38676 44.3508 8.3201C43.3552 7.0401 42.0041 6.4001 40.2974 6.4001Z"
                                        fill="#B996FE" />
                                </svg></div>
                            <div class="author-description">“Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium
                                doloremque laudantium, totam rem aperiam.”</div>

                        </div>
                        <div class="author-name mt-2 px-7">
                            – John Deo
                        </div>
                    </div>
                    <div class="mt-4 details-content">
                        Faucibus interdum posuere habitant morbi tristique senectus netus et malesuada Euismod    morbi 
                        senectus netus 
                        interdum posuere habitant morbi tristique senectus netus et malesuada. Euismod nisi porta lorem
                        mollis aliquam porttitor
                        Faucibus interdum posuere habitant morbi tristique senectus netus.
                    </div>

                    <div class="post-details-title mt-5">
                        Supporting your Pregnancy Journ
                    </div>
                    <div class="mt-4 details-content">
                        Faucibus interdum posuere habitant morbi tristique senectus netus et malesuada. Euismod nisi
                        porta lorem mollis aliquam
                        ut porttitor.Faucibus interdum posuere habitant morbi tristique senectus netus Faucibus
                        interdum.
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <img src="{{ asset('asset/images/service-img7-768x640.jpg.png') }}" alt="img"
                                    class="details-sub-images">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <img src="{{ asset('asset/images/service-img6-768x640.jpg.png') }}" alt="img"
                                    class="details-sub-images">
                            </div>
                        </div>
                    </div>
                    <div class="details-content">
                        Faucibus interdum posuere habitant morbi tristique senectus netus et malesuada. Euismod nisi
                        porta lorem mollis aliquam
                        ut porttitor.Faucibus interdum posuere habitant morbi tristique senectus netus Faucibus
                        interdum.
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4 babysitter-container">
                    <div>
                        <button class="btn btn-babysitter">babysitter</button>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="share-tilte">
                            Share:
                        </div>
                        <div class="d-flex">
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
                                        <i class="fa-brands fa-twitter icons_size_contact color_theme"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="social_icons_container">
                                <div class="d-flex justify-content-center">
                                    <div class="vertically_midle">
                                        <i class='bx bxl-linkedin color_theme icons_size_contact'></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div>
                                <div
                                    class="font_size_35 line_height_43 color_theme font_weight_400 font_family_Paytone">
                                    Leave a Reply
                                </div>
                            </div>
                            <div class="comment-container mt-5">
                                <div class="details-content">
                                    Your email address will not be published. Required fields are marked *
                                </div>
                                <div class="mt-4">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <input type="text"
                                                        class="form-control contact_us_input  font_family_popins font_size_16 font_weight_500"
                                                        placeholder="Name *" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <input type="email"
                                                        class="form-control contact_us_input  font_family_popins font_size_16 font_weight_500"
                                                        placeholder="Email*" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <input type="text"
                                                class="form-control contact_us_input  font_family_popins font_size_16 font_weight_500"
                                                placeholder="Website" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>

                                        <div>
                                            <textarea
                                                class="form-control contact_us_textarea  font_family_popins font_size_16 font_weight_500"
                                                id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label details-content" for="flexCheckDefault">
                                                Save my name, email, and website in this browser for the next time I
                                                comment.
                                            </label>
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit"
                                                class="btn btn_coment font_weight_400 font_family_Paytone font_size_16">Post
                                                Comment</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <div class="outer-border">
                        <div class="inner-box-header">
                            <div class="d-flex align-items-center">
                                <div class="inner-left-dash"></div>
                                <div class="blog-details-page-title"> Search</div>
                            </div>
                        </div>
                        <div class="inner-box">
                           <div>
                            <div class="input-group group_bg_white">
                                <input type="text" class="form-control custom_form_control_post search-input"
                                    placeholder="Search...">
                                <button class="btn search-icon">
                                    <i class="fas fa-search color_black"  style="font-weight: 700; font-size: 1.2rem;"></i>
                                </button>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="outer-border">
                        <div class="inner-box-header">
                            <div class="d-flex align-items-center">
                                <div class="inner-left-dash"></div>
                                <div class="blog-details-page-title"> Recent Post</div>
                            </div>
                        </div>
                        <div class="inner-box">
                            <div class="d-flex align-items-center mb-3">
                                <div class="">
                                    <img src="{{ asset('asset/images/service-img6-150x150.jpg.png') }}" alt="img"
                                        class="recent-post-image">
                                </div>
                                <div class="px-4">
                                    <div class="recent-post-title">Going Back To Work After Parental</div>
                                    <div class="recent-post-date">August 4, 2022</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="">
                                    <img src="{{ asset('asset/images/project-img3-150x150.jpg.png') }}" alt="img"
                                        class="recent-post-image">
                                </div>
                                <div class="px-4">
                                    <div class="recent-post-title">Consider When Hiring a New
                                        Nanny</div>
                                    <div class="recent-post-date">August 3, 2022</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="">
                                    <img src="{{ asset('asset/images/service-img4-150x150.jpg.png') }}" alt="img"
                                        class="recent-post-image">
                                </div>
                                <div class="px-4">
                                    <div class="recent-post-title">babysitter for a child with
                                        special needs</div>
                                    <div class="recent-post-date">August 3, 2022</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="">
                                    <img src="{{ asset('asset/images/service-img5-150x150.jpg.png') }}" alt="img"
                                        class="recent-post-image">
                                </div>
                                <div class="px-4">
                                    <div class="recent-post-title">What your nanny needs to
                                        know about</div>
                                    <div class="recent-post-date">August 3, 2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="outer-border">
                        <div class="inner-box-header">
                            <div class="d-flex align-items-center">
                                <div class="inner-left-dash"></div>
                                <div class="blog-details-page-title"> Categories</div>
                            </div>
                        </div>
                        <div class="inner-box">
                            <ul>
                                <li class="mb-4 d-flex justify-content-between align-items-center">
                                    <div>
                                        baby</div>
                                    <div class="custome-page-primary">1</div>
                                </li>
                                <li class="mb-4 d-flex justify-content-between align-items-center">
                                    <div>
                                        Baby Care</div>
                                    <div class="custome-page-info">1</div>
                                </li>
                                <li class="mb-4 d-flex justify-content-between align-items-center">
                                    <div>
                                        Bebysitter</div>
                                    <div class="custome-page-primary">1</div>
                                </li>
                                <li class="mb-4 d-flex justify-content-between align-items-center">
                                    <div>
                                        Care</div>
                                    <div class="custome-page-info">1</div>
                                </li>
                                <li class="mb-4 d-flex justify-content-between align-items-center">
                                    <div>
                                        health</div>
                                    <div class="custome-page-primary">1</div>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <div>
                                        Nanny</div>
                                    <div class="custome-page-info">1</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
