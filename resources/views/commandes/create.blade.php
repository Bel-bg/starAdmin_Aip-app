@extends('layout')

@section('title', 'Nouvelle Commande')
@section('subtitle', 'Créer une commande client avec calcul automatique')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title mb-0">Enregistrer une Nouvelle Commande</h4>
                    <a href="{{ route('commandes.index') }}" class="btn btn-light btn-sm">
                        Retour à l'historique
                    </a>
                </div>

                <form action="{{ route('commandes.store') }}" method="POST">
                    @csrf

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_id">Client <span class="text-danger">*</span></label>
                                <select class="form-select form-control" id="client_id" name="client_id" required>
                                    <option value="">-- Sélectionner un client --</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>
                                            {{ $client->nom }} {{ $client->email ? '(' . $client->email . ')' : '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_commande">Date et heure de commande <span class="text-danger">*</span></label>
                                <input type="datetime-local" class="form-control" id="date_commande" name="date_commande" value="{{ old('date_commande', now()->format('Y-m-d\TH:i')) }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Articles de la commande</h5>
                        <button type="button" class="btn btn-success btn-sm" id="btn-ajouter-ligne">
                            + Ajouter un produit
                        </button>
                    </div>

                    <div class="table-responsive mb-4">
                        <table class="table table-bordered" id="table-produits">
                            <thead>
                                <tr>
                                    <th style="width: 45%;">Produit</th>
                                    <th style="width: 18%;">Prix Unitaire</th>
                                    <th style="width: 15%;">Quantité</th>
                                    <th style="width: 17%;">Sous-total</th>
                                    <th style="width: 5%;"></th>
                                </tr>
                            </thead>
                            <tbody id="lignes-commande">
                                <tr class="ligne-produit">
                                    <td>
                                        <select name="produits[]" class="form-select form-control select-produit" required>
                                            <option value="" data-prix="0" data-stock="0">-- Choisir un produit --</option>
                                            @foreach($produits as $produit)
                                                <option value="{{ $produit->id }}" data-prix="{{ $produit->prix }}" data-stock="{{ $produit->stock }}">
                                                    {{ $produit->nom }} (Stock : {{ $produit->stock }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control prix-unitaire" value="0 FCFA" readonly>
                                    </td>
                                    <td>
                                        <input type="number" name="quantites[]" class="form-control input-quantite" value="1" min="1" required>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control sous-total fw-bold" value="0 FCFA" readonly>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-danger btn-sm btn-supprimer-ligne" disabled>X</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row justify-content-end mb-4">
                        <div class="col-md-4">
                            <div class="p-3 bg-light rounded border d-flex justify-content-between align-items-center">
                                <span class="fw-bold fs-5">Total à payer :</span>
                                <span class="fw-bold fs-4 text-primary" id="montant-total">0 FCFA</span>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Valider la commande</button>
                    <a href="{{ route('commandes.index') }}" class="btn btn-light">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tbody = document.getElementById('lignes-commande');
    const btnAjouter = document.getElementById('btn-ajouter-ligne');
    const affichageTotal = document.getElementById('montant-total');

    function formaterFCFA(montant) {
        return new Intl.NumberFormat('fr-FR').format(montant) + ' FCFA';
    }

    function recalculerTout() {
        let totalGeneral = 0;
        const lignes = tbody.querySelectorAll('.ligne-produit');

        lignes.forEach((ligne, index) => {
            const select = ligne.querySelector('.select-produit');
            const option = select.options[select.selectedIndex];
            const prix = parseFloat(option.getAttribute('data-prix')) || 0;
            const stock = parseInt(option.getAttribute('data-stock')) || 0;

            const inputQte = ligne.querySelector('.input-quantite');
            if (stock > 0) {
                inputQte.max = stock;
            }
            const qte = parseInt(inputQte.value) || 0;

            const sousTotal = prix * qte;
            totalGeneral += sousTotal;

            ligne.querySelector('.prix-unitaire').value = formaterFCFA(prix);
            ligne.querySelector('.sous-total').value = formaterFCFA(sousTotal);

            // Désactive le bouton supprimer s'il n'y a qu'une seule ligne
            const btnSuppr = ligne.querySelector('.btn-supprimer-ligne');
            btnSuppr.disabled = (lignes.length === 1);
        });

        affichageTotal.textContent = formaterFCFA(totalGeneral);
    }

    // Ajouter une nouvelle ligne
    btnAjouter.addEventListener('click', function () {
        const premiereLigne = tbody.querySelector('.ligne-produit');
        const nouvelleLigne = premiereLigne.cloneNode(true);

        nouvelleLigne.querySelector('.select-produit').value = '';
        nouvelleLigne.querySelector('.prix-unitaire').value = '0 FCFA';
        nouvelleLigne.querySelector('.input-quantite').value = 1;
        nouvelleLigne.querySelector('.sous-total').value = '0 FCFA';

        tbody.appendChild(nouvelleLigne);
        recalculerTout();
    });

    // Écouter les changements de produit ou de quantité
    tbody.addEventListener('change', function (e) {
        if (e.target.classList.contains('select-produit') || e.target.classList.contains('input-quantite')) {
            recalculerTout();
        }
    });

    tbody.addEventListener('input', function (e) {
        if (e.target.classList.contains('input-quantite')) {
            recalculerTout();
        }
    });

    // Supprimer une ligne
    tbody.addEventListener('click', function (e) {
        if (e.target.classList.contains('btn-supprimer-ligne')) {
            if (tbody.querySelectorAll('.ligne-produit').length > 1) {
                e.target.closest('.ligne-produit').remove();
                recalculerTout();
            }
        }
    });

    recalculerTout();
});
</script>
@endpush
