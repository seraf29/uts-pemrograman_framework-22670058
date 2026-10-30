<footer class="main-footer @yield('footer_class')">
@hasSection('no_footer_pattern')
@else
            <div class="pattern-layer" style="background-image: url({{ asset('assets/landing/images/shape/shape-13.png') }});"></div>
@endif
            <div class="auto-container">
                <div class="footer-top">
                    <div class="top-inner">
                        <div class="text">
                            <h5>Send Email</h5>
                            <h3><a href="mailto:needhelp@@company.com">needhelp@@company.com</a></h3>
                        </div>
                        <figure class="footer-logo"><a href="{{ route('landing.index') }}"><img src="{{ asset('assets/landing/images/footer-logo.png') }}" alt=""></a></figure>
                        <div class="text">
                            <h5>Call Anytime</h5>
                            <h3><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h3>
                        </div>
                    </div>
                </div>
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Explore</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{ route('landing.index') }}">Meet Our Team</a></li>
                                        <li><a href="{{ route('landing.index') }}">What We Do</a></li>
                                        <li><a href="{{ route('landing.index') }}">Latest News</a></li>
                                        <li><a href="{{ route('landing.index') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h4>Activities</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{ route('landing.index') }}">Tree Climbing</a></li>
                                        <li><a href="{{ route('landing.index') }}">Cross the River</a></li>
                                        <li><a href="{{ route('landing.index') }}">Mountain Boarding</a></li>
                                        <li><a href="{{ route('landing.index') }}">Parachute</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h4>Contact</h4>
                                </div>
                                <div class="widget-content">
                                    <p>60 road, broklyn golden street new york. USA</p>
                                    <ul class="social-links clearfix">
                                        <li><a href="{{ route('landing.index') }}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{ route('landing.index') }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ route('landing.index') }}"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="{{ route('landing.index') }}"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-title">
                                    <h4>Newsletter</h4>
                                </div>
                                <div class="widget-content">
                                    <p>Subsrcibe for our upcoming latest articles and news resources</p>
                                    <form action="#" method="post" class="newsletter-form">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email address" required>
                                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright">
                        <p>&copy; Copyright 2022 by <a href="{{ route('landing.index') }}">company.com</a></p>
                    </div>
                </div>
            </div>
        </footer>

<!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa-long-arrow-up"></i>
        </button>
