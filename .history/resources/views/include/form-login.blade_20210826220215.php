<!-- login modal -->
<div class="modal js-modal-close">
    <div class="modal-container">
        <header class="form-header">
            <a href="#" class="form-header__action ">Login</a>
            <a href="#" class="form-header__action active">Register</a>
        </header>

        {{-- Form Login --}}
        <div class="form-body form-body-login ">
            <h4 class="form-title">Sign In Here!</h4>
            <p class="form-description">Log into your account in just a few simple steps</p>
            <form id="login-form" action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" id="email" name="email" placeholder="Email" required>
                <label for="email"></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <label for="password"></label>

                <div class="remember-me">
                    <label class="remember-lable" for="remember-radio">Remember me</label>
                    <input type="checkbox" name="remember" id="remember-radio" value="1">
                </div>
                <div class="form-btn">
                    <p class="forgot-password">Forgot your password?</p>
                    <button type="submit">sign in</button>
                </div>
            </form>
            <div class="form-login-social">
                <p class="form-descriotion">Sign in with Facebook or Google+</p>
                <div class="google-facebook">
                    <a href="{{ url('/auth/facebook/redirect') }}" class="facebook"><i
                            class="fab fa-facebook-f"></i>Facebook</a>
                    <a href="{{ url('/auth/google/redirect') }}" class="google"><i
                            class="fab fa-google-plus-g"></i>Google</a>
                </div>
            </div>
        </div>

        {{-- Form Register --}}
        <div class="form-body form-body-register active">
            <h4 class="form-title">Register Now!</h4>
            <p class="form-description">Join the Viettour community today & set up a free account</p>

            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>

            <form id="register-form" action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" id="name" name="name" placeholder="User name" required>
                <label for="name"></label>
                <input class="email" type="email" id="email" name="email" placeholder="Email" required>
                <label for="email"></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <label for="password"></label>
                <input type="password" id="re_password" name="re_password" placeholder="Repeat Password" required>
                <label for="re_password"></label>

                <div class="form-btn">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
