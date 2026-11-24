@extends('layout')

@section('title', 'Nouveau Produit')
@section('subtitle', 'Ajouter un article au catalogue')

@section('content')
<div class="row">
    <div class="col-md-8 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Ajouter un Produit</h4>

                <form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom du produit <span class="text-danger">*</span></label>
                        <input type="text" name="nom" id="nom" value="{{ old('nom') }}" class="form-control @error('nom') is-invalid @enderror" required>
                        @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="categorie_id" class="form-label">Catégorie <span class="text-danger">*</span></label>
                        <select name="categorie_id" id="categorie_id" class="form-select @error('categorie_id') is-invalid @enderror" required>
                            <option value="">-- Choisir une catégorie --</option>
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}" @selected(old('categorie_id') == $categorie->id)>
                                    {{ $categorie->nom }}
                                </option>
                            @endforeach
                        </select>
                        @error('categorie_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="prix" class="form-label">Prix unitaire (FCFA) <span class="text-danger">*</span></label>
                            <input type="number" name="prix" id="prix" value="{{ old('prix') }}" min="0" step="1" class="form-control @error('prix') is-invalid @enderror" required>
                            @error('prix')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="stock" class="form-label">Quantité en stock <span class="text-danger">*</span></label>
                            <input type="number" name="stock" id="stock" value="{{ old('stock', 0) }}" min="0" class="form-control @error('stock') is-invalid @enderror" required>
                            @error('stock')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="form-label">Image du produit (JPG, PNG, WEBP - max 2 Mo)</label>
                        <input type="file" name="image" id="image" accept="image/*" class="form-control @error('image') is-invalid @enderror" onchange="previewImage(event)">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="mt-3 d-none" id="preview-container">
                            <img id="image-preview" src="#" alt="Aperçu" class="rounded border" style="max-height: 160px; object-fit: cover;">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('produits.index') }}" class="btn btn-light">Annuler</a>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function previewImage(event) {
    const input = event.target;
    const container = document.getElementById('preview-container');
    const preview = document.getElementById('image-preview');

    if (input.files && input.files) {
        const reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
            container.classList.remove('d-none');
        };
        reader.readAsDataURL(input.files);
    }
}
</script>
@endpush
@endsection
