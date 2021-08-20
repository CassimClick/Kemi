<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="shortcut icon" href="backend/assets/images/favicon.png" type="image/x-icon">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        referrerpolicy="no-referrer" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="backend/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="backend/dist/css/custom.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="backend/plugins/summernote/summernote-bs4.css">





    <script src="backend/dist/js/sweetalert.js">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->





    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js">
    </script>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="far fa-bars"></i></a>
                </li>

            </ul>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown d-sm-inline-block mr-4">

                    <a href="#" data-toggle="dropdown" class="text-white">
                        <i class="fas fa-user"></i>Admin

                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right mt-2">

                        <div class="dropdown-divider"></div>
                        <a href="admin/changePassword" class="dropdown-item">
                            <i class="far fa-key mr-2  "></i>Change Password

                        </a>
                        <div class="dropdown-divider"></div>


                        <div class="dropdown-divider"></div>
                        <a href="<?=base_url()?>/logout" class="dropdown-item">
                            <i class="far fa-power-off mr-2  "></i>Log Out
                        </a>


                    </div>
                </li>

            </ul>
        </nav>