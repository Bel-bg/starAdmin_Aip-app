@extends('layout')

@section('title', 'Corbeille des Produits')
@section('subtitle', 'Restaurez ou supprimez définitivement vos articles archivés')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card custom-table-wrapper" data-label="produits supprimés">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
                    <h4 class="card-title mb-0">Corbeille des Produits
                    </h4>

                    <div class="d-flex align-items-center gap-2">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <span class="input-group-text bg-transparent border-end-0">
                                <i class="mdi mdi-magnify text-muted"></i>
                            </span>
                            <input type="search" class="form-control border-start-0 custom-table-search" placeholder="Rechercher dans la corbeille...">
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-striped custom-table w-100">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Catégorie</th>
                                <th>Prix unitaire</th>
                                <th>Supprimé le</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produits as $produit)
                                <tr>
                                    <td><strong>{{ $produit->nom }}</strong></td>
                                    <td>
                                        <span class="badge badge-primary">
                                            {{ $produit->category->nom ?? 'Sans catégorie' }}
                                        </span>
                                    </td>
                                    <td>{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</td>
                                    <td>{{ $produit->deleted_at->format('d/m/Y à H:i') }}</td>
                                    <td>
                                        <form action="{{ route('produits.restore', $produit->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success btn-sm">Restaurer
                                            </button>
                                        </form>

                                        <form action="{{ route('produits.force-delete', $produit->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Attention : cette suppression est définitive. Continuer ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Supprimer définitivement
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
