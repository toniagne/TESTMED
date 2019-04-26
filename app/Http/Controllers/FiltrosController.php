<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Estados;
use App\Anos;
use App\Bancas;
use App\Disciplina;
use App\Especialidade;
use App\Questoes;

class FiltrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
    function questoes( Request $request ){
        

        if ($request->get('bancas') == "TODOS"): $bancasT = "like"; else: $bancasT = "="; endif;
        $questoes = DB::table('questoes')
        ->where('questoes.deleted','=',0)
        ->where('estado', '=', $request->get('estados'))
        ->where('banca', $bancasT, $request->get('bancas'))
        ->join('provas', 'provas.id', '=', 'questoes.codigo_prova')    
        ->join('statusQuestao', 'statusQuestao.codigo', '=', 'questoes.status')    
        ->select('questoes.*', 'provas.nome','statusQuestao.descricao')
        ->get();

        print-r($questoes);

        if (empty($questoes)):
            return view('application.filtros.aviso');
        else:
        return view('application.filtros.questoes', compact('questoes'));
        endif;
    }

    function selects( Request $request){
        $bancas = DB::table('bancas')
        ->where('bancas.status','=',1)
        ->where('bancas.estado','=',$request->get('estados'))
        ->get();
        return view('application.filtros.selects', compact('bancas'));
       
    }

    function estados( Request $request )
    {      
        $estados = Estados::where('', $request->get('id') )->get();
        
        $output = [];
        foreach( $estados as $estado )
        {
            $output[$estado->id] = $estado->nome;
        }
        return $output;
    }

    function anos( Request $request )
    {      
        $anos = Anos::where('', $request->get('id') )->get();
        
        $output = [];
        foreach( $anos as $ano )
        {
            $output[$ano->id] = $ano->ano;
        }
        return $output;
    }

    function bancas( Request $request )
    {      
        $bancas = Banca::where('', $request->get('id') )->get();
        
        $output = [];
        foreach( $bancas as $banca )
        {
            $output[$banca->id] = $banca->banca;
        }
        return $output;
    }
    function disciplinas( Request $request )
    {      
        $disciplinas = Disciplina::where('', $request->get('id') )->get();
        
        $output = [];
        foreach( $disciplinas as $disciplina )
        {
            $output[$disciplina->id] = $disciplina->descricao;
        }
        return $output;
    }
    function especialidades( Request $request )
    {      
        $especialidades = Especialidade::where('', $request->get('id') )->get();
        
        $output = [];
        foreach( $especialidades as $especialidade )
        {
            $output[$especialidade->id] = $especialidade->nome;
        }
        return $output;
    }
}
