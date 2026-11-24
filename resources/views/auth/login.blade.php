<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion | {{ config('app.name') }}</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5 shadow-sm rounded">
                            <div class="brand-logo mb-4">
                                <a href="{{ route('catalogue.index') }}">
                                    <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
                                </a>
                            </div>
                            <h4>Bonjour ! Commençons</h4>
                            <h6 class="fw-light text-muted">Connectez-vous pour accéder à l'administration.</h6>

                            {{-- Affichage du statut de session (ex: réinitialisation mot de passe) --}}
                            @if (session('status'))
                                <div class="alert alert-success mt-3 py-2 small">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <input type="email"
                                           name="email"
                                           value="{{ old('email') }}"
                                           class="form-control form-control-lg @error('email') is-invalid @enderror"
                                           placeholder="Adresse email"
                                           required
                                           autofocus
                                           autocomplete="username">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password"
                                           name="password"
                                           class="form-control form-control-lg @error('password') is-invalid @enderror"
                                           placeholder="Mot de passe"
                                           required
                                           autocomplete="current-password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-3 d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg fw-medium auth-form-btn">
                                        SE CONNECTER
                                    </button>
                                </div>

                                <div class="my-3 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" name="remember" class="form-check-input">
                                            Rester connecté
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="auth-link text-black small">
                                            Mot de passe oublié ?
                                        </a>
                                    @endif
                                </div>

                                <div class="text-center mt-4 fw-light">
                                    Vous n'avez pas de compte ?
                                    <a href="{{ route('register') }}" class="text-primary fw-medium">Créer un compte</a>
                                </div>

                                <div class="text-center mt-3">
                                    <a href="{{ route('catalogue.index') }}" class="text-muted small">
                                        <i class="mdi mdi-arrow-left"></i> Retour au catalogue public
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
</body>
</html>
