<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, shrink-to-fit=no"/>

        <title>{{ $titulo }}</title>

        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="theme-color" content="#000" />

        <meta name="description" content="" />
        <meta name="author" content="hyp8" />

        <link rel="shortcut icon" href="{{ asset('site/assets/img/favicon.ico') }}" type="image/x-icon"/>

        <!-- Canonical -->
        <link rel="canonical" href="/" />

        <!-- Open Graph -->
        <meta property="og:image" content="" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:url" content="" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:creator" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:title" content="" />
        <meta name="twitter:description" content="" />
        <meta name="twitter:image" content="" />

        <!-- Custom css -->
        <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}" />

        <style>
            html {
  scroll-behavior: smooth;
}
        </style>
    </head>

    <body>

        @include('site.includes.navbar')
    
        @yield('content')
    
        @include('site.includes.footer')
    
        @include('site.includes.scripts')
    
        @yield('scripts')
    
    </body>
    
</html>
