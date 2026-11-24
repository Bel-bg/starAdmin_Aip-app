@extends('layout')

@section('title', 'Modifier la Catégorie')
@section('subtitle', 'Mettre à jour le nom de la catégorie')

@section('content')
<div class="row">
    <div class="col-md-8 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title mb-0">Modifier : {{ $categorie->nom }}</h4>
                    <a href="{{ route('categories.index') }}" class="btn btn-light btn-sm">
                        Retour à la liste
                    </a>
                </div>

                <form class="forms-sample" action="{{ route('categories.update', $categorie->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-4">
                        <label for="nom">Nom de la catégorie <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $categorie->nom) }}" maxlength="50" required>
                    </div>

                    <button type="submit" class="btn btn-warning me-2">Mettre à jour</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-light">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
