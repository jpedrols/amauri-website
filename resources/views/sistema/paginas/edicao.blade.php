@extends('sistema.template.main')

@section('styles')
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 600px;
            resize: both;
            overflow: auto;
            max-width: 100%;
            min-width: 100%;
        }
        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
@endsection

@section('content')
    <div class="main-content">
        
        <div class="page-content">
            <div class="container-fluid">

                {{-- <input form="cadastro" value="Salvar" type="submit" class="btn btn-primary waves-effect waves-light float-end">
                <div style="clear:both"></div> --}}
                <br>
                <br>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Edição de Páginas</h4>
                                
                                <form id="cadastro" action="{{ route('sistema.paginas.salvar', ['pagina' => $pagina]) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nome da Página</label>
                                                <input disabled type="text" name="nome" class="form-control" value="{{ $pagina->nome }}">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Título</label>
                                                <input required type="text" name="titulo" class="form-control" value="{{ $pagina->titulo }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <div class="mb-3">
                                                <label class="form-label">Data</label>
                                                <input disabled type="text" value="{{ date('d/m/Y', strtotime($pagina->created_at)) }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <label class="form-label">Conteúdo</label>
                                            <textarea rows="20" class="form-control" required id="editor" name="conteudo">
                                                {{ $pagina->conteudo }}
                                            </textarea>
                                        </div>
                                    </div>
                                </form>

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

        @section('scripts')
        @endsection
    </div>
@endsection