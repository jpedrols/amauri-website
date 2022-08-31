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
        <img data-unveil src="#" data-src="assets/img/header-home.jpg" data-src-retina="assets/img/header-home@2x.jpg" alt=""/>
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
    <!--  END: Separator  -->
    <!--  Info Section  -->
    <section data-padding="bottom">
        <div class="container">
            <div class="row align-items-lg-center">
                <div data-aos="zoom-in" class="col-12 col-lg-5">
                    <div class="square-element">
                        <div class="info">
                            <div class="image">
                                <img
                                    data-unveil
                                    src="#"
                                    data-src="assets/img/homeagency-section-1.png"
                                    data-src-retina="assets/img/homeagency-section-1@2x.png"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-aos="fade-in"
                    data-aos-delay="200"
                    class="col-12 col-lg-6"
                >
                    <div class="sectiontitle-element">
                        <span class="toptitle">Sobre nós</span>
                        <h2>
                            Cuidamos da contabilidade do seu negócio como se fosse a nossa!
                        </h2>
                        <p>
                            Nosso objetivo é simplificar e reduzir a burocracia no mundo contábil para você, pois queremos que você dedique sua energia à gestão de sua empresa. Temos uma equipe qualificada com atendimento rápido e personalizado oferecendo soluções eficientes para micro empresas até grandes corporações.
                        </p>
                        <a href="#" class="btn--big--arrow--round"
                            >Leia mais</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END: Info Section  -->
    <!--  List Section  -->
    <section id="solucoes" data-padding="top" data-bg="grey">
        <div class="container">
            <div data-aos="fade-up" class="row">
                <div class="col-12">
                    <div class="sectiontitle-element--center">
                        <h2>
                            Conheça nossas soluções:
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row" data-padding>
                <div
                    data-aos="fade-in"
                    data-aos-delay="100"
                    class="col-12 col-xs-4 col-sm-4"
                >
                    <div class="list-element--plus">
                        <p class="md f500"></p>
                        <ul>
                            <li>Processamento contábil</li>
                            <li>Análise tributária  </li>
                            <li>Emissão de certificados digitais online</li>
                        </ul>
                    </div>
                </div>
                <div
                    data-aos="fade-in"
                    data-aos-delay="200"
                    class="col-12 col-xs-4 col-sm-4"
                >
                    <div class="list-element--plus">
                        <p class="md f500"></p>
                        <ul>
                            <li>Certidão Federal</li>
                            <li>Certidão Estadual/MG</li>
                        </ul>
                    </div>
                </div>
                <div
                    data-aos="fade-in"
                    data-aos-delay="300"
                    class="col-12 col-xs-4 col-sm-4"
                >
                    <div class="list-element--plus">
                        <p class="md f500"></p>
                        <ul>
                            <li>Consulta FGTS</li>
                            <li>Certidão Trabalhista</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END: List Section  -->
    <!--  Video Section  -->
    <section data-bg-top="grey" style="margin-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div
                    data-aos="fade-up"
                    data-aos-delay="100"
                    class="col-12"
                >
                    <div
                        class="rectangle-element--caption--center--vertical--big"
                    >
                        <div class="info">
                            <div class="image">
                                <img
                                    data-unveil
                                    src="#"
                                    data-src="assets/img/studio-placeholder.jpg"
                                    data-src-retina="assets/img/studio-placeholder@2x.jpg"
                                    alt=""
                                />
                                <div
                                    class="icon--xl--white--shadow--round--white"
                                >
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                        </div>
                        <a
                            href="javscript:void(0)"
                            class="link yt-video"
                            data-videoID="rYXjsGPP4jo"
                        ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END: Video Section  -->
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
    <!--  Testimonial Section  -->
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
                                    data-src="assets/img/Logo.png"
                                    data-src-retina="assets/img/logo-placeholder-2.png"
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
                            data-src="assets/img/author-big.jpg"
                            data-src-retina="assets/img/author-big@2x.jpg"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END: Testimonial Section  -->
    <!--  Blog Section  -->
    <section id="blog" data-padding>
        <div class="container">
            <div data-aos="fade" class="row">
                <div class="col-12">
                    <div
                        class="sectiontitle-element--inline align-items-md-end"
                    >
                        <div class="wrapper">
                            <span class="toptitle">Nosso Blog</span>
                            <h2>
                                Fique atualizado sobre todas as
                                notícias
                            </h2>
                        </div>
                        <div class="wrapper">
                            <a
                                href="#"
                                class="btn--big--round"
                                >Ver tudo</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-padding="xstop">
                <div
                    data-aos="fade"
                    data-aos-delay="100"
                    class="col-12 col-md-4"
                >
                    <!--  Single Article  -->
                    <article
                        class="rectangle-element--article--wide">
                        <div class="info">
                            <div class="image">
                                <img
                                    data-unveil
                                    src="#"
                                    data-src="assets/img/post-1.jpg"
                                    data-src-retina="assets/img/post-1@2x.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="text">
                                <div class="meta--image">
                                    <div class="tags">
                                        <time
                                            class="e-date"
                                            datetime="2020-07-05T07:55:21+02:00"
                                            >30 de Abril, 2021</time
                                        >
                                    </div>
                                </div>
                                <h3>
                                    PROGRAMA DE REDUÇÃO E SUSPENSÃO DE JORNADA ESTÁ DE VOLTA!
                                </h3>
                                <p>
                                    Fique por dentro das novas medidas para o enfrentamento dos efeitos econômicos..
                                </p>
                                <a
                                    href="post.html"
                                    class="simple--underline"
                                    >Ver mais</a
                                >
                            </div>
                        </div>
                        <a href="post.html" class="link"></a>
                    </article>
                    <!--  END: Single Article  -->
                </div>
                <div
                    data-aos="fade"
                    data-aos-delay="200"
                    class="col-12 col-md-4"
                >
                    <article
                        class="rectangle-element--article--wide">
                        <div class="info">
                            <div class="image">
                                <img
                                    data-unveil
                                    src="#"
                                    data-src="assets/img/post-2.jpg"
                                    data-src-retina="assets/img/post-1@2x.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="text">
                                <div class="meta--image">
                                    <div class="tags">
                                        <time
                                            class="e-date"
                                            datetime="2020-07-05T07:55:21+02:00"
                                            >29 de Abril, 2021</time
                                        >
                                    </div>
                                </div>
                                <h3>
                                    NOVO PROGRAMA EMERGENCIAL DE MANUTENÇÃO DO EMPREGO E DA RENDA
                                </h3>
                                <p>
                                    Conheça as novas medidas do Programa Emergencial de Manutenção do Emprego e da Renda.
                                </p>
                                <a
                                    href="post.html"
                                    class="simple--underline"
                                    >Ver mais</a
                                >
                            </div>
                        </div>
                        <a href="post.html" class="link"></a>
                    </article>
                </div>
                <div
                    data-aos="fade"
                    data-aos-delay="300"
                    class="col-12 col-md-4"
                >
                    <article
                        class="rectangle-element--article--wide">
                        <div class="info">
                            <div class="image">
                                <img
                                    data-unveil
                                    src="#"
                                    data-src="assets/img/post-3.jpg"
                                    data-src-retina="assets/img/post-3@2x.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="text">
                                <div class="meta--image">
                                    <div class="tags">
                                        <time
                                            class="e-date"
                                            datetime="2020-07-05T07:55:21+02:00"
                                            >25 de Março, 2021</time
                                        >
                                    </div>
                                </div>
                                <h3>
                                    CONECTIVIDADE SOCIAL - REVOGAÇÃO DE ACESSO PELA CHAVE PRI
                                </h3>
                                <p>
                                    Para transmitir as informações da folha de pagamento ao FGTS era utilizado uma chave digital chamada “CHAVE..
                                </p>
                                <a
                                    href="post.html"
                                    class="simple--underline"
                                    >Ver mais</a
                                >
                            </div>
                        </div>
                        <a href="post.html" class="link"></a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--  END: Blog Section  -->
    <!--  CTA Section  -->
    <section id="contato" data-aos="fade" data-padding="xstop">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div
                        class="ctabox-element--center--round--light"
                    >
                        <div class="text">
                            <h2>
                                Ainda tem alguma dúvida?
                            </h2>
                            <p>Entre em contato com a gente</p>
                            <a
                                href=""
                                class="btn--big--border--light--round"
                                target="_self"
                                >Entre em contato</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END: CTA Section  -->
</div>
<!--  END: Page Content  -->

@endsection