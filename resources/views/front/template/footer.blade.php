<div class="rts-footer-area rts-section-gapTop pb--80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="logo-area">
                    <div class="footer-logo-content">
                        <a href="{{ route('webanasayfa') }}" class="logo-area" style="display: block; z-index: 10;">
                            <img src="{{ asset('assets/images/logo/logom.png') }}" id="ozel-yuvarlak-logo" alt="logo"
                                style="width: 500px; height: auto; border-radius: 50%; display: block;">
                        </a>
                    </div>
                    <div class="footer-text-info">
                        <br>
                        <p class="disc">Bir Yazılım Mühendisinin Bloğu</p>
                    </div>
                </div>
                <p style="color: #94a3b8; margin-top: 20px; max-width: 400px; font-size: 14px;">
                    Yazılım mühendisliği sürecindeki deneyimlerimi ve projelerimi paylaştığım kişisel portfolyo
                    sistemim.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 mt_sm--30">
                <div class="single-nav-area-footer">
                    <h6 class="footer-title" style="color: #ffffff; margin-bottom: 20px;">Hızlı Erişim</h6>
                    <ul class="footer-links" style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 10px;"><a href="{{ route('webanasayfa') }}"
                                style="color: #94a3b8; text-decoration: none;">Ana Sayfa</a></li>
                        <li style="margin-bottom: 10px;"><a href="{{ route('hakkimda') }}"
                                style="color: #94a3b8; text-decoration: none;">Hakkımda</a></li>
                        <li style="margin-bottom: 10px;"><a href="{{ route('projeler') }}"
                                style="color: #94a3b8; text-decoration: none;">Projeler</a></li>
                        <li style="margin-bottom: 10px;"><a href="{{ route('makaleler') }}"
                                style="color: #94a3b8; text-decoration: none;">Makaleler</a></li>
                        <li style="margin-bottom: 10px;"><a href="{{ route('iletisim') }}"
                                style="color: #94a3b8; text-decoration: none;">İletişim</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt_sm--30">
                <h6 class="footer-title" style="color: #ffffff; margin-bottom: 20px;">İletişim</h6>
                <p style="color: #94a3b8; font-size: 14px;">
                    <a href="mailto:pelinrende@icloud.com" class="fa-regular fa-envelope" style="margin-right: 10px;">
                        pelinrende@icloud.com </a>
                </p>
                <p style="color: #94a3b8; font-size: 14px;">
                    <a href="https://www.google.com/maps/place/Atatürk+anıtı/@36.2026011,36.1585635,478m/data=!3m2!1e3!4b1!4m9!1m2!2m1!1zTcO8emVsZXI!3m5!1s0x1525c309963a2f15:0xbef54f9353e378a0!8m2!3d36.2026011!4d36.1602619!16s%2Fg%2F11fs8l9fdr?entry=ttu&g_ep=EgoyMDI2MDEyNS4wIKXMDSoASAFQAw%3D%3D"
                        class="fa-solid fa-location-dot" style="margin-right: 10px;">
                        Antakya/Türkiye </a>
                </p>
                <!-- <p style="color: #94a3b8; font-size: 14px;">
                    <a href="{{ route('dashboard') }}" style="margin-right: 10px;">
                        Panel</a>
                </p>-->
            </div>
        </div>
    </div>
</div>
<div class="rts-copyright-area-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-wrapper"
                    style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                    <p style="color: #64748b; margin: 0;">© {{ date('Y') }} PR. All rights reserved.</p>
                    <div class="social-copyright-area">
                        <ul style="display: flex; gap: 15px; list-style: none; margin: 0; padding: 0;">
                            <li><a href="https://github.com/pelinrende" style="color: #94a3b8;"><i
                                        class="fa-brands fa-github"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/pelin-rende-569566314" style="color: #94a3b8;"><i
                                        class="fa-brands fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/pelinrende_/" style="color: #94a3b8;"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- pre loader area start -->
<div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>



<div id="side-bar" class="side-bar header-two" dir="ltr">
    <button class="close-icon-menu" aria-label="footer_Button"><i class="far fa-times"></i></button>
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li class="has-droupdown">
                    <a href="#" class="main">Home</a>
                    <ul class="submenu mm-collapse">
                        <li><a href="index.html">Home One</a></li>
                        <li><a href="index-two.html">Home Two</a></li>
                        <li><a href="index-three.html">Home Three</a></li>
                        <li><a href="index-four.html">Home Four</a></li>
                        <li><a href="index-five.html">Home Five</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Pages</a>
                    <ul class="submenu mm-collapse">
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="service-single.html">Services Single</a></li>
                        <li><a href="case-studies.html">Case Studies</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="case-studies-single.html">Case Studies Single</a></li>
                        <li><a href="why-choose-us.html">Why Choose Us</a></li>
                        <li><a href="career.html">Career</a></li>
                        <li><a href="career-single.html">Career Single</a></li>
                        <li><a href="industry.html">Industry</a></li>
                        <li><a href="apply.html">Apply</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-single.html">Team Single</a></li>
                        <li><a href="faq.html">Faq's</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                        <li><a href="partner.html">Our Partner</a></li>
                        <li><a href="award.html">Award</a></li>
                        <li><a href="free-consultation.html">Free Consultation</a></li>
                        <li><a href="terms-of-use.html">Terms Of Use</a></li>
                        <li><a href="404.html">Error</a></li>
                    </ul>
                </li>
                <li>
                    <a href="case-studies.html" class="main">Case Studies</a>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Services</a>
                    <ul class="submenu mm-collapse">
                        <li><a href="service.html">Service</a></li>
                        <li><a href="service-single.html">Cloud Migration</a></li>
                        <li><a href="it-strategies.html">IT Strategies</a></li>
                        <li><a href="cyber-security-service.html">Cyber Security</a></li>
                        <li><a href="technologies-service.html">Technologies</a></li>
                        <li><a href="it-consulting-service.html">IT Consulting</a></li>
                        <li><a href="development-service.html">Development</a></li>
                        <li><a href="ai-learning-service.html">AI Learning</a></li>
                        <li><a href="management-service.html">Management Service</a></li>
                        <li><a href="it-innovations.html">IT Innovations</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Blog</a>
                    <ul class="submenu mm-collapse">
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-grid-two.html">Blog Grid Two</a></li>
                        <li><a href="blog-grid-four.html">Blog Grid Three</a></li>
                        <li><a href="blog-masonry.html">Blog Masonry</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html" class="main">Contact</a>
                </li>
            </ul>
        </nav>


        <div class="rts-social-border-area right-sidebar">
            <ul>
                <li><a href="#" aria-label="social link" data-description="social"><i
                            class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#" aria-label="social link" data-description="social"><i
                            class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#" aria-label="social link" data-description="social"><i
                            class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#" aria-label="social link" data-description="social"><i
                            class="fa-brands fa-pinterest"></i></a></li>
                <li><a href="#" aria-label="social link" data-description="social"><i
                            class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>

<div id="anywhere-home"></div>

<!-- progress area start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d=" M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>
<!-- progress area end -->


<script defer src="{{ asset('assets/js/plugins/jquery.js') }}"></script>
<script defer src="{{ asset('assets/js/vendor/waw.js') }}"></script>
<script defer src="{{ asset('assets/js/vendor/jarallax.js') }}"></script>
<script defer src="{{ asset('assets/js/plugins/smooth-scroll.js') }}"></script>
<script defer src="{{ asset('assets/js/plugins/counter-up.js') }}"></script>
<script defer src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
<script defer src="{{ asset('assets/js/plugins/popup.js') }}"></script>
<script defer src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
<script defer src="{{ asset('assets/js/plugins/svg-inject.js') }}"></script>
<script defer src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>
<script defer src="{{ asset('assets/js/vendor/contact-form.js') }}"></script>
<script defer src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script defer src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
