@include('layout.header')
@include('layout.nav')

@include('breadcrumb')
<!-- Ec login page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Log In</h2>
                    <h2 class="ec-title">Log In</h2>
                    <p class="sub-title mb-3">Get a Faster Shopping Experience</p>
                </div>
            </div>
            <div class="ec-login-wrapper">
                <div class="ec-login-container">
                    <div class="ec-login-form">
                        <form action="{{ url('login') }}" method="post">
                            @csrf
                            <span class="ec-login-wrap">
                                <label>Email Address*</label>
                                <input type="text" name="email" placeholder="Enter your email add..." required />
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                            <span class="ec-login-wrap">
                                <label>Password*</label>
                                <input type="password" name="password" placeholder="Enter your password" required />
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                            <span class="ec-login-wrap ec-login-fp">
                                <label><a href="#">Forgot Password?</a></label>
                            </span>
                            <span class="ec-login-wrap ec-login-btn">
                                <button class="btn btn-primary" type="submit">Login</button>
                                <a href="{{ url('register') }}" class="btn btn-secondary">Register</a>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layout.footer')
