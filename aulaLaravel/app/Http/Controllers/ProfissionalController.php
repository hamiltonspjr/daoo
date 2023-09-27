<?php

namespace App\Http\Controllers;

use App\Models\Profissional;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfissionalController extends Controller
{
    //

    public function index() : View {
        $collectionProfissionais = Profissional::all();
        return view('/profissionais/profissionais',[
            'listaProfissionais'=>$collectionProfissionais
        ]);
    }

    public function show($id) : View {
        return view('profissionais.show',[
            'profissional'=>Profissional::find($id)
        ]);
    }

    public function create(): View{
        return view('profissionais.create');
    }

    public function store(Request $request) {
        $newProfissional = $request->all();//array associativo
        if(!Profissional::create($newProfissional))
            dd("Erro ao inserir o novo profissional!!!");

        return redirect('/profissionais');
    }

    public function edit($id): View{
        $profissional = Profissional::find($id);
        if(!$profissional)
            dd("Profissional não encontrado");
        return view('profissionais.edit',[
            'profissional'=>$profissional
        ]);
    }

    public function update(Request $request, $id): RedirectResponse{
        $updatedProfissional = $request->all();//array assoc


        if(!Profissional::find($id)->update($updatedProfissional))
            dd("Erro ao atualizar profissional $id!!!");

        return redirect('/profissionais');
    }

    public function delete($id): View{
        $profissional = Profissional::find($id);
        if(!$profissional)
            dd("Profissional não encontrado");
        return view('profissionais.delete',[
            'profissional'=>$profissional
        ]);
    }
    public function remove($id): RedirectResponse{
        if(!Profissional::destroy($id))
            dd("Erro ao deletar profissional $id");
        return redirect('/profissionais');
    }
}
