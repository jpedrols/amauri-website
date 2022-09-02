<!doctype html>
<html lang="en">

    @include('sistema.includes.head')

    @php
        use App\Models\Usuario;
        $usuario = Usuario::find(session()->get('usuario')['id']);
    @endphp

    <body data-topbar="dark" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar" style="background-color: #191a20">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{ route('sistema.index') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('site/assets/img/favicon.ico') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('site/assets/img/favicon.ico') }}" alt="" height="60">
                                </span>
                            </a>

                            <a href="{{ route('sistema.index') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('site/assets/img/favicon.ico') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('site/assets/img/favicon.ico') }}" alt="" height="60">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Pesquisar...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search input">
                                
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>s
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if ($usuario->foto == "")
                                    <img src="{{ asset('sistema/imagens/usuarios/sem_foto.png') }}" alt="" class="rounded-circle header-profile-user">
                                @else
                                    <img class="rounded-circle header-profile-user" src="{{ asset($usuario->foto)}}">
                                @endif
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ $usuario->nome }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Perfil</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('sistema.sair') }}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Sair</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
    
            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('sistema.dashboard') }}" id="topnav-dashboard" role="button">
                                        <i class="bx bx-layout me-2"></i>
                                        <span key="t-dashboards">Dashboard</span> 
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                    >
                                        <i class="bx bx-file me-2"></i>
                                        <span key="t-ui-elements">Conteúdo</span> 
                                        <div class="arrow-down"></div>
                                    </a>

                                    <div class="dropdown-menu"
                                        aria-labelledby="topnav-uielement">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="d-flex flex-wrap">
                                                    <a href="{{ route('sistema.paginas.consultar') }}" class="dropdown-item" key="t-alerts">Páginas</a>
                                                    <a href="{{ route('sistema.destaques.consultar') }}" class="dropdown-item" key="t-alerts">Destaques</a>
                                                    <a href="{{ route('sistema.blogs.consultar') }}" class="dropdown-item" key="t-buttons">Blog</a>
                                                    <a href="#" class="dropdown-item" key="t-buttons">Amauri Responde</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#" id="topnav-dashboard" role="button">
                                        <i class="bx bx-photo-album me-2"></i>
                                        <span key="t-dashboards">Albuns</span> 
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            @yield('content')

        </div>

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        @include('sistema.includes.scripts')

        @yield('scripts')
    </body>

</html>
