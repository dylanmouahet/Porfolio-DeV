<?php

namespace App\Http\Livewire;

use App\Models\Service as ModelsService;
use Livewire\Component;

class Service extends Component
{
    public function render()
    {
        $services = ModelsService::orderBy("created_at", "desc")->get();
        $params = [
            "services" => $services,
        ];
        return view('livewire.service', $params)->extends("layout.master", ["title" => "Porfolio", "sub_title" => "Service"])->section("content");
    }
}
