<?php
use App\Http\Controllers\UserController;

$users = UserController::listar();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TestMed - Usuários</title>
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
                        <br>
                        <div class="row">
                            @php 
                            for($i=0;$i<count($users);$i++)
                            { 
                            @endphp

                                <div class="col-md-4">
                                    <div class="text-center card-box">
                                        <div class="dropdown pull-right">
                                            <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                <h3 class="m-0 text-muted"><i class="mdi mdi-dots-horizontal"></i></h3>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="user/edit/@php echo $users[$i]->id; @endphp">Editar</a>                                                
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="member-card">
                                            <div class="thumb-xl member-thumb m-b-10 mx-auto">
                                                <img src="{{ asset('public/images/users/avatar-2.jpg') }}" class="rounded-circle img-thumbnail" alt="profile-image">
                                                
                                            </div>
    
                                            <div class="">
                                                <h4 class="m-b-5 font-18">@php echo $users[$i]->name; @endphp</h4>
                                                <p class="text-muted">@php echo $users[$i]->email; @endphp</p>
                                            </div>
    
                                            <p class="text-muted font-13">
                                                
                                            </p>
                                        </div>
    
                                    </div>
    
                                </div> <!-- end col -->
                            
                            @php
                            }
                            @endphp
                                
    
                               
    
                               

                        
                        

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