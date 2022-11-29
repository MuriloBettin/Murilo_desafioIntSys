<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ColetaResiduo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ColetaResiduoController extends Controller
{
    public function index()
    {
        return view('coleta.cadastrar');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            //Endereço
            'cep' => "required|numeric|digits:8",
            'estado' => "required|alpha|string|max:3",
            'cidade' => "required|string|max:255",
            'bairro' => "required|string|max:255",
            'logradouro' => "required|string|max:255",
            'numero' => "required|numeric",
            'complemento' => "required|string|max:255",
            
            //Dados da Coleta
            'diaColeta' => "required|date|after:today",
            'tipoResiduo' => "required|string|max:60",
        ], [
            'diaColeta.after' => 'O campo dia coleta deve ser uma data posterior a hoje.',
        ]);

        $validated = $validator->validated();
        $validated['user_id'] = Auth::id();

        DB::beginTransaction();
        try {
            ColetaResiduo::create($validated);
            DB::commit();
            return response()->json([
                'message' => "Coleta cadastrada com Sucesso",
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message' => "Erro ao cadastrar coleta!",
                'errors' => ["Cadastro Coleta" => ["Um erro ocorreu ao tentar cadastrar a nova coleta!"]],
            ], 400);
        }
    }


    public function show()
    {
        $coletasCadastradas = ColetaResiduo::where('user_id', Auth::id())->get();

        return view('coleta.listar')->with('coletasCadastradas', $coletasCadastradas);
    }



    public function showNaoCompletas()
    {
        $coletasNaoCompletas = ColetaResiduo::where('user_id',Auth::id())->where('status',0)->get();

        return view('coleta.confirmar')->with('coletasNaoCompletas', $coletasNaoCompletas);
    }

    public function edit($id){
        $dadosColeta = ColetaResiduo::find($id);
        return view('coleta.edit')->with('dadosColeta', $dadosColeta);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            //Endereço
            'cep' => "required|numeric|digits:8",
            'estado' => "required|alpha|string|max:3",
            'cidade' => "required|string|max:255",
            'bairro' => "required|string|max:255",
            'logradouro' => "required|string|max:255",
            'numero' => "required|numeric",
            'complemento' => "required|string|max:255",
            
            //Dados da Coleta
            'diaColeta' => "required|date|after:today",
            'tipoResiduo' => "required|string|max:60",
        ], [
            'diaColeta.after' => 'O campo dia coleta deve ser uma data posterior a hoje.',
        ]);

        $validated = $validator->validated();

        DB::beginTransaction();
        try {
            $coleta = ColetaResiduo::find($id)->update($validated);
            DB::commit();
            return response()->json([
                'message' => "Coleta editada com sucesso",
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message' => "Erro ao Editar Dados Coleta!",
                'errors' => ["Editar Dados Coleta" => ["Erro ao Atualizar Dados da Coleta!"]],
            ], 400);
            //return $this->error(throw $th, "Erro ao Atualizar Dados do Cliente");
        }
    }

    public function confirmaColeta($id)
    {
        DB::beginTransaction();
        try {
            ColetaResiduo::where('id', $id)->update(['status' => 1]);
            DB::commit();
            return response()->json([
                'message' => "Coleta confirmada com sucesso",
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message' => "Erro ao confirma coleta!",
                'errors' => ["Confirma Coleta" => ["Um erro ocorreu ao tentar confirmar a coleta!"]],
            ], 400);
        }
    }

    public function cancelaColeta($id)
    {
        DB::beginTransaction();
        try {
            ColetaResiduo::where('id', $id)->update(['status' => 2]);
            DB::commit();
            return response()->json([
                'message' => "Coleta cancelada com sucesso",
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message' => "Erro ao cancelar coleta!",
                'errors' => ["Cancelar Coleta" => ["Um erro ocorreu ao tentar cancelar a coleta!"]],
            ], 400);
        }
    }

}
