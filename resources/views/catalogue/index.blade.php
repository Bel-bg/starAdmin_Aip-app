<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Catalogue Produits | {{ config('app.name') }}</title>

    <!-- plugins:css depuis public/assets -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>
<body>
    <div class="container-scroller">
        {{-- En-tête fidèle au style StarAdmin --}}
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row shadow-sm">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div>
                    <a class="navbar-brand brand-logo" href="{{ route('catalogue.index') }}">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="{{ route('catalogue.index') }}">
                        <img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <div>
                </div>
                <div>
                    <a href="{{ route('home') }}" class="btn btn-primary btn-sm">
                        <i class="mdi mdi-view-dashboard me-1"></i> Espace Admin
                    </a>
                </div>
            </div>
        </nav>

        {{-- Contenu principal --}}
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel w-100">
                <div class="content-wrapper">
                    {{-- Carte de recherche et filtre automatique --}}
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-text bg-transparent">
                                                    <i class="mdi mdi-magnify text-primary"></i>
                                                </span>
                                                <input type="search" id="catalogue-search" class="form-control" placeholder="Rechercher un produit par nom ou prix...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select id="catalogue-category" class="form-select">
                                                <option value="">Toutes les catégories</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat->id }}">
                                                        {{ $cat->nom }} ({{ $cat->produits_count }})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2 d-grid">
                                            <button type="button" id="catalogue-reset" class="btn btn-light">
                                                Réinitialiser
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Grille des produits --}}
                    <div class="row" id="catalogue-grid">
                        @foreach($produits as $produit)
                            <div class="col-sm-6 col-md-4 col-lg-3 grid-margin stretch-card catalogue-item"
                                 data-categorie="{{ $produit->categorie_id }}"
                                 data-search="{{ strtolower($produit->nom . ' ' . ($produit->category->nom ?? '') . ' ' . $produit->prix) }}">
                                <div class="card w-100">
                                    @if($produit->image)
                                    <div class="bg-white border-bottom d-flex align-items-center justify-content-center p-2" style="height: 190px;">
                                        <img src="{{ asset('storage/' . $produit->image) }}"
                                            alt="{{ $produit->nom }}"
                                            style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                    </div>
                                @else
                                    <div class="d-flex flex-column align-items-center justify-content-center bg-light border-bottom" style="height: 190px;">
                                        <i class="mdi mdi-package-variant-closed text-primary" style="font-size: 3rem;"></i>
                                        <span class="text-muted small mt-1">Aperçu indisponible</span>
                                    </div>
                                @endif


                                    <div class="card-body d-flex flex-column">
                                        <div class="mb-2">
                                            <span class="badge badge-primary">
                                                {{ $produit->category->nom ?? 'Sans catégorie' }}
                                            </span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center gap-2 mt-auto pt-2 border-top">
                                        <h5 class="card-title mb-0 text-truncate" title="{{ $produit->nom }}">{{ $produit->nom }}</h5>

                                        <p class="fw-bold text-primary fs-6 mb-0 text-nowrap">
                                            {{ number_format($produit->prix, 0, ',', ' ') }} FCFA
                                        </p>

                                        @if($produit->stock > 10)
                                            <span class="badge badge-success text-nowrap">{{ $produit->stock }} en stock</span>
                                        @else
                                            <span class="badge badge-warning text-nowrap">{{ $produit->stock }} restant(s)</span>
                                        @endif
                                    </div>


                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Message si aucun produit ne correspond --}}
                    <div id="catalogue-empty" class="card d-none">
                        <div class="card-body text-center py-5">
                            <i class="mdi mdi-magnify-close text-muted" style="font-size: 3rem;"></i>
                            <h5 class="mt-3">Aucun produit trouvé</h5>
                            <p class="text-muted mb-0">Essayez de modifier votre recherche ou de changer de catégorie.</p>
                        </div>
                    </div>

                    {{-- Zone d'information et pagination compacte --}}
                    <div class="d-flex flex-wrap justify-content-between align-items-center mt-3 gap-2">
                        <div id="catalogue-info" class="text-muted small"></div>
                        <nav>
                            <ul id="catalogue-pagination" class="pagination pagination-sm mb-0"></ul>
                        </nav>
                    </div>
                </div>

                @include('includes.footer')
            </div>
        </div>
    </div>

    <!-- plugins:js depuis public/assets -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>

    {{-- Filtrage instantané + pagination dynamique de la grille --}}
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('catalogue-search');
        const categorySelect = document.getElementById('catalogue-category');
        const resetBtn = document.getElementById('catalogue-reset');
        const allItems = Array.from(document.querySelectorAll('.catalogue-item'));
        const emptyBox = document.getElementById('catalogue-empty');
        const infoBox = document.getElementById('catalogue-info');
        const paginationBox = document.getElementById('catalogue-pagination');

        const itemsPerPage = 12;
        let currentPage = 1;
        let filteredItems = [...allItems];

        function createPageItem(label, page, disabled = false, active = false) {
            const li = document.createElement('li');
            li.className = `page-item ${disabled ? 'disabled' : ''} ${active ? 'active' : ''}`;
            li.innerHTML = `<a class="page-link" href="#">${label}</a>`;
            if (!disabled && page !== null) {
                li.onclick = (e) => {
                    e.preventDefault();
                    currentPage = page;
                    renderCatalogue();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                };
            }
            return li;
        }

        function applyFilters() {
            const term = searchInput.value.toLowerCase().trim();
            const selectedCat = categorySelect.value;

            filteredItems = allItems.filter(item => {
                const matchesSearch = item.dataset.search.includes(term);
                const matchesCat = selectedCat === '' || item.dataset.categorie === selectedCat;
                return matchesSearch && matchesCat;
            });

            currentPage = 1;
            renderCatalogue();
        }

        function renderCatalogue() {
            const total = filteredItems.length;
            const totalPages = Math.ceil(total / itemsPerPage) || 1;
            if (currentPage > totalPages) currentPage = totalPages;

            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            allItems.forEach(item => item.style.display = 'none');
            filteredItems.slice(start, end).forEach(item => item.style.display = '');

            if (total === 0) {
                emptyBox.classList.remove('d-none');
                infoBox.textContent = '';
            } else {
                emptyBox.classList.add('d-none');
                infoBox.textContent = `Affichage de ${start + 1} à ${Math.min(end, total)} sur ${total} produits disponibles`;
            }

            paginationBox.innerHTML = '';
            if (totalPages <= 1) return;

            paginationBox.appendChild(createPageItem('Précédent', currentPage - 1, currentPage === 1));

            const delta = 2;
            const range = [];
            for (let i = Math.max(2, currentPage - delta); i <= Math.min(totalPages - 1, currentPage + delta); i++) {
                range.push(i);
            }

            paginationBox.appendChild(createPageItem(1, 1, false, currentPage === 1));
            if (range[0] > 2) paginationBox.appendChild(createPageItem('...', null, true));

            range.forEach(page => {
                paginationBox.appendChild(createPageItem(page, page, false, currentPage === page));
            });

            if (range[range.length - 1] < totalPages - 1) paginationBox.appendChild(createPageItem('...', null, true));
            if (totalPages > 1) paginationBox.appendChild(createPageItem(totalPages, totalPages, false, currentPage === totalPages));

            paginationBox.appendChild(createPageItem('Suivant', currentPage + 1, currentPage === totalPages));
        }

        searchInput.addEventListener('input', applyFilters);
        categorySelect.addEventListener('change', applyFilters);
        resetBtn.addEventListener('click', function () {
            searchInput.value = '';
            categorySelect.value = '';
            applyFilters();
        });

        renderCatalogue();
    });
    </script>
</body>
</html>
