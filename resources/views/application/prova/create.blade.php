@php
use App\Http\Controllers\StatusQuestaoController;
$statusQuestao = StatusQuestaoController::listar();
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

    <!-- C3 charts css -->
    <link href="{{ asset('public/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css"  />

    <!-- App css -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css"  />
    


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
                            
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <!-- Clickable Wizard -->

                    <div class="col-md-12">
                        <div class="card-box">
                            <form method="post" action="{{ route('provas.store') }}">
                                <div class="form-group">
                                    @csrf
                                                                
                                </div>                           

                                <div class="form-group">
                                    <label for="price">Nome Prova :</label>
                                    <input type="text" class="form-control" name="nome"/>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Descrição:</label>
                                    <textarea type="text" class="form-control" name="descricao"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="quantity">Status:</label>
                                    <select name="status" id="status" class="form-control">
                                        @foreach ($statusQuestao as $sq)
                                            <option value="{{ $sq->codigo }}">{{$sq->descricao}}</option>
                                        @endforeach
                                    </select>
                                </div>                               

                                <button type="submit" class="btn btn-primary">Cadastrar</button>
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

<script src="{{ asset('public/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>






<!-- App js -->
<script src="{{ asset('public/js/jquery.core.js') }}"></script>
<script src="{{ asset('public/js/jquery.app.js') }}"></script>

</body>
</html>