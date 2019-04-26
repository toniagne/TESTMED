<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;
use App\PagamentoStatus;
use \Auth;


use DB;
use Validator;
use Input;

class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pagamento = DB::table('pagamentos')
            ->join('planos', 'planos.codigo', '=', 'pagamentos.id_plano')    
            ->join('pagamentos_status', 'pagamentos_status.id', '=', 'pagamentos.status')         
            ->where('id_usuario',Auth::user()->id)->select('pagamentos.id as idpagamento','pagamentos.created_at as pagoem','pagamentos.status','planos.codigo as planocod','planos.*','pagamentos_status.descricao as descplano')->get();
       
       return view('application.pagamento.index', compact('pagamento'));
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
        //
    }
}
