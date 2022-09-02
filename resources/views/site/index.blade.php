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
        <img data-unveil src="#" data-src="{{ asset('site/assets/img/header-home.jpg') }}" data-src-retina="{{ asset('site/assets/img/header-home@2x.jpg') }}" alt=""/>
    </div>
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" class="col-12 col-lg-6 col-xl-8">
                <div class="sectiontitle-element--light">
                    <h1 class="big">
                        Seja Bem-Vindo(a) a Amauri Contabilidade
                    </h1>
                    <p>
                        
                    </p>
                    <a
                        href="#"
                        class="btn--big--round--border--light"
                        >Começar</a
                    >
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
                        <h2>
                            Nossa empresa está no mercado há 27 anos e tem como missão levar inovação nos processos burocráticos da sua empresa.
                        </h2>
                    </div>
                </div>
            </div>
            <!-- <div class="row" data-padding="xstop">
                <div
                    data-aos="fade-up"
                    data-aos-delay="100"
                    class="col-12 col-md-4"
                >
                    <div class="icon-element--round--box--border">
                        <div class="info">
                            <div class="icon">
                                <i
                                    class="ilight feather icon-edit-2"
                                ></i>
                            </div>
                            <div class="text">
                                <h6>Marca</h6>
                                <p>
                                    Proin in urna nec dui sagittis
                                    iaculis. Vestibulum at nibh eget
                                    justo bibendum convallis
                                    ultrices ut nunc.
                                </p>
                                <a href="#" class="simple--arrow"
                                    >Leia mais</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-aos="fade-up"
                    data-aos-delay="200"
                    class="col-12 col-md-4"
                >
                    <div class="icon-element--round--box--border">
                        <div class="info">
                            <div class="icon">
                                <i
                                    class="ilight feather icon-layout"
                                ></i>
                            </div>
                            <div class="text">
                                <h6>Design</h6>
                                <p>
                                    Donec laoreet lobortis faucibus.
                                    Sed laoreet maximus urna, vitae
                                    condimentum sem feugiat in. In
                                    sed sem eget.
                                </p>
                                <a href="#" class="simple--arrow"
                                    >Leia mais</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-aos="fade-up"
                    data-aos-delay="300"
                    class="col-12 col-md-4"
                >
                    <div class="icon-element--round--box--border">
                        <div class="info">
                            <div class="icon">
                                <i
                                    class="ilight feather icon-code"
                                ></i>
                            </div>
                            <div class="text">
                                <h6>Desenvolvimento</h6>
                                <p>
                                    Gamification innovator
                                    crowdfunding infrastructure
                                    market seed money social proof
                                    user experience
                                </p>
                                <a href="#" class="simple--arrow"
                                    >Leia mais</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
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
    <!--  Portfólio  -->
    <!-- <section data-aos="fade" data-padding>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div
                        class="sectiontitle-element--inline align-items-md-end"
                    >
                        <div class="wrapper">
                            <span class="toptitle">Trabalhos</span>
                            <h2>Criamos e Realizamos seu Sonho</h2>
                        </div>
                        <div class="wrapper portfolio-wrap">
                            <div
                                class="navigation-element--border--round--light"
                            >
                                <div
                                    class="navigation justify-content-md-end"
                                >
                                    <div class="nav--prev">
                                        <i
                                            class="feather icon-arrow-left"
                                        ></i>
                                    </div>
                                    <div class="nav--next">
                                        <i
                                            class="feather icon-arrow-right"
                                        ></i>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-padding="xstop">
                <div class="col-12">
                    <div class="portfolio-carousel owl-carousel">
                        <div class="square-element--project">
                            <div class="info">
                                <div class="image">
                                    <img
                                        class="owl-lazy"
                                        src="#"
                                        data-src="assets/img/case-1.jpg"
                                        data-src-retina="assets/img/case-1@2x.jpg"
                                        alt=""
                                    />
                                    <div
                                        class="icon--br--square--secondary"
                                    >
                                        <i
                                            class="feather icon-plus"
                                        ></i>
                                    </div>
                                </div>
                                <div class="text">
                                    <h6>
                                        Criação da identidade da
                                        marca
                                    </h6>
                                    <p>Marca</p>
                                </div>
                            </div>
                            <a href="project.html" class="link"></a>
                        </div>
                        <div class="square-element--project">
                            <div class="info">
                                <div class="image">
                                    <img
                                        class="owl-lazy"
                                        src="#"
                                        data-src="assets/img/case-2.jpg"
                                        data-src-retina="assets/img/case-2@2x.jpg"
                                        alt=""
                                    />
                                    <div
                                        class="icon--br--square--secondary"
                                    >
                                        <i
                                            class="feather icon-plus"
                                        ></i>
                                    </div>
                                </div>
                                <div class="text">
                                    <h6>Visual Empresarial</h6>
                                    <p>Design</p>
                                </div>
                            </div>
                            <a
                                href="project-2.html"
                                class="link"
                            ></a>
                        </div>
                        <div class="square-element--project">
                            <div class="info">
                                <div class="image">
                                    <img
                                        class="owl-lazy"
                                        src="#"
                                        data-src="assets/img/case-3.jpg"
                                        data-src-retina="assets/img/case-3@2x.jpg"
                                        alt=""
                                    />
                                    <div
                                        class="icon--br--square--secondary"
                                    >
                                        <i
                                            class="feather icon-plus"
                                            ></i>
                                    </div>
                                </div>
                                <div class="text">
                                    <h6>Desenvolvimento Mobile</h6>
                                    <p>Desenvolvimento</p>
                                </div>
                            </div>
                            <a href="project.html" class="link"></a>
                        </div>
                        <div class="square-element--project">
                            <div class="info">
                                <div class="image">
                                    <img
                                        class="owl-lazy"
                                        src="#"
                                        data-src="assets/img/case-4.jpg"
                                        data-src-retina="assets/img/case-4@2x.jpg"
                                        alt=""
                                    />
                                    <div
                                        class="icon--br--square--secondary"
                                    >
                                        <i
                                            class="feather icon-plus"
                                        ></i>
                                    </div>
                                </div>
                                <div class="text">
                                    <h6>Demonstrativo E-book</h6>
                                    <p>Marca</p>
                                </div>
                            </div>
                            <a
                                href="project-2.html"
                                class="link"
                            ></a>
                        </div>
                        <div class="square-element--project">
                            <div class="info">
                                <div class="image">
                                    <img
                                        class="owl-lazy"
                                        src="#"
                                        data-src="assets/img/case-5.jpg"
                                        data-src-retina="assets/img/case-5@2x.jpg"
                                        alt=""
                                    />
                                    <div
                                        class="icon--br--square--secondary"
                                    >
                                        <i
                                            class="feather icon-plus"
                                        ></i>
                                    </div>
                                </div>
                                <div class="text">
                                    <h6>
                                        Cursos Profissionalizantes
                                    </h6>
                                    <p>Design</p>
                                </div>
                            </div>
                            <a href="project.html" class="link"></a>
                        </div>
                        <div class="square-element--project">
                            <div class="info">
                                <div class="image">
                                    <img
                                        class="owl-lazy"
                                        src="#"
                                        data-src="assets/img/case-6.jpg"
                                        data-src-retina="assets/img/case-6@2x.jpg"
                                        alt=""
                                    />
                                    <div
                                        class="icon--br--square--secondary"
                                    >
                                        <i
                                            class="feather icon-plus"
                                        ></i>
                                    </div>
                                </div>
                                <div class="text">
                                    <h6>Design Circular</h6>
                                    <p>Desenvolvimento</p>
                                </div>
                            </div>
                            <a
                                href="project-2.html"
                                class="link"
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--  END: Portfólio  -->
    <section data-padding data-bg="template">
        <div class="container">
            <div class="row align-items-md-center">
                <div data-aos="fade" class="col-md-6">
                    <div class="icon-element--testimonial">
                        <div class="info">
                            <div class="text">
                                <p>
                                    Amauri é contabilista há anos e presta consultoria a empresas de todos os portes. Com vasta experiência na área, Amauri é capaz de oferecer soluções eficientes para os problemas contábeis de suas clientes.
                                    Amauri é uma referência no mercado e todos os seus clientes estão satisfeitos com seus serviços.
                                </p>
                                <span class="author"
                                    >Amauri   
                                    <em class="meta"
                                        >Corrêa</em
                                    ></span
                                >
                                <img
                                    class="logo"
                                    data-unveil
                                    src="#"
                                    data-src="{{ asset('site/assets/img/Logo.png') }}"
                                    data-src-retina="{{ asset('site/assets/img/logo-placeholder-2.png') }}"
                                    alt=""
                                />
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