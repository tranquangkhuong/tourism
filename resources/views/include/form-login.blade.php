<!-- login form -->
<div class="modal js-modal-close">
    <div class="modal-container">
        <header class="form-header">
            <a href="#" class="form-header__action active">Login</a>
            <a href="#" class="form-header__action">Register</a>
        </header>
        <div class="form-body form-body-login active">
            <h4 class="form-title">Sign In Here!</h4>
            <p class="form-descriotion">Log into your account in just a few simple steps</p>
            <form action="">
                <input type="text" id="form-input" placeholder="User Name">
                <label for="form-input"></label>
                <input type="password" id="form-input" placeholder="Password">
                <label for="form-input"></label>

                <div class="remember-me">
                    <label class="remember-lable" for="remember-radio">Remember me</label>
                    <input type="radio" id="remember-radio">
                </div>
                <div class="form-btn">
                    <p class="forgot-password">Forgot your password?</p>
                    <button type="submit">sign in</button>
                </div>
                <div class="form-login-social">
                    <p class="form-descriotion">Sign in with Facebook or Google+</p>
                    <div class="google-facebook">
                        <button class="facebook"><i class="fab fa-facebook-f"></i>Facebook</button>
                        <button class="google"><i class="fab fa-google-plus-g"></i></i>Google</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="form-body form-body-register">
            <h4 class="form-title">Register Now!</h4>
            <p class="form-descriotion">Join the Viettour community today & set up a free account</p>
            <form action="">
                <input type="text" id="form-input" name="other" placeholder="User name">
                <label for="form-input"></label>
                <input class="email" type="text" id="form-input" placeholder="Email">
                <label for="form-input"></label>
                <input type="password" id="form-input" placeholder="Password">
                <label for="form-input"></label>
                <input type="password" id="form-input" placeholder="Repeat Password">
                <label for="form-input"></label>

                <div class="form-btn">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
