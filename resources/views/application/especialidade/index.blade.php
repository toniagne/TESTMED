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
                        <h4 class="page-title float-left">Especialidades <div>Adicionar Especialidade <a href="{{route('especialidades.create')}}"><img class="icon-colored" src="{{ asset('public/images/icons/plus.svg') }}" title="ADICIONAR ESPECIALIDADE" style="width:25px;"></a></div>  </h4>

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
                        <div class="col-12">
                           <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Especialidade</th>
                                    <th>Status</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($especialidades as $especialidade)

                                    <tr>
                                        <th scope="row">{{$especialidade->id}}</th>
                                        <td>{{$especialidade->nome}}</td>
                                        <td>{{$especialidade->status}}</td>
                                        <td>
                                        <a href="especialidades/edit/{{$especialidade->id}}" class="btn btn-primary">Editar</a>
                                        <a href="especialidades/destroy/{{$especialidade->id}}" class="btn btn-danger">Apagar</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                           </table>

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