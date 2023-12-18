<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function index(Request $request)
    {
        $perPage = $request->query('per_page');
        $pacientePaginated = Paciente::paginate($perPage);
        $pacientePaginated->appends([
            'per_page' =>$perPage
        ]);

        return response()->json($pacientePaginated);
    }


    public function show($id)
    {
        try {
            return response()->json(Paciente::findOrFail($id));

        }catch (\Exception $error) {
            $responseError = [
                'Erro' => "O paciente com id: $id não foi encontrado!",
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 404;
            return response()->json($responseError, $statusHttp);
        }
    }

    public function store(PacienteRequest $request) {
        try {
            $newPaciente = $request->all();
            $storedPaciente = Paciente::create($newPaciente);
            return response()->json([
                'msg'=>'Paciente inserido com sucesso!',
                'paciente'=>$storedPaciente
            ]);
        }catch (\Exception $error) {
            $responseError = [
                'Erro'=> "Erro ao inserir novo paciente!",
                'Exception'=>$error->getMessage()
            ];
            $statusHttp = $error->status ?? 500;
            return response()->json($responseError, $statusHttp);
        }
    }

    public function update (PacienteRequest $request, $id) {
        try {
            $data = $request->all();
            $newPaciente = Paciente::findOrFail($id);
            $newPaciente->update($data);
            return response()->json([
                "msg"=>"Paciente atualizado com sucesso!",
                "paciente"=>$newPaciente
            ]);
        }catch (\Exception $error) {
            $responseError = [
                'Erro'=>"Erro ao atualizar o paciente!",
                'Exception'=>$error->getMessage()
            ];
            $statusHttp = $error->status ?? 500;
            return response()->json($responseError, $statusHttp);
        }
    }

    public function remove($id) {
        try {
            if(Paciente::findOrFail($id)->delete())
                return response()->json(["msg"=>"Paciente com id: $id removido com sucesso!"]);
        }catch (\Exception $error) {
            return response()->json([
                'Erro'=>"Erro ao excluir o paciente!",
                'Exception'=>$error->getMessage()
            ], 404);
        }
    }
    public function consultas(Paciente $paciente) {
        return response()->json($paciente->load('consultas'));
    }


}
