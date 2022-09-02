@extends('site.template.main', ['titulo' => 'Amauri Contabilidade - Blog Leitura'])

@section('content')

<div class="page-header" data-padding="top">
    <div class="container">
        <div class="row" data-padding="smbottom">
            <div class="col-12">
                <div class="sectiontitle-element--center">
                    <h1
                        data-aos="fade-up"
                        data-aos-delay="100"
                        class="big"
                    >
                    Programa de redução e suspensão de jornada está de volta!
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="200">
                    </p>
                    <time
                        data-aos="fade-up"
                        data-aos-delay="400"
                        class="e-date"
                        datetime="2020-07-05T07:55:21+02:00"
                        >30 de Abril, 2021</time
                    >
                </div>
            </div>
        </div>
    </div>
</div>
<!--  END Page Header  -->
<!--  Page Content  -->
<div class="page-content">
    <!--  Main Img  -->
    <section data-padding="bottom">
        <div class="container">
            <div data-aos="zoom-in" data-aos-duration="1000" class="row" >
                <div class="col-12">
                    <div class="wrapimage-element">
                        <img data-unveil src="#" data-src="{{ asset($blog->imagem) }}" data-src-retina="{{ asset('site/assets/img/project-header@2x.jpg') }}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END Main Img  -->
    <!--  Text  -->
    <section data-padding="bottom">
        <div class="container">
            <div data-aos="fade-up" class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    {!! $blog->conteudo !!}
                </div>
            </div>
        </div>
    </section>
    <!--  END Text  -->
    <!--  Share Section  -->

    <!--  END Share Section  -->
    <!--  Tags Section  -->
    <!--  END Tags Section  -->
    <!--  Form  -->
    <section data-padding="bottom">
        <div class="container">
            <div data-aos="fade" class="row" data-padding="xsbottom">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="sectiontitle-elemement">
                        <h2>Fale com a gente</h2>
                    </div>
                </div>
            </div>
            <div data-aos="fade" class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <form>
                        <div class="basic-form--border--round--row">
                            <div class="field col-lg-6">
                                <input id="name" type="text" placeholder="Nome" class="form-field"/>
                            </div>
                            <div class="field col-lg-6">
                                <!-- data-error="true" to set error field -->
                                <input id="email" type="email" placeholder="E-mail" class="form-field" data-error="false"/>
                            </div>
                            <div class="field col-12">
                                <!-- data-error="true" to set error field -->
                                <textarea id="message" placeholder="Mensagem" class="form-field"></textarea>
                            </div>
                            <!-- data-active="false" is hidden, data-active="true" is visible -->
                            <div class="alert-wrap col-12" data-active="false">
                                <p>Error Warning</p>
                            </div>
                            <div class="field col-12">
                                <input id="submit" type="submit" class="btn--big--round" value="Enviar"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--  END Form  -->
    <!--  Articles  -->
    <section data-padding data-bg="grey">
        <div class="container">
            <div data-aos="fade" class="row">
                <div class="col-12">
                    <div class="sectiontitle-element--center">
                        <h2>Mais Notícias</h2>
                    </div>
                </div>
            </div>
            <div class="row" data-padding="xstop">
                @foreach ($blogs as $blog)
                    @php
                        $var_fade = 1;

                        // Create Carbon date
                        $mes = $blog->created_at->formatLocalized('%B');
                    @endphp   
                    <div data-aos="fade" data-aos-delay="{{ $var_fade }}00" class="col-12 col-md-4">
                        <!--  Single Article  -->
                        <article
                            class="rectangle-element--article--wide">
                            <div class="info">
                                <div class="image">
                                    <img data-unveil src="#" data-src="{{ asset($blog->imagem) }}" data-src-retina="{{ asset('site/assets/img/post-1@2x.jpg') }}" alt=""/>
                                </div>
                                <div class="text">
                                    <div class="meta--image">
                                        <div class="tags">
                                            <time class="e-date" datetime="2020-07-05T07:55:21+02:00" >{{ date('d', strtotime($blog->created_at)) }} de {{ $mes }} de {{ date('Y', strtotime($blog->created_at)) }}</time>
                                        </div>
                                    </div>
                                    <h3>{{ $blog->titulo }}</h3>
                                    <p>{!! Str::limit($blog->conteudo, 78) !!}</p>
                                    <a href="{{ route('site.blog_leitura', ['blog' => $blog]) }}" class="simple--underline" >Ver mais</a
                                    >
                                </div>
                            </div>
                            <a href="{{ route('site.blog_leitura', ['blog' => $blog]) }}" class="link"></a>
                        </article>
                        <!--  END: Single Article  -->
                    </div>
                    @php
                        $var_fade++;
                    @endphp
                @endforeach
            </div>
        </div>
    </section>
    <!--  END Articles  -->
</div>

@endsection