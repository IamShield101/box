<?php include "header.php";
include "sidebar.php";
?>

<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">

                <?php

                if (isset($_POST['upload'])) {
                    if ($_POST["filetype"] == "document") {
                        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
                            $foldertype = $_POST['foldertype'];
                            $target_dir = $username . DIRECTORY_SEPARATOR . $foldertype . DIRECTORY_SEPARATOR;
                            $target_file = $target_dir . basename($_FILES["file"]["name"]);
                            $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                            $allowed_types = array("docx", "doc", "pdf", "xlsx", "txt");
                            var_dump($file_type);

                            if (!in_array($file_type, $allowed_types)) {
                                $message = "Error!!! Only Document types Docx , Doc , Pdf , Xls , Txt are allowed";
                            } else {
                                if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {


                                    $uploadname = $_FILES['file']['name'];
                                    $filename = $_POST['filename'];
                                    $filedesc = $_POST['description'];
                                    $foldertype = $_POST['foldertype'];
                                    $filetype = $_POST['filetype'];
                                    $filesize = $_FILES['file']['size'];


                                    $message = "File Uploaded Successfully";
                                }
                                $sql = "insert into file values (null,'$username','$uploadname','$filename','$filedesc','$foldertype','$filetype','$file_type','$filesize',now())";
                                $insert = mysqli_query($conn, $sql);




                                if (!$insert) {

                                    $message = "could not insert, Please check and try again";
                                } else {
                                    $message = "upload success";
                                }
                            }
                        } else {
                            echo "File get error sir";
                        }
                    } elseif ($_POST["filetype"] == "media") {
                        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
                            $foldertype = $_POST['foldertype'];
                            $target_dir = $username . DIRECTORY_SEPARATOR . $foldertype . DIRECTORY_SEPARATOR;
                            $target_file = $target_dir . basename($_FILES["file"]["name"]);
                            $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                            $allowed_types = array('jpeg', 'jpg', 'png', 'gif', 'mp3', 'mp4', 'avi', 'mkv', '3gp', 'mov', 'wmv');
                            if (!in_array($file_type, $allowed_types)) {
                                $message = "Error!!! Only media types Jpeg,jpg,png,gif,mp3,mp4,avi,mkv,3gp,mov,mwv are supported";
                            } else {
                                if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                                    $uploadname = $_FILES['file']['name'];
                                    $filename = $_POST['filename'];
                                    $filedesc = $_POST['description'];
                                    $foldertype = $_POST['foldertype'];
                                    $filetype = $_POST['filetype'];
                                    $filesize = $_FILES['file']['size'];

                                    $message = "File Uploaded Successfully";
                                }
                                $sql = "insert into file values (null,'$username','$uploadname','$filename','$filedesc','$foldertype','$filetype','$filesize',now())";
                                $insert = mysqli_query($conn, $sql);

                                if (!$insert) {
                                    $message = "Could not insert, please try again";
                                } else {
                                    $message = "upload success";
                                }
                            }
                        }
                    }
                }



                ?>




                <div class="wrapper">
                    <section class="login-content">
                        <div class="container h-100">
                            <div class="rrow justify-content-center">
                                <div class="col-md-12 col-sm-12 col-12 align-self-center">
                                    <div class="sign-user_card">
                                        <h3 class="mb-3">File Upload</h3>
                                        <p>Upload your file below...</p>
                                        <?php if (!empty($message)) { ?>
                                            <div>
                                                <p style="color: red;"><?= htmlspecialchars($message) ?> </p>
                                            </div>
                                        <?php } ?>
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h6 style="text-align: left;">File Name <span class="text-danger">*</span></h5>
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" name="filename" type="text" placeholder=" ">
                                                            <label>File Name</label>
                                                        </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <h6 style="text-align: left;">File Description <span class="text-danger">*</span></h5>
                                                        <div class="floating-label form-group">
                                                            <textarea name="description" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                                                        </div>
                                                </div>



                                                <div class="col-lg-12">
                                                    <h6 style="text-align: left;"> Select Folder <span class="text-danger">*</span></h5>
                                                        <div class="floating-label form-group">
                                                            <select name="foldertype" id="select" required class="form-control">
                                                                <option value=""> Select your folder </option>
                                                                <?php if (isset($_SESSION['current_user']) || !empty($_SESSION['current_user'])) {
                                                                    $directory = $_SESSION['username'];

                                                                    if (is_dir($directory)) {
                                                                        $content = scandir($directory);
                                                                        foreach ($content as $item) {
                                                                            $itempath = $directory . DIRECTORY_SEPARATOR . $item;
                                                                            if (is_dir($itempath) && $item != '.' && $item != '..') {
                                                                                echo '<option value ="' . $item . '">' . $item . '</option>';
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <h6 style="text-align: left;"> Select File Type <span class="text-danger">*</span></h5>
                                                        <div class="floating-label form-group">
                                                            <select name="filetype" id="select" required class="form-control">
                                                                <option value=""> Select File type...</option>
                                                                <option value="document"> Document </option>
                                                                <option value="media"> Media </option>
                                                            </select>
                                                        </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <h6 style="text-align: left;">Upload File <span class="text-danger">*</span></h5>
                                                        <div class="floating-label form-group">
                                                            <input type="file" name="file" class="form-control" required>
                                                        </div>
                                                </div>

                                            </div>
                                            <button type="submit" name="upload" class="btn btn-primary">Submit</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Wrapper End-->
                <?php include "footer.php";  ?>
                </body>

                </html>