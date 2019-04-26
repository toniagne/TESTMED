<?php
use App\Http\Controllers\QuestoesController;
$questoes = QuestoesController::detalhesQuestao($id);


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
                            <h4 class="page-title float-left">Questões</h4>

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
                            <form method="post" action="{{ route('respostas.store') }}">
                                <div class="form-group">
                                    @csrf
                                <label for="name">Questão:</label>
                                <input type="text" class="form-control" readonly value="{{$questoes[0]->enunciado}}">
                                <input type="hidden" id="codigo_questoes" name="codigo_questoes" value="{{$questoes[0]->id}}">
                                    
                                </div>
                                <div id='pergunta'>
                                    <div class="form-group">
                                        <label for="price">Resposta :</label>
                                        <input type="text" class="form-control" name="resposta[]" required/>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="price">Correta :</label>
                                        Sim <input type="radio" class="radio-single radio-success" name="correta[]" value="1"/>
                                        Não <input type="radio" class="radio-single radio-success" name="correta[]" value="0"/>
                                    </div>
                                </div>
                                <div id="perguntaTarget">

                                </div>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <button type="button" class="btn btn-success" id="addResposta">Adicionar resposta</button>
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



<!-- jQuery  3-->
<script src="{{ asset('public/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('public/js/waves.js') }}"></script>
<script src="{{ asset('public/js/jquery.slimscroll.js') }}"></script>

<script>       
        $(document).ready(function() {
            var count = 0;
            $("#addResposta").click(function(){
                $("#perguntaTarget").append("<div id='pergunta'><div class='form-group'><label for='price'>Resposta :</label><input type='text' class='form-control' name='resposta[]"+ count +"' required/></div><div class='form-group'><label for='price'>Correta :</label>Sim <input type='radio' class='radio-single radio-success' name='correta[]"+ count +"' value='1'/>Não <input type='radio' class='radio-single radio-success' name='correta[]"+ count +"' value='0'/></div></div>");
                count ++;
            });

        });
</script>

<!-- App js -->
<script src="{{ asset('public/js/jquery.core.js') }}"></script>
<script src="{{ asset('public/js/jquery.app.js') }}"></script>

</body>
</html>