<?php include '../../config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Admin Portal</title>
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

                <div id="page-content"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            _nextLoginPage({ page: 'forgotPassword' });
        });
    </script>


    <?php include 'bottom-scripts.php';?>
</body>

</html>