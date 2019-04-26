<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\ProvasController;

$user = Auth::user();

$usuario = UserController::detalhesUser($user->id);
$qtdUser = UserController::contagem();
$vlrPlanos = PlanoController::valorEmPlanos();
$vlrPlanos = number_format($vlrPlanos, 2, ',', '.');
$qtdProvas = ProvasController::contagem();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TestMed</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="asset/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="{{ URL::asset('public/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css"  />

        <!-- App css -->
        <link href="{{ URL::asset('public/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ URL::asset('public/js/modernizr.min.js') }}"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            


            @include('application.includes.topbar')
            @include('application.includes.sidebar')

            
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Dashboard</h4>

                                    <!--<ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Adminox</a></li>
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard 1</li>
                                    </ol>-->

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                        
                        <div class="row">
                            
                                                        <div class="col-xl-6 col-sm-6">
                                                            <div class="card-box widget-box-two widget-two-custom">
                                                                <i class="mdi mdi-currency-usd widget-two-icon"></i>
                                                                <div class="wigdet-two-content">
                                                                    <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Valor em assinaturas</p>
                                                                    <h2 class="font-600"> R$ @php echo $vlrPlanos; @endphp </h2>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div><!-- end col -->
                            
                                                        <div class="col-xl-6 col-sm-6">
                                                            <div class="card-box widget-box-two widget-two-custom">
                                                                <i class="mdi mdi-account-multiple widget-two-icon"></i>
                                                                <div class="wigdet-two-content">
                                                                    <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total de usuários</p>
                                                                    <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">@php echo $qtdUser; @endphp</span></h2>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div><!-- end col -->
                                                        <div class="col-xl-6 col-sm-6">
                                                            <div class="card-box widget-box-two widget-two-custom">
                                                                <i class="mdi mdi-book-open-page-variant widget-two-icon"></i>
                                                                <div class="wigdet-two-content">
                                                                    <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Quantidade de provas</p>
                                                                    <h2 class="font-600"> <span data-plugin="counterup">@php echo $qtdProvas; @endphp</span></h2>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div><!-- end col -->
                            
                                                       
                            
                                                    </div>
                        

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