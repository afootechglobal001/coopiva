<?php include '../config/constants.php'; ?>
<?php include '../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../meta.php' ?>
    <title><?php echo $appName ?> | About Us - Trusted Construction & Infrastructure Experts in the USA</title>
    <meta name="keywords"
        content="<?php echo $appName ?>, about urban and rural construction, construction company USA, construction experts, building contractors USA, residential construction specialists, commercial construction company, infrastructure development experts, renovation contractors, remodeling services USA, construction management company, urban development projects, rural development solutions, quality construction services, experienced builders USA" />
    <meta name="description"
        content="Learn about Urban and Rural Construction, a trusted construction company delivering residential, commercial, renovation, remodeling, and infrastructure development projects across the USA with quality, integrity, and excellence." />
    <meta property="og:title"
        content="<?php echo $appName ?> | About Us - Trusted Construction & Infrastructure Experts in the USA" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta property="og:description"
        content="Discover the story, mission, and expertise behind Urban and Rural Construction. We provide reliable construction, renovation, and infrastructure solutions throughout the USA." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | About Us - Trusted Construction & Infrastructure Experts in the USA" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta name="twitter:description"
        content="Meet the team behind Urban and Rural Construction  and learn how we deliver exceptional construction, renovation, remodeling, and infrastructure projects across the USA." />
</head>

<body>
    <?php include '../header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <ul>
                    <a href="<?php echo $websiteUrl ?>">
                        <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>/services">
                        <li title="Services">Our Services</li>
                    </a>
                </ul>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Our Services</span></h1>
                <p>
                    At Urban and Rural Construction , we transform ideas into quality structures through
                    expert construction, renovation, and remodeling services. We focus on safety, efficiency,
                    and excellence to ensure every project exceeds client expectations.
                </p>

                <?php $callclass->_otherPagesBtn($websiteUrl); ?>
            </div>
        </div>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">WHAT WE DO</span>
                            <h2>Multi-Disciplined Engineering <span>Services</span></h2>
                        </div>
                        <div class="btn-div">
                            <a href="#">
                                <button class="btn" title="Get In Touch">Get In Touch <i
                                        class="bi bi-arrow-right-short"></i></button></a>
                        </div>
                    </div>

                    <div class="service-back-div">
                        <div class="service-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-1.jpeg"
                                    alt="Commercial Construction" />
                            </div>
                            <div class="icon-div">
                                <i class="bi bi-buildings-fill"></i>
                            </div>
                            <div class="text-div">
                                <h3>Commercial Construction</h3>
                                <p>Delivering innovative and efficient commercial building solutions for businesses of
                                    all sizes.</p>
                                <button class="btn">Read More <i class="bi bi-arrow-right-short"></i></button>
                            </div>
                        </div>

                        <div class="service-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-2.jpeg"
                                    alt="Residential Construction" />
                            </div>
                            <div class="icon-div">
                                <i class="bi bi-house-door-fill"></i>
                            </div>
                            <div class="text-div">
                                <h3>Residential Construction</h3>
                                <p>Building modern, durable and beautiful homes tailored to your lifestyle and needs.
                                </p>
                                <button class="btn">Read More <i class="bi bi-arrow-right-short"></i></button>
                            </div>
                        </div>

                        <div class="service-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-3.jpeg"
                                    alt="Road Construction" />
                            </div>
                            <div class="icon-div">
                                <i class="bi bi-signpost-split-fill"></i>
                            </div>
                            <div class="text-div">
                                <h3>Road & Infrastructure</h3>
                                <p>Construction of durable roads, bridges, and essential infrastructure for urban and
                                    rural development.</p>
                                <button class="btn">Read More <i class="bi bi-arrow-right-short"></i></button>
                            </div>
                        </div>

                        <div class="service-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-4.jpeg"
                                    alt="Renovation Services" />
                            </div>
                            <div class="icon-div">
                                <i class="bi bi-tools"></i>
                            </div>
                            <div class="text-div">
                                <h3>Renovation & Remodeling</h3>
                                <p>Transforming old structures into modern, functional and visually appealing spaces.
                                </p>
                                <button class="btn">Read More <i class="bi bi-arrow-right-short"></i></button>
                            </div>
                        </div>

                        <div class="service-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-5.jpeg"
                                    alt="Material Engineering" />
                            </div>
                            <div class="icon-div">
                                <i class="bi bi-bricks"></i>
                            </div>
                            <div class="text-div">
                                <h3>Material Engineering</h3>
                                <p>Providing advanced construction materials for stronger, safer and longer-lasting
                                    structures.</p>
                                <button class="btn">Read More <i class="bi bi-arrow-right-short"></i></button>
                            </div>
                        </div>

                        <div class="service-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-6.jpeg"
                                    alt="Project Management" />
                            </div>
                            <div class="icon-div">
                                <i class="bi bi-diagram-3-fill"></i>
                            </div>
                            <div class="text-div">
                                <h3>Project Management</h3>
                                <p>End-to-end planning, coordination and execution of construction projects with
                                    precision.</p>
                                <button class="btn">Read More <i class="bi bi-arrow-right-short"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <?php $callclass->_constructionProcessSection($websiteUrl, 'net-bg-bl'); ?>

        <?php $callclass->_statisticsSection($websiteUrl); ?>

        <?php include '../footer.php' ?>
    </section>
</body>

</html>