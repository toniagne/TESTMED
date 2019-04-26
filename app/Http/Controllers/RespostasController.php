<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Respostas;

use DB;
use Validator;
use Input;

class RespostasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        return view('application.respostas.create', compact('id'));
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
        try{
            $request->validate([
                'codigo_questoes'=>'required',
                'resposta'=> 'required'
            ]);
                
            for($i=0;$i<count($request->input('resposta'));$i++)
            {                
               DB::table('respostas')->insert([
                    'codigo_questoes' => $request->input('codigo_questoes'),
                    'resposta' => $request->input('resposta')[$i],
                    'correta' => $request->input('correta')[$i]
                ]);
            }
           
           
          }catch(\Exception $e){
            
            echo $e->getMessage();   // insert query
            die();
         }
          return redirect('/questoes')->with('success', 'Adicionada com sucesso!');
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
        //
    }

    public static function respostasQuestao($idQuestao){
        
        $respostas = DB::select(DB::raw('select * from respostas where codigo_questoes = :idQuestao and deleted=0'),array('idQuestao'=>$idQuestao));

        return $respostas;
    }
}
