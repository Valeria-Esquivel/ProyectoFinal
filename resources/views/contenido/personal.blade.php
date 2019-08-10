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
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="assets/img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
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
                            <a href="db-default.html" class="navbar-brand">
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
                        <!-- Begin Navbar Menu  *** BARRA DE NOTIFICACIONES *** -->
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
                <!-- Begin Content -->
                <div class="content-inner profile">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title">Perfil</h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/principal"><i class="ti ti-home"></i></a></li>
                                             
                                            <li class="breadcrumb-item active">Perfil</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-3">
                                <!-- Begin Widget -->
                                <div class="widget has-shadow">
                                    <div class="widget-body">
                                        <div class="mt-5">
                                            <img src="assets/img/avatar/avatar-01.jpg" alt="..." style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                                        </div>
                                        <h2 class="text-center mt-3 mb-1">{{ Auth::user()->name }}</h2>
                                        <h2 class="text-center mt-3 mb-1">
                                        @if( Auth::user()->tipo ==1)
                                         Manager Project
                                        @endif
                                        @if( Auth::user()->tipo ==2)
                                         Desarrollador
                                        @endif
                                        @if( Auth::user()->tipo ==3)
                                         Cliente
                                        @endif
                                        </h2>
                                      
                                        <p class="text-center">{{ Auth::user()->email }}</p>
                                        <div class="em-separator separator-dashed"></div>
                                        <ul class="nav flex-column">
                                        @if (Auth::user()->tipo == 1)
                                            <li class="nav-item">
                                                <a class="nav-link" href="/gastos"><i class="la la-bolt la-2x align-middle pr-2"></i>Gastos y Pagos</a>
                                            </li>
                                             
                                            <li class="nav-item">
                                                <a class="nav-link" href="/proyectos"><i class="la la-bar-chart la-2x align-middle pr-2"></i>Proyectos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/tareas"><i class="la la-clipboard la-2x align-middle pr-2"></i>Tareas</a>
                                            </li>
                                        @endif
                                        @if (Auth::user()->tipo == 2||Auth::user()->tipo == 3)
                                            <li class="nav-item">
                                                <a class="nav-link" href="/pagos"><i class="la la-bolt la-2x align-middle pr-2"></i>Gastos y Pagos</a>
                                            </li>
                                             
                                            <li class="nav-item">
                                                <a class="nav-link" href="/proyectosDC"><i class="la la-bar-chart la-2x align-middle pr-2"></i>Proyectos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/tareasDC"><i class="la la-clipboard la-2x align-middle pr-2"></i>Tareas</a>
                                            </li>
                                        @endif
                                      
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-xl-9">
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Actualizar Perfil</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="col-10 ml-auto">
                                            <div class="section-title mt-3 mb-3">
                                                <h4>Informacion Personal</h4>
                                            </div>
                                        </div>

                                        <form method="POST" action="/manager/actualizar" class="form-horizontal">
                                         {{ csrf_field() }}
                                         <input type="hidden" name="id" class="form-control" value="{{ Auth::user()->id }}" required>
                                         <input type="hidden" name="tipo" class="form-control" value="{{ Auth::user()->tipo }}" required>        
                                         <input type="hidden" name="condicion" class="form-control" value="{{ Auth::user()->condicion }}" required>  
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Nombres</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="nombre" class="form-control" value="{{ Auth::user()->name }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Correo Electronico</label>
                                                <div class="col-lg-9">
                                                    <input type="email" name="correo_electronico" value="{{ Auth::user()->email }}" class="form-control" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Contraseña</label>
                                                <div class="col-lg-9">
                                                    <input type="password" name="contraseña" value="{{ Auth::user()->password }}" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Telefono</label>
                                                <div class="col-lg-9">
                                                    <input type="text" maxlength="10" name="telefono" value="{{ Auth::user()->telefono }}" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="em-separator separator-dashed"></div>
                                            <center>
                                             <button type="submit" class="btn btn-gradient-01">Guardar</button>
                                           </center>
                                        </form>
                                         
                                       
                                    </div>
                                </div>
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
                    <!-- Offcanvas Sidebar -->
                     
                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="assets/vendors/js/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="assets/js/app/contact/contact.min.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>