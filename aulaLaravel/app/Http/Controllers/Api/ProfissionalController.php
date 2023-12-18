<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfissionalRequest;
use App\Models\Profissional;
use Illuminate\Http\Request;

class ProfissionalController extends Controller
{

    private $profissional;
    public  function __construct(Profissional $profissional) {
        $this->profissional = $profissional;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $perPage = $request->query('per_page');
      $profissionalPaginated = Profissional::paginate($perPage);
        $profissionalPaginated->appends([
          'per_page' =>$perPage
      ]);

      return response()->json($profissionalPaginated);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfissionalRequest $request)
    {
        //
        try {
            return response()->json([
                'Message'=>'Profissional inserido com sucesso!',
                'Profissional'=>$this->profissional->create($request->all())
            ]);
        } catch (\Exception $error) {
            $responseError = [
                'Erro'=>"Erro ao inserir novo profissional!",
                'Exception'=>$error->getMessage()
            ];
            $statusHttp = $error->status ?? 500;
            return response()->json($responseError, $statusHttp);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Profissional $profissional
     * @return \Illuminate\Http\Response
     */
    public function show(Profissional $profissional)
    {
        return $profissional;
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param Profissional $profissional
     * @return \Illuminate\Http\Response
     */
    public function update(ProfissionalRequest $request, Profissional $profissional)
    {
        try {
            $profissional->update($request->all());
            return response()->json([
                "Message"=>"Profissional atualizado com sucesso!",
                "Profissional"=>$profissional
            ]);
        }catch (\Exception $error) {
            $responseError = [
                'Erro'=>"Erro ao atualizar o profissional!",
                'Exception'=>$error->getMessage()
            ];
            $statusHttp = $error->status ?? 500;
            return response()->json($responseError, $statusHttp);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Profissional $profissional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profissional $profissional)
    {
        try {
            if($profissional->delete())
                return response()->json([
                    "Message"=>"Profissional removido",
                    "Profissional"=>$profissional
                ]);
        }catch (\Exception $error) {
            return response()->json([
                'Erro'=>"Erro ao excluir o profissional",
                'Exception'=>$error->getMessage()
            ], 404);
        }
    }

    public function consultas(Profissional $profissional) {
        return response()->json($profissional->load('consultas'));
    }
}
