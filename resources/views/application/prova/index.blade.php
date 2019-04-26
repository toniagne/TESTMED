@php
use App\Estados;
use App\Anos;
use App\Banca;
use App\Disciplina;
use App\Especialidade;


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
                        <h4 class="page-title float-left">Provas <div>Adicionar Prova <a href="{{route('provas.create')}}"><img class="icon-colored" src="{{ asset('public/images/icons/plus.svg') }}" title="ADICIONAR PROVA" style="width:25px;"></a></div>  </h4>

                            <!--<ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Adminox</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dashboard 1</li>
                            </ol>-->

                            <div class="clearfix"></div>
                        @endif
                        </div>
                        <div class="page-title-box">
                                <h4 class="page-title float-left">Filtros</h4>
                            <form action="#">
                                <div class="form-group">
                                    <select name="estado" id="estado" class="form-control">
                                        <option value="">Estado</option>
                                        @foreach( Estados::get() as $estado )
                                            <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                                        @endforeach
                                    </select>                                                 
                                </div>
                                <div class="form-group">
                                        <select name="ano" id="ano" class="form-control">
                                            <option value="">Ano</option>
                                            @foreach( Anos::get() as $ano )
                                                <option value="{{ $ano->id }}">{{ $ano->ano }}</option>
                                            @endforeach
                                        </select>                                                 
                                </div> 
                                <div class="form-group">
                                        <select name="banca" id="banca" class="form-control">
                                            <option value="">Banca</option>
                                            @foreach( Banca::get() as $banca )
                                                <option value="{{ $banca->id }}">{{ $banca->banca }}</option>
                                            @endforeach
                                        </select>                                                 
                                </div> 
                                <div class="form-group">
                                        <select name="disciplina" id="disciplina" class="form-control">
                                            <option value="">Disciplina</option>
                                            @foreach( Disciplina::get() as $disciplina )
                                                <option value="{{ $disciplina->id }}">{{ $disciplina->descricao }}</option>
                                            @endforeach
                                        </select>                                                 
                                </div> 
                                <button type="submit" class="btn btn-primary">Filtrar</button>
                                                               
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    
                    <!-- Clickable Wizard -->
                    @foreach($provas as $prova)

                    <div class="col-lg-4">
                            <div class="card-box ribbon-box">
                                    <div class="dropdown pull-right">
                                            
                                            <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                <h3 class="m-0 text-muted"><i class="mdi mdi-dots-horizontal"></i></h3>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="http://testmed.com.br/provas/{{$prova->id}}">Exibir</a>
                                            @if(Auth::user()->tp_user == 1)
                                            <a class="dropdown-item" href="http://testmed.com.br/provas/{{$prova->id}}/edit">Editar</a>
                                            <form action="provas/{{$prova->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            <button type="button" id="delete-prova" class="dropdown-item delete-prova" >Deletar</button>                                              
                                            </form>
                                            @endif
                                            </div>
                                        
                                    </div>
                                    <div class="ribbon ribbon-custom">{{$prova->nome}}</div>
                                    <p class="m-b-0">{{$prova->descricao}}</p>
                            </div>       
                    </div>

                                 
                    @endforeach
                    <!-- End row -->
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
<script>
$( document ).ready(function() {

    $('.delete-prova').on("click", function(e) {
                e.preventDefault();
                var form = $(this).parents('form');   
                swal({
                    title: "Deseja mesmo deletar essa prova?",
        text: "Uma vez deletado não há como recuperar!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: 'SIM',
                    cancelButtonText: 'NÃO',
                    buttons: true,
                    dangerMode: true,
                        }).then(function(isConfirm){        
                            if(isConfirm){ 
                                    form.submit();
                            } 
            });
        
            });
});

</script>

</body>
</html>