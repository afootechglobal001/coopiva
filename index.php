<?php include 'config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Cooperative Innovation, Value & Administration</title>
    <meta name="keywords"
    content="<?php echo $appName ?>, CoopIVA, cooperative management system, cooperative society management, cooperative software, cooperative administration, cooperative financial management, cooperative savings management, cooperative loan management, savings and loans platform, cooperative membership management, cooperative contributions management, cooperative accounting system, cooperative transaction management, cooperative society software, digital cooperative platform, cooperative financial services, cooperative member portal, cooperative management solutions, cooperative records management, cooperative payment management, cooperative investment management, cooperative society in Nigeria, digital cooperative services, cooperative technology solutions, cooperative innovation, cooperative value creation, cooperative administration system" />
    <meta name="description"
        content="CoopIVA provides innovative digital solutions for cooperative societies, helping simplify cooperative administration, membership management, savings, loans, contributions, and financial transactions through an efficient and reliable platform." />
    <meta property="og:title"
        content="<?php echo $appName ?> | Cooperative Management & Financial Solutions" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta property="og:description"
        content="Manage your cooperative society with CoopIVA. Simplify member management, savings, loans, contributions, financial records, and administrative operations with our cooperative management platform." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Cooperative Management & Financial Solutions" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta name="twitter:description"
        content="CoopIVA makes cooperative management easier with digital solutions for membership administration, savings, loans, contributions, financial transactions, and cooperative records." />
    </body>
</head>

<body>

<script>
    $(window).scroll(function () {
    const scrollHeight = $(window).scrollTop();

    if (scrollHeight >= 140) {
        $(".header-bottom").addClass("scrolled");
    } else {
        $(".header-bottom").removeClass("scrolled");
    }
    
    if (scrollHeight >= 140) {
        $(".header-top").addClass("scrolled");
    } else {
        $(".header-top").removeClass("scrolled");
    }
    });
</script>


    <?php include 'header.php' ?>
    <section class="slide-section">
        <div class="slide-overlay"></div>
        <div class="slide-content">
            <span class="slide-title">WELCOME TO CooPIVA</span>
            <h1>GROW YOUR COMMUNITY</h1>
            <p>
                Empowering cooperative societies through innovative solutions
                for membership management, financial administration,
                and sustainable growth.
            </p>

            <div class="slide-button">
                <button>
                    <a href="">
                        REQUEST FOR A DEMO
                    </a>
                </button> 
            </div>
        </div>
    </section>

    <section class="index-section">
        <section class="coopiva-services">
            <div class="services-container">
                <div class="services-intro">
                    <span>WELCOME TO CooPIVA</span>
                    <h2>Our Services</h2>
                    <p>
                        Empowering members through savings, loans,
                        and cooperative opportunities for a better future.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3>Start Your <br>Co-operative Society</h3>
                    <div class="service-btn">
                        <button>
                            <a href="#">JOIN NOW</a>
                        </button>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        
                    </div>
                    <h3>Existing <br>Co-operative Society</h3>
                    <div class="service-btn">
                        <button>
                            <a href="#">MORE INFO</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="about-us-section">

                    <div class="about-us-image">
                        <img src="<?php echo $websiteUrl; ?>/all-images/images/cooperative-meeting.png" alt="coopiva" />
                    </div>

                    <div class="about-us-content">
                        <span class="about-us-label">ABOUT US</span>
                        <h2>Empowering Cooperatives</h2>
                        <p>
                            CooPIVA is dedicated to empowering cooperative societies
                            through innovative solutionhip management,
                            savings, loans, and financial administration.
                        </p>

                        <div class="about-us-signature">
                            <span>CooPIVA</span>
                            <p>Mike Afolabi, Founder</p>
                        </div>
                        <div class="about-us-button">
                            <button>
                                <a href="" >
                                    READ MORE
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </button>
                        </div> 
                        
                    </div>
                </div>
                <div class="about-us-statistics">
                    
                    <div class="about-stat-card">
                        <div class="about-stat-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h3>500+</h3>
                        <p>COOPERATIVE MEMBERS</p>
                    </div>

                    <div class="about-stat-card">
                        <div class="about-stat-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h3>100+</h3>
                        <p>COOPERATIVE SOCIETIES</p>
                    </div>

                    <div class="about-stat-card">
                        <div class="about-stat-icon">
                            <i class="bi bi-piggy-bank"></i>
                        </div>
                        <h3>₦10M+</h3>
                        <p>MEMBERS' FINANCIAL GOALS</p>
                    </div>

                    <div class="about-stat-card">
                        <div class="about-stat-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3>100%</h3>
                        <p>COMMITTED TO GROWTH</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                2
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                3
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                4
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                5
            </div>
        </section>
    </section>
</body>

</html>