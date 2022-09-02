@extends('sistema.template.main')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Visão Geral</h4>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-3">
                                            <h5 class="text-primary">Bem-Vindo !</h5>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('sistema/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            @if ($usuario->foto == "")
                                                <img src="{{ asset('sistema/imagens/usuarios/sem_foto.png') }}" alt="" class="rounded-circle header-profile-user">
                                            @else
                                                <img class="rounded-circle header-profile-user" src="{{ asset($usuario->foto)}}">
                                            @endif
                                        </div>
                                        <h5 class="font-size-15 ">{{ $usuario->nome }}</h5>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="pt-4">
                                            <div class="mt-4">
                                                <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">Ver Perfil <i class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted fw-medium">#AmauriResponde</p>
                                                <h4 class="mb-0">10</h4>
                                            </div>

                                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                <span class="avatar-title bg-primary">
                                                    <i class="bx bxl-youtube font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted fw-medium">Blog</p>
                                                <h4 class="mb-0">23</h4>
                                            </div>

                                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="bx bx-file font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted fw-medium">Álbuns</p>
                                                <h4 class="mb-0">14</h4>
                                            </div>

                                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="bx bxs-photo-album font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- end row -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">#AmauriResponde</h4>
                                        <hr>
                                        <div class="d-flex" style="justify-content: space-between">
                                            @foreach ($amauri_responde as $video)
                                                <div class="col-lg-5">
                                                    <div class="card plan-box">
                                                        <div class="card-body p-4">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h5>{{ $video->titulo }}</h5>
                                                                </div>
                                                            </div>
                                                            <div class="py-4 text-center">
                                                                <img style="max-width: 20%; height: auto;" src="{{ asset($video->imagem) }}">
                                                            </div>
                                                            <div class="text-center plan-btn">
                                                                <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Editar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Álbuns</h4>
                                        <hr>
                                        <div class="d-flex" style="justify-content: space-between">
                                            @foreach ($albuns as $album)
                                                <div class="col-lg-5">
                                                    <div class="card plan-box">
                                                        <div class="card-body p-4">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h5>{{ $album->titulo }}</h5>
                                                                </div>
                                                            </div>
                                                            <div class="py-4 text-center">
                                                                <img style="max-width: 20%; height: auto" src="{{ asset($album->thumb) }}">
                                                            </div>
                                                            <div class="text-center plan-btn">
                                                                <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Editar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Páginas</h4>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">Página</th>
                                                <th class="align-middle">Título</th>
                                                <th class="align-middle">Visualizações</th>
                                                <th class="align-middle">Detalhes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($paginas as $pagina)
                                                <tr>
                                                    <td>{{ $pagina->nome }}</td>
                                                    <td>{{ $pagina->titulo }}</td>
                                                    <td>{{ $pagina->visualizacoes }}</td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <a href="{{ route('sistema.paginas.edicao', ['pagina' => $pagina]) }}" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                            Detalhes
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        
        @include('sistema.footer')
    </div>
@endsection