@extends('site.template.main', ['titulo' => 'Amauri Contabilidade - Blog Leitura'])

@section('content')

<!--  Page Header  -->
<div class="page-header--image" data-overlay>
    <div
        class="imagebg"
        style="
            background-image: url({{ asset('site/assets/img/about-header@2x.jpg') }});
        "
    ></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="sectiontitle-element--light--center">
                    <h1>Sobre nós</h1>
                    <p>
                        Donec laoreet lobortis faucibus. Sed laoreet
                        maximus urna, vitae condimentum sem feugiat
                        in.
                    </p>
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
            <div
                data-aos="fade-up"
                class="row"
                data-padding="xstop"
            >
                <div class="col-12 col-lg-4">
                    <div class="sectiontitle-element--full">
                        <h2>Estratégia e Direção de Arte</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ducimus dicta veniam
                            recusandae numquam aut. Tenetur dolor
                            perferendis cumque repellat! Dolore,
                            commodi dolores magni tenetur nam
                            sapiente nesciunt labore mollitia
                            voluptas.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sectiontitle-element--full">
                        <h2>Design de UX/UI do Site</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Ad temporibus error
                            facilis aut vitae voluptas dicta,
                            impedit earum corrupti fugit quisquam
                            esse praesentium assumenda pariatur,
                            quia cupiditate iusto. Dignissimos,
                            soluta.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sectiontitle-element--full">
                        <h2>Marketing & Social</h2>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Nemo dolore voluptatum
                            quas illo inventore molestias omnis aut
                            ullam, perferendis possimus dolores,
                            expedita, fugit et exercitationem quasi
                            rerum tenetur eligendi voluptate!
                        </p>
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
                        <img
                            data-unveil
                            src="#"
                            data-src="{{ asset('site/assets/img/about-gallery.jpg') }}"
                            data-src-retina="{{ asset('site/assets/img/about-gallery@2x.jpg') }}"
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <div class="sectiontitle-element">
                        <h2>
                            Somos uma equipe aspirante de
                            desenvolvedores criativos
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ducimus dicta veniam
                            recusandae numquam aut. Tenetur dolor
                            perferendis cumque repellat! Dolore,
                            commodi dolores magni tenetur nam
                            sapiente nesciunt labore mollitia
                            voluptas.
                        </p>
                        <div class="separator-element"></div>
                        <div
                            class="icon-element--testimonial--small"
                        >
                            <div class="info">
                                <div class="text--inline">
                                    <p>
                                        "Lorem ipsum dolor, sit amet
                                        consectetur adipisicing
                                        elit. In, suscipit? Qui in
                                        voluptate esse cumque neque,
                                        magni, voluptates
                                        perspiciatis possimus eos
                                        deserunt explicabo, totam a
                                        numquam? Blanditiis
                                        architecto corporis error!"
                                    </p>
                                    <span class="author"
                                        >Everaldo</span
                                    >
                                    <span class="meta"
                                        >Desenvolvedor</span
                                    >
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
            <div
                data-aos="fade-up"
                class="row align-items-lg-center"
            >
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="sectiontitle-element">
                        <h2>
                            Formamos parcerias e construímos ótimos
                            produtos
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ducimus dicta veniam
                            recusandae numquam aut. Tenetur dolor
                            perferendis cumque repellat! Dolore,
                            commodi dolores magni tenetur nam
                            sapiente nesciunt labore mollitia
                            voluptas.
                        </p>
                        <div class="list-element--plus">
                            <ul>
                                <li>Pellentesque maximus</li>
                                <li>Quisque vitae facilisis sem</li>
                                <li>Cras ultricies</li>
                                <li>Orci varius natoque</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6 offset-xl-1">
                    <div class="wrapimage-element--square">
                        <img
                            data-unveil
                            src="#"
                            data-src="{{ asset('site/assets/img/about-gallery-2.jpg') }}"
                            data-src-retina="{{ asset('site/assets/img/about-gallery-2@2x.jpg') }}"
                            alt=""
                        />
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
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ipsum a quibusdam
                            vitae ab obcaecati dolores.
                        </p>
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