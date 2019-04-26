@php
use App\Http\Controllers\ProvasController;
use App\Http\Controllers\QuestoesController;
use App\Estados;
use App\Anos;
use App\Banca;
use App\Disciplina;
use App\Especialidade;
use App\Http\Controllers\RespostasController;

@endphp

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