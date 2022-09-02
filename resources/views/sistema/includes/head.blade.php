<head>
    
    <meta charset="utf-8" />
    <title>Amauri Contabilidade - Sistema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('site/assets/img/favicon.ico') }}" type="image/x-icon"/>
    <meta content="jpedrols" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('sistema/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('sistema/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('sistema/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    @yield('styles')

    <style>        
        @-webkit-keyframes rotating {
            from{
                -webkit-transform: rotate(0deg);
            }
            to{
                -webkit-transform: rotate(360deg);
            }
        }

        .rotating {
            -webkit-animation: rotating 1s linear infinite;
        }
    </style>
</head>

<div id="spinner" style="overflow: hidden; z-index: 1000; position: absolute; left: 0; top: 0; width: 100%; height: 100%; background-color: white; text-align: center">
    <div style="margin-top: 20%;" class="rotating">
        <img src="{{ asset('site/assets/img/favicon.ico') }}" style="max-width: 10%">
    </div> 
</div>