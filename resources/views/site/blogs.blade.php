@extends('site.template.main', ['titulo' => 'Amauri Contabilidade - Blog Leitura'])

@section('content')
<div class="page-header" data-padding>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="sectiontitle-element--center">
                    <h1 data-aos="fade-up" class="big">
                        Nosso Blog
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    <section data-padding="bottom" data-isotope="fitRows" data-isotope-columns="three">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    @php
                        $var_fade = 1;

                        // Create Carbon date
                        $mes = $blog->created_at->formatLocalized('%B');
                    @endphp   

                    <article class="rectangle-element--article--wide">
                        <div class="info">
                            <div class="image">
                                <img data-unveil src="#" data-src="{{ asset($blog->imagem) }}" data-src-retina="assets/img/post-1@2x.jpg" alt=""
                                />
                            </div>
                            <div class="text">
                                <div class="meta--image">
                                </div>
                                <h3> {{ $blog->titulo }}</h3>
                                <p>{!! Str::limit($blog->conteudo, 78) !!}</p>
                                <a href="{{ route('site.blog_leitura', ['blog' => $blog]) }}" class="simple--underline" >Ver mais</a>
                            </div>
                        </div>
                        <a href="{{ route('site.blog_leitura', ['blog' => $blog]) }}" class="link"></a>
                    </article>
                    @php
                        $var_fade++;
                    @endphp
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection