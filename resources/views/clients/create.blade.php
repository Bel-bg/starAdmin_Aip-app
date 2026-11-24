@extends('layout')

@section('title', 'Nouveau Client')
@section('subtitle', 'Ajouter un nouveau client à votre base')

@section('content')
<div class="row">
    <div class="col-md-8 grid-margin stretch-card mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title mb-0">Enregistrer un Nouveau Client</h4>
                    <a href="{{ route('clients.index') }}" class="btn btn-light btn-sm">
                        Retour à la liste
                    </a>
                </div>

                <form class="forms-sample" action="{{ route('clients.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="nom">Nom complet <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}" placeholder="Ex: Koffi Mensah" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Ex: client@example.com">
                    </div>

                    <div class="form-group mb-4">
                        <label for="date_inscription">Date d'inscription</label>
                        <input type="date" class="form-control" id="date_inscription" name="date_inscription" value="{{ old('date_inscription', date('Y-m-d')) }}">
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                    <a href="{{ route('clients.index') }}" class="btn btn-light">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
