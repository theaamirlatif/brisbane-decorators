<?php
/*
Template Name: Wedding
*/ 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding | Decorating Site</title>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link
        href='https://fonts.googleapis.com/css?family=Elsie|PT Sans|Inter|Fira Sans|Playfair Display SC|Urbanist|Playfair Display|Poppins'
        rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/wedding.css">
    

</head>

<body>
    <div class="top-nav"></div>
    <section class="parent-section">
        <header class="hero-section">
            <div class="header-content">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fa fa-bars"></i>
                    <i class="fa fa-times"></i>
                </label>
                <div class="menu">
                    <ul>
                        <li><a href="https://brisbaneeventdecorators.com.au/">Home</a></li>
                        <li><a href="https://brisbaneeventdecorators.com.au/about/">About</a></li>
                        <li class="services">
                            <a href="https://brisbaneeventdecorators.com.au/services/">Services</a>
                            <ul class="submenu">
                                <li><a href="https://brisbaneeventdecorators.com.au/prop-hire-services/">Prop Hire</a></li>
                                <li><a href="https://brisbaneeventdecorators.com.au/table-chair-services/">Table & Chairs</a></li>
                                <li><a href="https://brisbaneeventdecorators.com.au/event-packages-services/">Event Packages</a></li>
                                <li><a href="https://brisbaneeventdecorators.com.au/main-events-services/">Event Categories</a></li>
                            </ul>
                        </li>
                        <li><a href="https://brisbaneeventdecorators.com.au/contact/">Contact</a></li>
                    </ul>
                </div>
                <div class="logo">
                    <a href="https://brisbaneeventdecorators.com.au/" alt=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hd-logo.png" alt="Logo"></a>
                </div>
                <div class="social-source">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                        <li><a href="https://www.instagram.com/brisbane_event_decorators_/"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    </ul>
                    <div class="get-qoute">
                        <a href="#service-form">GET QUOTE</a>
                    </div>
                </div>
            </div>
            <div class="hero-content">
                <h1>Bespoke Wedding & Event Décor <br>Services </h1>
                <div class="hero-img">
                    <a href="https://brisbaneeventdecorators.com.au/#event-plan" class="hero-top-btn">See Details</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/w-desk.png" class="hero-desk" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mob-hero.png" class="hero-mob" alt="">
                    <a href="https://brisbaneeventdecorators.com.au/#event-plan" class="hero-bot-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ci_chevron-up-duo.png" alt=""></a>
                </div>
            </div>
        </header>
    </section>

    <div class="event-blns">
        <div class="eb-child">
            <h2>Crafting Timeless Moments with Stunning Decor</h2>
            <p>Transform your special day with expertly designed decor that captures your unique vision. From weddings to corporate events, we bring elegance, creativity, and personalization to every celebration.</p>

            <div class="eb-sub-child">
                <div class="eb-left">
                    <h2>Why Choose Us for Weddings & Event Décor?</h2>
                    <h3>Personalized Designs:</h3>
                    <p>We bring your vision to life with decor tailored to your style and theme.</p>
                    <h3>Diverse Inventory:</h3>
                    <p>Choose from a wide array of premium decor items, from elegant centerpieces to striking backdrops.</p>
                    <h3>Experienced Team: </h3>
                    <p>Our experts handle every detail, ensuring a seamless setup and execution.</p>
                    <h3>Innovative Concepts:</h3>
                    <p>Creative ideas that make your wedding or event truly unique.</p>
                    <h3>Affordable Excellence: </h3>
                    <p>Exceptional decor that fits your budget without compromising quality.</p>
                </div>
                <div class="eb-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/w1.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="ss-reviews-slider" style="display: none;">
        <div class="ss-reviews-slider-child">
            <h2>Our Balloon Styling Services:</h2>
            <div class="ss-review-slider-wrapper">
                <div class="ss-review-slider">
                    <div class="ss-review-col">
                        <div class="ss-review-col-wrapper">
                            <div class="ss-review-img-wrapper">
                                <div class="ss-review-header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s1.png" alt="Pest Control">
                                    <h4>Balloon Arches & Entrances</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ss-review-col">
                        <div class="ss-review-col-wrapper">
                            <div class="ss-review-img-wrapper">
                                <div class="ss-review-header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s2.png" alt="Pest Control">
                                    <h4>Balloon Walls & Backdrops</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ss-review-col">
                        <div class="ss-review-col-wrapper">
                            <div class="ss-review-img-wrapper">
                                <div class="ss-review-header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s3.png" alt="Pest Control">
                                    <h4>Balloon Installations & Sculptures</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ss-review-col">
                        <div class="ss-review-col-wrapper">
                            <div class="ss-review-img-wrapper">
                                <div class="ss-review-header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s4.png" alt="Pest Control">
                                    <h4>Table style Centrepieces</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ss-review-col">
                        <div class="ss-review-col-wrapper">
                            <div class="ss-review-img-wrapper">
                                <div class="ss-review-header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s5.png" alt="Pest Control">
                                    <h4>Event Styling Package</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ss-review-col">
                        <div class="ss-review-col-wrapper">
                            <div class="ss-review-img-wrapper">
                                <div class="ss-review-header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s6.png" alt="Pest Control">
                                    <h4>Balloon Garlands & Swags</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="occations">
        <div class="occations-child">
            <div class="oc-left">
                <h2>Perfect for Every Setting:</h2>
                <div class="oc-ul-parent">
                    <ul>
                        <li>Indoor Venues</li>
                        <li>Outdoor Spaces</li>
                        <li>Destination Weddings</li>
                    </ul>

                </div>
            </div>
            <div class="oc-right">
                <div class="slider-container">
                    <div class="slider">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/w2.png" alt="Image 1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/w2.png" alt="Image 1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/w2.png" alt="Image 1">
                    </div>
                    <div class="slider-buttons">
                        <button class="prev" onclick="moveSlide(-1)"><i class="fa-solid fa-arrow-right"></i></button>
                        <button class="next" onclick="moveSlide(1)"><i class="fa-solid fa-arrow-left"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-form">
        <div class="service-form-child">
            <div class="sf-left">
                <h2>We are a Full Servic Event Planning Company</h2>
                <div class="sf-right sf-mob">
                    <div class="image-parent">
                        <div class="img-child1">
                            <div class="sf-img1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sf-img1.png" alt="Image 1">
                            </div>
                            <div class="sf-img2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sf-img2.png" alt="Image 2">
                            </div>
                        </div>
                        <div class="img-child2">
                            <div class="sf-img3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sf-img3.png" alt="Image 3">
                            </div>
                            <div class="sf-img4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sf-img4.png" alt="Image 4">
                            </div>
                        </div>
                    </div>
                </div>
                <form id="quote-request-form" class="form-horizontal" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <?php wp_nonce_field('quote_request_nonce', '_wpnonce'); ?>
                    
                    <!-- Name and Email Inline -->
                    <div class="inline-fields">
                        <div class="form-group" style="margin-bottom: 15px;">
                            <input type="text" name="fullName" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    
                    <!-- Number of Guests -->
                    <div class="guest-dropdown">
                        <span class="dropdown-placeholder">Number of Guests</span>
                        <select name="numGuests" class="guest-select">
                            <option value="1" selected>1 Guest</option>
                            <option value="2">2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="5">5 Guests</option>
                            <option value="10">10 Guests</option>
                        </select>
                    </div>
                
                    <!-- Location and Message -->
                    <input type="text" name="location" placeholder="Location">
                    <textarea name="message" placeholder="Message"></textarea>
                
                    <!-- Hidden Field for Action -->
                    <input type="hidden" name="action" value="handle_quote_request">
                    
                    <!-- Submit Button -->
                    <div class="btn-parent">
                        <button type="submit" class="submit-btn">Submit</button>
                        <div class="call-btn">
                            <div class="img-p">
                                <a href="tel:+0478706362" alt=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ph_phone-call.png" alt=""></a>
                            </div>
                            <div class="text-p">
                                <a href="tel:+0478706362" alt=""><h3>Call Now</h3></a>
                                <a href="tel:+0478706362" alt=""><p>0478706362</p></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="sf-right sf-desk">
                <div class="image-parent">
                    <div class="img-child1">
                        <div class="sf-img1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sf-img1.png" alt="Image 1">
                        </div>
                        <div class="sf-img2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sf-img2.png" alt="Image 2">
                        </div>
                    </div>
                    <div class="img-child2">
                        <div class="sf-img3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sf-img3.png" alt="Image 3">
                        </div>
                        <div class="sf-img4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sf-img4.png" alt="Image 4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ds-reviews-slider">
        <div class="ds-reviews-slider-child">
            <span>What my clients think about me</span>
            <h2>What My Clients Says</h2>
            <?php echo do_shortcode( '[grw id=73]' ); ?>
        </div>
    </div>
    <style>
        .wp-gr:not(.wp-dark) .grw-review-inner.grw-backgnd {
            background: #FFA3B3 !important;
            border-radius: 15px !important;
            padding: 20px !important;
        }
        .wp-gr .grw-row-s .grw-review { 
            flex: 0 0 50%;         /* Flex property to set the base size */
            max-width: 50%;        /* Max width to limit it to 50% */
        }
        .wp-gr .grw-review .wp-google-feedback {
            display: flex !important;
            justify-content: space-between !important;
            align-items: flex-start !important;
        }
        .rplg-review-avatar {
            width: 75px !important;
            height: 75px !important;
        }
        .wp-gr .wp-google-text {
            width: 80% !important;
        }
        .wp-gr .grw-review .wp-google-stars {
            display: block !important;
            margin: 5px 0px 7px 0px !important;
        }
        .wp-google-time {
            display: none !important;
        }
        .wp-gr.wpac a.wp-google-name {
            font-size: 23px !important;
            font-weight: 500 !important;
            line-height: 27px !important;
            color: #333333 !important;
            font-family: Segoe UI !important;
            margin: 0px 0px 0px 0px !important;
        }
        .wp-gr .grw-review-inner>svg {
            width: 30px !important;
            height: 30px !important;
            display: block !important;
            padding: 5px !important;
        }
        .wp-gr .grw-review .wp-google-feedback {
            margin: 10px 0px !important;
            height: 100px !important;
            overflow-y: hidden !important;
        }
    </style>

    <div class="footer">
        <div class="footer-child">
            <div class="flogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flogo.png" alt="">
                <div class="fs-icon">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tiktok-foot.png" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-foot.png" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-foot.png" alt=""></a>
                </div>
                <ul>
                    <a href="mailto:info@brisbaneeventdecorators.com.au"><li>info@brisbaneeventdecorators.com.au</li></a>
                </ul>
            </div>
            <div class="fcall">
                <h2>Phone Number</h2>
                <ul>
                    <a href="tel:+0478588199"><li>0478588199</li></a>
                    <a href="tel:+0478706362"><li>0478706362</li></a>
                </ul>
                <hr>
            </div>
            <div class="flinks">
                <h2>Services</h2>
                <ul>
                    <a href="https://brisbaneeventdecorators.com.au/prop-hire-services/"><li>Prop Hire Services</li></a>
                    <a href="https://brisbaneeventdecorators.com.au/table-chair-services/"><li>Table & Chair Services</li></a>
                    <a href="https://brisbaneeventdecorators.com.au/main-events-services/"><li>Events Categories</li></a>
                    <a href="https://brisbaneeventdecorators.com.au/event-packages-services/"><li>Events Hire Packages</li></a>
                    <a href="https://brisbaneeventdecorators.com.au/enquire/"><li>Enquire</li></a>
                    <!--<a href="https://brisbaneeventdecorators.com.au/theme-props/"><li>Kids Props</li></a>-->
                    <!--<a href="https://brisbaneeventdecorators.com.au/prop-hire/"><li>Prop Hire</li></a>-->
                    <!--<a href="https://brisbaneeventdecorators.com.au/luxury-chauffeur/"><li>Luxury Chauffeur</li></a>-->
                    <!--<a href="https://brisbaneeventdecorators.com.au/gender-reveal/"><li>Gender Reveal</li></a>-->
                </ul>
            </div>
            <div class="fslogan">
                <h2>Come and Join</h2>
                <p>We really look forward to the presence of friends</p>
                <a href="#">I will ready </a>
            </div>
        </div>
        <div class="footer-bot">
            <p>© 2024 Brisbane Decorators. All Rights Reserved. With love by Elmous</p>
        </div>
    </div>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.ds-review-slider').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1500,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: true,
                            dots: true
                        }
                    }
                ]
            });
        });

        $(document).ready(function () {
            $('.ss-review-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1500,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: true,
                            dots: true
                        }
                    }
                ]
            });
        });

        // navbar Toggle mobile menu visibility
        const checkBox = document.getElementById('check');
        const menu = document.querySelector('.menu');

        checkBox.addEventListener('change', () => {
            if (checkBox.checked) {
                menu.style.left = '0'; // Slide in menu from the left
                menu.style.display = 'block';
            } else {
                menu.style.left = '-100%'; // Hide menu by moving it off-screen to the left
                menu.style.display = 'none';
            }
        });

        // Ensure menu closes when a link is clicked
        const menuLinks = document.querySelectorAll('.menu a');
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 600) { // Only for mobile
                    checkBox.checked = false;
                    menu.style.left = '-100%';
                    menu.style.display = 'none';
                }
            });
        });

        let currentIndex = 0;

        function moveSlide(step) {
            const slides = document.querySelectorAll('.slider img');
            const totalSlides = slides.length;

            // Update the current index
            currentIndex += step;

            // Loop around the slides
            if (currentIndex < 0) {
                currentIndex = totalSlides - 1;
            } else if (currentIndex >= totalSlides) {
                currentIndex = 0;
            }

            // Update the transform to slide images
            const slider = document.querySelector('.slider');
            const offset = -currentIndex * 100;
            slider.style.transform = `translateX(${offset}%)`;
        }

    </script>


</body>

</html>