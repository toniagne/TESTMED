@php 
use Carbon\Carbon;
@endphp
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
                        <br>
                        <div class="container-fluid">
                        <div class="row">

                                <table class="table m-0 table-colored-bordered table-bordered-custom">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Plano</th>
                                            <th>Status</th>
                                            <th>Data pagamento</th>
                                            <th>Ação</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($pagamento as $pgto)
                                            
                                        <tr>
                                            <th scope="row"> {{$pgto->idpagamento}} </th>
                                            <td> {{$pgto->nome}} </td>
                                            <td> {{$pgto->descplano}} </td>
                                            @php 
                                                //$datefim = Carbon::createFromFormat('Y-m-d H:i:s', $pgto->pagoem);
                                            @endphp
                                            <td> </td>
                                            <td> 
                                                @if($pgto->status == 1)
                                                    <form method="POST" id="payment-form" action="{!! URL::to('paypal') !!}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" id="id" name="id" value="{{$pgto->idpagamento}}">
                                                        <input type="hidden" id="planocod" name="planocod" value="{{$pgto->planocod}}">
                                                        <input type="hidden" id="item" name="item" value="{{$pgto->nome}}">
                                                        <input type="hidden" id="amount" name="amount" value="{{$pgto->valor}}">
                                                        <button type="submit" class="btn btn-primary">Efetuar pagamento</button>
                                                    </form>
                                                    
                                                 @else
                                                   JÁ PAGO                                                
                                                @endif 
                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                        
                                       
                                        </tbody>
                                    </table>
                        
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