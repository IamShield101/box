<?php
include "header.php";
include "sidebar.php";


?>


<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex align-items-center justify-content-between welcome-content mb-3">
                    <h4>All Files</h4>
                    <div class="d-flex align-items-center">
                        <div class="list-grid-toggle mr-4">
                            <span class="icon icon-grid i-grid"><i class="ri-layout-grid-line font-size-20"></i></span>
                            <span class="icon icon-grid i-list"><i class="ri-list-check font-size-20"></i></span>
                            <span class="label label-list">List</span>
                        </div>
                        <div class="dashboard1-dropdown d-flex align-items-center">
                            <div class="dashboard1-info rounded">
                                <a href="page-files.html#calander" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul id="calander" class="iq-dropdown collapse list-inline m-0 p-0 mt-2">
                                    <li class="mb-2">
                                        <a href="page-files.html#" data-toggle="tooltip" data-placement="right" title="Calander"><i class="las la-calendar iq-arrow-left"></i></a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="page-files.html#" data-toggle="tooltip" data-placement="right" title="Keep"><i class="las la-lightbulb iq-arrow-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="page-files.html#" data-toggle="tooltip" data-placement="right" title="Tasks"><i class="las la-tasks iq-arrow-left"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php


        ?>



        <?php

        $sql = "select * from file where username = '$username'";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {






        ?>
            <div class="icon icon-grid i-grid">
                <div class="row">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $filename = $row['filename'];
                        $extension = $row['extension'];
                        switch ($extension) {
                            case 'pdf';
                                $imgSrc = "./assets/images/layouts/page-7/pdf.png";
                                break;
                            case 'doc';
                                $imgSrc = "./assets/images/layouts/page-7/doc.png";
                                break;
                            case 'xlsx';
                                $imgSrc = "./assets/images/layouts/page-7/xlsx.png";
                                break;
                            case 'xlsx';
                                $imgSrc = "./assets/images/layouts/page-7/ppt.png";
                                break;
                            case 'txt';
                                $imgSrc = "./assets/images/layouts/page-7/txt.png";
                                break;
                            case 'mp4';
                                $imgSrc = "./assets/images/layouts/page-7/mp4.png";
                                break;
                            case 'html';
                                $imgSrc = "./assets/images/layouts/page-7/html.png";
                                break;
                            default;
                                $imgSrc = "./assets/images/layouts/page-7/default.png";
                        }








                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body image-thumb">
                                    <div class="mb-4 text-center p-3 rounded iq-thumb">
                                        <div class="iq-image-overlay"></div>
                                        <a href="page-files.html#" data-title=" <?php echo htmlspecialchars($filename . '.' . $extension); ?>" data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal">
                                            <img src="<?php echo htmlspecialchars($imgSrc); ?>" class="img-fluid" alt="image1"></a>
                                    </div>
                                    <h6>
                                        <?php echo htmlspecialchars($filename . '.' . $extension); ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

                </div>
            </div>
            <div class="icon icon-grid i-list">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless tbl-server-info">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Owner</th>
                                                <th scope="col">Last Edit</th>
                                                <th scope="col">File Size</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-small bg-danger rounded mr-3">
                                                            <i class="ri-file-excel-line"></i>
                                                        </div>
                                                        <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal" data-title="alexa5.pdf" style="cursor: pointer;">Weekly Report.pdf</div>
                                                    </div>
                                                </td>
                                                <td>Me</td>
                                                <td>Mar 30, 2020 Gail Forcewind</td>
                                                <td>10 MB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" id="dropdownMenuButton10" data-toggle="dropdown">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton10">
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-small bg-primary rounded mr-3">
                                                            <i class="ri-file-download-line"></i>
                                                        </div>
                                                        <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.docx" data-toggle="modal" data-target="#exampleModal" data-title="alexa6.docx" style="cursor: pointer;">Milestone.docx</div>
                                                    </div>
                                                </td>
                                                <td>Penny</td>
                                                <td>Mar 31, 2020 Penny</td>
                                                <td>65 MB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" id="dropdownMenuButton11" data-toggle="dropdown">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton11">
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-small bg-info rounded mr-3">
                                                            <i class="ri-file-excel-line"></i>
                                                        </div>
                                                        <div data-title="Alexa8.xlsx" data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.xlsx" data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">Training center.xlsx</div>
                                                    </div>
                                                </td>
                                                <td>Banny</td>
                                                <td>Mar 30, 2020 Banny</td>
                                                <td>90 MB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" id="dropdownMenuButton13" data-toggle="dropdown">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton13">
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-small bg-success rounded mr-3">
                                                            <i class="ri-file-excel-line"></i>
                                                        </div>
                                                        <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.docx" data-toggle="modal" data-target="#exampleModal" data-title="alexa7.pptx" style="cursor: pointer;">Flavour.pptx</div>
                                                    </div>
                                                </td>
                                                <td>Me</td>
                                                <td>Apr 04, 2020 me</td>
                                                <td>10 MB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" id="dropdownMenuButton12" data-toggle="dropdown">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton12">
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                            <a class="dropdown-item" href="page-files.html#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>






















<?php include "footer.php";  ?>