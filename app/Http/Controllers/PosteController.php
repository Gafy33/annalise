<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Information_user;
use App\Models\Service;
use App\Models\Poste;

class PosteController extends Controller
{
    public function index()
    {
        $liste_poste = Poste::select('postes.id', 'postes.name', 'postes.id_service', 'services.id as service_id', 'services.name as services_name')
        ->join('services', 'services.id', '=', 'postes.id_service')
        ->get();
        
        $nombre_poste = $liste_poste->count();

        return view('dashboard.poste/index', ['liste_poste' => $liste_poste, 'nombre_poste' => $nombre_poste]);
    }

    public function create()
    {
        $liste_service = Service::all();

        return view('dashboard.poste/create', ['liste_service' => $liste_service]);
    }

    public function create_post(request $request)
    {
        $poste = new Poste;

        $poste->name = $request->input('name');
        $poste->id_service = $request->input('id_service');
        $poste->save();


        session()->flash('status', 'Le poste à bien été crée !');

        return redirect()->action(
            [PosteController::class, 'create']
        );
    }

    public function edit($id)
    {
        $poste = Poste::select('postes.id', 'postes.name', 'postes.id_service', 'services.id as service_id', 'services.name as services_name')
        ->join('services', 'services.id', '=', 'postes.id_service')
        ->first();

        $liste_service = Service::all();

        return view('dashboard.poste/edit', ['poste' => $poste, 'liste_service' => $liste_service]);
    }

    public function edit_post($id, request $request)
    {
        $poste = Poste::find($id);

        $poste->name = $request->input('name');
        $poste->id_service = $request->input('id_service');

        $poste->update();

        session()->flash('status', 'Le poste à bien été modifié !');

        return redirect()->action(
            [PosteController::class, 'edit'], ['id' => $id]
        );
    }

    public function delete($id)
    {
        $poste = Poste::find($id);

        $name = $poste->name;
        $poste->delete();



        session()->flash('status', 'Le poste ' . $name . ' à bien été supprimé');
        return redirect()->action([PosteController::class, 'index']);
    }

    public function create_postes()
    {
        for($i = 0; $i < 15; $i++)
        {
            $poste = new Poste;

            $poste->name = "poste_" . $i;
            
            $poste->save();
        }

        return "ok";
    }
}
