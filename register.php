<?php include "db/connect.php"   ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CloudBOX | Responsive Bootstrap 4 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" />

    <link rel="stylesheet" href="./assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="./assets/css/backend.css?v=1.0.0">

    <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="./assets/vendor/remixicon/fonts/remixicon.css">

    <!-- Viewer Plugin -->
    <!--PDF-->
    <link rel="stylesheet" href="./assets/vendor/doc-viewer/include/pdf/pdf.viewer.css">
    <!--Docs-->
    <!--PPTX-->
    <link rel="stylesheet" href="./assets/vendor/doc-viewer/include/PPTXjs/css/pptxjs.css">
    <link rel="stylesheet" href="./assets/vendor/doc-viewer/include/PPTXjs/css/nv.d3.min.css">
    <!--All Spreadsheet -->
    <link rel="stylesheet" href="./assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.css">
    <!--Image viewer-->
    <link rel="stylesheet" href="./assets/vendor/doc-viewer/include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css">
    <!--officeToHtml-->
    <link rel="stylesheet" href="./assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.css">
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="container h-100">
                <div class="row justify-content-center align-items-center height-self-center">
                    <div class="col-md-5 col-sm-12 col-12 align-self-center">
                        <div class="sign-user_card">
                            <img src="./assets/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo">
                            <img src="./assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo logo" alt="logo">
                            <h3 class="mb-3">Sign Up</h3>
                            <p>Create your account.</p>
                            <form method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" name="fname" type="text" placeholder=" ">
                                            <label>First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" name="lname" type="text" placeholder=" ">
                                            <label>Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" name="email" type="email" placeholder=" ">
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" name="password" type="password" placeholder=" ">
                                            <label>Password</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" name="cpassword" type="password" placeholder=" ">
                                            <label>Confirm Password</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="custom-control custom-checkbox mb-3 text-left">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I agree with the terms of use</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="register" class="btn btn-primary">Sign Up</button>
                                <p class="mt-3">
                                    Already have an Account <a href="index.php" class="text-primary">Sign In</a>
                                </p>
                            </form>
                            <?php
                            if (isset($_POST['register'])) {
                                $firstname = $_POST['fname'];
                                $lastname = $_POST['lname'];
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                $cpassword = $_POST['cpassword'];

                                if ($password === $cpassword) {
                                    $check_reg = "select * from user where email = '$email'";
                                    $result = mysqli_query($conn, $check_reg);
                                    if ($result && mysqli_num_rows($result) > 0) {
                                        echo '<script type="text/javascript">alert("email does not");</script>';
                                    } else {
                                        $hash_pass = md5($password);
                                        $query = "insert into user values(null,'$firstname','$lastname','$email','$hash_pass',now())";
                                        $insert = mysqli_query($conn, $query);

                                        if (!$insert) {
                                            echo '<script type="text/javascript">alert("registration unsuccessful");</script>';
                                        } else {
                                            header('location:login.php');
                                        }
                                    }
                                } else {
                                    echo '<script type="text/javascript">alert("Passwords do not");</script>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="./assets/js/backend-bundle.min.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="./assets/js/customizer.js" defer></script>

    <!-- Chart Custom JavaScript -->
    <script src="./assets/js/chart-custom.js" defer></script>

    <!--PDF-->
    <script src="./assets/vendor/doc-viewer/include/pdf/pdf.js"></script>
    <!--Docs-->
    <script src="./assets/vendor/doc-viewer/include/docx/jszip-utils.js"></script>
    <script src="./assets/vendor/doc-viewer/include/docx/mammoth.browser.min.js"></script>
    <!--PPTX-->
    <script src="./assets/vendor/doc-viewer/include/PPTXjs/js/filereader.js"></script>
    <script src="./assets/vendor/doc-viewer/include/PPTXjs/js/d3.min.js"></script>
    <script src="./assets/vendor/doc-viewer/include/PPTXjs/js/nv.d3.min.js"></script>
    <script src="./assets/vendor/doc-viewer/include/PPTXjs/js/pptxjs.js"></script>
    <script src="./assets/vendor/doc-viewer/include/PPTXjs/js/divs2slides.js"></script>
    <!--All Spreadsheet -->
    <script src="./assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.js"></script>
    <script src="./assets/vendor/doc-viewer/include/SheetJS/xlsx.full.min.js"></script>
    <!--Image viewer-->
    <script src="./assets/vendor/doc-viewer/include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js"></script>
    <!--officeToHtml-->
    <script src="./assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.js"></script>
    <!-- app JavaScript -->
    <script src="./assets/js/app.js" defer></script>
    <script src="./assets/js/doc-viewer.js" defer></script>
</body>

</html>