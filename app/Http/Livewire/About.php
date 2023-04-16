<?php

namespace App\Http\Livewire;

use App\Models\About as ModelsAbout;
use Livewire\Component;
use Livewire\WithFileUploads;

class About extends Component
{
    use WithFileUploads;

    public $is_edit = false;
    public $profil;
    public $editinfo;
    public $old_url_photo;
    public $old_url_cv;

    protected $rules = [
        'editinfo.name' => 'required|min:6',
        'editinfo.email' => 'required|email',
        'editinfo.description' => 'required|min:20',
        'editinfo.adress' => 'required|min:6',
        'editinfo.tel_1' => 'required',
        'editinfo.tel_2' => 'nullable',
        'editinfo.url_photo' => 'nullable|file|mimes:jpg,png,jpeg[',
        'editinfo.url_cv' => 'nullable|file|mimes:pdf',
        'editinfo.bith_date' => 'nullable|date',
        'editinfo.year_xp_number' => 'nullable|number',
        'editinfo.client_number' => 'nullable|number',
        'editinfo.facebook' => 'nullable|url',
        'editinfo.twitter' => 'nullable|url',
        'editinfo.github' => 'nullable|url',
        'editinfo.linkedin' => 'nullable|url',
    ];

    protected $messages = [
        'editinfo.name.required' => 'Ce champs est requis',
        'editinfo.name.min' => 'Ce champs doit avoir au moins 6 caractères',
        'editinfo.email.required' => 'Ce champs est requis',
        'editinfo.email.email' => 'Veuillez entrer une adresse email correct',
        'editinfo.description.required' => 'Ce champs est requis',
        'editinfo.description.min' => 'Ce champs doit avoir au moins 20 caractères',
        'editinfo.adress.required' => 'Ce champs est requis',
        'editinfo.adress.min' => 'Ce champs doit avoir au moins 6 caractères',
        'editinfo.tel_1.required' => 'Ce champs est requis',
        'editinfo.url_photo.file' => 'Ce champs doit être un fichier',
        'editinfo.url_photo.mimes' => 'Les fichier aurorisés sont: png, jpg, jpeg',
        'editinfo.url_photo.max' => 'La taille maximale du fichier doit être de 5MB',
        'editinfo.url_cv.file' => 'Ce champs doit être un fichier',
        'editinfo.url_cv.mimes' => 'Les fichier aurorisés sont: pdf',
        'editinfo.url_cv.max' => 'La taille maximale du fichier doit être de 20MB',
        'editinfo.bith_date.date' => 'Veuillez entrer une date valide'
    ];

    public function mount()
    {
        $this->profil = ModelsAbout::first();
        $this->editinfo = $this->profil->toArray();
        $this->old_url_photo = $this->editinfo['url_photo'];
        $this->old_url_cv = $this->editinfo['url_cv'];
    }

    public function render()
    {
        $params = [
            "is_edit" => $this->is_edit,
            "profil" => $this->profil,
            // "article" => $article,
            // "visite" => $visite,
            // "browser" => $visite["by_browser"]
        ];
        // dd($params);
        return view('livewire.about', $params)->extends("layout.master", ["title" => "Porfolio", "sub_title" => "Profil"])->section("content");
    }

    public function submit($formData)
    {

        try {
            $this->validate();

            $this->profil->name = $this->editinfo["name"];
            $this->profil->description = $this->editinfo["description"];
            $this->profil->bith_date = $this->editinfo["bith_date"];
            $this->profil->adress = $this->editinfo["adress"];
            $this->profil->year_xp_number = $this->editinfo["year_xp_number"];
            $this->profil->client_number = $this->editinfo["client_number"];
            $this->profil->tel_1 = $this->editinfo["tel_1"];
            $this->profil->tel_2 = $this->editinfo["tel_2"];
            $this->profil->facebook = $this->editinfo["facebook"];
            // $this->profil->instagram = $this->editinfo["instagram"];
            $this->profil->twitter = $this->editinfo["twitter"];
            $this->profil->github = $this->editinfo["github"];
            $this->profil->linkedin = $this->editinfo["linkedin"];

            // if (isset($this->editinfo["url_photo"])) {
            //     $this->validate([
            //         'url_photo' => 'file|mimes:jpg,png,jpeg|max:1024', // 1MB Max
            //     ]);
            //     $this->editinfo["url_photo"] = $this->editinfo["url_photo"]->storeAs(PROFIL_PHOTO_PATH, $this->profil->name, 'local');
            // }

            // $this->profil->url_cv = $this->editinfo["url_cv"];
            // $this->profil->url_photo = $this->editinfo["url_photo"];
            $this->profil->save();

            $this->is_edit = false;
            $this->dispatchBrowserEvent('disable_form');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('notification', ['type' => "error", 'message' => "Une erreur s'est produite"]);
        }

    }
}
