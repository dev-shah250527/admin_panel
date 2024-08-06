<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<!-- Mirrored from myrathemes.com/dashtrap/forms-validation by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2024 11:31:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>About Us</title>
    <?php include "includes/header-script.php" ?>

</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <?php include "includes/left-side-bar.php" ?>

        <!-- Start Page Content here -->
        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            <?php include "includes/header.php" ?>

            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="py-3 py-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="page-title mb-0">About us</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">About us</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label" for="simpleinput">Title</label>
                                            <div class="col-md-10">
                                                <input type="text" id="title" class="form-control" value="" placeholder="Title">
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label" for="simpleinput">Sub Title</label>
                                            <div class="col-md-10">
                                                <input type="text" id="title" class="form-control" value="" placeholder="Sub Title">
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label" for="simpleinput">Description</label>
                                            <div class="col-md-10">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <!-- <h4 class="header-title">Snow Editor</h4>
                                                        <p class="sub-header">Snow is a clean, flat toolbar theme.</p> -->

                                                        <div id="snow-editor" style="height: 300px;">
                                                            <!-- <h3><span class="ql-size-large">Hello World!</span></h3>
                                                            <p><br></p>
                                                            <h3>This is an simple editable area.</h3>
                                                            <p><br></p>
                                                            <ul>
                                                                <li>
                                                                    Select a text to reveal the toolbar.
                                                                </li>
                                                                <li>
                                                                    Edit rich document on-the-fly, so elastic!
                                                                </li>
                                                            </ul>   
                                                            <p><br></p>
                                                            <p>
                                                                End of simple area
                                                            </p> -->
                                                        </div> <!-- end Snow-editor-->
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div><!-- end col -->
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label" for="simpleinput">Description 2 </label>
                                            <div class="col-md-10">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <div id="bubble-editor" style="height: 300px;">
                                                            <!-- <h3><span class="ql-size-large">Hello World!</span></h3>
                                                            <p><br></p>
                                                            <h3>This is an simple editable area.</h3>
                                                            <p><br></p>
                                                            <ul>
                                                                <li>
                                                                    Select a text to reveal the toolbar.
                                                                </li>
                                                                <li>
                                                                    Edit rich document on-the-fly, so elastic!
                                                                </li>
                                                            </ul>
                                                            <p><br></p>
                                                            <p>
                                                                End of simple area
                                                            </p> -->
                                                        </div> <!-- end Snow-editor-->
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div><!-- end col -->
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label" for="example-fileinput">Image</label>
                                            <div class="col-md-10">
                                                <input type="file" class="form-control" id="example-fileinput">
                                            </div>
                                        </div>
                                        <!-- <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="validationCustomUsername" class="form-label">Username</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">City</label>
                                            <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="validationCustom04" class="form-label">State</label>
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="validationCustom05" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                    Agree to terms and conditions
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div> -->
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </form>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include "includes/footer.php" ?>

            <!-- end Footer -->

        </div>
        <!-- End Page content -->


    </div>
    <!-- END wrapper -->

    <?php include "includes/footer-script.php" ?>



</body>

</html>