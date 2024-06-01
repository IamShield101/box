<?php include "header.php"; ?>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="container-fluid h-100">
                <div class="row justify-content-center align-items-center height-self-center">
                    <div class="col-md-5 col-sm-12 col-12 align-self-center">
                        <div class="sign-user_card">
                            <img src="./assets/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo">
                            <img src="./assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo logo" alt="logo">
                            <h2 class="mt-3 mb-3">Success !</h2>
                            <p class="cnf-mail m-auto mb-1">An email has been sent to your email @domain.com with a link to confirm your email. Kindly click on the button below to login</p>
                            <div class="d-inline-block w-100">
                                <a href="index.php" type="submit" class="btn btn-primary mt-3">Click to Login</a href="index.php">
                            </div>
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