<?php
require_once '../../models/bug.php'; //tamam
require_once '../../models/customer.php';
require_once '../../controller/customer_control.php';
$b1 = new bugs();
$c1 = new customer_controller();
$new_cus = new customer();
$check = "not sent";
if (isset($_POST['Desc']) && isset($_POST["img"]) && isset($_POST["bug_type"])) {

    $b1->setDesc($_POST['Desc']);
    $b1->setImg($_POST['img']);
    $b1->setType($_POST["bug_type"]);

    if ($c1->send_bug($b1)) {

        $check = "";
    }
}
//require_once '../../controller/AUTHcontroller.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>submit a bug</title>
</head>

<body>


    <div class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-5 mr-auto">
                    <h3 class="mb-3">submit a bug</h3>
                    <p>We care about your code quality. That’s why we prioritize every bug report and resolve it
                        quickly.</p>
                    <p>Bugs are inevitable, but they don’t have to be frustrating. Let us handle them for you and keep
                        your software running smoothly.</p>
                    <p><img style="width: 520px;height: 320px;" src="images\1.png" alt="pc"></p>
                </div>
                <div class="col-md-6">

                    <div class="box">

                        <h3 class="heading">How Can We Help?</h3>
                        <form class="mb-5" method="post" id="send a bug" name="send a bug">
                            <div class="row">

                                <div class="col-md-6 form-group">
                                    <label for="name" class="col-form-label">company name </label>
                                    <input type="text" class="form-control" name="company name" id="name"
                                        placeholder="company name/optional">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="name" class="col-form-label">bug type</label>
                                    <input type="text" class="form-control" name="bug_type" placeholder="bug type"
                                        required>
                                </div>
                            </div>
                            <div class="row">
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="message" class="col-form-label"> Description *</label>
                                    <textarea class="form-control" name="Desc" id="message" cols="30" rows="7"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="screenshot" class="col-form-label">screenshot *</label>
                                <input type="file" class="form-control" name="img" id="img"
                                    placeholder="send a screenshot">
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Submit" class="btn btn-block btn-primary rounded-0 py-2 px-4"
                                style="background-color: rgb(27, 183, 180);">
                            <span class="submitting"></span>
                            <?php
                            if ($check == "") {
                                ?>
                                <div class="btn btn-block btn-primary rounded-0 py-2 px-4" data-="../customer.php">
                                    Your bug submitted, check solution history for the response!
                                    <?php
                            } ?>


                            </div>
                        </div>

                    </div>
                    </form>

                    <div id="form-message-warning mt-4"></div>
                    <div id="form-message-success">
                        Your bug was submitted, thank you!
                    </div>



                </div>
            </div>
        </div>
    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>