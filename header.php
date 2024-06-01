<?php session_start();
include "db/connect.php";

if (isset($_SESSION['current_user']) || !empty($_SESSION['current_user'])) {
    $current_user = $_SESSION['current_user'];
    $current_email = $_SESSION['current_email'];
    $current_id = $_SESSION['current_id'];
    $current_fname = $_SESSION['first_name'];
    $current_lname = $_SESSION['last_name'];
    $username = $_SESSION['username'];
} else {
    header('location:index.php');
}
?>



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