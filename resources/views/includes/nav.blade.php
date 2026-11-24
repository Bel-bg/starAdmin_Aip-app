<!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="{{ route('home') }}">
              <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
              <img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Bonjour, <span class="text-black fw-bold">{{ Auth::user()->name ?? 'BelDev' }}</span></h1>
              <h3 class="welcome-sub-text">@yield('subtitle', 'Analyser vos performances de la semaine')</h3>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">Catégories </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 fw-medium float-start">Sélectionner une catégorie</p>
                </a>
                <div class="dropdown-divider"></div>
                @forelse (($navCategories ?? []) as $cat)
                  <a class="dropdown-item preview-item" href="{{ route('produits.index', ['categorie' => $cat->id]) }}">
                    <div class="preview-item-content flex-grow py-2">
                      <p class="preview-subject ellipsis fw-medium text-dark mb-0">{{ $cat->nom }}</p>
                    </div>
                  </a>
                @empty
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow py-2">
                      <p class="fw-light small-text mb-0">Aucune catégorie</p>
                    </div>
                  </a>
                @endforelse
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                <span class="input-group-addon input-group-prepend border-right">
                  <span class="icon-calendar input-group-text calendar-icon"></span>
                </span>
                <input type="text" class="form-control">
              </div>
            </li>
            <li class="nav-item">
              <form class="search-form" action="#">
                <i class="icon-search"></i>
                <input type="search" class="form-control" placeholder="Rechercher" title="Rechercher">
              </form>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="icon-bell"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 fw-medium float-start">Bienvenue dans votre tableau de board</p>
                  <span class="badge badge-pill badge-primary float-end">Merci !</span>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="icon-mail icon-lg"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 fw-medium float-start">Aucun nouveau message</p>
                  <span class="badge badge-pill badge-primary float-end">Ok !</span>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle"
     style="width: 32px; height: 32px; object-fit: cover; object-position: center top;"
     src="{{ asset('assets/images/moi.jpg') }}"
     alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle"
     style="width: 80px; height: 80px; object-fit: cover; object-position: center top;"
     src="{{ asset('assets/images/moi.jpg') }}"
     alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">{{ Auth::user()->name ?? 'BelDev' }}</p>
                  <p class="fw-light text-muted mb-0">{{ Auth::user()->email ?? 'beldev@gmail.com' }}</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Mon Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activités</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
                @if (Route::has('logout'))
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Se Déconnecter</button>
                  </form>
                @endif
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>