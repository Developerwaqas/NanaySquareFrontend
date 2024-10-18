<section class="mt-60 container">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="bage_title font_size_15 font_family_popins font_weight_600">Testimonials</div>
        </div>
        <div class="text-center">
            <div class="mt-3 font_size_50 font_weight_600 line_height_60 font_family_popins color_light_blue">
                What care recipients are saying</div>
        </div>
        <div class="d-flex align-items-center">
            <div class="row mt-55" id="testimonial-container">
                <div class="col-md-4 mb-5 mb-sm-15">
                    <div class="client_say_box">
                        <div class="d-flex justify-content-between">
                            <div class="container_ether_icon">
                                <div class="d-flex justify-content-center"><img
                                        src="{{ asset('asset/images/Icon20.png') }}" alt="icon" class="user_ether">
                                </div>
                            </div>
                            <div class="m_top_minus_20">
                                <img src="{{ asset('asset/images/baby1.png') }}" alt="babay" class="ehter_img_size">
                            </div>
                        </div>
                        <div class="font_size_25 font_weight_400 font_family_Paytone color_light_blue mt-1">
                            Jade
                        </div>
                        <div class="color_grey_500 font_size_15 font_weight_400 font_family_Popins line_height_22">
                            Impressed by the professionalism and warmth of the caregivers Nanny Square provides access
                            to. Our children are in safe hands, making our absence worry-free.

                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5 mb-sm-15">
                    <div class="client_say_box_green">
                        <div class="d-flex justify-content-between">
                            <div class="container_ether_icon">
                                <div class="d-flex justify-content-center"><img
                                        src="{{ asset('asset/images/Icon20.png') }}" alt="icon" class="user_ether">
                                </div>
                            </div>
                            <div class="m_top_minus_20">
                                <img src="{{ asset('asset/images/baby2.png') }}" alt="babay" class="ehter_img_size">
                            </div>
                        </div>
                        <div class="font_size_25 font_weight_400 font_family_Paytone color_light_blue mt-1">
                            John
                        </div>
                        <div class="color_grey_500 font_size_15 font_weight_400 font_family_Popins line_height_22">
                            Highly recommend Nanny Square for their exceptional service – reliable and flexible
                            caregivers who genuinely care about our child’s well-being.

                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5 mb-sm-15">
                    <div class="client_say_box_orang">
                        <div class="d-flex justify-content-between">
                            <div class="container_ether_icon">
                                <div class="d-flex justify-content-center"><img
                                        src="{{ asset('asset/images/Icon20.png') }}" alt="icon" class="user_ether">
                                </div>
                            </div>
                            <div class="m_top_minus_20">
                                <img src="{{ asset('asset/images/baby3.png') }}" alt="babay" class="ehter_img_size">
                            </div>
                        </div>
                        <div class="font_size_25 font_weight_400 font_family_Paytone color_light_blue mt-1">
                            Tracy
                        </div>
                        <div class="color_grey_500 font_size_15 font_weight_400 font_family_Popins line_height_22">
                            Thankful for Nanny Square – their trustworthy caregivers create a nurturing environment. Our
                            parents are well taken care of, giving us peace of mind.
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5 mb-sm-15 mt-5 hidden">
                    <div class="client_say_box_blue">
                        <div class="d-flex justify-content-between">
                            <div class="container_ether_icon">
                                <div class="d-flex justify-content-center"><img
                                        src="{{ asset('asset/images/Icon20.png') }}" alt="icon" class="user_ether">
                                </div>
                            </div>
                            <div class="m_top_minus_20">
                                <img src="{{ asset('asset/images/baby3.png') }}" alt="babay" class="ehter_img_size">
                            </div>
                        </div>
                        <div class="font_size_25 font_weight_400 font_family_Paytone color_light_blue mt-1">
                            Kemi
                        </div>
                        <div class="color_grey_500 font_size_15 font_weight_400 font_family_Popins line_height_22">
                            As a busy professional, it is hard to find time to cook for my family. Nanny Square provides
                            me high quality caregivers who are able to provide home cooked meals that my family enjoys.
                            We look forward to dinner now.

                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5 mb-sm-15 mt-5 hidden">
                    <div class="client_say_box_greenish">
                        <div class="d-flex justify-content-between">
                            <div class="container_ether_icon">
                                <div class="d-flex justify-content-center"><img
                                        src="{{ asset('asset/images/Icon20.png') }}" alt="icon" class="user_ether">
                                </div>
                            </div>
                            <div class="m_top_minus_20">
                                <img src="{{ asset('asset/images/baby3.png') }}" alt="babay" class="ehter_img_size">
                            </div>
                        </div>
                        <div class="font_size_25 font_weight_400 font_family_Paytone color_light_blue mt-1">
                            Bola
                        </div>
                        <div class="color_grey_500 font_size_15 font_weight_400 font_family_Popins line_height_22">
                            Getting to my doctor’s appointments became difficult since I stopped driving due to limited
                            mobility. With Nanny Square transport providers, I am able to book my appointments knowing I
                            have someone to count on to get me there on time.
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center mb-5">
            <div class="">
                <button class="btn btn-primary-custom" id="toggle-btn" type="submit">Load More</button>
            </div>
        </div>
    </div>
</section>

<style>
    .hidden {
        display: none;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }

    .show {
        display: block;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }
</style>

<script>
    const toggleBtn = document.getElementById('toggle-btn');
    const testimonials = document.querySelectorAll('#testimonial-container .hidden');

    let isShowingMore = false; // Tracks whether more testimonials are currently shown

    toggleBtn.addEventListener('click', function() {
        if (!isShowingMore) {
            // Show more testimonials
            testimonials.forEach((testimonial, index) => {
                setTimeout(() => {
                    testimonial.classList.add('show');
                    testimonial.classList.remove('hidden');
                }, index * 100); // Stagger the appearance for smoother effect
            });
            toggleBtn.textContent = 'Show Less'; // Change button text to "Hide"
            isShowingMore = true;
        } else {
            // Hide testimonials
            testimonials.forEach((testimonial, index) => {
                setTimeout(() => {
                    testimonial.classList.add('hidden');
                    testimonial.classList.remove('show');
                }, index * 100); // Stagger the disappearance for smoother effect
            });
            toggleBtn.textContent = 'Load More'; // Change button text to "Load More"
            isShowingMore = false;
        }
    });
</script>

