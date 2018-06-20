<?php
namespace App\Modules\Aluno\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table    = "aluno";
    protected $fillable = ['id','nome'];

    public function matriculas()
    {
        return $this->hasMany("App\Modules\Aluno\Models\Matricula","aluno_id","id");
    }
}