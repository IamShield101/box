<?php include "header.php";
include "sidebar.php"; ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <?php
                if (isset($_SESSION['current_user'])) {
                    $username = $_SESSION['username'];
                    if (!is_dir($username)) {
                        mkdir($username, 0777, true);
                    }
                }


                ?>




                <?php
                if (isset($_POST['submit'])) {
                    $folder = $_POST['folder'];
                    $directory = $username . DIRECTORY_SEPARATOR . $folder;
                    if (!is_dir($directory)) {
                        if (mkdir($directory, 0777, true)) {
                            $message = " folder $folder Created successfully";
                        } else {
                            $message = "Unable to create folder $folder";
                        }
                    } else {
                        $message = "Folder $folder already Exist";
                    }
                }
                ?>



                <div class="wrapper">
                    <section class="login-content">

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="sign-user_card">
                                        <h3 class="mb-3">Add Folder</h3>
                                        <p>Kindly Add Your Folder Below</p>
                                        <?php if (isset($message)) {   ?>
                                            <div>
                                                <p style="color: purple;"><?= htmlspecialchars($message) ?></p>
                                            </div>

                                        <?php } ?>



                                        <form method="POST">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" name="folder" type="text" placeholder=" ">
                                                        <label>Folder Name</label>
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit" class="mt-2 btn btn-primary">Add</button>
                                        </form>
                                    </div>
                                </div>
                            </div>




                            <div class="col-lg-12">
                                <div class="card card-block card-stretch card-transparent">
                                    <div class="card-header d-flex justify-content-between pb-0">
                                        <div class="header-title">
                                            <h4 class="card-title">Folders</h4>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle dropdown-bg btn bg-white" id="dropdownMenuButton1" data-toggle="dropdown">
                                                    Name<i class="ri-arrow-down-s-line ml-1"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton1">
                                                    <a class="dropdown-item" href="#">Last modified</a>
                                                    <a class="dropdown-item" href="#">Last modifiedby me</a>
                                                    <a class="dropdown-item" href="#">Last opened by me</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="folder">
                                                <div class="icon-small bg-danger rounded mb-4">
                                                    <i class="ri-file-copy-line"></i>
                                                </div>
                                            </a>
                                            <div class="card-header-toolbar">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown">
                                                        <i class="ri-more-2-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="folder">
                                            <h5 class="mb-2">Alexa Workshop</h5>
                                            <p class="mb-2"><i class="lar la-clock text-danger mr-2 font-size-20"></i> 10 Dec, 2020</p>
                                            <p class="mb-0"><i class="las la-file-alt text-danger mr-2 font-size-20"></i> 08 Files</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="folder">
                                                <div class="icon-small bg-primary rounded mb-4">
                                                    <i class="ri-file-copy-line"></i>
                                                </div>
                                            </a>
                                            <div class="card-header-toolbar">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton3" data-toggle="dropdown">
                                                        <i class="ri-more-2-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="folder">
                                            <h5 class="mb-2">Android</h5>
                                            <p class="mb-2"><i class="lar la-clock text-primary mr-2 font-size-20"></i> 09 Dec, 2020</p>
                                            <p class="mb-0"><i class="las la-file-alt text-primary mr-2 font-size-20"></i> 08 Files</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="folder">
                                                <div class="icon-small bg-info rounded mb-4">
                                                    <i class="ri-file-copy-line"></i>
                                                </div>
                                            </a>
                                            <div class="card-header-toolbar">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown">
                                                        <i class="ri-more-2-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="folder">
                                            <h5 class="mb-2">Brightspot</h5>
                                            <p class="mb-2"><i class="lar la-clock text-info mr-2 font-size-20"></i> 07 Dec, 2020</p>
                                            <p class="mb-0"><i class="las la-file-alt text-info mr-2 font-size-20"></i> 08 Files</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="folder">
                                                <div class="icon-small bg-success rounded mb-4">
                                                    <i class="ri-file-copy-line"></i>
                                                </div>
                                            </a>
                                            <div class="card-header-toolbar">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton5" data-toggle="dropdown">
                                                        <i class="ri-more-2-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="folder">
                                            <h5 class="mb-2">Ionic Chat App</h5>
                                            <p class="mb-2"><i class="lar la-clock text-success mr-2 font-size-20"></i> 06 Dec, 2020</p>
                                            <p class="mb-0"><i class="las la-file-alt text-success mr-2 font-size-20"></i> 08 Files</p>
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </section>


                </div>












            </div>
        </div>
    </div>
</div>



<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Wrapper End-->
<?php include "footer.php"; ?>


</html>