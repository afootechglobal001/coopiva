<?php include 'alert.php' ?>
<!-- <header data-aos="fade-down" data-aos-duration="900"> -->
<header>
    <div class="header-top">
        <div class="header-top-div-in">
            <div class="logo-div">
                <img src="<?php echo $websiteUrl; ?>/all-images/images/logo.png" alt="logo" />
            </div>
            
            <div class="header-contact">          
                <div class="contact-div">
                    <span class="contact-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </span>
                    
                    <div class="contact-info">
                        <span>CALL US</span>
                        <p>+234 800 000 0000</p>
                    </div>
                </div>
                <div class="contact-div">
                    <span class="contact-icon">
                        <i class="bi bi-envelope"></i>
                    </span>
                    
                    <div class="contact-info" >
                        <span>EMAIL</span>
                        <p>coopiva@gmail.com</p>
                    </div>
                </div>
                <div class="last-wrapper">
                    <button class=" menu" onclick="_openMenu()">
                        <i class="bi bi-list"></i>
                    </button> 
                </div>
            </div>
            
        </div>
    </div>
    <div class="header-bottom">
        <div class="header-bottom-div-in">
            <div class="nav-wrapper">
                <nav>
                    <ul>
                        <a href="<?php echo $websiteUrl ?>" title="Home Page">
                            <li <?php if (($websiteAutoUrl=="$websiteUrl/index")||($websiteAutoUrl=="$websiteUrl/")||($websiteAutoUrl=="$websiteUrl")) {?>
                                class="active" <?php }?>> 
                                Home
                            </li>
                        </a>

                        <a href="<?php echo $websiteUrl ?>/module" title="Module">
                            <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/module")) { ?> active <?php } ?>">
                                Module
                            </li>
                        </a>

                        <a href="<?php echo $websiteUrl ?>/how-it-works" title="How It Works">
                            <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/how-it-works")) { ?> active <?php } ?>">
                                How It Works
                            </li>
                        </a>

                        <a href="<?php echo $websiteUrl ?>/review" title="Review" class="disp-none">
                            <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/review")) { ?> active <?php } ?>">
                                Review
                            </li>
                        </a>

                        <a href="<?php echo $websiteUrl ?>/blog" title="Blog" class="disp-none">
                            <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/blog")) { ?> active <?php } ?>">
                                Blog
                            </li>
                        </a>

                        <a href="<?php echo $websiteUrl ?>/faq" title="FAQ" class="disp-none">
                            <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/faq")) { ?> active <?php } ?>">
                                FAQ
                            </li>
                        </a>

                        <a href="<?php echo $websiteUrl ?>/contact-us" title="Contact Us" class="disp-none">
                            <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/contact-us")) { ?> active <?php } ?>">
                                Contact Us
                            </li>
                        </a>
                        <li id="readMore" class="read-more-li">
                                <i class="bi bi-plus"></i> More
                                <ul>
                                    <div class="sub-nav-div">

                                        <a href="<?php echo $websiteUrl ?>/review" title="Review">
                                            <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/review")) { ?> active <?php } ?>">
                                                Review
                                            </li>
                                        </a>

                                        <a href="<?php echo $websiteUrl ?>/blog" title="Blog">
                                            <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/blog")) { ?> active <?php } ?>">
                                                Blog
                                            </li>
                                        </a>

                                        <a href="<?php echo $websiteUrl ?>/faq" title="FAQ">
                                            <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/faq")) { ?> active <?php } ?>">
                                                FAQ
                                            </li>
                                        </a>

                                        <a href="<?php echo $websiteUrl ?>/contact-us" title="Contact Us">
                                            <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/contact-us")) { ?> active <?php } ?>">
                                                Contact Us
                                            </li>
                                        </a>

                                    </div>
                                </ul>
                        </li>                        
                    </ul>
                </nav>
            </div>
            
            <div class="social-div">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-youtube"></i>
            </div>
            
        </div>
    </div>
</header>