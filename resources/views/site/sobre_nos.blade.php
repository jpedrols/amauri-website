@extends('site.template.main', ['titulo' => 'Amauri Contabilidade - Sobre nós'])

@section('content')

<!--  Page Header  -->
<div class="page-header--image" data-overlay>
    <div
        class="imagebg" style="background-image: url({{ asset($destaque_banner->imagem) }});"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="sectiontitle-element--light--center">
                    <h1>Sobre nós</h1>
                    <p>{{$pagina->titulo}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  END Page Header  -->
<!--  Page Content  -->
<div class="page-content">
    <!--  Services  -->
    <section data-padding="sm">
        <div class="container">
            <div data-aos="fade-up" class="row" data-padding="xstop">
                <div class="col-12 col-lg-4">
                    <div class="sectiontitle-element--full">
                        <h2>Torne sua empresa lucrativa através dos nossos serviços</h2>
                        <p>A Amauri Contabilidade é uma empresa de contabilidade construída especificamente para #descomplicar seu setor financeiro. Com atendimento humanizado permitimos que você se livre de dores de cabeça financeiras e se concentre em outras áreas do seu negócio.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sectiontitle-element--full">
                        <h2>O que você está fazendo para sua empresa hoje?</h2>
                        <p>Contratar um serviço contábil é cuidar da sua empresa. Uma gestão financeira garantirá que você não tenha problemas legais e o avisará sobre riscos futuros.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sectiontitle-element--full">
                        <h2>Suporte em tempo real </h2>
                        <p>Com uma equipe especializada em atendimento contábil, com a Amauri contabilidade você tem a resolução do seu problema em tempo real. Nosso time está sempre preparado para oferecer soluções efetivas para #descomplicar a vida financeira do seu negócio </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END Services  -->
    <!--  Image and Text  -->
    <section data-padding>
        <div class="container">
            <div
                data-aos="fade-up"
                class="row align-items-lg-center"
            >
                <div class="col-12 col-lg-6">
                    <div class="wrapimage-element--square">
                        <img data-unveil src="#" data-src="{{ asset($destaque_secao1->imagem) }}" data-src-retina="{{ asset('site/assets/img/about-gallery@2x.jpg') }}" alt=""/>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <div class="sectiontitle-element">
                        <h2>Nosso compromisso é com o sucesso do seu negócio </h2>
                        <p>A Amauri Contabilidade é uma empresa comprometida com o sucesso dos seus clientes. Isso significa que estamos sempre à disposição para ajudá-los a alcançar seus objetivos, seja através da prestação de consultoria ou do fornecimento de ferramentas e soluções adequadas às suas necessidades. Nosso objetivo é garantir que você consiga resultados satisfatórios em todos os aspectos do seu negócio.</p>
                        <div class="separator-element"></div>
                        <div class="icon-element--testimonial--small">
                            <div class="info">
                                <div class="text--inline">
                                    <p>Apostar no sucesso do negócio de outra pessoa é uma tarefa que exige dedicação e comprometimento. Por isso, estamos sempre empenhados em oferecer os melhores serviços e soluções para que o seu empreendimento prospere. Faça parte desse time de sucesso e entre em contato conosco!</p>
                                    {{-- <span class="author"
                                        >Everaldo</span
                                    >
                                    <span class="meta"
                                        >Desenvolvedor</span
                                    > --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END Image and Text  -->
    <!--  Image and Text  -->
    <section data-padding>
        <div class="container">
            <div data-aos="fade-up" class="row align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="sectiontitle-element">
                        <h2>Vem para a Amauri Contabilidade</h2>
                        <p>Venha conhecer a Amauri Contabilidade e confira os serviços que oferecemos! Temos certeza de que você vai se surpreender com a qualidade e a eficiência dos nossos serviços.</p>
                        <div class="list-element--plus">
                            <ul>
                                <li>Processamento contábil</li>
                                <li>Certidão Federal</li>
                                <li>Análise tributária</li>
                                <li>Emissão de certificados digitais online</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6 offset-xl-1">
                    <div class="wrapimage-element--square">
                        <img data-unveil src="#" data-src="{{ asset($destaque_secao2->imagem) }}" data-src-retina="{{ asset('site/assets/img/about-gallery-2@2x.jpg') }}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END Image and Text  -->
    <!--  Team  -->
    <section data-padding="sm" data-bg="grey">
        <div class="container">
            <div data-aos="fade" data-padding="xstop" class="row">
                <div class="col-12">
                    <div class="sectiontitle-element--center">
                        <h2>Nossos Líderes</h2>
                        <p>Amauri  é capaz de oferecer soluções eficientes para os problemas contábeis de suas clientes. Com mais de 27 anos de experiência tem conhecimento necessário para direcionar sua equipe e fazer seu negócio decolar </p>
                    </div>
                </div>
            </div>
            <div class="row" data-padding="smtop">
                <!--  Single Team  -->
                <div
                    data-aos="fade-up"
                    data-margin="xsbottom"
                    class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3"
                >
                    <div class="square-element--overlay">
                        <div class="info">
                            <div class="image">
                                <img
                                    data-unveil
                                    src="#"
                                    data-src="{{ asset('site/assets/img/team-1.jpg') }}"
                                    data-src-retina="{{ asset('site/assets/img/team-1@2x.jpg') }}"
                                    alt=""
                                />
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a
                                                href="#"
                                                target="_blank"
                                                rel="noreferrer"
                                                ><i
                                                    class="fab fa-linkedin-in"
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a
                                                href="#"
                                                target="_blank"
                                                rel="noreferrer"
                                                ><i
                                                    class="fab fa-instagram"
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i
                                                    class="far fa-envelope"
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text">
                                <h6>Everaldo Júnior</h6>
                                <p>Fundador</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  END Single Team  -->
                <div
                    data-aos="fade-up"
                    data-aos-delay="100"
                    data-margin="xsbottom"
                    class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3"
                >
                    <div class="square-element--overlay">
                        <div class="info">
                            <div class="image">
                                <img
                                    data-unveil
                                    src="#"
                                    data-src="{{ asset('site/assets/img/team-2.jpg') }}"
                                    data-src-retina="{{ asset('site/assets/img/team-2@2x.jpg') }}"
                                    alt=""
                                />
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a
                                                href="#"
                                                target="_blank"
                                                rel="noreferrer"
                                                ><i
                                                    class="fab fa-linkedin-in"
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a
                                                href="#"
                                                target="_blank"
                                                rel="noreferrer"
                                                ><i
                                                    class="fab fa-instagram"
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i
                                                    class="far fa-envelope"
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text">
                                <h6>Gabriel Neves</h6>
                                <p>Fundador</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-aos="fade-up"
                    data-aos-delay="200"
                    data-margin="xsbottom"
                    class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3"
                >
                    <div class="square-element--overlay">
                        <div class="info">
                            <div class="image">
                                <img
                                    data-unveil
                                    src="#"
                                    data-src="{{ asset('site/assets/img/team-3.jpg') }}"
                                    data-src-retina="{{ asset('site/assets/img/team-3@2x.jpg') }}"
                                    alt=""
                                />
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a
                                                href="#"
                                                target="_blank"
                                                rel="noreferrer"
                                                ><i
                                                    class="fab fa-linkedin-in"
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a
                                                href="#"
                                                target="_blank"
                                                rel="noreferrer"
                                                ><i
                                                    class="fab fa-instagram"
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i
                                                    class="far fa-envelope"
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text">
                                <h6>Jorge Henrique</h6>
                                <p>SEO Especialista</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-aos="fade-up"
                    data-aos-delay="300"
                    data-margin="xsbottom"
                    class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3"
                >
                    <div class="square-element--overlay">
                        <div class="info">
                            <div class="image">
                                <img
                                    data-unveil
                                    src="#"
                                    data-src="{{ asset('site/assets/img/team-4.jpg') }}"
                                    data-src-retina="{{ asset('site/assets/img/team-4@2x.jpg') }}"
                                    alt=""
                                />
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a
                                                href="#"
                                                target="_blank"
                                                rel="noreferrer"
                                                ><i
                                                    class="fab fa-linkedin-in"
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a
                                                href="#"
                                                target="_blank"
                                                rel="noreferrer"
                                                ><i
                                                    class="fab fa-instagram"
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i
                                                    class="far fa-envelope"
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text">
                                <h6>Luciano</h6>
                                <p>Desenvolvedor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END Team  -->
    <!--  Positions  -->
    <section data-padding="sm">
        <div class="container">
            <div data-aos="fade" data-padding="xstop" class="row">
                <div
                    class="col-12 col-lg-4"
                    data-margin-bottom="none"
                >
                    <div class="sectiontitle-element">
                        <h2>Vagas Abertas</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="sectiontitle-element--full">
                        <p>
                            Junte-se a nós. Somos uma equipe única e
                            diversificada com nossas maiores
                            oportunidades pela frente. Trabalhamos
                            em problemas desafiadores em um ambiente
                            amável e de apoio. Você aprenderá mais
                            rápido e fará mais na Intercom do que em
                            qualquer outro lugar.
                        </p>
                    </div>
                </div>
            </div>
            <div data-aos="fade" data-padding="xstop" class="row">
                <div class="col-12">
                    <div class="position-element--border">
                        <div class="text">
                            <div class="title">
                                <h3>Engenheiro de Produção</h3>
                                <p>Minas Gerais, BR</p>
                            </div>
                            <div class="cta">
                                <a
                                    href="#"
                                    class="simple--medium--colorone"
                                    >Leia mais</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="position-element--border">
                        <div class="text">
                            <div class="title">
                                <h3>Líder Designer</h3>
                                <p>Minas Gerais, BR</p>
                            </div>
                            <div class="cta">
                                <a
                                    href="#"
                                    class="simple--medium--colorone"
                                    >Leia mais</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="position-element--border">
                        <div class="text">
                            <div class="title">
                                <h3>Engenheiro Mobile</h3>
                                <p>Minas Gerais, BR</p>
                            </div>
                            <div class="cta">
                                <a
                                    href="#"
                                    class="simple--medium--colorone"
                                    >Leia mais</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END Positions  -->
</div>
<!--  END Page Content  -->

@endsection