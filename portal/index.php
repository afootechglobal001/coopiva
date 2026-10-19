<?php include 'config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
         <?php include 'meta.php' ?>
        <title><?php echo $appName ?> | Cooperative Management System in Nigeria</title>
        <meta name="description"
            content="Copiva is a cooperative management platform in Nigeria that helps cooperative societies manage members and organize their operations online. Serving Ogun State, Lagos, and Ibadan, Oyo State." />
        <meta name="keywords"
            content="Copiva Cooperative, Copiva Cooperative Management System, cooperative management system in Nigeria, cooperative society management software, cooperative management platform Nigeria, online cooperative management system, digital cooperative management, cooperative society website, cooperative member management, cooperative admin dashboard, cooperative member portal, cooperative registration management, cooperative records management, cooperative financial management, cooperative societies in Nigeria, cooperative software Nigeria, cooperative management system in Ogun State, cooperative societies in Ogun State, cooperative management in Ode Remo, cooperative societies in Ode Remo, cooperative management in Sapade, cooperative societies in Iperu, cooperative societies in Shagamu, cooperative societies in Ipara, cooperative societies in Ishara, cooperative management in Lagos, cooperative societies in Lagos State, cooperative management in Ibadan, cooperative societies in Ibadan, Oyo State cooperative societies, cooperative management software for Nigerian cooperatives, digital cooperative society platform" />
        <meta name="robots" content="index, follow" />
        <meta name="author" content="Copiva Cooperative" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Copiva Cooperative" />
        <meta property="og:title"
            content="<?php echo $appName ?> | Cooperative Management System in Nigeria" />
        <meta property="og:description"
            content="Manage your cooperative society with ease using Copiva. A digital platform designed to help cooperative societies organize member management and their operations across Ogun State, Lagos, and Ibadan, Nigeria." />

        <meta property="og:url" content="<?php echo $websiteUrl ?>" />

        <meta property="og:image"
            content="<?php echo $websiteUrl ?>/all-images/plugin-pix/copiva.jpg" />

        <meta name="twitter:card" content="summary_large_image" />

        <meta name="twitter:title"
            content="<?php echo $appName ?> | Cooperative Management System in Nigeria" />

        <meta name="twitter:description"
            content="Simplify cooperative society management with Copiva, a digital cooperative management platform serving Ogun State, Lagos, and Ibadan, Nigeria." />

        <meta name="twitter:image"
            content="<?php echo $websiteUrl ?>/all-images/plugin-pix/copiva.jpg" />
</head>

<body>
    <div class="portal-registration-div">
        <div class="portal-registration-image-div"></div>

        <div class="portal-registration-form-div">
            <header>
                <div class="header-inner">
                    <div class="logo-div">
                        <a href="<?php echo $websiteUrl?>">
                            <img src="<?php echo $websiteUrl?>/all-images/images/logo.png" alt="copiva Logo">
                        </a>
                    </div>

                   
                <div class="info-div">
                    <a href="<?php echo $websiteUrl?>/" class="login-btn">
                        <i class="bi bi-arrow-left"></i> Back to Website
                    </a>
                </div>
  

                </div>

            </header>


            <!-- REGISTRATION SECTION -->
            <div class="registration-section">
                <div class="registration-div">
                    <div class="registration-welcome">

                        <h4>👋 Welcome to <span>Copiva!</span></h4>

                        <h1>How would you like to get started?</h1>

                        <p>Choose your account type to get started with your cooperative journey.</p>

                    </div>

                    <div class="registration-type-div">
                        <div class="registration-type-card">

                            <div class="registration-type-icon">
                                <i class="bi bi-person"></i>
                            </div>

                            <h3>Admin</h3>

                            <p>
                              Register your cooperative society, manage members, and oversee your cooperative's activities from one place.
                            </p>

                            <a href="<?php echo $websiteUrl?>/admin/login">
                                Continue <i class="bi bi-arrow-right-circle"></i>
                            </a>

                        </div>

                        <div class="registration-type-card">

                            <div class="registration-type-icon">
                                <i class="bi bi-building"></i>
                            </div>

                            <h3>Member</h3>

                            <p>
                                Join your cooperative society, stay connected with your group, and keep track of your cooperative activities. </p>
                            </p>

                            <a href="<?php echo $websiteUrl?>/member/login">
                                Continue <i class="bi bi-arrow-right-circle"></i>
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'bottom-scripts.php';?>

</body>

</html>
