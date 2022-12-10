<?php

namespace App\Http\Controllers;

use App\Models\jogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class jogosController extends Controller
{
    public function index(){
        
      $jogos = jogo::all();   
    //dd($jogos);  
       return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create(){
        return view('jogos.create');
    }

    public function store(Request $request){
        jogo::create($request->all());
        return redirect()->route('jogos-index');
    }

    public function edit($id){
        $jogos = jogo::where('id',$id)->first();
        
        if(!empty($jogos)){
            return view('jogos.edit', ['jogos' => $jogos]);
        }else{
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $request, $id){
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'lancamento' => $request->lancamento,
            'valor' => $request->valor
        ];
        jogo::where('id', $id)->update($data);
        return redirect()->route('jogos-index');
        
    }

    public function destroy($id){
        jogo::where('id', $id)->delete();
        return redirect()->route('jogos-index');
    }

    public function error(){
        return view('notfound');
    }
}


/*
  class jogosController extends Controller
{
    public function index(){
       //dd("Hello World!");
            // Parâmetros pelo Controller
                $name = 'Felipe';
                $id = 1;
       return view('jogos/index', ['name' => $name, 'id' => $id]);
    }

    public function error(){
        return view('notfound');
    }
}
 */
