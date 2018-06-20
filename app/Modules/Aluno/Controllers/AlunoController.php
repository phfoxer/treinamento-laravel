<?php
namespace App\Modules\Aluno\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Aluno\Repositories\AlunoRepository;

class AlunoController extends Controller {
    
    private $alunoRepository;
    /**
     * No construtor iremos instaciar nossa classe de repositorio 
     */
    public function __construct(AlunoRepository $alunoRepository){
        $this->alunoRepository = $alunoRepository;
    }

    /**
     * Resposte a uma chamada get do resource
     */
    public function index(Request $request)
    {
        return $this->alunoRepository->listar($request);
    }

    /**
    * Resposte a uma chamada get do resource
    */
    public function show($id)
    {
        return $this->alunoRepository->show($id);
    }

    /**
    * Resposte a uma chamada post do resource
    */
    public function store(Request $request)
    {
        return $this->alunoRepository->create($request);
    }

    /**
    * Resposte a uma chamada put do resource
    */
    public function update(Request $request, $id)
    {
        return $this->alunoRepository->update($request, $id);
    }

    /**
    * Resposte a uma chamada delete do resource
    */
    public function destroy($id)
    {
        return $this->alunoRepository->destroy($id);
    }
}