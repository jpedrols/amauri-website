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
                                <h4 class="card-title mb-4">Cadastro de Blog</h4>
                                
                                <form id="cadastro" action="{{ route('sistema.blogs.cadastrar') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Título</label>
                                                <input required type="text" name="titulo" class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Categorias</label>
                                                <select required class="form-control" name="categoria_id">
                                                    <option value="">Selecione</option>
                                                    @foreach ($categorias as $categoria)
                                                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <div class="mb-3">
                                                <label class="form-label">Data</label>
                                                <input disabled type="text" value="{{ date('d/m/Y') }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <img class="escolher_imagem" id="foto-preview" src="{{asset('sistema/imagens/thumb-padrao.png')}}" style="max-height: 200px;" alt="">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <label class="btn btn-primary" for="foto-upload">Escolher</label>
                                                <input name="imagem" id="foto-upload" style="display: none;" type="file">
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

                $(document).ready(function(){
                    var inp = document.getElementById('foto-upload');
                    inp.addEventListener('change', function(e){
                        var file = this.files[0];
                        var reader = new FileReader();
                        reader.onload = function(){
                            document.getElementById('foto-preview').src = this.result;
                            };
                        reader.readAsDataURL(file);
                    },false);
                });
            </script>
        @endsection
    </div>
@endsection