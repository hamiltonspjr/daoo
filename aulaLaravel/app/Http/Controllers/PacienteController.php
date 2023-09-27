<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PacienteController extends Controller
{
    //

    public function index() : View {
        $collectionPacientes = Paciente::all();
        return view('/pacientes/pacientes',[
            'listaPacientes'=>$collectionPacientes
        ]);
    }

    public function show($id) : View {
        return view('pacientes.show',[
            'paciente'=>Paciente::find($id)
        ]);
    }

    public function create(): View{
        return view('pacientes.create');
    }

    public function store(Request $request) {
        $newPaciente = $request->all();//array associativo
        if(!Paciente::create($newPaciente))
            dd("Erro ao inserir o novo paciente!!!");

        return redirect('/pacientes');
    }

    public function edit($id): View{
        $paciente = Paciente::find($id);
        if(!$paciente)
            dd("Paciente não encontrado");
        return view('pacientes.edit',[
            'paciente'=>$paciente
        ]);
    }

    public function update(Request $request, $id): RedirectResponse{
        $updatedPaciente = $request->all();//array assoc


        if(!Paciente::find($id)->update($updatedPaciente))
            dd("Erro ao atualizar paciente $id!!!");

        return redirect('/pacientes');
    }

    public function delete($id): View{
        $paciente = Paciente::find($id);
        if(!$paciente)
            dd("Paciente não encontrado");
        return view('pacientes.delete',[
            'paciente'=>$paciente
        ]);
    }
    public function remove($id): RedirectResponse{
        if(!Paciente::destroy($id))
            dd("Erro ao deletar paciente $id");
        return redirect('/pacientes');
    }

}
