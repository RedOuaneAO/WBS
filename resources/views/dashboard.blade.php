@extends('layouts.master')
@section('title', 'dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-xl-2 px-sm-2 px-0 shadow" style="height: 100vh">
                <div class="d-flex flex-column  px-3 pt-2">
                    <a href="#" class="pb-3 mb-md-0 text-decoration-none  mx-auto fs-5 d-none d-sm-inline text-primary fw-bold">W.B.S</a>
                    <div class="d-flex flex-column mx-auto my-3 d-none d-sm-inline">
                        <div class="rounded-circle  overflow-hidden" style="width: 80px; height:80px;">
                            <img class="w-100" id="image"  src="/img/face.jpg">
                        </div>
                        <div class="d-flex flex-column ms-2 mt-3 text-black">
                            <span class="fw-bold">Admin</span>
                        </div>
                    </div>
                    <ul class="nav flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                        <li class="">
                            <a href="#" class="nav-link px-0 ">
                                <i class="bi bi-house"></i>
                                <span class="ms-1 d-none d-sm-inline">Dashboard</span> 
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0">
                                <i class="bi bi-person-circle"></i>
                                <span class="ms-1 d-none d-sm-inline">Profile</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0">
                                <i class="bi bi-people"></i>
                                <span class="ms-1 d-none d-sm-inline">Add Client</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0">
                                <i class="bi bi-speedometer2"></i>
                                <span class="ms-1 d-none d-sm-inline">Add Compteur</span> 
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0">
                                {{-- <i class="bi bi-file-text-fill"></i> --}}
                                <i class="bi bi-file-text"></i>
                                <span class="ms-1 d-none d-sm-inline">Les Facture</span> </a>
                        </li>
                        <li>
                            <a href="/logout" class="nav-link px-0">
                                <i class="bi bi-box-arrow-left"></i>
                                <span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                        </li>
                    </ul>
                </div>
            </div>

                {{-- -------------------------------content --------------------------------------}}
            <div class="col py-3 overflow-x-hidden overflow-y-scroll" style="background:url('./img/waterbg.jpg');background-attachment: fixed; background-size: cover;height: 100vh">
                                <!-- Content Wrapper -->
                    <div class="d-flex flex-column">
                        <!-- Main Content -->
                        <div>
                            <!-- Topbar -->
                            <nav class="navbar navbar-expand bg-white mb-4 shadow">
                                    <div>
                                        <p class="fs-5 ms-4">Welcome <span></span></p>
                                    </div>
                            </nav>
                            <!-- End of Topbar -->
                            <!-- Begin Page Content -->
                            <div class="container-fluid">
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h3 class="mb-0 text-secondary">Dashboard</h3>
                                    
                                </div>

                                <!-- Content Row -->
                                <div class="row">
                                    <!-- Earnings (Monthly) Card Example -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-primary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs fw-bold text-primary mb-1">
                                                            CLIENTS</div>
                                                        <h5 class="mb-0 fw-bold text-secondary"></h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="bi bi-people fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Earnings (Monthly) Card Example -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="fw-bold text-success mb-1">
                                                            COMPTEUR</div>
                                                        <h5 class="mb-0 fw-bold text-secondary"></h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
                                                        <i class="bi bi-speedometer2 fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Earnings (Monthly) Card Example -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-info shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs fw-bold text-info text-uppercase mb-1">Tasks
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <h5 class="mb-0 mr-3 fw-bold text-secondary">50%</h5>
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar bg-info" style="width: 50%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pending Requests Card Example -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-warning shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs fw-bold text-warning text-uppercase mb-1">
                                                            Pending Requests</div>
                                                        <h5 class=" mb-0 fw-bold text-gray-800">18</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Content Row -->

                                <div class="row">

                                    <!-- Area Chart -->
                                    <div class="col-xl-8 ">
                                        <div class="card shadow mb-4">
                                            <!-- Card Header - Dropdown -->
                                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                <h6 class="m-0 font-weight-bold text-primary">Users Account</h6>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pie Chart -->
                                    <div class="col-xl-4">
                                        <div class="card shadow mb-4">
                                            <!-- Card Header - Dropdown -->
                                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                <h6 class="m-0 font-weight-bold text-primary">Admins</h6>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content Row -->
                                <div class="row">
                                    <!-- Content Column -->
                                    <div class="col-lg-6 mb-4">
                                        <!-- Project Card Example -->
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Reserved Apartments</h6>
                                            </div>
                                            <div class="card-body">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-4">
                                        <!-- Illustrations -->
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Apartments</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- End of Main Content -->
                        <footer class="sticky-footer  bg-white">
                            <div class="container">
                                <div class="copyright text-center ">
                                    <span>Copyright &copy; WBS 2023</span>
                                </div>
                            </div>
                        </footer>
                    </div>
                    <!-- End of Content Wrapper -->
                <!-- End of Page Wrapper -->
            </div>
        </div>
    </div>
@endsection