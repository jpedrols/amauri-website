@extends('sistema.template.main')

@section('content')
    <div class="main-content">

        
        <div class="page-content">
            <div class="container-fluid">
                
                <a href="{{ route('sistema.paginas.cadastro') }}" type="button" class="btn btn-primary waves-effect waves-light float-end">Novo</a>
                <div style="clear:both"></div>
                <br>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Páginas</h4>
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