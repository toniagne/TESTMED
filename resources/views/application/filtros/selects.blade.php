
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
<option value="TODOS">TODOS</option>
@foreach( $bancas as $banca )
         <option value="{{ $banca->id }}">{{ $banca->banca }}</option>
@endforeach