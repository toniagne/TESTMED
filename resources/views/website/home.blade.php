@php
use App\Http\Controllers\ProvasController;
use App\Http\Controllers\QuestoesController;
use App\Estados;
use App\Anos;
use App\Banca;
use App\Disciplina;
use App\Especialidade;
use App\Http\Controllers\RespostasController;
$questoes = QuestoesController::listar($_GET);
$provas = ProvasController::listar($_GET);

@endphp
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Testmed</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/site/css/plugins-css.css') }}" />

<!-- revoluation -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/site/revolution/css/settings.css') }}" media="screen" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/site/css/typography.css') }}" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/site/css/shortcodes/shortcodes.css') }}" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/site/css/style.css') }}" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/site/css/responsive.css') }}" /> 
  
</head>

<body>
 
<div class="wrapper"><!-- wrapper start -->

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="{{ URL::asset('public/site/images/pre-loader/loader-01.svg') }}" alt="">
</div>

<!--=================================
 preloader -->

 
<!--=================================
 header -->

<style>

ul.alternativeList {
    margin-right: 1em;
    list-style: upper-alpha;
    width:100%;
}

.alternativeList-item{
    
    position: relative;
    border: solid 2px #edf1f2;
    color: #6e757a;
    padding-left: 5px;
    font-size: 17px;
    width:100%;

}
.pergunta{
    font-size:18px;
}

.privew {
    margin-bottom: 20px;
}
.questionsBox {
    display: block;
    border: solid 1px #e3e3e3;
    padding: 10px 20px 0px;
    box-shadow: inset 0 0 30px rgba(000,000,000,0.1), inset 0 0 4px rgba(255,255,255,1);
    border-radius: 3px;
    margin: 0 10px;
}.questions {
    background: #007fbe;
    color: #FFF;
    font-size: 22px;
    padding: 8px 30px;
    font-weight: 300;
    margin: 0 -30px 10px;
    position: relative;
}
.questions:after {
    background: url(../img/icon.png) no-repeat left 0;
    display: block;
    position: absolute;
    top: 100%;
    width: 9px;
    height: 7px;
    content: '.';
    left: 0;
    text-align: left;
    font-size: 0;
}
.questions:after {
    left: auto;
    right: 0;
    background-position: -10px 0;
}
.questions:before, .questions:after {
    background: black;
    display: block;
    position: absolute;
    top: 100%;
    width: 9px;
    height: 7px;
    content: '.';
    left: 0;
    text-align: left;
    font-size: 0;
}
.answerList {
    margin-bottom: 15px;
}


ol, ul {
    list-style: none;
}
.answerList li:first-child {
    border-top-width: 0;
}

.answerList li {
    padding: 3px 0;
}
.answerList label {
    display: block;
    padding: 6px;
    border-radius: 6px;
    border: solid 1px #dde7e8;
    font-weight: 400;
    font-size: 13px;
    cursor: pointer;
    font-family: Arial, sans-serif;
}
input[type=checkbox], input[type=radio] {
    margin: 4px 0 0;
    margin-top: 1px;
    line-height: normal;
}
.questionsRow {
    background: #dee3e6;
    margin: 0 -20px;
    padding: 10px 20px;
    border-radius: 0 0 3px 3px;
}
.button, .greyButton {
    background-color: #f2f2f2;
    color: #888888;
    display: inline-block;
    border: solid 3px #cccccc;
    vertical-align: middle;
    text-shadow: 0 1px 0 #ffffff;
    line-height: 27px;
    min-width: 160px;
    text-align: center;
    padding: 5px 20px;
    text-decoration: none;
    border-radius: 0px;
    text-transform: capitalize;
}
.questionsRow span {
    float: right;
    display: inline-block;
    line-height: 30px;
    border: solid 1px #aeb9c0;
    padding: 0 10px;
    background: #FFF;
    color: #007fbe;
}

</style>

<header id="header" class="header default">
   

<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="/"><img id="logo_img" src="{{ asset('public/images/logo.png')}}" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
         <ul class="menu-links">
		 		<li class="nav-item active">
		                            <a class="nav-link" href="#who">Quem Somos</a>
		                        </li>
		                        <li class="nav-item">
		                            <a class="nav-link" href="#question">Dúvidas</a>
		                        </li>
		                        <li class="nav-item">
		                            <a class="nav-link" href="#contact">Contato</a>
		                        </li>
		                        <li class="nav-item">
		                            <a class="nav-link" href="{{ route('register') }}">Cadastrar</a>
		                        </li>
		                        <li class="nav-item">
		                            <a class="nav-link" href="{{ route('login') }}">Log In</a>
		                        </li>
         </ul>
        
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->

 
<!--=================================
 banner -->
 
 <section class="rev-slider">
  <div id="rev_slider_267_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="webster-slider-1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
  <div id="rev_slider_267_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
<ul>  
	<!-- SLIDE  -->
    <li data-index="rs-755" data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"  data-thumb="revolution/assets/slider-01/70x70_1a353-01.jpg"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<img src="{{ asset('public/images/stock3.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
  	</li>
  <!-- SLIDE  -->
     
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
</div>   
</section>
 
 
   
 <br><br>
 
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
				
 
		</section> 
		<!-- features -->

 <!--=================================
 Our Testimonial -->

<section class="page-section-ptb gray-bg">
  <div class="container">
     <div class="row">
     <div class="col-lg-12 col-md-12">
         <div class="section-title text-center">
            <h6>Questões</h6>
            <h2 class="title-effect">Responda as questões</h2>
          </div>
       </div>
    </div>
    <div class="row">
    <div class="container-fluid bg-light ">
	<div class="row align-items-center justify-content-center">
            	        <div class="col-md-2 pt-2">
                           <div class="form-group ">
                              <label class="filter-col" style="margin-right:0;" for="estados">Estados:</label>
                              <select id="estados" class="form-control" style="height: 50px;">
                                <option selected>TODOS</option>
                                    @foreach( Estados::get() as $estados )
                                          <option value="{{ $estados->id }}">{{ $estados->nome }}</option>
                                    @endforeach
                              </select>
                           </div>
                        </div>
                		<div class="col-md-2 pt-2">
                           <div class="form-group">
                           <label class="filter-col" style="margin-right:0;" for="bancas">Bancas:</label>
                               <select id="bancas" class="form-control" style="height: 50px;">
                                <option selected>TODOS</option>
                                 @foreach( Banca::get() as $bancas )
                                    <option value="{{ $bancas->id }}">{{ $bancas->banca }}</option>
                                @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="col-md-2 pt-2">
                            <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="diciplina">Diciplinas:</label>
                              <select id="diciplinas" class="form-control" style="height: 50px;">
                                <option selected>TODOS</option>
                                @foreach( Disciplina::get() as $diciplinas )
                                    <option value="{{ $diciplinas->id }}">{{ $diciplinas->descricao }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="col-md-2 pt-2">
                            <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="especialidade">Especialidade:</label>
                              <select id="especialidades" class="form-control" style="height: 50px;">
                                <option selected>TODOS</option>
                                @foreach( Especialidade::get() as $especialidade )
                                    <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="col-md-2 pt-2">
                            <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="ano">Ano:</label>
                              <select id="anos" class="form-control" style="height: 50px;">
                                <option selected>TODOS</option>
                                @foreach( Anos::get() as $ano )
                                    <option value="{{ $ano->id }}">{{ $ano->ano }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="col-md-2">
            	           <button type="button" class="btn btn-primary btn-block">FILTRAR</button>
            	        </div>
                	</div>
</div>
    
    <div class="col-lg-12 col-md-12">


        <div id = "result" class="owl-carousel" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
        
        @csrf
            @php 
            $i=0; 
            @endphp
                   
             @foreach ($questoes as $questao)             
             @if ($questao->deleted == 1)
             @else
             @php
                $i++;
                $somaquestoes[] = $i;
            @endphp

                <div class="privew">
                    <div class="questionsBox">
                        <div class="questions"><b>{{$i}}</b>| {{$questao->enunciado}}</div>
                        <ul class="answerList">
                        @php 
                            $respostas = Respostascontroller::respostasQuestao($questao->id); 
                        @endphp
                        @foreach($respostas as $resposta)
                        <li class="answerGroup{{$resposta->codigo}}">
                                <label>
                                    <input type="radio" name="answerGroup_{{$questao->id}}" value="{{$resposta->codigo}}_{{$resposta->correta}}_{{$questao->id}}" id="respostas"> {{$resposta->resposta}}
                                </label>
                            </li>
                        @endforeach   
                            
                        </ul>
                        <div class="questionsRow"><button class="button" id="responder">RESPONDER</button> <span> </span></div>
                    </div>
                </div>
             @endif
             @endforeach 
      
  
    </div>  
   </div>
 </div>
</section>     

 <!--=================================
 Our Testimonial -->



  
  

<!--=================================
 footer -->
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
<!--=================================
 footer -->
 
</div><!-- wrapper End -->

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 javascripts -->

 

<!-- jquery -->
<script src="{{ URL::asset('public/site/js/jquery-3.3.1.min.js') }}"></script>

<!-- All plugins -->
<script src="{{ URL::asset('public/site/js/plugins-jquery.js') }}"></script>

<!-- Plugins path -->
<script>var plugin_path = "{{ URL::asset('public/site/js/') }}/";</script>

<!-- REVOLUTION JS FILES -->
<script src="{{ URL::asset('public/site/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ URL::asset('public/site/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ URL::asset('public/site/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ URL::asset('public/site/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ URL::asset('public/site/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ URL::asset('public/site/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ URL::asset('public/site/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ URL::asset('public/site/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ URL::asset('public/site/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ URL::asset('public/site/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ URL::asset('public/site/js/extensions/revolution.extension.video.min.js') }}"></script>

<!-- revolution custom --> 
<script src="{{ URL::asset('public/site/revolution/js/revolution-custom.js') }}"></script> 

<!-- custom -->
<script src="{{ URL::asset('public/site/js/custom.js') }}"></script>


<script>
$.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': '<?php echo csrf_token() ?>'
        }
    });

$('#estados').change(function() 
{

    $.ajax
    ({ 
        url: 'get/selects',
        data: {
                "estados": $("#estados").val()                
                },
        type: 'post',
        success: function(data)
        {
            $("#bancas").html(data);
        }
    });
});


$('button').click(function() 
{

    $.ajax
    ({ 
        url: 'get/questoes',
        data: {
                "estados": $("#estados").val(), 
                "bancas":$("#bancas").val(), 
                "diciplinas":$("#diciplinas").val(),
                "especialidades":$("#especialidades").val(),
                "anos":$("#anos").val()
                
                },
        type: 'post',
        success: function(data)
        {
            $("#result").html(data);
        }
    });
});
</script>

</body>
</html> 