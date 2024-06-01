<!-- Wrapper Start -->
<div class="wrapper">

    <div class="iq-sidebar  sidebar-default ">
        <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
            <a href="#" class="header-logo">
                <img src="./assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                <img src="./assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo" alt="logo">
            </a>
            <div class="iq-menu-bt-sidebar">
                <i class="las la-bars wrapper-menu"></i>
            </div>
        </div>
        <div class="data-scrollbar" data-scroll="1">
            <div class="new-create select-dropdown input-prepend input-append">
                <div class="btn-group">
                    <div data-toggle="dropdown">
                        <div class="search-query selet-caption"><i class="las la-plus pr-2"></i>Create New</div><span class="search-replace"></span>
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
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="active">
                        <a href="dashboard.php" class="">
                            <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                        </a>
                        <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#upload" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="las la-hdd"></i><span>Upload</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="upload" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class=" ">
                                <a href="folder.php">
                                    <i class="lab la-blogger-b"></i><span>Add Folder</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="upload.php">
                                    <i class="las la-share-alt"></i><span>Upload</span>
                                </a>

                        </ul>
                    </li>

                    <li class=" ">
                        <a href="#mydrive" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="las la-hdd"></i><span>My Drive</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="mydrive" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class=" ">
                                <a href="#">
                                    <i class="lab la-blogger-b"></i><span>Alexa Workshop</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="#">
                                    <i class="las la-share-alt"></i><span>Android</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="#">
                                    <i class="las la-icons"></i><span>Brightspot</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="#">
                                    <i class="las la-icons"></i><span>Ionic Chat App</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=" ">
                        <a href="files.php" class="">
                            <i class="lar la-file-alt iq-arrow-left"></i><span>Files</span>
                        </a>
                        <ul id="page-files" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#" class="">
                            <i class="las la-stopwatch iq-arrow-left"></i><span>Recent</span>
                        </a>
                        <ul id="page-folders" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#" class="">
                            <i class="lar la-star"></i><span>Favourite</span>
                        </a>
                        <ul id="page-fevourite" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#" class="">
                            <i class="las la-trash-alt iq-arrow-left"></i><span>Trash</span>
                        </a>
                        <ul id="page-delete" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="lab la-wpforms iq-arrow-left"></i><span>other page</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class=" ">
                                <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <i class="las la-user-cog"></i><span>User Details</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-id-card"></i><span>User Profile</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-user-plus"></i><span>User Add</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-list-alt"></i><span>User List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <i class="lab la-uikit iq-arrow-left"></i><span>UI Elements</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-user-tie"></i><span>Avatars</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-exclamation-triangle"></i><span>Alerts</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-id-badge"></i><span>Badges</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-ellipsis-h"></i><span>Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-ticket-alt"></i><span>Buttons</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-object-group"></i><span>Buttons Group</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-boxes"></i><span>Box Shadow</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-brush"></i><span>Colors</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-credit-card"></i><span>Cards</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-sliders-h"></i><span>Carousel</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-th-large"></i><span>Grid</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-hands-helping"></i><span>Helper classes</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-image"></i><span>Images</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-list-alt"></i><span>list Group</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-photo-video"></i><span>Media</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-columns"></i><span>Modal</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-bell"></i><span>Notifications</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-ellipsis-h"></i><span>Pagination</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-spinner"></i><span>Popovers</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-heading"></i><span>Progressbars</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-tablet"></i><span>Typography</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-tablet"></i><span>Tabs</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-magnet"></i><span>Tooltips</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-play-circle"></i><span>Video</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <i class="las la-torah iq-arrow-left"></i><span>Authentication</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-sign-in-alt"></i><span>Login</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-registered"></i><span>Register</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-unlock-alt"></i><span>Recover Password</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-envelope-square"></i><span>Confirm Mail</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-lock"></i><span>Lock Screen</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <i class="las la-coins"></i><span>Pricing</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-weight"></i><span>Pricing 1</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-dna"></i><span>Pricing 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <i class="las la-exclamation-triangle"></i><span>Error</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-bomb"></i><span>Error 404</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <i class="las la-exclamation-circle"></i><span>Error 500</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="#">
                                    <i class="las la-pager"></i><span>Blank Page</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="#">
                                    <i class="las la-cubes"></i><span>Maintenance</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="sidebar-bottom">
                <h4 class="mb-3"><i class="las la-cloud mr-2"></i>Storage</h4>
                <p>17.1 / 20 GB Used</p>
                <div class="iq-progress-bar mb-3">
                    <span class="bg-primary iq-progress progress-1" data-percent="67">
                    </span>
                </div>
                <p>75% Full - 3.9 GB Free</p>
                <a href="#" class="btn btn-outline-primary view-more mt-4">Buy Storage</a>
            </div>
            <div class="p-3"></div>
        </div>
    </div>
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                    <i class="ri-menu-line wrapper-menu"></i>
                    <a href="#" class="header-logo">
                        <img src="./assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                        <img src="./assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo" alt="logo">
                    </a>
                </div>
                <div class="iq-search-bar device-search">

                    <form>
                        <div class="input-prepend input-append">
                            <div class="btn-group">
                                <label class="dropdown-toggle searchbox" data-toggle="dropdown">
                                    <input class="dropdown-toggle search-query text search-input" type="text" placeholder="Type here to search.."><span class="search-replace"></span>
                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                    <span class="caret"><!--icon--></span>
                                </label>
                                <ul class="dropdown-menu">
                                    <li><a href="#">
                                            <div class="item"><i class="far fa-file-pdf bg-info"></i>PDFs</div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="item"><i class="far fa-file-alt bg-primary"></i>Documents</div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="item"><i class="far fa-file-excel bg-success"></i>Spreadsheet</div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="item"><i class="far fa-file-powerpoint bg-danger"></i>Presentation</div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="item"><i class="far fa-file-image bg-warning"></i>Photos & Images</div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="item"><i class="far fa-file-video bg-info"></i>Videos</div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="d-flex align-items-center">
                    <div class="change-mode">
                        <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                            <div class="custom-switch-inner">
                                <p class="mb-0"> </p>
                                <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                    <span class="switch-icon-left"><i class="a-left"></i></span>
                                    <span class="switch-icon-right"><i class="a-right"></i></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list align-items-center">
                            <li class="nav-item nav-icon search-content">
                                <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-search-line"></i>
                                </a>
                                <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                    <form action="#" class="searchbox p-2">
                                        <div class="form-group mb-0 position-relative">
                                            <input type="text" class="text search-input font-size-12" placeholder="type here to search..">
                                            <a href="#" class="search-link"><i class="las la-search"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-question-line"></i>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton01">
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0 ">
                                            <div class="p-3">
                                                <a href="#" class="iq-sub-card pt-0"><i class="ri-questionnaire-line"></i>Help</a>
                                                <a href="#" class="iq-sub-card"><i class="ri-recycle-line"></i>Training</a>
                                                <a href="#" class="iq-sub-card"><i class="ri-refresh-line"></i>Updates</a>
                                                <a href="#" class="iq-sub-card"><i class="ri-service-line"></i>Terms and Policy</a>
                                                <a href="#" class="iq-sub-card"><i class="ri-feedback-line"></i>Send Feedback</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-settings-3-line"></i>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton02">
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0 ">
                                            <div class="p-3">
                                                <a href="#" class="iq-sub-card pt-0"><i class="ri-settings-3-line"></i> Settings</a>
                                                <a href="#" class="iq-sub-card"><i class="ri-hard-drive-line"></i> Get Drive for desktop</a>
                                                <a href="#" class="iq-sub-card"><i class="ri-keyboard-line"></i> Keyboard Shortcuts</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown caption-content">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="caption bg-primary line-height">P</div>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton03">
                                    <div class="card mb-0">
                                        <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                            <div class="header-title">
                                                <h4 class="card-title mb-0">Profile</h4>
                                            </div>
                                            <div class="close-data text-right badge badge-primary cursor-pointer "><i class="ri-close-fill"></i></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="profile-header">
                                                <div class="cover-container text-center">
                                                    <div class="rounded-circle profile-icon bg-primary mx-auto d-block">
                                                        P
                                                        <a href="">

                                                        </a>
                                                    </div>
                                                    <div class="profile-detail mt-3">
                                                        <h5><a href="./app/user-"><?php echo "$current_fname "   . $current_lname; ?></a></h5>
                                                        <p> <?php echo $current_email;   ?></p>
                                                    </div>
                                                    <a href="logout.php" class="btn btn-primary">Sign Out</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</div>
<!-- Wrapper End-->

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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Title</h4>
                <div>
                    <a class="btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
            </div>
            <div class="modal-body">
                <div id="resolte-contaniner" style="height: 500px;" class="overflow-auto">
                    File not found
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>