@extends('layout')

@section('title', 'Détails Commande #CMD-' . $commande->id)
@section('subtitle', 'Récapitulatif complet de la commande')

@section('content')
<div class="row">
    <div class="col-md-10 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="card-title mb-1">Commande #CMD-{{ $commande->id }}</h4>
        <p class="text-muted mb-0">
            Date : {{ \Carbon\Carbon::parse($commande->date_commande)->format('d/m/Y à H:i') }}
        </p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('commandes.recu-pdf', $commande->id) }}" class="btn btn-danger btn-sm">
            <i class="mdi mdi-file-pdf-box"></i> Télécharger le reçu
        </a>
        <a href="{{ route('commandes.index') }}" class="btn btn-light btn-sm">
            Retour à l'historique
        </a>
    </div>
</div>


                <div class="mb-4 p-3 bg-light rounded">
                    <strong>Client :</strong> {{ $commande->client_nom }} <br>
                    <strong>Email :</strong> {{ $commande->client_email ?? 'Non renseigné' }}
                </div>

                <div class="table-responsive mb-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Prix Unitaire</th>
                                <th>Quantité</th>
                                <th>Sous-total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($details as $ligne)
                                <tr>
                                    <td><strong>{{ $ligne->produit_nom }}</strong></td>
                                    <td>{{ number_format($ligne->prix_unitaire, 0, ',', ' ') }} FCFA</td>
                                    <td>{{ $ligne->quantite }}</td>
                                    <td>{{ number_format($ligne->prix_unitaire * $ligne->quantite, 0, ',', ' ') }} FCFA</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3" class="text-end">Montant Total :</th>
                                <th class="text-success fs-5">
                                    {{ number_format($commande->montant, 0, ',', ' ') }} FCFA
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
