@push('styles')
@endpush
<div>
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-primary text-white" wire:click="textclick">
                <div class="d-flex align-items-center">
                    <div class="flex-fill">
                        <h4 class="mb-0">{{ number_format($message["count"]) }}</h4>
                        Total messages
                    </div>

                    <i class="ph-chats ph-2x opacity-75 ms-3"></i>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-danger text-white">
                <div class="d-flex align-items-center">
                    <div class="flex-fill">
                        <h4 class="mb-0">{{ number_format($projet["count"]) }}</h4>
                        Total projets
                    </div>

                    <i class="ph-projector-screen-chart ph-2x opacity-75 ms-3"></i>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-success text-white">
                <div class="d-flex align-items-center">
                    <i class="ph-article ph-2x opacity-75 me-3"></i>

                    <div class="flex-fill text-end">
                        <h4 class="mb-0">{{ number_format($article["count"]) }}</h4>
                        Total articles
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-indigo text-white">
                <div class="d-flex align-items-center">
                    <i class="ph-chart-line-up ph-2x opacity-75 me-3"></i>

                    <div class="flex-fill text-end">
                        <h4 class="mb-0">{{ number_format($visite["count"]) }}</h4>
                        Total visites
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Visites récentes</h5>
                </div>

                <table class="table list-visite-dt">
                    <thead>
                        <tr>
                            <th>Adresse IP</th>
                            <th>Navigateur</th>
                            <th>Plateforme</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visite["liste"] as $visite)
                            <tr>
                                <td>{{ $visite->ip }}</td>
                                <td>{{ $visite->browser }}</td>
                                <td>{{ $visite->platform }}</td>
                                <td>{{ formatDateForHuman($visite->created_at) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Basic pie -->
            <div class="card">
                <div class="card-header d-flex">
                    <h5 class="mb-0">Visites par navigateur</h5>
                </div>

                <div class="card">
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr class="table-light">
                                    <td colspan="3">A la date du {{ Date("d/m/Y") }} à {{ Date("H:i:s") }}</td>
                                    <td>
                                        {{-- <span class="badge bg-success rounded-pill d-inline-flex">28 en ligne</span> --}}
                                    </td>
                                </tr>
                                @foreach ($browser as $key => $item)
                                    <tr>
                                        <td colspan="3" style="width: 75%">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="d-block me-3">
                                                    <img src="{{ asset("img/". $key.".png") }}"
                                                        class="rounded-circle" width="36" height="36"
                                                        alt="">
                                                </a>
                                                <div>
                                                    <a href="#" class="text-body fw-semibold">{{ $key ?? "" }}</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <h6 class="text-right">{{ number_format(count($item)) . " visites" }}</h6>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /basic pie -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Messages récents</h5>
                </div>

                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th>Expiditeur</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($message["liste"] as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ reduceText($message->message) }}</td>
                                <td>{{ formatDateForHuman($message->created_at) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Posts récents</h5>
                </div>

                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Catégorie</th>
                            <th>Auteur</th>
                            <th>Vue</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($article["liste"] as $article)
                            <tr>
                                <td>{{ $article->title }}</td>
                                <td>{{ reduceText($article->description, 50) }}</td>
                                <td>{{ $article->categorie->name }}</td>
                                <td>{{ $article->author }}</td>
                                <td>{{ number_format($article->view_count) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('assets_template/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets_template/demo/pages/datatables_basic.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush


