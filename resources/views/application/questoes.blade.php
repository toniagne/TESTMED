<?php
use App\Http\Controllers\QuestoesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RespostasController;
$user = Auth::user();
$questoes = QuestoesController::detalhesQuestao($id);




?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TestMed</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="asset/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="{{ asset('public/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css"  />

        <!-- App css -->
        <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('public/js/modernizr.min.js') }}"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                                <span>
                                    <img src="{{ asset('public/images/logo.png')}}" height="25">
                                </span>
                        <i>
                            <img src="{{ asset('public/images/logo_sm.png')}}" height="28">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        
                    

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('public/images/users/avatar-2.jpg') }}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Olá! <?php //echo $usuario[0]->name;?></small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle"></i> <span>Perfil</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-settings"></i> <span>Configurações</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <!--<li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>-->
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


           
            @include('application.includes.sidebar')

            
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <br>
                        <div class="row">
                            @php for($i = 0;$i< count($questoes);$i++){ @endphp
                            <div class="col-12">                                    
                                <div class="card m-b-30">
                                    <h6 class="card-header"> Questão</h6>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            @php
                                            echo $questoes[$i]->prefixo.' - '.$questoes[$i]->questao;    
                                            @endphp
                                        </h5>
                                        
                                            @php 
                                            $respostas = RespostasController::listar($questoes[$i]->codigo);
                                            for($r = 0;$r< count($respostas);$r++){
                                                if($respostas[$r]->correta)
                                                {
                                                    $bg = "btn btn-success waves-effect w-md waves-light";
                                                }else {                                                    
                                                    $bg = "btn btn-secondary waves-effect w-md";
                                                }
                                                echo $respostas[$r]->prefixo.' - <a href="#" class="'.$bg.'">'.$respostas[$r]->resposta.'</a><br><br>';
                                            }
                                            @endphp                                                                                
                                        
                                    </div>
                                </div>
                                        
                            </div>
                            @php } @endphp
                    </div>
                    <!-- end row -->
                        
                        
                        
                        

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    <?php echo date('Y') ?> - TestMed
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
        <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('public/js/waves.js') }}"></script>
        <script src="{{ asset('public/js/jquery.slimscroll.js') }}"></script>

        <!-- Counter js  -->
        <script src="{{ asset('public/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('public/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="{{ asset('public/plugins/d3/d3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/plugins/c3/c3.min.js') }}"></script>

        <!--Echart Chart-->
        <script src="{{ asset('public/plugins/echart/echarts-all.js') }}"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('public/pages/jquery.dashboard.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('public/js/jquery.core.js') }}"></script>
        <script src="{{ asset('public/js/jquery.app.js') }}"></script>

    </body>
</html>