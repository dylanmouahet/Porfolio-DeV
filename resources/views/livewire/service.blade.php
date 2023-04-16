<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h5 class="mb-0 flex-grow-1">
                        Mes services
                    </h5>
                    <button style="width: 10%" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">
                        <span>
                            Ajouter
                            <i class="ph-plus-circle"></i>
                        </span>
                    </button>
                </div>

                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Icône</th>
                            <th>Statut</th>
                            <th>Date d'ajout</th>
                            <th>Dernière modification</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->description }}</td>
                            <td class="text-center"><i class="fas fa-{{ $service->icon }}"></i> <code>{{ $service->icon }}</code> </td>
                            <td>
                                <span class="badge bg-{{ $service->view == 1 ? "success" : "danger" }} bg-opacity-10 text-{{ $service->view == 1 ? "success" : "danger" }}">
                                    {{ $service->view == 1 ? "Active" : "Inactif" }}
                                </span>
                            </td>
                            <td>{{ formatDateForHuman($service->created_at) }}</td>
                            <td>{{ formatDateForHuman($service->updated_at) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- CREATE AND EDIT MODAL --}}
    <div id="add" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Nom</label>
                                    <input type="text" placeholder="Wordpress" value="{{ $service_selected->name ?? "" }}" name="name" class="form-control">
                                    @error('dataToSave.name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" cols="30" rows="3" name="description" placeholder="A propos du service">{{ $service_selected->description ?? "" }}</textarea>
                                    @error('dataToSave.description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Icône (<code>FontAwesome icone sans <b>fa-</b></code>)</label>
                                    <input type="text" placeholder="add" value="{{ $service_selected->icon ?? "" }}" name="icon" class="form-control">
                                    @error('dataToSave.icon') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Statut</label>
                                    <select name="view" class="form-control">
                                        <option value="1" {{ isset($service_selected->icon) && $service_selected->icon == 1 ? "selected" : "" }}>
                                            <span class="bg-success bg-opacity-10 text-success">
                                                Active
                                            </span>
                                        </option>
                                        <option value="0" {{ isset($service_selected->icon) && $service_selected->icon == 0 ? "selected" : "" }}>
                                            <span class="bg-danger bg-opacity-10 text-danger">
                                                Inactif
                                            </span>
                                        </option>
                                    </select>
                                    @error('dataToSave.view') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success">Ajouter <i class="ph-plus-circle"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script src="{{ asset('assets_template/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets_template/demo/pages/datatables_basic.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush
