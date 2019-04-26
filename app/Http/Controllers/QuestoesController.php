<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questoes;
use DB;
use Validator;
use Input;

class QuestoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //
        $questoes = DB::table('questoes')
        ->where('questoes.deleted','=',0)
        ->join('provas', 'provas.id', '=', 'questoes.codigo_prova')    
        ->join('statusQuestao', 'statusQuestao.codigo', '=', 'questoes.status')    
        ->select('questoes.*', 'provas.nome','statusQuestao.descricao')
        ->get();
        return view('application.questoes.index', compact('questoes'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('application.questoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo_prova'=>'required|integer',
            'titulo'=> 'required|string',      
            'enunciado'=> 'required|string',        
            'status' => 'required|integer',
            'estado' => 'required|integer',
            'ano' => 'required|integer',
            'banca' => 'required|integer',
            'disciplina' => 'required|integer'
          ]);
          $questao = new Questoes([
            'codigo_prova' => $request->get('codigo_prova'),
            'titulo'=> $request->get('titulo'),
            'enunciado'=> $request->get('enunciado'),
            'status'=> $request->get('status'),
            'estado'=> $request->get('estado'),
            'ano'=> $request->get('ano'),
            'banca'=> $request->get('banca'),
            'disciplina'=> $request->get('disciplina'),
          ]);
          try{
              $questao->save();
            }
            catch(\Exception $e){
            
                echo $e->getMessage();   // insert query
                die();
            }
          return redirect('/questoes')->with('success', 'Adicionado com sucesso!');
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

    public function filtro()
    {
        print_r($_POST);
    }

    public function entrega(Request $request)
    {
        $acerto = array();
        foreach ($_POST as $key => $itens):
           
            $questaoMarcada =  explode("_", $key);
            $respostaCorret =  explode("_", $itens);
            if ($questaoMarcada[1] == "token"): else:
                if ($respostaCorret[1] == 1): $acerto[] = 1; else: endif;
                $questoes[] = 1;
            $itensMarcados[] = array("questao_id" => $questaoMarcada[1], "resposta" => $respostaCorret[0], "correta"=> $respostaCorret[1]);
            endif;
        endforeach;
       
        $percentual1 = array_sum($acerto) * 100;
        $percentual = $percentual1 / array_sum($questoes); 
        return view('application.questoes.entrega', compact('percentual'));
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
        $questao = Questoes::find($id);

        return view('application.questoes.edit', compact('questao'));
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
        $request->validate([
            'codigo_prova' => 'required|integer',
            'titulo'=> 'required|string',
            'enunciado'=> 'required|string',
            'status' => 'required|integer'
          ]);
    
          $questao = Questoes::find($id);
          $questao->codigo_prova = $request->get('codigo_prova');
          $questao->titulo = $request->get('titulo');
          $questao->enunciado = $request->get('enunciado');
          $questao->status = $request->get('status');
          $questao->save();
    
          return redirect('/questoes')->with('success', 'Questão foi atualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questao = Questoes::find($id);
        $questao->deleted = 1;
        $questao->save();      

     return redirect('/questoes')->with('success', 'Questão deletada com sucesso');
    }

    
    public static function detalhesQuestao($id){
        
        $questoes = DB::select(DB::raw('select * from questoes where id = :id_questao'),array('id_questao'=>$id));

        return $questoes;
    }

    public static function listar(){
        
        $questoes = DB::select('select * from questoes');
    
        return $questoes;
    }

    public static function questoesProva($idProva){
        
        $questoes = DB::select(DB::raw('select * from questoes where codigo_prova = :id_prova'),array('id_prova'=>$idProva));

        return $questoes;
    }
}
