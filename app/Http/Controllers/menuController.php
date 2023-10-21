<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class menuController extends Controller
{
    public function index(){

        $produtos = Produto::all();
        return view("menu")
                ->with('produtos', $produtos);
    }

    public function create(Request $request){

        $request->validate([
            'nome' => ['required'],
            'categoria' => ['required'],
            'preco' => ['required'],
        ]);

        $newProduct = $request->only(['nome', 'categoria', 'preco']);
        
        Produto::create($newProduct);
        
        return redirect('/menu');
    }
    public function show(Request $request){


        $produto = Produto::all()->where('id', $request->id)->first();
        
      
        return view('menuShow')
                    ->with('produto',$produto);
          
    
    }

}
