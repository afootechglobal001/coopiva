<?php if ($page == 'forgotPassword') { ?>

    <h1>Administrative <span>Reset Password!</span></h1>

    <p>Kindly, provide your email address to reset your password..</p>

    <div class="input-div">
        <div class="text_field_container" id="email_container">
            <script>
                textField({
                    id: 'email',
                    title: 'Email Address',
                    type: 'email'
                });
            </script>
        </div>
    </div>

    <div class="login-btn">
        <button type="button" onclick="_nextLoginPage({page: 'verifyOtp'});">
            proceed <i class="bi bi-arrow-right"></i>
        </button>
    </div>

    <span>Already have an account? <a href="login">login in</a></span>

<?php } ?>


<?php if ($page == 'verifyOtp') { ?>

    <h1>Reset Password <span>OTP!</span></h1>

    <div class="otp-message">
        <i class="bi bi-info-circle"></i>
        Kindly check your email address for the OTP sent to you.
        Check your inbox or spam folder if you cannot find the email.
    </div>

    <div class="otp-input-div">
        <input type="text" maxlength="1" inputmode="numeric" autocomplete="one-time-code" autofocus>
        <input type="text" maxlength="1" inputmode="numeric">
        <input type="text" maxlength="1" inputmode="numeric">
        <input type="text" maxlength="1" inputmode="numeric">
        <input type="text" maxlength="1" inputmode="numeric">
        <input type="text" maxlength="1" inputmode="numeric">
    </div>

    <div class="otp-resend">
        Didn't get the OTP? <a href="">Resend in <span>2:55</span> min</a>
    </div>

    <div class="login-btn">
        <button type="button" onclick="_nextLoginPage({page: 'restpassword'});">
            Proceed <i class="bi bi-arrow-right"></i>
        </button>
    </div>

    <span>Already have an account? <a href="login">login in</a></span>

<?php } ?>

<?php if ($page =='restpassword') { ?>

    <h1>Reset Password <span>Form!</span></h1>

    <p>Kindly, provide your new password to reset your password.</p>

    <div class="input-div">
        <div class="text_field_container" id="new_password_container">
            <script>
                textField({
                    id: 'new_password',
                    title: 'New Password',
                    type: 'password'
                });
            </script>
        </div>
    </div>

    <div class="input-div">
        <div class="text_field_container" id="confirm_password_container">
            <script>
                textField({
                    id: 'confirm_password',
                    title: 'Confirm Password',
                    type: 'password'
                });
            </script>
        </div>
    </div>

    <div class="login-btn">
        <button type="button" onclick="_completePasswordReset();">
            Reset Password <i class="bi bi-arrow-right"></i>
        </button>
    </div>

    <span>Already have an account? <a href="login">login in</a></span>
<?php } ?>


