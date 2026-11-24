@extends('layout')

@section('title', 'Gestion des Utilisateurs')
@section('subtitle', 'Attribuez et gérez les rôles (Admin, Vendeur, Client)')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card custom-table-wrapper" data-label="utilisateurs">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
                    <h4 class="card-title mb-0">Liste des Utilisateurs & Rôles</h4>

                    <div class="d-flex align-items-center gap-2">
                        <div class="input-group input-group-sm" style="width: 260px;">
                            <span class="input-group-text bg-transparent border-end-0">
                                <i class="mdi mdi-magnify text-muted"></i>
                            </span>
                            <input type="search" class="form-control border-start-0 custom-table-search" placeholder="Rechercher un utilisateur...">
                        </div>
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover table-striped custom-table w-100">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Rôle actuel</th>
                                <th>Inscrit le</th>
                                <th>Changer le rôle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <strong>{{ $user->name }}</strong>
                                        @if($user->id === auth()->id())
                                            <span class="badge badge-info ms-1">Vous</span>
                                        @endif
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->role?->nom === 'admin')
                                            <span class="badge badge-danger">{{ $user->role->libelle ?? 'Administrateur' }}</span>
                                        @elseif($user->role?->nom === 'vendeur')
                                            <span class="badge badge-warning">{{ $user->role->libelle ?? 'Vendeur' }}</span>
                                        @else
                                            <span class="badge badge-success">{{ $user->role->libelle ?? 'Client' }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at ? $user->created_at->format('d/m/Y') : '-' }}</td>
                                    <td>
                                        <form action="{{ route('users.update-role', $user->id) }}" method="POST" class="d-flex align-items-center gap-2">
                                            @csrf
                                            @method('PATCH')
                                            <select name="role_id" class="form-select form-select-sm" style="width: 160px;" @disabled($user->id === auth()->id())>
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->id }}" @selected($user->role_id == $role->id)>
                                                        {{ $role->libelle ?? ucfirst($role->nom) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-primary btn-sm" @disabled($user->id === auth()->id())>
                                                Appliquer
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
