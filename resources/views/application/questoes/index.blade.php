@php
use App\Estados;
use App\Provas;
use App\Anos;
use App\Banca;
use App\Disciplina;
use App\Especialidade;
use App\Http\Controllers\RespostasController;
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
<style>
.filter-col{
    padding-left:10px;
    padding-right:10px;
}
</style>
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
                        <h4 class="page-title float-left">Questões </h4>                            
                        <div class="clearfix"></div>
                    </div>
                </div>    

                    <div class="row">
                        
                        <div class="panel panel-default">
                            <div class="panel-body">                            
                                <form class="form-inline" role="form">
                                    <div class="form-group">                                       
                                        @if(Auth::user()->tp_user == 1) 
                                        <a href="{{route('questoes.create')}}" class="btn btn-outline-primary filter-col">+ ADICIONAR QUESTÕES</a>
                                        @endif                            
                                    </div>
                                    <div class="form-group">
                                        <label class="filter-col" style="margin-right:0;" for="pref-perpage">Nº Questões:</label>
                                        <select id="pref-perpage" class="form-control">                               
                                            <option selected="selected" value="10">10</option>
                                            <option value="50">50</option>
                                            <option value="50">100</option>
                                        </select>                                
                                    </div> <!-- form group [rows] -->
                                    <div class="form-group">
                                        <label class="filter-col" style="margin-right:0;" for="pref-search">Assunto:</label>
                                        <input type="text" class="form-control input-sm" id="pref-search">
                                    </div><!-- form group [search] -->
                                    <div class="form-group">
                                        <select name="especialidade" id="especialidade" class="form-control  input-sm">
                                                        <option value="">Especialidade</option>
                                                        @foreach( Especialidade::get() as $especialidade )
                                                            <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                                                        @endforeach
                                        </select>                                
                                    </div> <!-- form group [order by] --> 
                                    <div class="form-group">   
                                        <button type="submit" class="btn btn-default filter-col">
                                            <span class="glyphicon glyphicon-record"></span> FILTRAR
                                        </button>                             
                                    </div>
                                </form>
                                <br>
                            </div>
                        </div>
                        
	                </div>
                  
                
                <!-- end row -->

 
                <div class="row">
                    <div class="col-lg-12">
                    
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
                    <!-- End row -->
                </div>


            </div> <!-- container -->

           
        </div> <!-- content -->


        <footer class="footer text-right">
            <?php echo date('Y') ?> - TestMed
        </footer>
        <script src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script src="{{asset('public/js/jquery.sweet-alert.init.js')}}"></script>

<!-- App js -->
<script src="{{ asset('public/js/jquery.core.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script type='text/javascript'>
// <![CDATA[
jQuery(document).ready(function(){
     
$('input:button[id="responder"]').click(function(){
    $("input:checked"). val();
    /*
    var resposta = $(this).val();
    var retorno = resposta.split("_");
    if (retorno[1] == 1){  
        $('.answerGroup'+retorno[0]).css({"border-style":"solid", "border-color":"green"});
    } else {
        $.ajax({
				type: 'get',
				url: 'questoes/correta/'+retorno[2], 
				success: function (data) {
                    $('.answerGroup'+retorno[0]).css({"border-style":"solid", "border-color":"red"});
                    $('.answerGroup'+data).css({"border-style":"solid", "border-color":"green"});
				}
			});
 
    }
    //alert("teste");
    */
});

});

// ]]> 
        $( document ).ready(function() {            
            $('.btn-delete').on("click", function(e) {
                e.preventDefault();
                var form = $(this).parents('form');   
                swal({
                    title: "Deseja mesmo deletar essa questão?",
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

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

