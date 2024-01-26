@include('layout.header')
@include('layout.nav')

@include('breadcrumb')


<!-- Start Register -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Register</h2>
                    <h2 class="ec-title">Register</h2>
                    <p class="sub-title mb-3">Create an account for faster shopping experience</p>
                </div>
            </div>
            <div class="ec-register-wrapper">
                <div class="ec-register-container">
                    <div class="ec-register-form">
                        <form action="#" method="post">
                            <span class="ec-register-wrap ec-register-half">
                                <label>First Name*</label>
                                <input type="text" name="firstname" placeholder="Enter your first name" required />
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>Last Name*</label>
                                <input type="text" name="lastname" placeholder="Enter your last name" required />
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>Email*</label>
                                <input type="email" name="email" placeholder="Enter your email address" required />
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>Phone Number*</label>
                                <input type="text" name="phonenumber" placeholder="Enter your phone number"
                                    required />
                            </span>
                            <span class="ec-register-wrap">
                                <label>Address</label>
                                <input type="text" name="address" placeholder="Address Line 1" />
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>Password*</label>
                                <input type="password" name="phonenumber" placeholder="Enter your password" required />
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>Confirm Password*</label>
                                <input type="text" name="phonenumber" placeholder="Confirm Your Password" required />
                            </span>
                            <span class="ec-register-wrap ec-recaptcha">
                                <span class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                                    data-callback="verifyRecaptchaCallback"
                                    data-expired-callback="expiredRecaptchaCallback"></span>
                                <input class="form-control d-none" data-recaptcha="true" required
                                    data-error="Please complete the Captcha">
                                <span class="help-block with-errors"></span>
                            </span>
                            <span class="ec-register-wrap ec-register-btn">
                                <button class="btn btn-primary" type="submit">Register</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Register -->

@include('layout.footer')
