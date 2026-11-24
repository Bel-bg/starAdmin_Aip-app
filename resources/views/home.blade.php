@extends('layout')

@section('title', 'Tableau de bord')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="home-tab">
      <div class="d-sm-flex align-items-center justify-content-between border-bottom">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a @class(['nav-link ps-0', 'active' => request()->routeIs('home')]) href="{{ route('home') }}">Accueil</a>
          </li>
          <li class="nav-item">
            <a @class(['nav-link', 'active' => request()->routeIs('clients.*')]) href="{{ route('clients.index') }}">Clients</a>
          </li>
          <li class="nav-item">
            <a @class(['nav-link', 'active' => request()->routeIs('categories.*')]) href="{{ route('categories.index') }}">Categories</a>
          </li>
          <li class="nav-item">
            
            <a @class(['nav-link border-0', 'active' => request()->routeIs('commandes.*')]) href="{{ route('commandes.index') }}">Commandes</a>
          </li>
        </ul>
        <div>
          <div class="btn-wrapper">
    <a href="{{ route('catalogue.index') }}" class="btn btn-primary text-white me-0">
        <i class="icon-globe"></i> Visiter le Catalogue public
    </a>
</div>

        </div>
      </div>
      <div class="tab-content tab-content-basic">
        <div class="tab-pane fade show active" id="accueil" role="tabpanel" aria-labelledby="home-tab">
          <div class="row">
            <div class="col-sm-12">
              <div class="statistics-details d-flex align-items-center justify-content-between">
                <div class="d-none d-md-block">
                  <p class="statistics-title">Chiffre D'Affaire</p>
                  <h3 class="rate-percentage">{{ number_format($chiffreAffaire, 0, ',', ' ') }} FCFA</h3>
                </div>
                <div>
                  <p class="statistics-title">Total Produits</p>
                  <h3 class="rate-percentage">{{ $totalProduits }}</h3>
                </div>
                <div>
                  <p class="statistics-title">Total Catégories</p>
                  <h3 class="rate-percentage">{{ $totalCategories }}</h3>
                </div>
                <div>
                  <p class="statistics-title">Total Clients</p>
                  <h3 class="rate-percentage">{{ $totalClients }}</h3>
                </div>
                <div class="d-none d-md-block">
                  <p class="statistics-title">Total Commandes</p>
                  <h3 class="rate-percentage">{{ $totalCommandes }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
  <script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endpush
