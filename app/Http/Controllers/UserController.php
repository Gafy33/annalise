<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Service;
use App\Models\Poste;
use App\Models\Information_user;

class UserController extends Controller
{
    public function index()
    {

        $liste_user = User::select('users.id','users.name', 'users.prenom', 'users.email', 'postes.name as poste_name')
            ->join('information_users', 'information_users.id_user', '=', 'users.id')
            ->join('postes', 'postes.id', '=', 'information_users.poste')
            ->get();

        $nombre_user = $liste_user->count();

        return view('dashboard.user/index', ['liste_user' => $liste_user, 'nombre_user' => $nombre_user]);
    }

    public function create()
    {

        $liste_poste = Poste::all();
        $liste_service = Service::all();

        return view('dashboard.user/create', ['liste_poste' => $liste_poste, 'liste_service' => $liste_service]);
    }

    public function create_post(request $request)
    {
        $user = new User;

        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->name_societe = $request->input('name_entreprise');

        $user->password = Hash::make($request->input('password'));
        $user->id_role = 1;

        $user->save();

        $informations_user = new Information_user;

        $informations_user->id_user = $user->id;
        /*$informations_user->adresse = $request->input('adresse');
        $informations_user->telephone = $request->input('telephone');
        $informations_user->ville = $request->input('ville');
        $informations_user->region = $request->input('region');
        $informations_user->codepostal = $request->input('codepostal');
        $informations_user->pays = $request->input('pays');*/
        $informations_user->poste = $request->input('poste');
        $informations_user->service = $request->input('service');
        /*$informations_user->numero_tva = $request->input('numero_tva');*/

        $informations_user->save();

        session()->flash('status', 'Le compte utilisateur à bien été crée !');

        return redirect()->action(
            [UserController::class, 'create']
        );
    }

    public function edit($id)
    {
        $user = User::select('*', 'users.id as id_user', 'postes.id as poste_id', 'postes.name as poste_name', 'services.id as service_id', 'services.name as service_name')
        ->join('information_users', 'information_users.id_user', '=', 'users.id')
        ->join('services', 'services.id', '=', 'information_users.service')
        ->join('postes', 'postes.id', '=', 'information_users.poste')
        ->where('users.id', $id)
        ->first();

        $liste_poste = Poste::all();
        $liste_service = Service::all();

        return view('dashboard.user/edit', ['user' => $user, 'liste_poste' => $liste_poste, 'liste_service' => $liste_service]);
    }

    public function edit_post($id, request $request)
    {
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->name_societe = $request->input('name_entreprise');

        $informations_user = Information_user::where('id_user', $id)->first();

        $informations_user->adresse = $request->input('adresse');
        $informations_user->telephone = $request->input('telephone');
        $informations_user->ville = $request->input('ville');
        $informations_user->region = $request->input('region');
        $informations_user->codepostal = $request->input('codepostal');
        $informations_user->pays = $request->input('pays');
        $informations_user->poste = $request->input('poste');
        $informations_user->service = $request->input('service');
        $informations_user->numero_tva = $request->input('numero_tva');

        $informations_user->update();
        $user->update();

        session()->flash('status', 'Le compte utilisateur à bien été modifié !');

        return redirect()->action(
            [UserController::class, 'edit'], ['id' => $id]
        );
    }

    public function delete($id)
    {
        $user = User::find($id);

        $name = $user->name;
        $prenom = $user-> name;
        $informations_user = Information_user::where('id_user', $user->id)->first();

        $informations_user->delete();
        $user->delete();



        session()->flash('status', 'Le compte utilisateur ' . $name . ' ' . $prenom . ' à bien été supprimé');
        return redirect()->action([UserController::class, 'index']);
    }

    public function create_user()
    {
        for($i = 0; $i < 15; $i++)
        {
            $user = new User;

            $user->name = "test" . $i;
            $user->prenom = "test" . $i;
            $user->email = "test" . $i . "@test.com";;
            $user->password = Hash::make("test" . $i);
            $user->name_societe = "testagence_" . $i;
            $user->id_role = 1;

            $user->save();
        }

        return "ok";
    }

    public function create_informations_user()
    {
        for($i = 8; $i < 21; $i++)
        {
            $user = new Information_user;

            $user->id_user = $i;
            $user->adresse = "ville_test_" . $i;
            $user->telephone = "tel_test_" . $i;
            $user->region = "region_test_" . $i;
            $user->codepostal = "cpl_tet_" . $i;
            $user->numero_tva = "tva_test_" . $i;
            $user->poste = "poste_test_" . $i;
            $user->service = "service_test_" . $i;
            $user->pays = "france";

            $user->save();
        }

        return "ok";
    }
}
