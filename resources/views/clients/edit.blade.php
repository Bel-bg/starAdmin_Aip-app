@extends('layout')

@section('title', 'Modifier le Client')
@section('subtitle', 'Mettre à jour les informations du client')

@section('content')
<div class="row">
    <div class="col-md-8 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title mb-0">Modifier : {{ $client->nom }}</h4>
                    <a href="{{ route('clients.index') }}" class="btn btn-light btn-sm">
                        Retour à la liste
                    </a>
                </div>

                <form class="forms-sample" action="{{ route('clients.update', $client->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="nom">Nom complet <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $client->nom) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $client->email) }}">
                    </div>

                    <div class="form-group mb-4">
                        <label for="date_inscription">Date d'inscription</label>
                        <input type="date" class="form-control" id="date_inscription" name="date_inscription" value="{{ old('date_inscription', $client->date_inscription) }}">
                    </div>

                    <button type="submit" class="btn btn-warning me-2">Mettre à jour</button>
                    <a href="{{ route('clients.index') }}" class="btn btn-light">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
