<div class="b-bottom mt-lg-5 mt-2 mb-0"></div>
<section id="contact" class="contact section p-lg-3 p-0">

    <!-- Section Title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12 mb-lg-0 mb-3 mt-lg-0 mt-3">
                <div class="info-box h-100 p-4">
                    <h3>CONTACT US FOR<br> FURTHER INFORMATION:</h3>
                    <div class="info-item mt-lg-3">
                        <div class="icon-box me-3">
                            <img src="{{ asset('young-entrepreneur-page/assets/images/f-call.png') }}">

                        </div>
                        <div class="content">
                            <a href="tel:+923018624222">+92 301 8624222</a>
                            <br>
                            <a href="tel:+923317183400">+92 331 7183400</a>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon-box me-3">
                            <img src="{{ asset('young-entrepreneur-page/assets/images/f-date.png') }}">

                        </div>
                        <div class="content">
                            <h5>25 OCTOBER, 2026</h5>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon-box me-3">
                            <img src="{{ asset('young-entrepreneur-page/assets/images/f-time.png') }}">

                        </div>
                        <div class="content">
                            <h5>12:00 PM to 08:00 PM</h5>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon-box me-3">
                            <img src="{{ asset('young-entrepreneur-page/assets/images/f-location.png') }}">
                        </div>
                        <div class="content">
                            <h5>Expo Centre, Lahore.</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="footer-icons">
                                <a href="https://www.facebook.com/EnablersTeam" target="_blank"><img src="{{ asset('young-entrepreneur-page/assets/images/f-facebook.png') }}" class="me-3"></a>
                                <a href="https://www.linkedin.com/company/enablers-pakistan/" target="_blank"><img src="{{ asset('young-entrepreneur-page/assets/images/f-linked.png') }}" class="me-3"></a>
                                <a href="https://www.instagram.com/enablers.official/" target="_blank"><img src="{{ asset('young-entrepreneur-page/assets/images/f-insta.png') }}" class="me-3"></a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 p-lg-0 mb-lg-0 mb-3 mt-lg-0 mt-2">
                <div class="contact-form p-4">
                    <p>Would you like to participate?</p>

                    <form action="#" method="POST" class="php-email-form" id="feedback-form">
                        @csrf
                        <div class="row gy-2">
                            <div class="col-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-12 ">
                                <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="2" placeholder="Enter Your Message" required></textarea>
                            </div>
                            <div class="col-12 ">
                                <div class="loading" style="display:none;">Loading</div>
                                <div class="sent-message" style="display:none;font-size: 13px;margin-bottom:5px">Your message has been sent. Thank you!</div>
                                <button type="submit" class="btn btn-primary mt-4 mb-4">Send Your Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mt-lg-0 mt-2">
                <div class="stall-box h-100 p-lg-4 p-3">
                    <h3>BOOK YOUR STALL NOW!</h3>
                    <p>Limited Stalls Available!<br>Don't miss the Opportunity.</p>
                    <hr class="border">
                    <a href="#" class="btn btn-stall">Book Your Stall</a>
                </div>
            </div>

        </div>

    </div>

</section><!-- /Contact Section -->