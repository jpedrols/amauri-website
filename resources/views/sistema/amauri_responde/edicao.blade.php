@extends('sistema.template.main')

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
                                <h4 class="card-title mb-4">Edição de Vídeos #AmauriResponde</h4>
                                
                                <form id="cadastro" action="{{ route('sistema.amauri_responde.salvar', ['amauri_responde' => $amauri_responde]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Título</label>
                                                <input required type="text" name="titulo" class="form-control" value="{{ $amauri_responde->titulo }}">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Url</label>
                                                <input required type="text" name="url" value="{{ $amauri_responde->url }}" class="form-control">
                                            </div>

                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    @if(is_null($amauri_responde->imagem))
                                                        <img class="escolher_imagem" id="foto-preview" src="{{asset('sistema/imagens/thumb-padrao.png')}}" style="max-height: 200px;" alt="">
                                                    @else 
                                                        <img class="escolher_imagem" id="foto-preview" src="{{asset($amauri_responde->imagem)}}" style="max-height: 200px;" alt="">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 text-center">
                                                    <label class="btn btn-primary" for="foto-upload">Escolher</label>
                                                    <input value="{{ asset($amauri_responde->imagem) }}" name="imagem" id="foto-upload" style="display: none;" type="file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        @include('sistema.footer')

        @section('scripts')
            <script>
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