@extends('layout')

@section('title', 'Liste des Clients')
@section('subtitle', 'Gérez votre portefeuille clients')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card custom-table-wrapper" data-label="clients">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
                    <h4 class="card-title mb-0">Liste des Clients</h4>

                    <div class="d-flex align-items-center gap-2">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <span class="input-group-text bg-transparent border-end-0">
                                <i class="mdi mdi-magnify text-muted"></i>
                            </span>
                            <input type="search" class="form-control border-start-0 custom-table-search" placeholder="Rechercher un client...">
                        </div>

                        <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm text-nowrap">
                            + Nouveau Client
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-striped custom-table w-100">
                        <thead>
                            <tr>
                                <th>Nom complet</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Adresse</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td><strong>{{ $client->nom }} {{ $client->prenom ?? '' }}</strong></td>
                                    <td>{{ $client->email ?? '-' }}</td>
                                    <td>{{ $client->telephone ?? '-' }}</td>
                                    <td>{{ $client->adresse ?? '-' }}</td>
                                    <td>
                                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning btn-sm">
                                            Modifier
                                        </a>
                                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer ce client ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Supprimer
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex flex-wrap justify-content-between align-items-center mt-3 gap-2">
                    <div class="text-muted small custom-table-info"></div>
                    <nav>
                        <ul class="pagination pagination-sm mb-0 custom-table-pagination"></ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
