<!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li @class(['nav-item', 'active' => request()->routeIs('home')])>
              <a class="nav-link" href="{{ route('home') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li @class(['nav-item', 'active' => request()->routeIs('clients.*')])>
              <a class="nav-link" data-bs-toggle="collapse" href="#menu-clients" aria-expanded="{{ request()->routeIs('clients.*') ? 'true' : 'false' }}" aria-controls="menu-clients">
    <i class="menu-icon mdi mdi-account-group"></i>
    <span class="menu-title">Clients</span>
    <i class="menu-arrow"></i>
</a>

              <div @class(['collapse', 'show' => request()->routeIs('clients.*')]) id="menu-clients">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a @class(['nav-link', 'active' => request()->routeIs('clients.create')]) href="{{ route('clients.create') }}">Nouveau Client</a></li>
                  <li class="nav-item"> <a @class(['nav-link', 'active' => request()->routeIs('clients.index')]) href="{{ route('clients.index') }}">Listes Clients</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Types de Clients</a></li>
                </ul>
              </div>
            </li>
            <li @class(['nav-item', 'active' => request()->routeIs('produits.*', 'categories.*')])>
              <a class="nav-link" data-bs-toggle="collapse" href="#menu-produits" aria-expanded="{{ request()->routeIs('produits.*', 'categories.*') ? 'true' : 'false' }}" aria-controls="menu-produits">
                <i class="menu-icon mdi mdi-tag-multiple"></i>
                <span class="menu-title">Catalogue</span>
                <i class="menu-arrow"></i>
              </a>
              <div @class(['collapse', 'show' => request()->routeIs('produits.*', 'categories.*')]) id="menu-produits">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('categories.*')]) href="{{ route('categories.index') }}">Catégories</a></li>
                  <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('produits.create')]) href="{{ route('produits.create') }}">Nouveau Produit</a></li>
                  <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('produits.index')]) href="{{ route('produits.index') }}">Listes des Produits</a></li>
                </ul>
              </div>
            </li>
            <li @class(['nav-item', 'active' => request()->routeIs('commandes.*')])>
              <a class="nav-link" data-bs-toggle="collapse" href="#menu-commandes" aria-expanded="{{ request()->routeIs('commandes.*') ? 'true' : 'false' }}" aria-controls="menu-commandes">
               <i class="menu-icon mdi mdi-shopping-outline"></i>
                <span class="menu-title">Commandes</span>
                <i class="menu-arrow"></i>
              </a>
              <div @class(['collapse', 'show' => request()->routeIs('commandes.*')]) id="menu-commandes">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a @class(['nav-link', 'active' => request()->routeIs('commandes.create')]) href="{{ route('commandes.create') }}">Nouvelle Commande</a></li>
                  <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('commandes.index')]) href="{{ route('commandes.index') }}">Historique Commande</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#menu-comptes" aria-expanded="false" aria-controls="menu-comptes">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Comptes</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="menu-comptes">
                <ul class="nav flex-column sub-menu">
                  @if (Route::has('logout'))
                    <li class="nav-item">
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link bg-transparent border-0 w-100 text-start">Se Déconnecter</button>
                      </form>
                    </li>
                  @endif
                  <li class="nav-item"> <a class="nav-link" href="#"> Ajouter un Admin </a></li>
                  <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('produits.corbeille')]) href="{{ route('produits.corbeille') }}">Corbeille</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#"> Autres </a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>