<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provas;

use DB;
use Validator;
use Input;



class ProvasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         //
        $query= array();
        if(!empty($request->input('estado')))
        {   
            $state = array('estado',$request->input('estado'));
            array_push($query,$state);
        }

        if(!empty($request->input('ano')))
        {
            $year = array('ano',$request->input('ano'));
            array_push($query,$year);
        }
        if(!empty($request->input('banca')))
        {
            $bank = array('banca',$request->input('banca'));
            array_push($query,$bank);
        }
        if(!empty($request->input('disciplina')))
        {
            $disp = array('disciplina',$request->input('disciplina'));
            array_push($query,$disp);
        }
        //apenas nao deletadas
        $disp = array('provas.deleted',0);
        array_push($query,$disp);

        $provas = DB::table('provas')
        ->leftJoin('questoes', 'questoes.codigo_prova', '=', 'provas.id')    
        ->select('provas.*')        
        ->where($query)
        ->groupBy('provas.id')
        ->get();
         return view('application.prova.index', compact('provas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('application.prova.create');
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
            'nome'=>'required|string',
            'descricao'=> 'required|string',
            'status' => 'required|integer'
          ]);
          $provas = new Provas([
            'nome' => $request->get('nome'),
            'descricao'=> $request->get('descricao'),
            'status'=> $request->get('status'),
          ]);
          $provas->save();
          return redirect('/provas')->with('success', 'Adicionada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('application.prova.exibir', ['prova' => Provas::findOrFail($id)]);
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

        $prova = Provas::find($id);

        return view('application.prova.edit', compact('prova'));
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
    
          return redirect('/provas')->with('success', 'Prova foi atualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prova = Provas::find($id);
        $prova->deleted = 1;
        $prova->save();
        $this->destroyQuestoes($id);

     return redirect('/provas')->with('success', 'Prova deletada com sucesso');
    }

    public static function detalhesProva($id){
        
        $prova = DB::select(DB::raw('select * from provas where codigo = :somevariable'),array('somevariable'=>$id));

        return $prova;
    }

    public static function listar($request)
    {
         //

         
         $query= array();
        if(!empty($request['estado']))
        {   
            $state = array('estado',$request['estado']);
            array_push($query,$state);
        }

        if(!empty($request['ano']))
        {
            $year = array('ano',$request['ano']);
            array_push($query,$year);
        }
        if(!empty($request['banca']))
        {
            $bank = array('banca',$request['banca']);
            array_push($query,$bank);
        }
        if(!empty($request['disciplina']))
        {
            $disp = array('disciplina',$request['disciplina']);
            array_push($query,$disp);
        }

        $provas = DB::table('provas')
        ->leftJoin('questoes', 'questoes.codigo_prova', '=', 'provas.id')    
        ->select('provas.*')        
        ->where($query)
        ->groupBy('provas.id')
        ->get();

        return view('website.home', compact('provas'));
    }

        public static function contagem(){
            $provas = DB::table('provas')->where('deleted','=','0')->count();
    
            return $provas;
        }

        public static function all(){
        
            $provas = DB::table('provas')->select('*')->where('deleted','=','0')->get();
    
        
            return $provas;
        }


        public static function destroyQuestoes($idProva){
        
            DB::table('questoes')
            ->where('codigo_prova', $idProva)
            ->update(['deleted' => 1]);           
        }

        public static function destroyRespostas($idQuestao){
        
            $questaoId = DB::table('questoes')                    
                    ->where('codigo_prova', '=', $idProva)
                    ->get();
            
        }
}
