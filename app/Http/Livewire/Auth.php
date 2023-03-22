<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Auth extends Component
{
    public $credentials;

    public function render()
    {
        return view('livewire.auth')->extends("layout.auth", ["title" => "Login"])->section("content");
    }

    public function login(){
        try {

            if (!isset($this->credentials["login"])  ||  ($this->credentials["login"] == "" || $this->credentials["login"] == NULL)) {
                $this->dispatchBrowserEvent('notification', ['type' => "error", 'message' =>"Veuillez entrer un login"]);
                return false;
            }

            if (!isset($this->credentials["password"]) ||  ($this->credentials["password"] == "" || $this->credentials["password"] == NULL)) {
                $this->dispatchBrowserEvent('notification', ['type' => "error", 'message' => "Veuillez entrer un mot de passe"]);
                return false;
            }

            if (FacadesAuth::attempt($this->credentials)) {
                $this->dispatchBrowserEvent('notification', ['type' => "success", 'message' => "Connecté !"]);
                notif("Bienvenue " . FacadesAuth::user()->name);
                return redirect()->route('dashboard');
            }else {
                $this->dispatchBrowserEvent('notification', ['type' => "error", 'message' => "Nom d'utilisateur ou mot de passe incorrecte"]);
                return false;
            }
        } catch (\Throwable $th) {
            // return $th;
            $this->dispatchBrowserEvent('notification', ['type' => "error", 'message' => "Une erreur s'est produite: " . $th->getMessage()]);
            return false;
        }
    }
}
