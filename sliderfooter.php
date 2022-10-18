<!---------------------------------footer-section----------------------------------------->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-4 footer-contact wow fadeInLeft">
                <h3>Contact Us</h3>
                <ul class="contact-list">
                    <li>
                        <p>Commercial Law Department Trademarks, Patents and Designs Ministry Of Trade and
                            Investment Block D, Old secretariat, Area 1, Garki Abuja</p>
                    </li>
                    <li><a href="mailto:info@iponigeria.com">info@iponigeria.com</a></li>
                    <li><a href="tel:08092194426">08092194426, 08092194416, 08092194404</a></li>
                </ul>
            </div>
            <div class="col-2 footer-links wow fadeInLeft">
                <h3>Quick Links</h3>
                <ul class="links-list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-3 footer-icons wow fadeInRight">
                <h3>Social Links</h3>
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                </ul>
            </div>
            <div class="col-3 footer-payment wow fadeInRight">
                <h3>Payments Powered by</h3>
                <ul class="payment-list">
                    <li><img src="images/footer1.png" alt="interswitch"></li>
                    <li><img src="images/footer2.png" alt="master-card"></li>
                    <li><img src="images/footer3.png" alt="verve"></li>
                </ul>
                <div class="logo"><a href="index.html"><img src="images/logo.png" alt="logo"></a></div>
            </div>
        </div>
    </div>
</footer>
<!-----------------------------footer-section-ends-------------------------------------->

<!---------------------------------copyright-section------------------------------------>
<div class="copyright-section text-center">
    <div class="container">
        <p class="m-0">&copy; Copyright All Right Reserved2019.iponigeria</p>
    </div>
</div>
<!-------------------------------copyright-section-ends--------------------------------->

<!------------------------------Scroll-Top---------------------------------------------->
<a id="mkd-back-to-top" href="#">
    <span class="mkd-icon-stack">
        <i class="fa fa-angle-up"></i>
    </span>
    <span class="mkd-back-to-top-inner">
        <span class="mkd-back-to-top-text">Top</span>
    </span>
</a>

<!-------------------------------Scripts-section---------------------------------------->

<!------------------------------Animation-------------------------->
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script src="js/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/owlcarousel/owl.carousel.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $('.home-slider').owlCarousel({
            loop: true,
            margin: 0,
            dots: false,
            items: 1,
            smartspeed: 800,
            autoplay: true,
            autoplayTimeout: 3000,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    });
</script>

<!------------------------------Dropdown-menu-------------------------->
<script>
    $(document).ready(function() {
        if ($(window).width() < 768) {
            $('.dropdown').on('click', function(e) {
                $(this).children('.dropdown-menu').slideToggle('slow');
                e.stopPropagation();
            });
            $('.dropdown-menu').each(function() {
                $height = $(this).height('auto');
                $(this).css('height', $height);
                $(this).hide();
            });
            $('.dropdown .dropdown-menu').on('click', function(event) {
                event.stopPropagation();
            });
        }

        $('.inner-ul li a').click(function() {
            $('.inner-ul li a').removeClass('active');
            $(this).addClass('active');
            $(this).parent().parent().siblings('a').addClass('active');

        });


    });
</script>
<!-----------------------Affix-header------------------------------>
<script>
    $(document).ready(function() {

        $(window).scroll(function() {

            if ($(this).scrollTop() > 100) {

                $("#header").addClass("affix");

            } else {

                $("#header").removeClass("affix");

            }
        });

    });
</script>

<!-----------------------Scroll-Top----------------------------->
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('#mkd-back-to-top').fadeIn(1200);
            } else {
                $('#mkd-back-to-top').fadeOut(1200);
            }
        });

        $('#mkd-back-to-top').click(function(event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: 0
            }, 1200);
        })
    });
</script>

<!----------------------Login/Register---------------------------->
<script>
    $(document).ready(function() {

        $('#Login-Form').parsley();
        $('#Signin-Form').parsley();
        $('#Forgot-Password-Form').parsley();

        $('.login').click(function() {
            $('#login-modal-content').css("display", "block");
            $('#signup-modal-content').css("display", "none");
            $('#forgot-password-modal-content').css("display", "none");
        });

        $('.register').click(function() {
            $('#login-modal-content').css("display", "none");
            $('#signup-modal-content').css("display", "block");
            $('#forgot-password-modal-content').css("display", "none");
        });

        $('#loginModal').click(function() {
            $('#signup-modal-content').fadeOut('fast', function() {
                $('#login-modal-content').fadeIn('fast');
            });
        });

        $('#signupModal').click(function() {
            $('#login-modal-content').fadeOut('fast', function() {
                $('#signup-modal-content').fadeIn('fast');
            });
        });

        $('#FPModal').click(function() {
            $('#login-modal-content').fadeOut('fast', function() {
                $('#forgot-password-modal-content').fadeIn('fast');
            });
        });

        $('#loginModal1').click(function() {
            $('#forgot-password-modal-content').fadeOut('fast', function() {
                $('#login-modal-content').fadeIn('fast');
            });
        });

    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.4.4/parsley.min.js"></script>

<!----------------------Country-icon---------------------------->
<script src="js/intlTelInput.js"></script>
<script src="js/main.js"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "js/utils.js",
    });
</script>

<!-----------------------------script-section-ends------------------------------------------->

</body>

</html>