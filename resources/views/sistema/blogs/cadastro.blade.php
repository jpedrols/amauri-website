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

                <input form="cadastro" value="Salvar" type="submit" class="btn btn-primary waves-effect waves-light float-end">
                <div style="clear:both"></div>
                <br>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Cadastro de Páginas</h4>
                                
                                <form id="cadastro" action="{{ route('sistema.paginas.cadastrar') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Título</label>
                                                <input required type="text" name="nome" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <div class="mb-3">
                                                <label class="form-label">Categorias</label>
                                                <select required class="form-control" name="categoria_id">
                                                    <option>Selecione</option>
                                                    @foreach ($categorias as $categoria)
                                                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Data</label>
                                                <input disabled type="text" value="{{ date('d/m/Y') }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <label class="form-label">Conteúdo</label>
                                            <textarea required id="editor" name="conteudo">
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
            <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>

            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
        @endsection
    </div>
@endsection