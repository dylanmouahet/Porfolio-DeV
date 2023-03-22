<?php

namespace App\Http\Controllers;

use App\Models\User;
use Socialite;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function redirect($provider)
    {
        try {
            return Socialite::driver($provider)->redirect();
        } catch (\Throwable $th) {
            return redirect()->route("dashboard");
        }
    }


    public function Callback($provider)
    {
        try {
            $userSocial = Socialite::driver($provider)->stateless()->user();
            $users = User::where(['email' => $userSocial->getEmail()])->first();
            if ($users) {
                Auth::login($users);
                notif("Connecté en tant que " . $userSocial->getEmail());
                return redirect()->route("dashboard");
            } else {
                notif("Aucun compte associé a cet email " . $userSocial->getEmail(), "error");
                return redirect()->route('auth.index');
            }
        } catch (\Throwable $th) {
            // return $th;
            notif("Une erreur s'est produite", "error");
            return redirect()->route("dashboard");
        }

    }


    public function logout(Request $request)
    {
        try {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            notif("Déconnecté !");
            return redirect()->route('auth.index');
        } catch (\Throwable $th) {
            return redirect()->route("dashboard");
        }

    }

}
