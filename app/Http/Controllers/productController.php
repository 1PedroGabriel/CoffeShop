<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{

    //Esta função create é atribuída a criação de produto (cadastro de produto),
    //ela irá retornar a vizualização (view) da página de cadastro de produto.
    public function create(){

        return view("createProduct");

    }

    public function store(Request $request){
        
        $produto = $request->all();
        
        dd($produto);
    }

}
