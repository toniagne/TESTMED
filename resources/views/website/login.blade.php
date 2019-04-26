<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login - TestMed</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('public/js/modernizr.min.js') }}"></script>

    </head>


    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="index.html" class="text-success">
                                                <span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
                                            </a>
                                        </h2>
                                        <h5 class="text-uppercase font-bold m-b-5 m-t-50">Entrar</h5>
                                        <p class="m-b-0">Acesse seu painel administrativo</p>
                                    </div>
                                    <div class="account-content">
                                        <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="emailaddress">E-mail</label>
                                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="teste@teste.com">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <!--<a href="page-recoverpw.html" class="text-muted pull-right"><small>Forgot your password?</small></a>-->
                                                    <label for="password">Senha</label>
                                                    <input class="form-control" type="password" required="" id="password" placeholder="Digite sua senha">
                                                </div>
                                            </div>

                                            <!--<div class="form-group row m-b-20">
                                                <div class="col-12">

                                                    <div class="checkbox checkbox-success">
                                                        <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            Remember me
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>-->

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign In</button>
                                                </div>
                                            </div>

                                        </form>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="text-center">
                                                    <button type="button" class="btn m-r-5 btn-facebook waves-effect waves-light">
                                                        <i class="fa fa-facebook"></i>
                                                    </button>
                                                    <button type="button" class="btn m-r-5 btn-googleplus waves-effect waves-light">
                                                        <i class="fa fa-google"></i>
                                                    </button>
                                                    <button type="button" class="btn m-r-5 btn-twitter waves-effect waves-light">
                                                        <i class="fa fa-twitter"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row m-t-50">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted">Ainda não tem um caonta? <a href="{{route('register')}}" class="text-dark m-l-5"><b>Cadastrar</b></a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->



        <script>
            var resizefunc = [];
        </script>

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
</html>a