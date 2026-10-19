<?php include '../../config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Admin Portal</title>
</head>

<body>
   <div class="portal-registration-div">
        <div class="portal-registration-image-div"></div>

        <div class="portal-registration-form-div">
            <div class="admin-login-div">
                <div class="login-logo">
                    <a href="<?php echo $websiteUrl?>">
                      <img src="<?php echo $websiteUrl?>/all-images/images/logo.png" alt="copiva Logo">
                    </a>
                </div>

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
                    <button type="button" onclick="_nextLoginPage({page: 'verifyOtp'});">
                        proceed <i class="bi bi-arrow-right"></i>
                    </button>
                </div>

                <span>Already have an account? <a href="login">login in</a></span>

            </div>
        </div>
    </div>
    <?php include 'bottom-scripts.php';?>
</body>

</html>