<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Consultas;
use Illuminate\Http\Request;


class ConsultasController extends Controller
{

    private $consulta;
    public  function __construct(Consultas $consulta) {
        $this->consulta = $consulta;
    }



    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->query('per_page');
        $consultaPaginated = Consultas::paginate($perPage);
        $consultaPaginated->appends([
            'per_page' =>$perPage
        ]);

        return response()->json($consultaPaginated);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            return response()->json([
                'Message'=>'Consulta inserida com sucesso!',
                'Consulta'=>$this->consulta->create($request->all())
            ]);
        } catch (\Exception $error) {
            $responseError = [
                'Erro'=>"Erro ao inserir nova consulta!",
                'Exception'=>$error->getMessage()
            ];
            $statusHttp = 404;
            return response()->json($responseError, $statusHttp);
        }
    }

    /**
     * Display the specified resource.
     * @param Consultas $consulta
     * @return \Illuminate\Http\Response
     */
    public function show(Consultas $consulta)
    {
        return $consulta;
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param Consultas $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultas $consulta)
    {
        try {
            $consulta->update($request->all());
            return response()->json([
                "Message"=>"Consulta atualizada com sucesso!",
                "Consulta"=>$consulta
            ]);
        }catch (\Exception $error) {
            return response()->json([
                'Erro'=>"Erro ao atualizar a consulta!",
                'Exception'=>$error->getMessage()
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Consultas $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultas $consulta)
    {
        try {
            if($consulta->delete())
                return response()->json([
                    "Message"=>"Consulta cancelada",
                    "Consulta"=>$consulta
                ]);
        }catch (\Exception $error) {
            return response()->json([
                'Erro'=>"Erro ao cancelar a consulta",
                'Exception'=>$error->getMessage()
            ], 404);
        }
    }
}
