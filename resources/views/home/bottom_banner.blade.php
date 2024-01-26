<!-- bottom banner sec Start -->
<style>
    .newsletter {
        background-size: cover;
        background-position: center;
        padding: 80px 0; /* Adjust padding as needed */
        color: #692c91; /* Text color */
    }

    .newsletter-container {
        background-color: rgba(255, 255, 255, 0.6); /* Semi-transparent background */
        border-radius: 10px; /* Rounded corners */
        padding: 20px;
        max-width: 600px; /* Adjust container width */
        margin: 0 auto;
    }

    .signup {
        text-align: center;
        margin-bottom: 20px;
    }

    .detail {
        text-align: center;
        margin-bottom: 30px;
    }

    .newsletter-email form {
        text-align: center;
    }

    .email {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #692c91; /* White border */
        border-radius: 5px;
        background-color: transparent; /* Transparent background */
        color: #692c91;
    }

    .sub {
        background-color: #4caf50; /* Green color */
        color: #692c91;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .newsletter-container {
            max-width: 100%;
        }
    }
</style>

<div class="flex align-items-center justify-center newsletter"
    style="background-image: url('{{ asset('assets/img/News_Letter.png') }}')">
    <div class="md:container mx-auto">
        <div class="flex justify-center">
            <div class="newsletter-container">
                <div class="newsletter-content">
                    <div class="items">
                        <div class="signup text-xl fw-bold">
                            <span>Sign Up For Newsletter</span>
                        </div>
                        <div class="detail small fw-normal py-1">
                            <span>Be the First to know. Sign up for the newsletter today</span>
                        </div>
                        <div class="newsletter-email py-2">
                            <form>
                                <div class="py-1 email-wrap">
                                    <input class="email" type="text" placeholder="Your email address"
                                        name="email">
                                </div>
                                <div class="sub-wrap">
                                    <button class="sub" type="button">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom banner sec end -->
