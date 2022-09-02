@extends('site.template.main', ['titulo' => 'Amauri Contabilidade - Home'])

@section('content')

<div class="whatsapp-btn">
    <a href="https://api.whatsapp.com/send?phone=553532679000&text=>" target="_blank"><img src="./assets/img/whatsapp-logo.png" alt="" srcset=""></a>
</div>
<div class="whatsapp-btn">
    <a href="https://api.whatsapp.com/send?phone=553532679000&text=>" target="_blank"><img src="./assets/img/whatsapp-logo.png" alt="" srcset=""></a>
</div>

<!--  Page Header  -->
<!--  class: image, round, hfixedlg, hfixedmd, hfixedsm  -->
<div class="page-header--image" data-padding data-overlay>
    <!--  you can set a background instead of an img: ex (<div class="imagebg" style="background-image: url(assets/img/header-home@2x.jpg);">)  -->
    <div class="imagebg">
        <img data-unveil src="#" data-src="{{ $destaque->imagem }}" data-src-retina="{{ $destaque->imagem }}" alt=""/>
    </div>
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" class="col-12 col-lg-6 col-xl-8">
                <div class="sectiontitle-element--light">
                    <h1 class="big">{!! $pagina->titulo !!}</h1>
                    <p>
                        
                    </p>
                    <a href="#" class="btn--big--round--border--light" >Começar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  END Page Header  -->
<!--  Page Content  -->
<div class="page-content">
    <!--  Intro Section  -->
    <section data-padding>
        <div class="container">
            <div data-aos="fade-up" class="row" data-padding="xstop" >
                <div class="col-12">
                    <div class="sectiontitle-element--center">
                        <span class="toptitle">O que Fazemos</span>
                        <h2>{!! $pagina->conteudo !!}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END Intro Section  -->
    <!--  Separator  -->
    <section id="sobre" data-aos="zoom-in" data-padding="bottom">
        <div class="container">
            <div class="row" data-padding="xs">
                <div class="col-12">
                    <div
                        class="separator-element--lg--center"
                    ></div>
                </div>
            </div>
        </div>
    </section>
    @include('site.includes.include_sobre_nos')
    @include('site.includes.include_solucoes')
    @include('site.includes.include_video')

    <section data-padding data-bg="template">
        <div class="container">
            <div class="row align-items-md-center">
                <div data-aos="fade" class="col-md-6">
                    <div class="icon-element--testimonial">
                        <div class="info">
                            <div class="text">
                                <p>
                                    Amauri é contador há anos e presta consultoria a empresas de todos os portes. Com vasta experiência na área, Amauri é capaz de oferecer soluções eficientes para os problemas contábeis de suas clientes.
                                    Amauri é uma referência no mercado e todos os seus clientes estão satisfeitos com seus serviços.
                                </p>
                                <span class="author"
                                    >Amauri   
                                    <em class="meta"
                                        >Corrêa</em
                                    ></span
                                >
                                <img class="logo" data-unveil src="#" data-src="{{ asset('site/assets/img/Logo.png') }}" data-src-retina="{{ asset('site/assets/img/logo-placeholder-2.png') }}" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-aos="zoom-in"
                    data-aos-delay="200"
                    class="col-md-5 offset-md-1"
                >
                    <div class="wrapimage-element--square">
                        <img
                            data-unveil
                            src="#"
                            data-src="{{ asset('site/assets/img/author-big.jpg') }}"
                            data-src-retina="{{ asset('site/assets/img/author-big@2x.jpg') }}"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('site.includes.include_blog')

    @include('site.includes.include_contato')
</div>
<!--  END: Page Content  -->

@endsection