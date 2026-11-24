<!DOCTYPE html>
<html lang="fr">
  @include('includes.head')
  <body class="with-welcome-text">
    <div class="container-scroller">
      @include('includes.nav')
      <div class="container-fluid page-body-wrapper">
        @include('includes.sidebar')
        <div class="main-panel">
          @include('includes.alert')
          @yield('content')
          </div>
          @include('includes.footer')
        </div>
      </div>
    </div>
  @include('includes.script')
  </body>
</html>
  