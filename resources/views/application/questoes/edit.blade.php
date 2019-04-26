<?php
use App\Http\Controllers\StatusQuestaoController;
$statusQuestao = StatusQuestaoController::listar();
use App\Provas;
?>
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

                            <!--<ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Adminox</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dashboard 1</li>
                            </ol>-->

                            <div class="clearfix"></div>
                            @if(session()->get('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div><br />
                            @endif
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <!-- Clickable Wizard -->

                    <div class="col-md-12">
                        <div class="card-box">
                                <form method="post" action="{{ route('questoes.update', $questao->id) }}">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form-group"> 
                                            <label for="name">Prova:</label>
                                            
                                            <select name="codigo_prova" id="codigo_prova" class="form-control">
                                                @foreach (Provas::all() as $prova)
                                                    @if ($prova->deleted == 0)
                                                   
                                                        <option value="{{ $prova->id }}"  @if ($prova->id == $questao->codigo_prova) selected  @endif >{{$prova->nome}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                            <div class="form-group">
                                                <label for="price">Titulo :</label>
                                                <input type="text" class="form-control" name="titulo"   value="{{$questao->titulo}}"/>
                                            </div>  
                                            <div class="form-group">
                                                    <label for="price">Enunciado :</label>
                                                    <textarea type="text" class="form-control" name="enunciado">{{$questao->enunciado}}</textarea>
                                            </div>   
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label for="quantity">Status:</label>
                                                <select name="status" id="status" class="form-control">
                                                    @foreach ($statusQuestao as $sq)
                                                        <option value="{{ $sq->codigo }}">{{$sq->descricao}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        <button type="submit" class="btn btn-primary">Atualizar</button>
                                      </form>

                        </div>
                    </div>

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

<!-- Counter js  -->
<script src="{{ asset('public/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('public/plugins/counterup/jquery.counterup.min.js') }}"></script>

<!--C3 Chart-->
<script type="text/javascript" src="{{ asset('public/plugins/d3/d3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/c3/c3.min.js') }}"></script>


<!--Form Wizard-->
<script src="{{ asset('public/plugins/jquery.stepy/jquery.stepy.min.js') }}" type="text/javascript"></script>
<!--wizard initialization-->
<script src="{{ asset('public/pages/jquery.wizard-init.js') }}" type="text/javascript"></script>

<!--Echart Chart-->
<script src="{{ asset('public/plugins/echart/echarts-all.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('public/pages/jquery.dashboard.js') }}"></script>

<!-- App js -->
<script src="{{ asset('public/js/jquery.core.js') }}"></script>
<script src="{{ asset('public/js/jquery.app.js') }}"></script>

</body>
</html>