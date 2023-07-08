<?php
require_once '../../controller/customer_control.php';
$status = new customer_controller;
$statuses = $status->get_solution($_SESSION["user_id"]);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Solution history</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.9.14, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-home-page="https://view.nicepage.io/Home.html?version=26482869-cdc5-4400-8cf1-f1ad50469642"
    data-home-page-title="Home" class="u-body u-gradient u-xl-mode" data-lang="en"
    style="background-image: linear-gradient(#f5f7fa, #e0e5eb);">
    <section class="u-align-center u-clearfix u-section-1" id="carousel_cbc7">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
            <table class="u-table-entity u-table-entity-1">
                <colgroup>
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="19.8%">
                    <col width="20.2%">
                </colgroup>
                <thead class="u-custom-font u-font-courier-new u-palette-4-base u-table-header u-table-header-1">
                    <tr style="height: 80px;">
                        <th class="u-table-cell">bug id</th>
                        <th class="u-table-cell"> Description</th>
                        <th class="u-table-cell">bug type</th>
                        <th class="u-table-cell">solution</th>

                    </tr>
                </thead>


                <?php
                if ($_SESSION["error_view"] == "") {
                    foreach ($statuses as $stat) {

                        ?>
                        <tbody>
                        <tbody class="u-table-body">
                            <tr style="height: 59px;">
                                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
                                    <?php echo $stat["ID"] ?>
                                </td>
                                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
                                    <?php echo $stat["Description"] ?>
                                </td>
                                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
                                    <?php echo $stat["type"] ?>
                                </td>
                                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
                                    <?php
                                    echo $stat["Solution"] ?>
                                </td>


                            </tr>
                        <?php }
                } else { ?>
                        <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
                            there is no bugs for you !!!!!
                        </td>
                        <?php
                }
                ?>

                </tbody>
                </tbody>

            </table>
        </div>
        <a href="../customer.php"
            class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1"><span
                class="u-file-icon u-icon u-icon-1"></span>&nbsp;back
    </section>
    <style>
        .u-dialog-section-4 .u-dialog-1 {
            width: 800px;
            min-height: 471px;
            margin: 60px auto;
        }

        .u-dialog-section-4 .u-container-layout-1 {
            padding: 0;
        }

        .u-dialog-section-4 .u-table-1 {
            margin-top: 0;
            margin-bottom: 0;
        }

        .u-dialog-section-4 .u-table-entity-1 {
            min-height: 100px;
        }

        .u-dialog-section-4 .u-table-header-1 {
            background-image: none;
            font-size: 1.5rem;
            font-weight: 400;
        }

        .u-dialog-section-4 .u-table-footer-1 {
            font-weight: 700;
        }

        .u-dialog-section-4 .u-btn-1 {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 30px auto 0;
        }

        .u-dialog-section-4 .u-icon-1 {
            font-size: 1.1429em;
        }

        .u-dialog-section-4 .u-icon-2 {
            width: 20px;
            height: 20px;
        }

        @media (max-width: 1199px) {
            .u-dialog-section-4 .u-table-1 {
                height: 340px;
            }
        }

        @media (max-width: 991px) {
            .u-dialog-section-4 .u-dialog-1 {
                width: 720px;
            }
        }

        @media (max-width: 767px) {
            .u-dialog-section-4 .u-dialog-1 {
                width: 540px;
            }
        }

        @media (max-width: 575px) {
            .u-dialog-section-4 .u-dialog-1 {
                width: 340px;
            }
        }
    </style>
</body>

</html>