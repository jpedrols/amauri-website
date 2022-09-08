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
                        <div class="row" style="margin-top: 70px">
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
                        <div class="row">
                            <div class="col-lg-12" >
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">#AmauriResponde</h4>
                                        <hr>
                                        <div class="d-flex" style="justify-content: space-between">
                                            @if($amauri_responde->count() > 0)
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
                                                                    <img style="max-width: 50%; height: auto;" src="{{ asset($video->imagem) }}">
                                                                </div>
                                                                <div class="text-center plan-btn">
                                                                    <a href="{{ route('sistema.amauri_responde.edicao', ['amauri_responde' => $video]) }}" class="btn btn-primary btn-sm waves-effect waves-light">Editar</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-lg-5">
                                                    <div class="card plan-box">
                                                        <div class="card-body p-4">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h5>N/A</h5>
                                                                </div>
                                                            </div>
                                                            <div class="py-4 text-center">
                                                                <img style="max-width: 50%; height: auto" src="{{ asset('sistema/imagens/usuarios/sem_foto.png') }}">
                                                            </div>
                                                            <div class="text-center plan-btn">
                                                                <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Editar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="card plan-box">
                                                        <div class="card-body p-4">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h5>N/A</h5>
                                                                </div>
                                                            </div>
                                                            <div class="py-4 text-center">
                                                                <img style="max-width: 50%; height: auto" src="{{ asset('sistema/imagens/usuarios/sem_foto.png') }}">
                                                            </div>
                                                            <div class="text-center plan-btn">
                                                                <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Editar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
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
                                            @if($albuns->count() > 0)
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
                                                                    <img style="max-width: 50%; height: auto" src="{{ asset($album->thumb) }}">
                                                                </div>
                                                                <div class="text-center plan-btn">
                                                                    <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Editar</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-lg-5">
                                                    <div class="card plan-box">
                                                        <div class="card-body p-4">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h5>N/A</h5>
                                                                </div>
                                                            </div>
                                                            <div class="py-4 text-center">
                                                                <img style="max-width: 50%; height: auto" src="{{ asset('sistema/imagens/usuarios/sem_foto.png') }}">
                                                            </div>
                                                            <div class="text-center plan-btn">
                                                                <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Editar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="card plan-box">
                                                        <div class="card-body p-4">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h5>N/A</h5>
                                                                </div>
                                                            </div>
                                                            <div class="py-4 text-center">
                                                                <img style="max-width: 50%; height: auto" src="{{ asset('sistema/imagens/usuarios/sem_foto.png') }}">
                                                            </div>
                                                            <div class="text-center plan-btn">
                                                                <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Editar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Acessos em tempo real</h4>
                            <div>
                                <canvas id="myChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

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
                                                    <td>{{ Str::limit($pagina->titulo, 77) }}</td>
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

        @section('scripts')
            <script src="{{ asset('sistema/assets/libs/chart.js/Chart.bundle.min.js') }}"></script>
            <script src="{{ asset('sistema/assets/js/chart.min.js') }}"></script>

            <script>
                var canvas = document.getElementById('myChart');
                var data = {
                    labels: ["11:04", "11:05", "11:06", "11:07", "11:08", "11:09", "agora"],
                    datasets: [
                        {
                            label: "Visualizações por minuto",
                            fill: false,
                            lineTension: 0.1,
                            backgroundColor: "rgba(75,192,192,0.4)",
                            borderColor: "rgba(75,192,192,1)",
                            borderCapStyle: 'butt',
                            borderDash: [],
                            borderDashOffset: 0.0,
                            borderJoinStyle: 'miter',
                            pointBorderColor: "rgba(75,192,192,1)",
                            pointBackgroundColor: "#fff",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "rgba(75,192,192,1)",
                            pointHoverBorderColor: "rgba(220,220,220,1)",
                            pointHoverBorderWidth: 2,
                            pointRadius: 5,
                            pointHitRadius: 10,
                            data: [0, 0, 0, 0, 0, 0, 0],
                        }
                    ]
                };

                setInterval(() => {
                    jQuery.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ url('/retorna_views/') }}",
                        method: 'get',
                        data: {},
                        success: function(result){
                            myLineChart.data.datasets[0].data = result[0];

                            myLineChart.data.labels = result[1];
                            myLineChart.data.dataset = result[1];

                            myLineChart.update();

                            // console.log(result);
                        },
                        error: function(){
                            console.log('Ajax não funcionou');
                        }
                    });
                }, 1000);

                // setInterval(() => {
                //     jQuery.ajax({
                //         headers: {
                //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //         },
                //         url: "{{ url('/contabiliza_views/{uuid}') }}",
                //         method: 'get',
                //         data: {
                //             uuid: window.localStorage.getItem('uuid')
                //         },
                //         success: function(result){
                //             window.localStorage.setItem('uuid', result);
                //         },
                //         error: function(){
                //             console.log('Ajax não funcionou');
                //         }
                //     });

                //     var newData=[1,2,3,4,5,6,7];
                //     // for(var i=0;i<7;i++){
                //     //     newData.push(Math.round(Math.random() * 100))
                //     // }
                //     myLineChart.data.datasets[0].data =newData;
                //     myLineChart.update();
                // }, 1000);

                var option = {
                    showLines: true,
                };
                    var myLineChart = Chart.Line(canvas,{
                        data:data,
                        options:option
                    });
            </script>
        @endsection
        
        @include('sistema.footer')
        
        
    </div>
@endsection