<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Information_user;
use App\Models\Service;
use App\Models\Poste;
use App\Models\Api;

class apiController extends Controller
{
    public function index()
    {
        $liste_api = Api::all();
        return view('dashboard.api/index', ['liste_api' => $liste_api]);
    }

    public function show($id)
    {

        $api = Api::find($id);
        return view('dashboard.api/show', ['api' => $api]);
    }

    public function create(request $request)
    {
        $api = new Api;

        $api->user_id = Auth::user()->id;
        $api->name =  $request->input('name');

        $api->save();

        session()->flash('status', 'L\'api à bien été crée !');

        return redirect()->action(
            [apiController::class, 'index']
        );
    }

    public function edit($id, request $request)
    {
        $api = Api::find($id);

        $api->name =  $request->input('name');

        $api->update();

        session()->flash('status', 'L\'api à bien été modifiée !');

        return redirect()->action(
            [apiController::class, 'index']
        );
    }

    public function delete($id)
    {
        $api = Api::find($id);
        $api->delete();

        session()->flash('status', 'L\'api à bien été supprimée !');

        return redirect()->action(
            [apiController::class, 'index']
        );
    }
}
