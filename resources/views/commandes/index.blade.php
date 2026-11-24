@extends('layout')

@section('title', 'Historique des Commandes')
@section('subtitle', 'Consultez et gérez toutes les commandes clients')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title mb-0">Historique des Commandes</h4>
                    <a href="{{ route('commandes.create') }}" class="btn btn-primary btn-sm">
                        + Nouvelle Commande
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Client</th>
                                <th>Date de commande</th>
                                <th>Articles</th>
                                <th>Montant Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($commandes as $commande)
                                <tr>
                                    <td>{{ $commande->client_nom }}</td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($commande->date_commande)->format('d/m/Y H:i') }}
                                    </td>
                                    <td>
                                        <span class="badge badge-info">
                                            {{ $commande->total_articles }} article(s)
                                        </span>
                                    </td>
                                    <td>
                                        <strong class="text-success">
                                            {{ number_format($commande->montant, 0, ',', ' ') }} FCFA
                                        </strong>
                                    </td>
                                    <td>
                                        <a href="{{ route('commandes.show', $commande->id) }}" class="btn btn-info btn-sm">
                                            Détails
                                        </a>
                                        <a href="{{ route('commandes.edit', $commande->id) }}" class="btn btn-warning btn-sm">
    Modifier
</a>

                                        <form action="{{ route('commandes.destroy', $commande->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cette commande ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Supprimer
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">
                                        Aucune commande enregistrée pour le moment.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    @if ($commandes->hasPages())
<div class="d-flex justify-content-between align-items-center mt-4">
    <p class="text-muted mb-0">
        Affichage de {{ $commandes->firstItem() }} à {{ $commandes->lastItem() }} sur {{ number_format($commandes->total(), 0, ',', ' ') }} commandes
    </p>

    <nav>
        <ul class="pagination pagination-primary mb-0">
            {{-- Bouton Précédent --}}
            @if ($commandes->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link"><i class="ti-angle-left"></i></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $commandes->previousPageUrl() }}"><i class="ti-angle-left"></i></a>
                </li>
            @endif

            {{-- Numéros de pages autour de la page actuelle --}}
            @foreach ($commandes->getUrlRange(max(1, $commandes->currentPage() - 2), min($commandes->lastPage(), $commandes->currentPage() + 2)) as $page => $url)
                @if ($page == $commandes->currentPage())
                    <li class="page-item active">
                        <span class="page-link">{{ $page }}</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endif
            @endforeach

            {{-- Bouton Suivant --}}
            @if ($commandes->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $commandes->nextPageUrl() }}"><i class="ti-angle-right"></i></a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link"><i class="ti-angle-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
</div>
@endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
