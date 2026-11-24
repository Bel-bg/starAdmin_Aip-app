@extends('layout')

@section('title', 'Modifier la Commande #' . $commande->id)
@section('subtitle', 'Mettre à jour le client, la date ou les articles commandés')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title mb-0">Modifier la Commande #{{ $commande->id }}</h4>
                    <a href="{{ route('commandes.index') }}" class="btn btn-light btn-sm">
                        <i class="mdi mdi-arrow-left"></i> Retour à la liste
                    </a>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('commandes.update', $commande->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <label for="client_id" class="form-label">Client <span class="text-danger">*</span></label>
                            <select name="client_id" id="client_id" class="form-select" required>
                                <option value="">-- Sélectionner un client --</option>
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}" @selected(old('client_id', $commande->client_id) == $client->id)>
                                        {{ $client->nom }} ({{ $client->email }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="date_commande" class="form-label">Date de commande <span class="text-danger">*</span></label>
                            <input type="date"
                                   name="date_commande"
                                   id="date_commande"
                                   value="{{ old('date_commande', \Carbon\Carbon::parse($commande->date_commande)->format('Y-m-d')) }}"
                                   class="form-control"
                                   required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0">Articles de la commande</h5>
                        <button type="button" id="add-ligne" class="btn btn-outline-primary btn-sm">
                            + Ajouter un produit
                        </button>
                    </div>

                    <div class="table-responsive mb-3">
                        <table class="table table-bordered" id="table-lignes">
                            <thead class="bg-light">
                                <tr>
                                    <th style="width: 50%;">Produit</th>
                                    <th style="width: 20%;">Quantité</th>
                                    <th style="width: 20%;">Sous-total</th>
                                    <th style="width: 10%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($commande->produits as $ligne)
                                    <tr class="ligne-produit">
                                        <td>
                                            <select name="produits[]" class="form-select select-produit" required>
                                                <option value="">-- Choisir un produit --</option>
                                                @foreach($produits as $prod)
                                                    @php
                                                        $prixAffiche = ($prod->id == $ligne->id) ? $ligne->pivot->prix_unitaire : $prod->prix;
                                                        $stockDispo = ($prod->id == $ligne->id) ? ($prod->stock + $ligne->pivot->quantite) : $prod->stock;
                                                    @endphp
                                                    <option value="{{ $prod->id }}"
                                                            data-prix="{{ $prixAffiche }}"
                                                            @selected($prod->id == $ligne->id)>
                                                        {{ $prod->nom }} — {{ number_format($prixAffiche, 0, ',', ' ') }} FCFA (Max: {{ $stockDispo }})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="quantites[]" value="{{ $ligne->pivot->quantite }}" min="1" class="form-control input-quantite" required>
                                        </td>
                                        <td class="align-middle fw-bold sous-total">0 FCFA</td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-danger btn-sm btn-remove-ligne">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded mb-4">
                        <span class="fw-bold fs-5">Total estimé :</span>
                        <span class="fw-bold text-primary fs-4" id="total-general">0 FCFA</span>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('commandes.index') }}" class="btn btn-light">Annuler</a>
                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modèle de ligne caché pour l'ajout dynamique --}}
<template id="template-ligne">
    <tr class="ligne-produit">
        <td>
            <select name="produits[]" class="form-select select-produit" required>
                <option value="">-- Choisir un produit --</option>
                @foreach($produits as $prod)
                    <option value="{{ $prod->id }}" data-prix="{{ $prod->prix }}">
                        {{ $prod->nom }} — {{ number_format($prod->prix, 0, ',', ' ') }} FCFA (Stock: {{ $prod->stock }})
                    </option>
                @endforeach
            </select>
        </td>
        <td>
            <input type="number" name="quantites[]" value="1" min="1" class="form-control input-quantite" required>
        </td>
        <td class="align-middle fw-bold sous-total">0 FCFA</td>
        <td class="text-center align-middle">
            <button type="button" class="btn btn-danger btn-sm btn-remove-ligne">
                <i class="mdi mdi-delete"></i>
            </button>
        </td>
    </tr>
</template>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tbody = document.querySelector('#table-lignes tbody');
    const addBtn = document.getElementById('add-ligne');
    const template = document.getElementById('template-ligne');
    const totalBox = document.getElementById('total-general');

    function recalculer() {
        let total = 0;
        tbody.querySelectorAll('.ligne-produit').forEach(row => {
            const select = row.querySelector('.select-produit');
            const qtyInput = row.querySelector('.input-quantite');
            const subTotalBox = row.querySelector('.sous-total');

            const option = select.options[select.selectedIndex];
            const prix = option && option.dataset.prix ? parseFloat(option.dataset.prix) : 0;
            const qty = parseInt(qtyInput.value) || 0;
            const subTotal = prix * qty;

            subTotalBox.textContent = subTotal.toLocaleString('fr-FR') + ' FCFA';
            total += subTotal;
        });
        totalBox.textContent = total.toLocaleString('fr-FR') + ' FCFA';
    }

    addBtn.addEventListener('click', function () {
        const clone = template.content.cloneNode(true);
        tbody.appendChild(clone);
        recalculer();
    });

    tbody.addEventListener('change', function (e) {
        if (e.target.classList.contains('select-produit')) recalculer();
    });

    tbody.addEventListener('input', function (e) {
        if (e.target.classList.contains('input-quantite')) recalculer();
    });

    tbody.addEventListener('click', function (e) {
        const btn = e.target.closest('.btn-remove-ligne');
        if (btn && tbody.querySelectorAll('.ligne-produit').length > 1) {
            btn.closest('.ligne-produit').remove();
            recalculer();
        }
    });

    recalculer();
});
</script>
@endpush
@endsection
