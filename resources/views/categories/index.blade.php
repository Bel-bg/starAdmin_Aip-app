@extends('layout')

@section('title', 'Liste des Catégories')
@section('subtitle', 'Gérez les catégories de votre catalogue')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card custom-table-wrapper" data-label="catégories">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
                    <h4 class="card-title mb-0">Liste des Catégories</h4>

                    <div class="d-flex align-items-center gap-2">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <span class="input-group-text bg-transparent border-end-0">
                                <i class="mdi mdi-magnify text-muted"></i>
                            </span>
                            <input type="search" class="form-control border-start-0 custom-table-search" placeholder="Rechercher une catégorie...">
                        </div>

                        <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm text-nowrap">
                            + Nouvelle Catégorie
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-striped custom-table w-100">
                        <thead>
                            <tr>
                                <th>Nom de la catégorie</th>
                                <th>Produits associés</th>
                                <th>Date de création</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $categorie)
                                <tr>
                                    <td><strong>{{ $categorie->nom }}</strong></td>
                                    <td>
                                        <span class="badge badge-info">
                                            {{ $categorie->produits_count ?? $categorie->produits->count() }} produit(s)
                                        </span>
                                    </td>
                                    <td>{{ $categorie->created_at ? \Carbon\Carbon::parse($categorie->created_at)->format('d/m/Y') : '-' }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-warning btn-sm">
                                            Modifier
                                        </a>
                                        <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cette catégorie ?');">
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
