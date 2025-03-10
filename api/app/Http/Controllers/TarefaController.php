<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Http\Requests\StoreTarefaRequest;

class TarefaController extends Controller
{
    //


    public function index()
    {
        return response()->json(Tarefa::all());
    }

    public function store(StoreTarefaRequest $request)
    {
        $tarefa = Tarefa::create($request->all());
        return response()->json($tarefa, 201);
    }
}
