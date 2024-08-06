<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Starter | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
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
                                <h4 class="page-title mb-0">Manage Gallery</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Manage Gallery</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- start page title -->
                    <div class="py-3 py-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Select</th>
                                                        <th>Images</th>
                                                        <th>Description</th>
                                                        <th>Status</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><input type="checkbox" class="form-check-input"></td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td><input type="checkbox" checked data-plugin="switchery" data-color="#039cfd"/></td>
                                                        <td><i style="font-size: 25px;" class="mdi mdi-square-edit-outline"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div>
                                </div> <!-- end card -->
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

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

<!-- Mirrored from myrathemes.com/dashtrap/pages-starter by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2024 11:30:45 GMT -->

</html>