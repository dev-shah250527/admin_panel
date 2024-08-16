<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

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
                                                        <div id="snow-editor" style="height: 300px;"></div> <!-- end Snow-editor-->
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
                                        <div class="row">
                                            <div class="mb-3 col-md-6 row">
                                                <label class="col-md-2 col-form-label" for="example-fileinput">Image</label>
                                                <div class="col-md-10">
                                                    <input type="file" class="form-control" id="example-fileinput">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3 row">
                                                    <label class="col-md-2 col-form-label">Select</label> <br />
                                                    <div class="col-md-10">
                                                        <select id="selectize-select">
                                                            <option data-display="Select">Active</option>
                                                            <option value="1">Deactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-primary text-center" type="submit">Update</button>
                                        </div>
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