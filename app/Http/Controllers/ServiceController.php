<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Information_user;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $liste_service = Service::all();
        
        $nombre_service = $liste_service->count();

        return view('dashboard.service/index', ['liste_service' => $liste_service, 'nombre_service' => $nombre_service]);
    }

    public function create()
    {
        return view('dashboard.service/create');
    }

    public function create_post(request $request)
    {
        $service = new Service;

        $service->name = $request->input('name');

        $service->save();


        session()->flash('status', 'Le service à bien été crée !');

        return redirect()->action(
            [ServiceController::class, 'create']
        );
    }

    public function edit($id)
    {
        $service = Service::find($id);

        return view('dashboard.service/edit', ['service' => $service]);
    }

    public function edit_post($id, request $request)
    {
        $service = Service::find($id);

        $service->name = $request->input('name');

        $service->update();

        session()->flash('status', 'Le service à bien été modifié !');

        return redirect()->action(
            [ServiceController::class, 'edit'], ['id' => $id]
        );
    }

    public function delete($id)
    {
        $service = Service::find($id);

        $name = $service->name;
        $service->delete();



        session()->flash('status', 'Le service ' . $name . ' à bien été supprimé');
        return redirect()->action([ServiceController::class, 'index']);
    }

    public function create_services()
    {
        for($i = 0; $i < 15; $i++)
        {
            $service = new Service;

            $service->name = "service_" . $i;
            
            $service->save();
        }

        return "ok";
    }
}
