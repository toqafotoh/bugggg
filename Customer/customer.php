<?php
require_once '../models/customer.php';
require_once '../controller/AUTHcontroller.php';
require_once '../models/person.php';
require_once '../controller/AUTHcontroller.php';
//require_once '../models/customer.php';
// $_SESSION["user_name"];
//if ($_SESSION["user_role"] != 'customer') {
//  header("location:../Login/login.php");
//}

$c = new customer();
$c->setCustomer_id($_SESSION["user_id"]);
$c->setCustomer_name($_SESSION["user_name"]);
//echo $c->getCustomer_id() . "<br>" . $c->getCustomer_name();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Lessons &amp;amp; Practice">
    <meta name="description" content="">
    <title>Customer home page</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Customer-home-page.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.8.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": ""
}</script>
    <meta name="theme-color" content="#4551dd">
    <meta property="og:title" content="Customer home page">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="en">
    <section
        class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-clearfix u-section-1"
        id="sec-e5bf">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div alt="" class="u-image u-image-circle u-image-1" data-image-width="2280" data-image-height="998"
                data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"></div>
            <div class="u-container-style u-group u-shape-rectangle u-white u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h1 class="blue color u-align-left u-text u-text-default u-text-palette-1-base u-text-1">
                        <?php
                        echo "hey " . $c->getCustomer_name();
                        ?>

                    </h1>
                </div>
            </div>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-1"
                        data-href="submit/index.php">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2"><span
                                class="u-border-2 u-border-palette-1-base u-file-icon u-icon u-icon-circle u-icon-1"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500"><img src="images/bug_1.png" alt=""></span>
                            <h4 class="u-text u-text-palette-1-base u-text-2">&nbsp; &nbsp; &nbsp;Send bug</h4>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item 
                        u-shape-round u-video-cover u-white u-list-item-2">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3"
                            data-href="view_status/newview.php"><span
                                class="u-border-2 u-border-palette-1-base u-file-icon u-icon u-icon-circle u-icon-2"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500"><img src="images/bug.jpg" alt=""></span>
                            <h4 class="u-text u-text-palette-1-base u-text-3">View bugs status</h4>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-3">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-4"
                            data-href="view_solution/history.php"><span
                                class="u-border-2 u-border-palette-1-base u-file-icon u-icon u-icon-circle u-icon-3"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500"><img src="images/Hiso.png" alt=""></span>
                            <h4 class="u-text u-text-palette-1-base u-text-4">View solutions history</h4>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-4">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-5"
                            data-href="contact/cont.php"><span
                                class="u-border-2 u-border-palette-1-base u-file-icon u-icon u-icon-circle u-icon-4"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500"><img src="images/contact-1.jpg" alt=""></span>
                            <h4 class="u-text u-text-palette-1-base u-text-5">Contact admin</h4>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-5">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-6"
                            data-href="feedback/feedback.php" ;><span
                                class="u-border-2 u-border-palette-1-base u-file-icon u-icon u-icon-circle u-icon-5"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500"><img src="images/feedback.jpg" alt=""></span>
                            <h4 class="u-text u-text-palette-1-base u-text-6">Send feedback</h4>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-6"
                        data-href="../Main/home.php?logout">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-7"><span
                                class="u-border-2 u-border-palette-1-base u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-6"
                                data-animation-name="customAnimationIn" data-animation-duration="1750"
                                data-animation-delay="500"><img src="images/logout-1.jpg" alt=""></span>

                            <h4 class="u-text u-text-palette-1-base u-text-7">Log out</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="https://nicepage.com/templates" target="_blank">
            <span>Template</span>
        </a>
        <p class="u-text">
            <span>created with</span>
        </p>
        <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
            <span>HTML Website Builder</span>
        </a>.
    </section>

</body>

</html>