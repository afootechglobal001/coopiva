<div class="all-alert-back-div">
    <div class="success-alert-div animated fadeInDown">
        <div class="icon"><i class="bi-check-all"></i></div>
        <div class="text">
            <p>PASSWORD RESET SUCCESSFUL! Check your email to confirm.</p>
        </div>
    </div>
</div>

<div id="get-form-more-div">
    <div class="alert-loading-div">
        <div class="icon"><img src="<?php echo $websiteUrl ?>/all-images/images/loading.gif" width="20px"
                alt="Loading" /></div>
        <div class="text">
            <p>LOADING...</p>
        </div>
    </div>
</div>

<div id="get-more-div-secondary">
    <div class="alert-loading-div">
        <div class="icon"><img src="<?php echo $websiteUrl ?>/all-images/images/loading.gif" width="20px"
                alt="Loading" /></div>
        <div class="text">
            <p>LOADING...</p>
        </div>
    </div>
</div>

<div id="customConfirmModal" class="modal-overlay" style="display:none;"></div>
<div id="globalLoader" class="modal-preloader modal-overlay" style="display:none;">
    <div>
        <div class="spinner"></div>
        <p id="globalLoaderText">Locking result, please wait...</p>
    </div>
</div>

<div class="sidenavdiv">
    <div class="live-chat-back-div">

        <a href="tel:+1 (832) 743-9353" title="Call Customer Care">
            <div class="chat-div">
                <div class="icon-div" style="background:#008040;"><i class="bi-telephone-outbound"></i></div>
                <div class="text">+1 (832) 743-9353</div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://api.whatsapp.com/send?text=Greetings! I'd like to make an enquiry on the services you offer.&phone=+1 (832) 743-9353"
            target="_blank" title="Whatsapp">
            <div class="chat-div">
                <div class="icon-div" style="background:#25D366;"><i class="bi-whatsapp"></i></div>
                <div class="text">+1 (832) 743-9353</div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://www.facebook.com/profile.php?id=61595073264053&mibextid=wwXIfr/" target="_blank"
            title="Facebook">
            <div class="chat-div">
                <div class="icon-div" style="background:#2980b9;"><i class="bi-facebook"></i></div>
                <div class="text">Facebook Page </div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://twitter.com/" target="_blank" title="Twitter">
            <div class="chat-div">
                <div class="icon-div" style="background:#3498db;"><i class="bi-twitter"></i></div>
                <div class="text">Twitter Page</div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://www.instagram.com/bowcares?stkn=MW5rdXUzd29oOG1kcA%3D%3D&utm_source=qr/" target="_blank"
            title="Instagram">
            <div class="chat-div">
                <div class="icon-div" style="background-image: linear-gradient(to right,#03F, #F0F);"><i
                        class="bi-instagram"></i></div>
                <div class="text">Instagram Page</div>
                <br clear="all" />
            </div>
        </a>
    </div>

    <div class="index-menu-back-div">
        <div class="top-div">
            <div class="logo-div">
                <a href="<?php echo $websiteUrl ?>">
                    <img src="<?php echo $websiteUrl ?>/all-images/images/logo.png" alt="<?php echo $appName ?> Logo"
                        class="animated zoomIn" />
                </a>
            </div>
        </div>

        <div class="div-in">
            <div class="div">
                <a href="<?php echo $websiteUrl; ?>" title="Home Page">
                    <li <?php if ($page == 'index.php') { ?> id="active-li" <?php } ?>>
                        <i class="bi-house"></i>
                        Home
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/services" title="Services">
                    <li <?php if ($page == 'services') { ?> id="active-li" <?php } ?>><i class="bi bi-bricks"></i>
                        Services</li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/our-work-model" title="Our Work Model">
                    <li <?php if ($page == 'our-work-model') { ?> id="active-li" <?php } ?>>
                        <i class="bi bi-person-workspace"></i>
                        Our Work Model
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/about" title="About Us">
                    <li <?php if ($page == 'about') { ?> id="active-li" <?php } ?>>
                        <i class="bi-building"></i>
                        About Us
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/blog" title="Blog">
                    <li <?php if ($page == 'blog') { ?> id="active-li" <?php } ?>>
                        <i class="bi-journals"></i>
                        Blog
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/contact-us" title="Contact Us">
                    <li <?php if ($page == 'contact-us') { ?> id="active-li" <?php } ?>>
                        <i class="bi-headset"></i>
                        Contact Us
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/reviews" title="Reviews">
                    <li <?php if ($page == 'reviews') { ?> id="active-li" <?php } ?>>
                        <i class="bi bi-chat-quote"></i>
                        Reviews
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/gallery" title="Gallery">
                    <li <?php if ($page == 'gallery') { ?> id="active-li" <?php } ?>>
                        <i class="bi bi-image"></i>
                        Gallery
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/faq" title="Frequently Asked Questions">
                    <li <?php if ($page == 'faq') { ?> id="active-li" <?php } ?>>
                        <i class="bi-patch-question"></i>
                        Frequently Asked Question
                    </li>
                </a>
            </div>
        </div>

        <div class="mobile-menu-button-wrapper">
            <div class="heading-title">
                <div class="content">
                    <h3>Ready to get started?</h3>
                    <p>Professional maintenance<br>made simple.</p>
                </div>

                <div class="menu-icon">
                    <i class="bi bi-tools"></i>
                </div>
            </div>

            <div class="alert-menu-buttons">
                <a href="<?php echo $websiteUrl; ?>/request-service" class="get-started-btn">
                    <i class="bi bi-arrow-right-circle"></i>
                    <span>Get Started</span>
                </a>

                <a href="<?php echo $websiteUrl; ?>/artisan/sign-up" class="join-team-btn">
                    <i class="bi bi-briefcase"></i>
                    <span>Join Our Team</span>
                </a>
            </div>
        </div>
    </div>

    <div class="sidenavdiv-in" onclick="_closeSideNav()"></div>
</div>