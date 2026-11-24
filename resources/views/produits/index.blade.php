@extends('layout')

@section('title', 'Liste des Produits')
@section('subtitle', 'Gérez votre catalogue et vos stocks')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        {{-- Ajout de custom-table-wrapper et data-label --}}
        <div class="card custom-table-wrapper" data-label="produits">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
                    <h4 class="card-title mb-0">Liste des Produits</h4>

                    <div class="d-flex align-items-center gap-2">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <span class="input-group-text bg-transparent border-end-0">
                                <i class="mdi mdi-magnify text-muted"></i>
                            </span>
                            {{-- Classe générique custom-table-search --}}
                            <input type="search" class="form-control border-start-0 custom-table-search" placeholder="Rechercher un produit...">
                        </div>

                        <a href="{{ route('produits.create') }}" class="btn btn-primary btn-sm text-nowrap">
                            + Nouveau Produit
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    {{-- Classe générique custom-table --}}
                    <table class="table table-hover table-striped custom-table w-100">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Catégorie</th>
                                <th>Prix unitaire</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produits as $produit)
                                <tr>
                                    <td><strong>{{ $produit->nom }}</strong></td>
                                    <td>
                                        <span class="badge badge-primary">
                                            {{ $produit->categorie_nom ?? 'Sans catégorie' }}
                                        </span>
                                    </td>
                                    <td>{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</td>
                                    <td>
                                        @if($produit->stock > 10)
                                            <span class="badge badge-success">{{ $produit->stock }} en stock</span>
                                        @elseif($produit->stock > 0)
                                            <span class="badge badge-warning">{{ $produit->stock }} restant(s)</span>
                                        @else
                                            <span class="badge badge-danger">Rupture</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-warning btn-sm">
                                            Modifier
                                        </a>
                                        <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer ce produit ?');">
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
                    {{-- Classes génériques custom-table-info et custom-table-pagination --}}
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
