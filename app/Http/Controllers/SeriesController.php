<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use DB;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('nome')->get();

        return view('series.index')->with('series', $series);
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {
        $seriesName = $request->input('nome');

        $serie = new Serie();
        $serie->nome = $seriesName;
        $serie->save();

        return redirect('/series');
    }
}