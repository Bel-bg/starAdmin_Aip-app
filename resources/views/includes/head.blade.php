<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Tableau de bord') | {{ config('app.name') }}</title>
    @include("includes.css")
    <link rel="stylesheet" href="https://datatables.net">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="https://datatables.net">

</head>
