@php
use App\Http\Controllers\QuestoesController;
use App\Http\Controllers\RespostasController;
$questoes = QuestoesController::questoesProva($prova->id);    
$color = null;
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
                            <li>
                                <label>
                                    <input type="radio" name="answerGroup_{{$questao->id}}" value="{{$resposta->codigo}}" id="answerGroup_{{$resposta->codigo}}"> {{$resposta->resposta}}
                                </label>
                            </li>
                        @endforeach   
                            
                        </ul>
                       
                    </div>
                </div>
             @endif
             @endforeach   
             <div class="questionsRow"><a href="#" class="button" id="nextquestions">ENTREGAR AVALIAÇÃO</a> <span>TOTAL: <?php echo array_sum($somaquestoes);?></span></div>
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

<script src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script src="{{asset('public/js/jquery.sweet-alert.init.js')}}"></script>

<!-- App js -->
<script src="{{ asset('public/js/jquery.core.js') }}"></script>
<script src="{{ asset('public/js/jquery.app.js') }}"></script>
        <script>
            function responder(param){
                if($(param).data('right')== true){
                    param.classList.add('btn-success');  
                } else{
                    param.classList.add('btn-danger');  
                }                           
            }  
        
        </script>
