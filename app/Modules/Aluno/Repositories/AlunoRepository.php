<?php
namespace App\Modules\Aluno\Repositories;
use Illuminate\Http\Request;
use App\Modules\Aluno\Models\Aluno;
class AlunoRepository
{

    public function listar(Request $request)
    {
       return Aluno::with([
            'matriculas'=>function($q){
                $q->orderBy('numero','asc');
            }
        ])->get();
    }

    public function show($id)
    {
       return Aluno::where(['id'=>$id])->first();
    }
    
    public function create(Request $request)
    {
       return Aluno::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $data = [
            "nome"=>$request->nome
        ];
       return Aluno::where(['id'=>$id])->update($data);
    }

    public function destroy($id)
    {
       return Aluno::where(['id'=>$id])->delete();
    }


}
