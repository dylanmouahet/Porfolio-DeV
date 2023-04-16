@push('styles')
    <style>
        .bloc-input {
            border: 2px gray solid;
            height: 150px !important;
            border-radius: 5px;
        }
    </style>
@endpush
<div>
    <form wire:submit.prevent="submitForm" enctype="multipart/form-data">
        <div class="row">
            <div class="text-end mb-2">
                @if ($is_edit)
                    <button style="width: 15%" class="btn btn-primary">
                        <span wire:loading.remove="submitForm">
                            Enregistrer
                            <i class="ph-floppy-disk"></i>
                        </span>
                        <div wire:loading.class="loader" wire:target="submitForm" wire:loading.attr="disabled"></div>
                    </button>
                @else
                    <button onclick="disableForm(false)" type="button" wire:click="$set('is_edit', true)" style="width: 15%" class="btn btn-warning">
                        <span>Modifier <i class="ph-note-pencil"></i></span>
                    </button>
                @endif
            </div>

                <div class="col-md-6">
                    <!-- Profile info -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Informations du profil</h5>
                        </div>

                        <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nom</label>
                                            <input wire:model.lazy='editinfo.name' type="text" placeholder="John Doe" name="name" value="{{ $profil->name ?? "" }}" class="form-control">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input wire:model.lazy='editinfo.email' type="text" placeholder="johndoe@exemple.com" name="email" value="{{ $profil->email ?? "" }}" class="form-control">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea wire:model.lazy='editinfo.description' class="form-control" cols="30" rows="6" name="description" placeholder="A propos de vous">{{ $profil->description ?? "" }}</textarea>
                                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Adresse</label>
                                            <input wire:model.lazy='editinfo.adress' type="text" placeholder="Entrez votre adresse" name="adress" value="{{ $profil->adress ?? "" }}" class="form-control">
                                            @error('adress') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Date de naissance</label>
                                            <input wire:model.lazy='editinfo.bith_date' name="bith_date" type="date" value="{{ isset($profil->bith_date) ? $profil->bith_date : "" }}" class="form-control">
                                            @error('bith_date') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Téléphone 1</label>
                                            <input wire:model.lazy='editinfo.tel_1' type="tel" name="tel_1" value="{{ $profil->tel_1 ?? "" }}" placeholder="Votre numéro de téléphone" class="form-control">
                                            @error('tel_1') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Téléphone 2</label>
                                            <input wire:model.lazy='editinfo.tel_2' name="tel_2" type="tel" value="{{ $profil->tel_2 ?? "" }}" placeholder="Votre numéro de téléphone" class="form-control">
                                            @error('tel_2') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- </form> --}}
                        </div>
                    </div>
                    <!-- /profile info -->
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Autres Informations</h5>
                        </div>

                        <div class="card-body">
                            {{-- <form action="#"> --}}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Année d'expérience</label>
                                        <input wire:model.lazy='editinfo.year_xp_number' name="year_xp_number" type="number" value="{{ $profil->year_xp_number ?? "" }}" class="form-control">
                                        @error('year_xp_number') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre de client</label>
                                        <input wire:model.lazy='editinfo.client_number' name="client_number" type="number" value="{{ $profil->client_number ?? "" }}" class="form-control">
                                        @error('client_number') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Photo</label>
                                        <input wire:click="$set('old_url_photo', null)" wire:model='editinfo.url_photo' name="url_photo" type="file" id="photo-input" onchange="previewImg()" style="display:none"
                                            accept="image/*" />
                                        <div class="bloc-photo bloc-input" {{--@isset($old_url_photo) style='background: url("{{ $old_url_photo }} ")' @endisset--}}
                                            onclick="document.getElementById('photo-input').click()"
                                            style="display:flex; justify-content:center; align-items:center;">
                                            {{-- @if (!isset($profil->url_photo))
                                                <p id="text-photo">Choisir un fichier</p>
                                            @endif --}}
                                        </div>
                                        @error('url_photo') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">CV</label>
                                        <input wire:model.defer='editinfo.url_cv' name="url_cv" type="file" id="cv-input" style="display:none" accept="application/pdf" />
                                        <div wire:click="$set('old_url_cv', null)" class="bloc-cv bloc-input" onclick="document.getElementById('cv-input').click()"
                                            style="display:flex; justify-content:center; align-items:center;">
                                            <embed src="@isset($old_url_cv) {{ $old_url_cv }} @endisset" style="height: 100%; width:100%; {{ !isset($old_url_cv) ? "display: none;" : "" }} ">
                                                @if (!isset($old_url_cv))
                                                    <p id="text-cv">Choisir un fichier</p>
                                                @endif
                                            </div>
                                            @error('url_cv') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3" style="display:flex; justify-content:center; align-items:center;">
                                        <button wire:click="$set('old_url_photo', null)" type="button" class="btn btn-secondary mt-4 input-btn"
                                            onclick="document.getElementById('photo-input').click()">Changer la photo</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3" style="display:flex; justify-content:center; align-items:center;">
                                        <button wire:click="$set('old_url_cv', null)" type="button" class="btn btn-secondary mt-4 input-btn"
                                            onclick="document.getElementById('cv-input').click()">Changer le CV</button>
                                    </div>
                                </div>
                            </div>
                            {{-- <br> --}}
                            {{-- <br> --}}

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label class="form-label">Facebook</label>
                                        <input wire:model.lazy='editinfo.facebook' name="facebook" type="url" value="{{ $profil->facebook ?? "" }}"  placeholder="Url profil Facebook" class="form-control">
                                        @error('facebook') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label class="form-label">Twitter</label>
                                        <input wire:model.lazy='editinfo.twitter' name="twitter" type="url" value="{{ $profil->twitter ?? "" }}" placeholder="Url profil Twitter" class="form-control">
                                        @error('twitter') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label class="form-label">Github</label>
                                        <input wire:model.lazy='editinfo.github' name="github" type="url" value="{{ $profil->github ?? "" }}" placeholder="Url profil Github" class="form-control">
                                        @error('github') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label class="form-label">LinkdIn</label>
                                        <input wire:model.lazy='editinfo.linkedin' name="linkedin" type="url" value="{{ $profil->linkedin ?? "" }}" placeholder="Url profil LinkdIn" class="form-control">
                                        @error('linkedin') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @if ($is_edit)
                    <div class="text-center">
                        <button type="submit" style="width: 25%"
                            class="btn btn-primary"> <span>Enregistrer les
                                changements <i class="ph-floppy-disk"></i></span>
                            <div wire:loading.class="loader" wire:target="submitForm" wire:loading.attr="disabled"></div>
                        </button>
                    </div>
                @endif

        </div>
    </form>
</div>

@push('scripts')
    <script>
        // $(document).ready(function() {
        disableForm();
        function disableForm(is_disable = true) {
            $('input').attr("disabled", is_disable);
            $('textarea').attr("disabled", is_disable);
            $('.input-btn').attr("disabled", is_disable);
        }

        function previewImg() {
            const preview = $('.bloc-photo');
            // preview.css({
            //     "background-image": "url('')",
            //     'background-size': 'contain',
            //     'background-position': "center",
            //     'background-repeat': "no-repeat"
            // });
            const text_input = $('#text-photo');
            const file = $('#photo-input').prop('files')[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                preview.css({
                    "background-image": "url(" + reader.result + ")",
                    'background-size': 'contain',
                    'background-position': "center",
                    'background-repeat': "no-repeat"
                });
            }, false);

            if (file) {
                reader.readAsDataURL(file);
                text_input.hide();
            }
        }
        $('#cv-input').change(function(e) {
            // $('.bloc-cv embed').attr('src', "");
            const text_input = $('#text-cv');
            var file = e.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.bloc-cv embed').attr('src', e.target.result);
            }
            if (file) {
                reader.readAsDataURL(file);
                text_input.hide();
                $('.bloc-cv embed').show();
            }

        });
        window.addEventListener('disable_form', event => {
            disableForm(true);
        })
        // });
    </script>
@endpush
