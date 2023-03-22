<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Message;
use App\Models\Projet;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function mount()
    {
        if (session()->has('message')) {
            // dd(session()->get('message'));
            $this->dispatchBrowserEvent('notification', ['type' => session()->get('type'), 'message' => session()->get('message')]);
        }
    }

    public function render()
    {
        $message["count"] = Message::count();
        $message["liste"] = Message::orderBy("created_at", "desc")->take(5)->get();
        $projet["count"] = Projet::count();
        $article["count"] = Article::count();
        $article["liste"] = Article::with("categorie")->orderBy("created_at", "desc")->take(5)->get();
        $visite["count"] = DB::table('shetabit_visits')->count();
        $visite["liste"] = DB::table('shetabit_visits')->orderBy("created_at", "desc")->take(6)->get();
        $visite_all = DB::table('shetabit_visits')->get();
        $visite["by_browser"] = collect($visite_all)->groupBy("browser");

        $params = [
            "message" =>$message,
            "projet" =>$projet,
            "article" =>$article,
            "visite" => $visite,
            "browser" => $visite["by_browser"]
        ];

        // dd($params["browser"]);
        return view('livewire.dashboard', $params)->extends("layout.master", ["title" => "Tableau de bord"])->section("content");
    }

    public function textclick(){

    }
}
