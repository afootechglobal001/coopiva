<?php include '../../config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | member Portal</title>
</head>

<body>
    <?php include 'alert.php';?>
   <div class="portal-registration-div">
        <div class="portal-registration-image-div"></div>

        <div class="portal-registration-form-div">
            <div class="admin-login-div">
                <div class="login-logo">
                    <a href="<?php echo $websiteUrl?>">
                      <img src="<?php echo $websiteUrl?>/all-images/images/logo.png" alt="copiva Logo">
                    </a>
                </div>

                <h1>Welcome <span>Back!</span></h1>
                <p>Sign in to access your Copiva Member Portal and stay connected with your cooperative society's activities.</p>
                   
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

                    <div class="text_field_container" id="password_container">
                        <script>
                            textField({
                                id: 'password',
                                title: 'Password',
                                type: 'password'
                            });
                        </script>
                    </div>
                </div>

                <div class="remeber-div">
                   <div class="check-box">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                   </div>

                   <a href="forgot-password">Forgot Password?</a>
                </div>

                <div class="login-btn">
                   
                   <a href="<?php echo $websiteUrl?>/member"> <button>Log in <i class="bi bi-arrow-right"></i></button></a>
                </div>

               <span>Don't have an account? <a href="<?php echo $websiteUrl ?>/member/sign-up">Sign up</a></span>
    
            </div>
        </div>
    </div>


    <?php include 'bottom-scripts.php';?>
</body>

</html>