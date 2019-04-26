@php
use App\Http\Controllers\ProvasController;
use App\Estados;
use App\Anos;
use App\Banca;
use App\Disciplina;
use App\Especialidade;

$provas = ProvasController::listar($_GET);

@endphp
<!DOCTYPE html>
<html lang="pt-br">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    
	    <link rel="shortcut icon" href="images/favicon.ico">

	    <title>Testmed</title>


                <!-- App css -->
                <link href="{{ URL::asset('public/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ URL::asset('public/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
				<link href="{{ URL::asset('public/css/website/style.css') }}" rel="stylesheet" type="text/css" />
				
				<link href="{{ URL::asset('public/plugins/slick-slider/slick.css') }}" rel="stylesheet" type="text/css" />
				<link href="{{ URL::asset('public/plugins/slick-slider/slick-theme.css') }}" rel="stylesheet" type="text/css" />

    </head>



	<body>

		<header>
			<section class="hero">
				<!-- Navbar -->
		       <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h1 class="display-4">Full Page Image Slider</h1>
    <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>, taken by <a href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p>
  </div>
</section>
		</header>




		<section class="section features" id="who">
			<div class="container text-center">

				<div class="row">
					<div class="col-sm-12">
						<h2 class="title">Quem Somos</h2>
						<p class="slogan">O Testmed é uma plataforma que permite a otimização de seu estudo atráves da escolha de questões e provas a resolver de acordo com a sua necessidade. Assim você ganha tempo e aumenta sua chance de aprovação.</p>
					</div>
				</div> <!-- End row -->

				<div class="row p-t-50">
		            <div class="col-sm-4">
		                <div class="features-2">
		                    <img src="{{ asset('public/images/icons/DocumentEdit.png')}}" alt="">
		                </div>
		                <div>
			                <h4>Escolha de questões e provas</h4>
			                <p>Autonomia para escolha de provas e questões de acordo com suas necessidades.</p>
		                </div>
		            </div> <!-- end col -->

		            <div class="col-sm-4">
		                <div class="features-2">
		                    <img src="{{ asset('public/images/icons/Success.png')}}" alt="">
		                </div>
		                <div>
			                <h4>Aprovação</h4>
			                <p>Testmed aumenta as suas chances de aproação em concursos e processos seletivos.</p>
		                </div>
		            </div> <!-- end col -->

		            <div class="col-sm-4">
		                <div class="features-2">
		                	<img src="{{ asset('public/images/icons/Sandglass.png')}}" alt="">
		                </div>
		                <div>
			                <h4>Autonomia e praticidade</h4>
			                <p>Ganho de tempo, informações centralizadas e apenas um click de distância.</p>
		                </div>
	                </div> <!-- end col -->

				</div> <!-- End row -->
				

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
													<a class="dropdown-item" href="http://testmed.com.br/provas/{{$prova->id}}/edit">Editar</a>                                                
													</div>
												</div>
											<div class="ribbon ribbon-custom">{{$prova->nome}}</div>
											<p class="m-b-0">{{$prova->descricao}}</p>
									</div>       
							</div>
		
										 
							@endforeach
							<!-- End row -->
						</div>


	            
			</div>
		</section> 
		<!-- features -->





		<section class="content-wrap bg-light section pb0" id="question">
			
		</section>
		<!-- end Features -->




		<section class="section pb0" id="contact">
		    
		</section>
		<!-- END Pricing -->


		<section class="section" id="faq">
		  
		</section>
		<!-- END Pricing -->



<!--
		<section class="bg-light section" id="clients">
	        <div class="container">
	        	<div class="row text-center">
					<div class="col-sm-12">
						<h2 class="title">Trusted by Thousands</h2>
						<p class="slogan">Lorem ipsum dolor sit amet, consectetur adipis.</p>
						<ul class="list-inline client-list pt40">
							<li class="list-inline-item"><a href="" title="Microsoft"><img src="{{ asset('public/images/clients/microsoft.png')}}" alt="clients"></a></li>
							<li class="list-inline-item"><a href="" title="Google"><img src="{{ asset('public/images/clients/google.png')}}" alt="clients"></a></li>
							<li class="list-inline-item"><a href="" title="Instagram"><img src="{{ asset('public/images/clients/instagram.png')}}" alt="clients"></a></li>
							<li class="list-inline-item"><a href="" title="Converse"><img src="{{ asset('public/images/clients/converse.png')}}" alt="clients"></a></li>
						</ul>
					</div> 
				</div> 
	        </div>
	    </section>
	     End Clients -->




	    <footer class="footer">
	        <div class="container">
				<div class="row">
					<div class="col-md-6">
						<a class="navbar-brand-footer" href="#"><img src="{{ asset('public/images/logo.png')}}" alt="logo" height="28"></a>
						<span class="text-muted ml-3"> © 2017 - 2018.</span>
                    </div>
                    <div class="col-md-6">
						<ul class="social-icons text-md-right">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div> <!-- end row -->
			</div> <!-- end container -->
	    </footer>
	    <!-- End Footer -->




        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script><!-- Popper for Bootstrap -->
        <script src="{{ asset('public/js/jquery.easing.1.3.min.js') }}"></script>

		<script src="{{ asset('public/plugins/slick-slider/slick.min.js') }}"></script>
		<script src="{{ asset('public/pages/jquery.slider.init.js') }}"></script>

	    

	    




	</body>
</html>