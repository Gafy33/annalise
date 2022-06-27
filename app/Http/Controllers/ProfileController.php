<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Information_user;

class ProfileController extends Controller
{
    public function profile()
    {

        $informations_user = Information_user::where('id_user', Auth::user()->id)->first();
        
        /*On attache le partials correspondant*/
        $section = "profile";
        
        /*Titre de la section*/
        $title_section = "Mon Profile";

        return view('settings/index', ["informations_user" => $informations_user, "section" => $section, "title_section" => $title_section]);
    }

    public function profile_edit(request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->name_societe = $request->input('name_societe');

        $informations_user = Information_user::where('id_user', Auth::user()->id)->first();

        $informations_user->adresse = $request->input('adresse');
        $informations_user->telephone = $request->input('telephone');
        $informations_user->ville = $request->input('ville');
        $informations_user->region = $request->input('region');
        $informations_user->codepostal = $request->input('codepostal');
        $informations_user->about = $request->input('about');
        $informations_user->pays = $request->input('pays');
        $informations_user->poste = $request->input('poste');
        $informations_user->service = $request->input('service');
        $informations_user->numero_tva = $request->input('numero_tva');

        $informations_user->update();
        $user->update();

        session()->flash('status', 'Votre compte à bien été modifié !');

        return redirect()->action([ProfileController::class, 'profile']);

        /*
        Nom de la marque
        Fusée horaire
        Mode de payement
        Contact dee facturation*/

        /*
        tva  : FR44 894 513 777
        possiblité des gens*/

    }


    public function profile_password()
    {
        /*On attache le partials correspondant*/
        $section = "password";

        /*Titre de la section*/
        $title_section = "Sécurité";

        
        return view('settings/index', ["section" => $section, "title_section" => $title_section]);
    }

    public function profile_password_edit(request $request)
    {
        $motdepasse_actuel_base = Auth::user()->password;

        $motdepasse_actuel_request = $request->input('mtp_actuel');

        if(password_verify($motdepasse_actuel_request, $motdepasse_actuel_base))
        {

            $motdepasse_new = $request->input('mtp_new');
            $motdepasse_new_confirme = $request->input('mtp_new_confirme');

            if($motdepasse_new == $motdepasse_new_confirme)
            {
                $user = User::where('id' , Auth::user()->id)->first();
                $user->password = Hash::make($motdepasse_new);
                $user->update();

                session()->flash('status', 'Le mot de passe à bien été modifié');
                session()->flash('status_color', 'green');

                return redirect()->action([ProfileController::class, 'profile_password']);
            } else
            {
                session()->flash('status', 'Le mot de passe ne correspond pas');
                session()->flash('status_color', 'red');

                return redirect()->action([ProfileController::class, 'profile_password']);
            }
        }
        else{
            session()->flash('status', 'Le mot de passe actuel ne correspond pas');
            session()->flash('status_color', 'red');

            return redirect()->action([ProfileController::class, 'profile_password']);
        }
    }

    public function profile_delete()
    {
        
        /*On attache le partials correspondant*/
        $section = "delete";
        
        /*Titre de la section*/
        $title_section = "Supprimer mon compte";


        return view('settings/index', ["section" => $section, "title_section" => $title_section]);
    }

    public function profile_delete_post(request $request)
    {
        $motdepasse_actuel_base = Auth::user()->password;
        $motdepasse_actuel_request = $request->input('mtp_actuel');

        if(password_verify($motdepasse_actuel_request, $motdepasse_actuel_base))
        {
            $user = User::where('id', Auth::user()->id)->first();
            $user->delete();

            Auth::logout();
            return redirect()->route('welcome');
        } else 
        {
            return back()->withInput();
        }
    }
}
