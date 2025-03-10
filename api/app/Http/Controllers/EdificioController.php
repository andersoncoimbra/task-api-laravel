<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edificio;
use App\Http\Requests\StoreEdificioRequest;

class EdificioController extends Controller
{

    //api resource
    public function index()
    {
        return response()->json(Edificio::all());
    }

    public function store(StoreEdificioRequest $request)
    {
        $edificio = Edificio::create($request->all());
        return response()->json($edificio, 201);
    }
}
