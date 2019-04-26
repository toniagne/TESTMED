<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>TestMed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="asset/images/favicon.ico">

  <!-- Sweet Alert -->
  <link href="{{asset('public/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">


    <!-- App css -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('public/js/modernizr.min.js') }}"></script>
    <!-- Sweet-Alert  -->
<script src="{{asset('public/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>

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
                                <div class="col-md-12">
                                    <div class="card-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <img src="assets/images/logo_dark.png" alt="" height="30">
                                            </div>
                                            <div class="pull-right">
                                                <h3 class="m-0 hidden-print">Ordem de pagamento</h3>
                                            </div>
                                        </div>
    
    
                                        <div class="row">                                           
                                            <div class="col-4 offset-2">
                                                <div class="m-t-30 pull-right">
                                                    <p class="m-b-10"><small><strong>Data: </strong></small> Jan 17, 2016</p>
                                                    <p class="m-b-10"><small><strong>Status: </strong></small> <span class="label label-success">Paid</span></p>
                                                    <p class="m-b-10"><small><strong>ID: </strong></small> #123456</p>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->
    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                        <tr><th>#</th>
                                                            <th>Item</th>
                                                            <th>Quantidade</th>
                                                            <th>Preço unitário</th>
                                                            <th class="text-right">Total</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <b>Laptop</b> <br>
                                                                Brand Model VGN-TXN27N/B
                                                                11.1" Notebook PC
                                                            </td>
                                                            <td>1</td>
                                                            <td>$1799</td>
                                                            <td class="text-right">$1799</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="float-right">
                                                    <h3>R$ 4635.00</h3>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
    
                                        <div class="hidden-print m-t-30 m-b-30">
                                            <div class="text-right">
                                                <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print m-r-5"></i> Print</a>
                                                <a href="#" class="btn btn-info waves-effect waves-light">Submit</a>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
    
                            </div>
                </div> <!-- content -->

            </div> <!-- content page-->

            <footer class="footer text-right">
                <?php echo date('Y') ?> - TestMed
            </footer>

        


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


<script src="{{asset('public/js/jquery.sweet-alert.init.js')}}"></script>

<!-- App js -->
<script src="{{ asset('public/js/jquery.core.js') }}"></script>
<script src="{{ asset('public/js/jquery.app.js') }}"></script>

</body>
</html>