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
                        @if(session()->get('success'))
                        <script>
                        swal(
                            {
                                title: 'Bom trabalho!',
                                text: 'Operação realizada com sucesso!',
                                type: 'success',
                                confirmButtonColor: '#4fa7f3'
                            }
                        );
                        </script>
                        @endif
                        <div class="page-title-box">
                        @if(Auth::user()->tp_user == 1)
                            <h4 class="page-title float-left">Planos <div>Adicionar planos <a href="{{route('plano.create')}}"><img class="icon-colored" src="{{ asset('public/images/icons/plus.svg') }}" title="ADICIONAR PROVA" style="width:25px;"></a></div>  </h4>
                        @endif

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

                <div class="col-lg-9 center-page">
                    <div class="text-center">
                        <h3 class="m-b-30 m-t-20">Escolha o plano que mais se adequa.</h3>                        
                    </div>

                    <div class="row m-t-50">

                            @foreach($planos as $plano)
                            <form class="" method="POST" id="payment-form" action="{!! URL::to('adesao') !!}">
                                    {{ csrf_field() }}
                                    <input id="codigo" type="hidden" name="codigo" value="{{$plano->codigo}}">
                                    <input id="id_usuario" type="hidden" name="id_usuario" value="{{Auth::user()->id}}">
                                    

                            <article class="pricing-column">
                                    <div class="inner-box card-box">
                                        <div class="plan-header text-center">
                                            <h3 class="plan-title">{{$plano->nome}}</h3>
                                            <h2 class="plan-price">R$ {{number_format($plano->valor, 2, ',', '.')}}</h2>
                                            <div class="plan-duration">{{$plano->tipo}}</div>
                                        </div>
                                        <ul class="plan-stats list-unstyled text-center">
                                            <li>Caracteristicas do plano</li>
                                            <li>Caracteristicas do plano</li>
                                            <li>Caracteristicas do plano</li>
                                            <li>Caracteristicas do plano</li>
                                            <li>Caracteristicas do plano</li>
                                        </ul>
                                        @if (empty(Auth::user()->id_plano))
                                        <div class="text-center">
                                                <button class="btn btn-success btn-bordered w-lg btn-md w-md btn-bordred btn-rounded waves-effect waves-light">Selecionar</button>
                                        </div>
                                        @endif
                                        @if (Auth::user()->id_plano == $plano->codigo)
                                        <div class="text-center">
                                                <p class="btn-success btn-bordered w-lg btn-md w-md btn-bordred btn-rounded waves-effect waves-light">Seu Plano</p>
                                        </div>
                                        @endif
                                        
                                    </div>
                                </article>  
                            </form>      
                            @endforeach

                        <!--Pricing Column-->
                        


                       


                      

                    </div>
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


<script src="{{asset('public/js/jquery.sweet-alert.init.js')}}"></script>

<!-- App js -->
<script src="{{ asset('public/js/jquery.core.js') }}"></script>
<script src="{{ asset('public/js/jquery.app.js') }}"></script>

</body>
</html>