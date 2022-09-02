@extends('sistema.template.main')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                
                <a href="{{ route('sistema.amauri_responde.cadastro') }}" type="button" class="btn btn-primary waves-effect waves-light float-end">Novo</a>
                <div style="clear:both"></div>
                <br>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Amauri Responde vídeos</h4>
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">Thumb</th>
                                                <th class="align-middle">Título</th>
                                                <th class="align-middle">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($amauri_responde as $video)
                                                <tr>
                                                    <td>
                                                        @if(is_null($video->imagem))
                                                            <img src="{{asset('sistema/imagens/thumb-padrao.png')}}" alt="" class="avatar-md h-auto d-block rounded"></td>
                                                        @else 
                                                            <img src="{{ asset($video->imagem) }}" alt="" class="avatar-md h-auto d-block rounded"></td>
                                                        @endif
                                                    </td>
                                                    <td>{{ $video->titulo }}</td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <a href="{{ route('sistema.amauri_responde.edicao', ['amauri_responde' => $video]) }}" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
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
        
        @include('sistema.footer')
    </div>
@endsection