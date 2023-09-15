<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProdutoController extends Controller
{
    public function index():View
    {
        return view('produtos', ['ListProdutos'=>Produto::all()]);
    }

    public function show($id):View {
        return view('produto', ['produto'=>Produto::find($id)]);
    }
}
