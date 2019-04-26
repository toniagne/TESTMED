<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanoController;
$user = Auth::user();
$planos = PlanoController::listar();

$userDetail = UserController::detalhesUser($id);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TestMed</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="asset/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="{{ URL::asset('public/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css"  />

        <!-- App css -->
        <link href="{{ URL::asset('public/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ URL::asset('public/js/modernizr.min.js') }}"></script>

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

                                    
                                            <div class="card-box">
                                                <h4 class="header-title m-t-0 m-b-30">@php echo $userDetail[0]->name; @endphp </h4>
            
                                                <ul class="nav nav-tabs tabs-bordered nav-justified">
                                                    <li class="nav-item">
                                                        <a href="#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link active show">
                                                            Perfil
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#profile-b2" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                            Contato
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#messages-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                            Endereço
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#planos-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                            Planos
                                                        </a>
                                                    </li>                                                    
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active show" id="home-b2">
                                                        
                                                       
                                                                <div class="card-box">
                                                                    
                                                                        @if (session('status'))
                                                                            <div class="alert alert-success">
                                                                                {{ session('status') }}
                                                                            </div>
                                                                        @endif
                                                                        <form action="{{ route('editUser',$userDetail[0]->id)}}" method="POST">
                                                                            <input type="hidden" name="id" value="@php echo $userDetail[0]->id; @endphp">
                                                                            
                                                                            <input type="hidden" name="return" value="{{url()->current()}}">
                                                                            
                                                                                @csrf
                                                                        
                                                                        <div class="form-group row">
                                                                            <label for="inputNome" class="col-3 col-form-label">Nome</label>
                                                                            <div class="col-9">
                                                                                <input type="text" class="form-control" id="inputNome" name="inputNome" value="@php  echo $userDetail[0]->name;  @endphp">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail" class="col-3 col-form-label">E-mail</label>
                                                                            <div class="col-9">
                                                                                <input type="text" class="form-control" id="inputEmail" name="inputEmail" value="@php  echo $userDetail[0]->email;  @endphp">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group mb-0 justify-content-end row">
                                                                            <div class="col-9">
                                                                                <button type="submit" class="btn btn-info waves-effect waves-light">Salvar</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            
                                                        
                                                    </div>
                                                    <div class="tab-pane" id="profile-b2">
                                                        @php 
                                                        
                                                       

                                                        @endphp
                                                    </div>
                                                    <div class="tab-pane" id="messages-b2">
                                                        
                                                    </div>
                                                    <div class="tab-pane" id="planos-b2">
                                                        <select name="plano" id="plano" class="form-control">
                                                            @foreach ($planos as $plano)
                                                                <option value="{{ $plano->codigo }}">{{$plano->nome}} - R$ {{str_replace_last('.',',',$plano->valor)}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        
                                
                                    
                               
                            </div>
                        </div>
                        <!-- end row -->

                        
                        

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

       

        <!-- App js -->
        <script src="{{ asset('public/js/jquery.core.js') }}"></script>
        <script src="{{ asset('public/js/jquery.app.js') }}"></script>

    </body>
</html>