<?php

namespace App\Http\Controllers;

use App\Models\{Consultas, Profissional, Paciente};
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConsultasController extends Controller
{
    //
    public function index() : View {
        $collectionConsultas = Consultas::all();
        return view('/consultas/consultas',[
            'listaConsultas'=>$collectionConsultas
        ]);
    }

    public function show($id) : View {
        return view('consultas.show',[
            'consulta'=>Consultas::find($id)
        ]);
    }

    public function create(): View{
        $pacientesCollection = Paciente::all();
        $profissionalCollection = Profissional::all();
        return view('consultas.create',[
            'pacientesCollection'=>$pacientesCollection,
            'profissionalCollection'=>$profissionalCollection
        ]);
    }

    public function store(Request $request) {
        $newConsultas = $request->all();//array associativo
        if(!Consultas::create($newConsultas))
            dd("Erro ao inserir nova consulta!!!");

        return redirect('/consultas');
    }

    public function edit($id): View{
        $consulta = Consultas::find($id);
        if(!$consulta)
            dd("Consulta não encontrada");
        return view('consultas.edit',[
            'consulta'=>$consulta
        ]);
    }

    public function update(Request $request, $id): RedirectResponse{
        $updatedConsulta = $request->all();//array assoc


        if(!Consultas::find($id)->update($updatedConsulta))
            dd("Erro ao atualizar consulta $id!!!");

        return redirect('/consultas');
    }

    public function delete($id): View{
        $consulta = Consultas::find($id);
        if(!$consulta)
            dd("Consulta não encontrada");
        return view('consultas.delete',[
            'consulta'=>$consulta
        ]);
    }
    public function remove($id): RedirectResponse{
        if(!Consultas::destroy($id))
            dd("Erro ao deletar consulta $id");
        return redirect('/consultas');
    }
}
