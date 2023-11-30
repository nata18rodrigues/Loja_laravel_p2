<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lojinha Pirajuí</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Painel Administrativo</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/vendas">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Comercio</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vendas/exibir-carrinho">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Carrinho</span></a>
            </li>            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Administrativo
            </div>

            <!-- Nav Item - Pages Collapse Menu -->           

            <li class="nav-item">
                <a class="nav-link" href="/produto">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Produtos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/marca">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Marcas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categoria">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Categorias</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cor">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Cores</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/compras">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Compras</span></a>
            </li>                    
           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Natã Rodrigues</span>
                                <img class="img-profile rounded-circle"
                                    src="data:image/jpeg;base64,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">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    
                    @yield('contents')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>
    
</body>

</html>