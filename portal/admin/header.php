
<?php include 'alert.php'; ?>

<header>
    <div class="header-div-in">

        <div class="logo-div">
            <img src="<?php echo $websiteUrl ?>/all-images/images/logo.png"
                 alt="<?php echo $appName ?> logo" />
        </div>

        <div class="nav-div">

            <div class="left-nav">
                <ul>
                    <li>
                        <i class="bi-speedometer2"></i>
                        Dashboard
                    </li>
                </ul>

                <ul>
                    <li>
                        <i class="bi-hourglass-split"></i>
                        Pending Loan 
                        <span class="pending-count">20</span>
                    </li>
                </ul>
            </div>

            <div class="right-nav">

                <div class="right-icon-div">

                    <div class="icon-div moon" title="mode">
                        <i class="bi bi-moon-fill"></i>
                    </div>

                    <div class="icon-div" title="Settings">
                        <i class="bi-gear"></i>
                    </div>

                    <div class="bell_notification" title="Notifications">
                        <i class="bi-bell"></i>
                        <div class="count">20</div>
                    </div>

                </div>

                <div class="profile-div">

                    <div class="info-div">

                        <div class="name">
                            <span id="headerFullname">
                                Victor Ayomide
                            </span>
                        </div>

                        <div class="role">
                            <span id="roleName">
                                SUPER ADMIN
                            </span>
                        </div>

                    </div>

                    <div class="img-div" id="profilePix">
                        <img src="<?php echo $websiteUrl ?>/all-images/images/avatar.jpg"
                             alt="Admin Profile Image" />
                    </div>

                </div>

            </div>

        </div>

    </div>
</header>
