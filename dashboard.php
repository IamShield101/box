<?php include "header.php";
include "sidebar.php"; ?>



<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-transparent card-block card-stretch card-height mb-3">
                    <div class="d-flex justify-content-between">
                        <div class="select-dropdown input-prepend input-append">
                            <div class="btn-group">
                                <div data-toggle="dropdown">
                                    <div class="dropdown-toggle search-query" onclick="myFunction()">My Drive<i class="las la-angle-down ml-3"></i></div><span class="search-replace"></span>
                                    <span class="caret"><!--icon--></span>
                                </div>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="item"><i class="ri-folder-add-line pr-3"></i>New Folder</div>
                                    </li>
                                    <li>
                                        <div class="item"><i class="ri-file-upload-line pr-3"></i>Upload Files</div>
                                    </li>
                                    <li>
                                        <div class="item"><i class="ri-folder-upload-line pr-3"></i>Upload Folders</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dashboard1-dropdown d-flex align-items-center">
                            <div class="dashboard1-info">
                                <a href="#calander" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul id="calander" class="iq-dropdown collapse list-inline m-0 p-0 mt-2">
                                    <li class="mb-2">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Calander"><i class="las la-calendar iq-arrow-left"></i></a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Keep"><i class="las la-lightbulb iq-arrow-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Tasks"><i class="las la-tasks iq-arrow-left"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-block card-stretch card-height iq-welcome" style="background: url(./assets/images/layouts/mydrive/background.png) no-repeat scroll right center; background-color: #ffffff; background-size: contain;">
                    <div class="card-body property2-content">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="col-lg-6 col-sm-6 p-0">
                                <h3 class="mb-3">Welcome <?php echo $current_fname . ','; ?></h3>
                                <p class="mb-5">You have 32 new notifications and 23 unread messages to reply</p>
                                <a href="#">Try Now<i class="las la-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Quick Access</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-inline p-0 mb-0 row align-items-center">
                            <li class="col-lg-6 col-sm-6 mb-3 mb-sm-0">
                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal" data-title="Product-planning.pdf" style="cursor: pointer;" class="p-2 text-center border rounded">
                                    <div>
                                        <img src="./assets/images/layouts/mydrive/folder-1.png" class="img-fluid mb-1" alt="image1">
                                    </div>
                                    <p class="mb-0">Planning</p>
                                </div>
                            </li>
                            <li class="col-lg-6 col-sm-6">
                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.docx" data-toggle="modal" data-target="#exampleModal" data-title="Wireframe.docx" style="cursor: pointer;" class="p-2 text-center border rounded">
                                    <div>
                                        <img src="./assets/images/layouts/mydrive/folder-2.png" class="img-fluid mb-1" alt="image2">
                                    </div>
                                    <p class="mb-0">Wireframe</p>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-transparent ">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <div class="header-title">
                            <h4 class="card-title">Documents</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <a href="#" class=" view-more">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="#" data-title="Terms.pdf" data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="./assets/images/layouts/page-1/pdf.png" class="img-fluid" alt="image1">
                            </div>
                            <h6>Terms.pdf</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="#" data-title="New-one.docx" data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.docx" data-toggle="modal" data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="./assets/images/layouts/page-1/doc.png" class="img-fluid" alt="image1">
                            </div>
                            <h6>New-one.docx</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="#" data-title="Woo-box.xlsx" data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.xlsx" data-toggle="modal" data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="./assets/images/layouts/page-1/xlsx.png" class="img-fluid" alt="image1">
                            </div>
                            <h6>Woo-box.xlsx</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb doc-text">
                        <a href="#" data-title="IOS-content.pptx" data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.pptx" data-toggle="modal" data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="./assets/images/layouts/page-1/ppt.png" class="img-fluid" alt="image1">
                            </div>
                            <h6>IOS-content.pptx</h6>
                        </a>
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
            <div class="col-lg-8 col-xl-8">
                <div class="card card-block card-stretch card-height files-table">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Files</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <a href="#" class=" view-more">View All</a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table mb-0 table-borderless tbl-server-info">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Members</th>
                                        <th scope="col">Last Edit</th>
                                        <th scope="col">Size</th>
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
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal" data-title="Weekly-report.pdf" style="cursor: pointer;">Weekly-report.pdf</div>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>jan 21, 2020 me</td>
                                        <td>02 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton6" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-small bg-primary rounded mr-3">
                                                    <i class="ri-file-download-line"></i>
                                                </div>
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal" data-title="VueJs.pdf" style="cursor: pointer;">VueJs.pdf</div>
                                            </div>
                                        </td>
                                        <td>Poul Molive</td>
                                        <td>jan 25, 2020 Poul Molive</td>
                                        <td>64 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton7" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
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
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.docx" data-toggle="modal" data-target="#exampleModal" data-title="Milestone.docx" style="cursor: pointer;">Milestone.docx</div>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>Mar 30, 2020 Gail Forcewind</td>
                                        <td>30 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton8" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton8">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
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
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.xlsx" data-toggle="modal" data-target="#exampleModal" data-title="Training center.xlsx" style="cursor: pointer;">Training center.xlsx</div>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>Mar 30, 2020 Gail Forcewind</td>
                                        <td>10 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton09" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton09">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-small bg-warning rounded mr-3">
                                                    <i class="ri-file-excel-line"></i>
                                                </div>
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="./assets/vendor/doc-viewer/files/demo.pptx" data-toggle="modal" data-target="#exampleModal" data-title="Flavour.pptx" style="cursor: pointer;">Flavour.pptx</div>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>Mar 30, 2020 Gail Forcewind</td>
                                        <td>10 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton9" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton9">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
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
            <div class="col-lg-4">
                <div class="card card-block card-stretch card-height ">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Statistic</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="layout-1-chart" style="min-height: 220px;"></div>
                        <div class="row mt-4">
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="media align-items-center">
                                    <div class="icon iq-icon-box bg-primary rounded icon-statistic">
                                        <i class="las la-long-arrow-alt-down"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <p class="mb-0">Downloads</p>
                                        <h5>12,594</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="media align-items-center">
                                    <div class="icon iq-icon-box bg-light rounded icon-statistic">
                                        <i class="las la-long-arrow-alt-up"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <p class="mb-0">Uploads</p>
                                        <h5>1,458</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-block card-stretch card-height  plan-bg">
                    <div class="card-body">
                        <h4 class="mb-3 text-white">Unlock Your plan</h4>
                        <p>Expanded Storage, Access To<br> More Features On CloudBOX</p>
                        <div class="row align-items-center justify-content-between">
                            <div class="col-6 go-white ">
                                <a href="#" class="btn d-inline-block mt-5">Go Premium</a>
                            </div>
                            <div class="col-6">
                                <img src="./assets/images/layouts/mydrive/lock-bg.png" class="img-fluid" alt="image1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <div class="header-title">
                            <h4 class="card-title">Storage</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle btn  dropdown-bg border border-primary text-primary rounded" id="dropdownMenuButton11" data-toggle="dropdown">
                                    Monthly<i class="ri-arrow-down-s-line ml-1"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton11">
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                    <a class="dropdown-item" href="#">Yearly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div id="layout-1-chart2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <?php include "sidebar.php";  ?>
    <?php include "footer.php"; ?>