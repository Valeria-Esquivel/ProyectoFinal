<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX
** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ESC.ga</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="assets/css/datatables/datatables.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        
        <div class="page">
            <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top">         
                    <!-- Begin Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="ion-close-round"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="Search something ..." class="form-control">
                        </form>
                    </div>
                    <!-- End Search Box-->
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                            <a href="/" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <img src="assets/img/logo-big.png" alt="logo" class="logo-big">
                                </div>
                                <div class="brand-image brand-small">
                                    <img src="assets/img/logo.png" alt="logo" class="logo-small">
                                </div>
                            </a>
                            <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->
                        </div>
                        <!-- End Logo -->
                        <!-- Begin Navbar Menu -->
                        @include('plantilla.not')
                        <!-- End Navbar Menu -->
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
            @if(Auth::check())
            @if (Auth::user()->tipo == 1)
            @include('plantilla.sidebar')
            @elseif (Auth::user()->tipo == 2)
            @include('plantilla.sidebar2')
            @elseif (Auth::user()->tipo == 3)
            @include('plantilla.sidebar3')
            @else

            @endif

        @endif
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Clientes</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="/principal"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Clientes</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                
                                <!-- End Sorting -->
                                <!-- Export -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Clientes</h4>
                                    </div>
                                    <div class="widget-body">
                                        <!-- Begin Large Modal -->
                                        <div class="row">
                                            <div class="bordered no-actions d-flex align-items-center">
                                            <p>Nuevo Registro</p>
                                            </div>
                                            <div class="col-xl-4 d-flex align-items-center mb-3">
                                            <button type="button" class="btn btn-gradient-01 mr-1 mb-2" data-toggle="modal" data-target="#modal-large"><i class="la la-pencil"></i>Crear</button></div>
                                        </div>
                                        <!-- End Large Modal -->
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Opciones</th>
                                                        <th>Nombres</th>
                                                       <!-- <th>Apellidos</th> Falta Tipo -->
                                                        <th>Rol</th>
                                                        <th>Correo Electronico</th>
                                                        
                                                        <th>Telefono</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($colaboradores as $colaboradores)
                                                <tr>
                                                <td class="td-actions"> 
                                                
                                               
                                                @if ($colaboradores->condicion=='0')
                                                <a href="/{{$colaboradores->id}}/clientesact" ><i class="ion-checkmark-circled"></i></a>
                                                @endif
                                                @if ($colaboradores->condicion=='1')
                                                <a href="/{{$colaboradores->id}}/clientes"   ><i class="la la-close delete"></i></a>
                                                @endif
                                                  
                                                </td>
                                                 <td> {{$colaboradores->name}} </td>
                                                 <td>Cliente</td>
                                                 <td> {{$colaboradores->email}} </td>
                                               
                                                 <td> {{$colaboradores->telefono}} </td>
                                                
                                                 
                                                
                                                </tr>
                                                @endforeach  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Export -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                     
                    <!-- Begin Page Footer-->
                    <footer class="main-footer">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                                <p class="text-gradient-02">Design By Saerox</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="documentation.html">Documentation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="changelog.html">Changelog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    
                    <!-- End Offcanvas Sidebar -->
                </div>
            </div>
            <!-- End Page Content -->

         <!-- Begin Large Modal -->
         <div id="modal-large" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Nuevo Cliente</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class?="widget-body">
                                         <form method="POST" action="/clientes" class="form-horizontal">
                                         {{ csrf_field() }}
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Nombres</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="nombre" class="form-control" placeholder="nombre" required>
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Correo Electronico</label>
                                                <div class="col-lg-9">
                                                    <input type="email" name="correo_electronico" placeholder="correo electronico" class="form-control" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Contraseña</label>
                                                <div class="col-lg-9">
                                                    <input type="password" name="contraseña" placeholder="contraseña" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Telefono</label>
                                                <div class="col-lg-9">
                                                    <input type="text"  maxlength="10" maxlength="10" name="telefono" placeholder="telefono" class="form-control" required>
                                                </div>
                                            </div>
                                           
                                            <div class="modal-footer">
                        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                                        </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Large Modal -->
        </div>
        <!-- Begin Vendor Js -->
         
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/datatables/datatables.min.js"></script>
        <script src="assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/vendors/js/datatables/jszip.min.js"></script>
        <script src="assets/vendors/js/datatables/buttons.html5.min.js"></script>
        <script src="assets/vendors/js/datatables/pdfmake.min.js"></script>
        <script src="assets/vendors/js/datatables/vfs_fonts.js"></script>
        <script src="assets/vendors/js/datatables/buttons.print.min.js"></script>
        <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="assets/js/components/tables/tables.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>