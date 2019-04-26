<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Validator;
use Input;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
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
    public function edit(Request $request, $id)
    {
        DB::table('users')
        ->where('id', 1)
        ->update(['name' => $request->inputNome, 'email' => $request->inputEmail]);


        return redirect($request->return)->with('sucesso', 'Informações salvas com sucesso');;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function update(Request $request, $id)
    {
        dd($request);
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


     //LISTAGEM DE USUARIO
     public static function listar(){
        $users = DB::select('select id,name,email from users');

        return $users;
    }


    public static function detalhesUser($id){
        
        $users = DB::select(DB::raw('select * from users where id = :somevariable'),array('somevariable'=>$id));

        return $users;
    }

    public static function contagem(){
        
        $users = DB::table('users')->count();

        return $users;
    }

    public function doRegister(Request $request){

       $request->all();

       $rules = array(
        'password' => 'required|min:25' // password can only be alphanumeric and has to be greater than 3 characters
    );
    
    // run the validation rules on the inputs from the form
    $validator = validator( $request->all(), $rules);

    dd($validator);
        
       
       
    
    }
}
