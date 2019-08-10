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
        <link rel="stylesheet" href="assets/css/lity/lity.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
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
        <!-- End Preloader -->
        <div class="page db-social">
            <!-- Begin Header -->
            
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
                
                <div class="content-inner ">
                
                    <div class="container-fluid newsfeed">
                    <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Tickets</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="/principal"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Tickets</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <div class="row">
                                    <div class="col-xl-3 column">
                                    </div>
                                    <!-- End Col -->
                                    <!-- Begin Timeline -->
                                    <div class="col-xl-8">
                                        <!-- Begin Widget -->
                                        <!-- End Widget -->
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="widget-header d-flex align-items-center">
                                                <div class="user-image">
                                                    <img class="rounded-circle" src="assets/img/avatar/avatar-09.jpg" alt="...">
                                                </div>
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username">{{$cliente->name}}   </span>
                                                    </div>
                                                    <span  >Tarea: {{$tareas->titulo}}</span>
                                                    <div class="time">{{$tickets->fecha_hora}}</div>
                                                </div>
                                                
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                            <div class="widget-body">
                                                <p>
                                                 Asunto: {{$tickets->titulo}}
                                                 </p>
                                            </div>
                                            <!-- End Widget Body -->
                                            <!-- Begin Widget Footer -->
                                            <div class="widget-footer d-flex align-items-center">
                                                 
                                            <div class="widget-body">
                                                <p>
                                                {{$tickets->descripcion}}
                                                 </p>
                                            </div>
                                                 
                                            </div>
                                            @foreach ($respuestas as $respuestas)
                                            @if($tickets->id==$respuestas->id_ticket)

                                            <div class="comments">
                                                <div class="comments-header d-flex align-items-center">
                                                    <div class="user-image">
                                                        <img class="rounded-circle" src="assets/img/avatar/avatar-05.jpg" alt="...">
                                                    </div>
                                                    <div class="d-flex flex-column mr-auto">
                                                        <div class="title">
                                                            <span class="username">{{$respuestas->name}}</span>
                                                        </div>
                                                        <div class="time">{{$respuestas->fecha_hora}}</div>
                                                    </div>
                                                </div>
                                                <div class="comments-body">
                                                   
                                                </div>
                                                <div class="comments-body">
                                                <p>
                                                    {{$respuestas->titulo}} </p>
                                                    <p>
                                                    {{$respuestas->descripcion}} </p>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach

                                            <!-- End Widget Footer -->
                                            <!-- Begin Publisher -->
                                            <div class="publisher publisher-multi">
                                            <form method="POST" action="/ticketsRespuesta" class="form-horizontal">
                                              {{ csrf_field() }}
                                            <input type="hidden" name="id_ticket" value="{{$tickets->id}} " class="form-control" >
                                            <input type="hidden" name="id_desarrollador" value="{{Auth::user()->id}} " class="form-control" >
                                           
                                            <input type="text" name="titulo" placeholder="titulo" class="form-control" required>
                                      
                                            <textarea class="form-control" name="descripcion" placeholder="Descripcion del mensaje..." required=""></textarea>
                                            <button type="/regresar" class="btn btn-shadow" >Close</button>
                                            <button  type="submit" class="btn btn-gradient-01">Enviar</button>
                                            
                                            </form>
                                                
                                            </div>
                                            <!-- End Publisher -->
                                        </div>
                                        <!-- End Widget -->
                                    </div>
                                    <!-- End Timeline -->
                                     
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Col -->
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
        <script src="assets/vendors/js/lity/lity.min.js"></script>
        <script src="assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="assets/js/pages/newsfeed.min.js"></script>
        <!-- End Page Snippets -->
        <!-- Tooltip Initialisation -->
        <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
        </script>
    </body>
</html>