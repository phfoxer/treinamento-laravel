<?php
namespace App\Modules\Aluno\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table    = "matricula";
    protected $fillable = ['id','aluno_id','numero','ano'];
}