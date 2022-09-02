@extends('sistema.template.main')

@section('content')
    <div class="main-content">

        
        <div class="page-content">
            <div class="container-fluid">

                <br>
                <br>

                <div class="row">
                    <div class="col-lg-12">
                        @foreach ($paginas as $pagina)
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">{{ $pagina->nome }}</h4>
                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="align-middle">Preview</th>
                                                    <th class="align-middle">Nome</th>
                                                    <th class="align-middle">Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pagina->destaques as $destaque)
                                                    <tr>
                                                        <td>
                                                            @if(is_null($destaque->imagem))
                                                                <img src="{{asset('sistema/imagens/thumb-padrao.png')}}" alt="" class="avatar-md h-auto d-block rounded"></td>
                                                            @else 
                                                                <img src="{{ asset($destaque->imagem) }}" alt="" class="avatar-md h-auto d-block rounded"></td>
                                                            @endif
                                                        </td>
                                                        <td>{{ $destaque->nome }}</td>
                                                        <td>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>  
                        @endforeach
                        
                    </div>
                </div>
                <!-- end row -->
                
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        
        @include('sistema.footer')
    </div>
@endsection