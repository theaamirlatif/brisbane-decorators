<?php
/*
Template Name: Main Events Services
*/ 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Events Services | Decorating Site</title>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link
        href='https://fonts.googleapis.com/css?family=Elsie|PT Sans|Inter|Fira Sans|Playfair Display SC|Urbanist|Playfair Display|Poppins'
        rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main-events-services.css">
    

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
                <div class="hero-img">
                    <div class="hero-lay"></div>
                    <h1>Our Main Events Service!</h1>
                </div>
            </div>
        </header>
    </section>

    <div class="event-plan-cat">
        <div id="event-plan" class="event-plan-cat-child">
            <div class="epc-top">
                <div class="epc-top-left">
                    <h2>Our Comprehensive Event Planning Categories</h2>
                </div>
                <div class="epc-top-right">
                    <div class="heading-child">
                        <h3>Our Service</h3>
                        <hr>
                    </div>
                    <p>We offer a variety of services tailored to your needs, handling everything from start to finish.</p>
                </div>
            </div>
            <div class="epc-bot"> 
                <div class="epc-bot-child" style="display: flex; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/srvc1.png');">
                    <a href="https://brisbaneeventdecorators.com.au/corporate/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Huge-icon.png" alt=""></a>
                    <div class="epc-bot-text">
                        <h3>Corporates</h3>
                        <p>Professional Event Solutions for Seamless Corporate Experiences</p>
                    </div>
                </div>
                <div class="epc-bot-child" style="display: flex; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/srvc15.png');">
                    <a href="https://brisbaneeventdecorators.com.au/event-plinths-decor/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Huge-icon.png" alt=""></a>
                    <div class="epc-bot-text">
                        <h3>Birthdays Decor</h3>
                        <p>Add elegance to your event with stylish plinths, perfect for showcasing decor, cakes, or floral arrangements in any setting.</p>
                    </div>
                </div>
                <div class="epc-bot-child" style="display: flex; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/srvc14.png');">
                    <a href="https://brisbaneeventdecorators.com.au/custom-balloon/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Huge-icon.png" alt=""></a>
                    <div class="epc-bot-text">
                        <h3>Baby Shower</h3>
                        <p>Elevate your event with custom color balloon styling, tailored to match your theme and create stunning, personalized decor!</p>
                    </div>
                </div>
                <div class="epc-bot-child" style="display: flex; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/srvc5.png');">
                    <a href="https://brisbaneeventdecorators.com.au/venue-decor/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Huge-icon.png" alt=""></a>
                    <div class="epc-bot-text">
                        <h3>Weddings decor</h3>
                        <p>Transform Your Venue with Elegant and Customized Styling and Decor</p>
                    </div>
                </div>
                <div class="epc-bot-child" style="display: flex; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/srvc4.png');">
                    <a href="https://brisbaneeventdecorators.com.au/picnics/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Huge-icon.png" alt=""></a>
                    <div class="epc-bot-text">
                        <h3>Bridle Shower</h3>
                        <p>Relax and Enjoy in Style with Our Curated Bridle Shower event Experiences</p>
                    </div>
                </div>
                <div class="epc-bot-child" style="display: flex; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/srvc2.png');">
                    <a href="https://brisbaneeventdecorators.com.au/grab-go-diys/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Huge-icon.png" alt=""></a>
                    <div class="epc-bot-text">
                        <h3>Gender Reveal</h3>
                        <p>Effortless and Fun Ideas for Your Next Gender Reveal Celebration</p>
                    </div>
                </div>
            </div>
            <!--<button id="loadMoreBtn" class="load-more-btn">Load More</button>-->
        </div>
    </div>

    <!--<div class="about-we-are">-->
    <!--    <div class="about-we-are-child">-->
    <!--        <div class="awa-left awa-desk">-->
    <!--            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wwa.png" alt="">-->
    <!--        </div>-->
    <!--        <div class="awa-right">-->
    <!--            <span>About Us!</span>-->
    <!--            <h2>Know More About Full Service Event Planning.</h2>-->
    <!--            <div class="awa-left awa-mob">-->
    <!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wwa.png" alt="">-->
    <!--            </div>-->
    <!--            <p>At <strong>Brisbane Event Decorators</strong> we specialize in transforming any occasion into a memorable experience. From intimate celebrations to large corporate functions, we do it all! Whether it's a baby shower, wedding, birthday, gender reveal, christening, or baptism, we’re here to bring your vision to life.</p>-->
    <!--            <p>No event is too big or too small for our expert team. We craft stunning decor for <strong>bridal showers, graduations, anniversaries, family reunions, holiday parties, product launches, and business conferences</strong> and everything in between.</p>-->
    <!--            <p>With a passion for creativity and attention to detail, we are dedicated to making every moment unforgettable. Whatever your event, we’ve got you covered!</p>-->
    <!--            <div class="awa-btn-parent">-->
    <!--                <button type="submit" value="Submit" class="awa-submit-btn">More About Us</button>-->
    <!--                <div class="awa-call-btn">-->
    <!--                    <div class="awa-img-p">-->
    <!--                        <a href="tel:+0478706362" alt=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ph_phone-call.png" alt=""></a>-->
    <!--                    </div>-->
    <!--                    <div class="awa-text-p">-->
    <!--                        <a href="tel:+0478706362" alt=""><h3>Call Now</h3></a>-->
    <!--                        <a href="tel:+0478706362" alt=""><p>0478706362</p></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--<div class="ss-reviews-slider">-->
    <!--    <div class="ss-reviews-slider-child">-->
    <!--        <h2>Our Balloon Styling Services:</h2>-->
    <!--        <div class="ss-review-slider-wrapper">-->
    <!--            <div class="ss-review-slider">-->
    <!--                <div class="ss-review-col">-->
    <!--                    <div class="ss-review-col-wrapper">-->
    <!--                        <div class="ss-review-img-wrapper">-->
    <!--                            <div class="ss-review-header">-->
    <!--                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s1.png" alt="Pest Control">-->
    <!--                                <h4>Balloon Arches & Entrances</h4>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="ss-review-col">-->
    <!--                    <div class="ss-review-col-wrapper">-->
    <!--                        <div class="ss-review-img-wrapper">-->
    <!--                            <div class="ss-review-header">-->
    <!--                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s2.png" alt="Pest Control">-->
    <!--                                <h4>Balloon Walls & Backdrops</h4>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="ss-review-col">-->
    <!--                    <div class="ss-review-col-wrapper">-->
    <!--                        <div class="ss-review-img-wrapper">-->
    <!--                            <div class="ss-review-header">-->
    <!--                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s3.png" alt="Pest Control">-->
    <!--                                <h4>Balloon Installations & Sculptures</h4>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="ss-review-col">-->
    <!--                    <div class="ss-review-col-wrapper">-->
    <!--                        <div class="ss-review-img-wrapper">-->
    <!--                            <div class="ss-review-header">-->
    <!--                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s4.png" alt="Pest Control">-->
    <!--                                <h4>Table style Centrepieces</h4>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="ss-review-col">-->
    <!--                    <div class="ss-review-col-wrapper">-->
    <!--                        <div class="ss-review-img-wrapper">-->
    <!--                            <div class="ss-review-header">-->
    <!--                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s5.png" alt="Pest Control">-->
    <!--                                <h4>Event Styling Package</h4>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="ss-review-col">-->
    <!--                    <div class="ss-review-col-wrapper">-->
    <!--                        <div class="ss-review-img-wrapper">-->
    <!--                            <div class="ss-review-header">-->
    <!--                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/s6.png" alt="Pest Control">-->
    <!--                                <h4>Balloon Garlands & Swags</h4>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <div class="who-we-are">
        <div class="who-we-are-child">
            <div class="wwa-left wwa-desk">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ct-img.png" alt="">
            </div>
            <div class="wwa-right">
                <span>Who We Are</span>
                <h2>We are a Full Service Event Planning Company</h2>
                <div class="wwa-left wwa-mob">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wwa.png" alt="">
                </div>
                <p>At <strong>Brisbane Event Decorators</strong>, we specialize in transforming any occasion into a memorable experience. From intimate celebrations to large corporate functions, we do it all! Whether it's a baby shower, wedding, birthday, gender reveal, christening, or baptism, we’re here to bring your vision to life.</p>
                   <p> No event is too big or too small for our expert team. We craft stunning decor for <strong>bridal showers, graduations, anniversaries, family reunions, holiday parties, product launches, and business conferences</strong> and everything in between.</p>
                   <p> With a passion for creativity and attention to detail, we are dedicated to making every moment unforgettable. Whatever your event, we’ve got you covered!</p>
                <div class="wwa-btn-parent">
                    <button type="submit" value="Submit" class="wwa-submit-btn">Get Quote</button>
                    <div class="wwa-call-btn">
                        <div class="wwa-img-p">
                            <a href="tel:+0478706362" alt=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ph_phone-call.png" alt=""></a>
                        </div>
                        <div class="wwa-text-p">
                            <a href="tel:+0478706362" alt=""><h3>Call Now</h3></a>
                            <a href="tel:+0478706362" alt=""><p>0478706362</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        
        document.getElementById('loadMoreBtn').addEventListener('click', function () {
            // Get all the service elements
            const services = document.querySelectorAll('.epc-bot-child');
            
            // Track how many services are currently hidden
            let hiddenServices = 0;
            
            // Show hidden services one by one
            services.forEach(service => {
                if (service.style.display === 'none') {
                    service.style.display = 'flex';
                    hiddenServices++;
                }
            });
            
            // After showing all hidden services, hide the Load More button
            if (hiddenServices === 0) {
                document.getElementById('loadMoreBtn').style.display = 'none';
            }
        });

    </script>


</body>

</html>