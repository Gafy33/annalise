<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Models\Api;
use App\Models\Analyse;

class annaliseWebController extends Controller
{
    public function index()
    {

        $liste_analyse = Analyse::select('analyses.id', 'analyses.name', 'apis.name as api_name')
        ->join('apis', 'apis.id', '=', 'analyses.api_id')
        ->get();

        $liste_api = Api::all();
        
        return view('dashboard.analyse/index', ['liste_analyse' => $liste_analyse, 'liste_api' => $liste_api]);
    }

    public function create(request $request)
    {

        $analyse = new Analyse;

        $analyse->user_id = Auth::user()->id;
        $analyse->name =  $request->input('name');
        $analyse->api_id =  $request->input('api_cle');

        $analyse->save();

        session()->flash('status', 'L\'analyse à bien été crée !');

        return redirect()->action(
            [annaliseWebController::class, 'index']
        );
    }

    public function show($id)
    {

        $analyse = Analyse::select('analyses.id', 'analyses.name', 'apis.name as api_name', 'apis.id as api_id')
        ->join('apis', 'apis.id', '=', 'analyses.api_id')
        ->where('analyses.id', $id)
        ->first();

        $liste_api = Api::all();
        
        return view('dashboard.analyse/show', ['analyse' => $analyse, 'liste_api' => $liste_api]);
    }

    public function edit($id, request $request)
    {
        $analyse = Analyse::find($id);

        $analyse->name =  $request->input('name');
        $analyse->api_id =  $request->input('api_cle');

        $analyse->update();

        session()->flash('status', 'L\'analyse à bien été modifiée !');

        return redirect()->action(
            [annaliseWebController::class, 'index']
        );
    }
}
