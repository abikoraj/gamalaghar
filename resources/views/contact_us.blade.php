@include('layout.header')
@include('layout.nav')
@include('breadcrumb')
<!-- Ec Contact Us page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-common-wrapper">
                <div class="ec-contact-leftside">
                    <div class="ec-contact-container">
                        <div class="ec-contact-form">
                            <form action="#" method="post">
                                <span class="ec-contact-wrap">
                                    <label>First Name*</label>
                                    <input type="text" name="firstname" placeholder="Enter your first name"
                                        required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Last Name*</label>
                                    <input type="text" name="lastname" placeholder="Enter your last name" required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Email*</label>
                                    <input type="email" name="email" placeholder="Enter your email address"
                                        required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Phone Number*</label>
                                    <input type="text" name="phonenumber" placeholder="Enter your phone number"
                                        required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Comments/Questions*</label>
                                    <textarea name="address" placeholder="Please leave your comments here.."></textarea>
                                </span>
                                <span class="ec-contact-wrap ec-recaptcha">
                                    <span class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                                        data-callback="verifyRecaptchaCallback"
                                        data-expired-callback="expiredRecaptchaCallback"></span>
                                    <input class="form-control d-none" data-recaptcha="true" required
                                        data-error="Please complete the Captcha">
                                    <span class="help-block with-errors"></span>
                                </span>
                                <span class="ec-contact-wrap ec-contact-btn">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="ec-contact-rightside">
                    <div class="ec_contact_map">
                        <div class="ec_map_canvas">



                            <iframe id="ec_map_canvas"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.9764163720833!2d85.31669157597577!3d27.68712377619415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198f0e2c75db%3A0x1d2728a0c51c89d3!2sGamala%20Ghar!5e0!3m2!1sen!2snp!4v1707641012571!5m2!1sen!2snp"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                    <div class="ec_contact_info">
                        <h1 class="ec_contact_info_head">Contact us</h1>
                        <ul class="align-items-center">
                            <li class="ec-contact-item"><i class="ecicon eci-map-marker"
                                    aria-hidden="true"></i><span>Address :</span>71 Pilgrim Avenue Chevy Chase, east
                                california. east california. MD
                                20815, USA</li>
                            <li class="ec-contact-item align-items-center"><i class="ecicon eci-phone"
                                    aria-hidden="true"></i><span>Call Us :</span><a href="tel:+440123456789">+977
                                    9810907768</a></li>
                            <li class="ec-contact-item align-items-center"><i class="ecicon eci-envelope"
                                    aria-hidden="true"></i><span>Email :</span><a
                                    href="mailto:example@ec-email.com">example@ec-email.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layout.footer')
