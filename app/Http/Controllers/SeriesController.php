<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get(); //Uma collection ordenada

        //Seleciona a view e no segundo parametro passa os dados e a variavel que vai ser criada na view
        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        Serie::create($request->all());

        return to_route('series.index');
        
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->series);

        return to_route('series.index');
    }
}
