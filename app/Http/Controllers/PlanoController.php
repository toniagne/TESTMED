<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plano;
use App\User;

use DB;
use Validator;
use Input;


class PlanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //
         $planos = Plano::all();

         return view('application.plano.index', compact('planos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('application.plano.create');
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
        $request->validate([
            'tipo'=>'required|string',
            'nome'=>'required|string',
            'valor'=> 'required|string'
          ]);
          $planos = new Plano([
            'tipo' => $request->get('tipo'),
            'nome' => $request->get('nome'),
            'valor'=> $request->get('valor'),
           
          ]);
          $planos->save();
          return redirect('/plano')->with('success', 'Adicionado com sucesso!');
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

        $plano = Planos::find($id);

        return view('application.plano.edit', compact('plano'));
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
            'nome'=>'required|string',
            'descricao'=> 'required|string',
            'status' => 'required|integer'
          ]);
    
          $prova = Provas::find($id);
          $prova->nome = $request->get('nome');
          $prova->descricao = $request->get('descricao');
          $prova->status = $request->get('status');
          $prova->save();
    
          return redirect('/planos')->with('success', 'Stock has been updated');
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
   
        public static function contagem(){
            $planos = DB::table('planos')->count();
    
            return $planos;
        }
    
    //LISTAGEM DE PLANOS
    public static function listar(){
        $planos = DB::select('select * from planos');

        return $planos;
    }

    public static function valorEmPlanos(){
        $vlr = DB::table('planos_usuario')
            ->join('planos', 'planos.codigo', '=', 'planos_usuario.codigo_plano')           
            ->select('planos_usuario.*')
            ->sum('valor');
        return $vlr;
    }

    public static function selecionar(Request $request){
        
        try{
            DB::table('users')
            ->where('id', $request->get('id_usuario'))
            ->update(['id_plano' => $request->get('codigo')]);
          }
          catch(\Exception $e){
          
              echo $e->getMessage();   // insert query
              die();
          }
          
          DB::table('planos_usuario')->insert(
            ['codigo_usuario' => $request->get('id_usuario'), 'codigo_plano' => $request->get('codigo'),'created_at' => now()]
        );

        DB::table('pagamentos')->insert(
            ['id_plano' => $request->get('codigo'), 'id_usuario' => $request->get('id_usuario'),'status' => 1]
    );
        
       
        return redirect('/plano')->with('success', 'Plano cadastrado com sucesso!');
    }
}
