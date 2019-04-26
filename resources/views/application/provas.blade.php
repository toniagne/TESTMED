<?php
use App\Http\Controllers\ProvasController;
use App\Http\Controllers\UserController;
$user = Auth::user();

$provas = ProvasController::listar();


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
                                    <h4 class="page-title float-left">Provas</h4>
                                <span style="float:right">Adicionar nova prova <a href="{{route('newProva')}}">   <img src="{{ asset('public/images/icons/Add.png')}}" alt="" style="height:25px;"></a></span>
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
                                @php 
                                for($i=0;$i<count($provas);$i++)
                                { 
                                @endphp
                                <div class="col-md-6 col-lg-6">
                                <div class="company-card card-box">
                                    <div class="company-detail">
                                        <h4 class=" m-b-5">@php echo $provas[$i]->nome; @endphp</h4> 
                                    </div>

                                    <hr>

                                    <div class="text-center m-t-20">
                                        <h5 class="m-b-30">@php echo $provas[$i]->descricao; @endphp</h5>
                                    </div>

                                    <div id="company-1" class="text-center"><canvas width="210" height="80" style="display: inline-block; width: 210px; height: 80px; vertical-align: top;"></canvas></div>

                                </div>
                            </div>

                            @php
                            }
                            @endphp
                               
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