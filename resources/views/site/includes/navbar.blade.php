<header id="header" class="fixed bg">
    <!--  padding-sm, padding-md, padding-lg  -->
    <div class="wrap-header--padding-md">
        <nav class="main-navigation">
            <!--  Header Logo  -->
            <!--  class: height-sm, height-md, height-lg  -->
            <div id="logo" class="height-lg">
                <a class="navbar-brand" href="{{ route('site.index') }}">
                    <picture class="colored">
                        <source
                            srcset="
                            {{ asset('site/assets/img/Logo@2x.png 2x') }},
                            {{ asset('site/assets/img/Logo.png') }}    1x
                            "
                            type="image/png"
                        />
                        <img src="{{ asset('site/assets/img/Logo.png') }}" alt="Logo" />
                    </picture>
                </a>
            </div>
            <!--  END Header Logo  -->
            <!--  Menu  -->
            <div
                id="main-menu"
                aria-expanded="false"
                role="navigation"
            >
                <div class="menu-holder" data-hidden="lg">
                    <ul>
                        <li>
                            <a href="{{ route('site.index') }}">Início</a>
                        </li>
                        <li>
                            <a href="#sobre">Sobre</a>
                        </li>
                        <li>
                            <a href="#solucoes">Soluções</a>
                        </li>
                        <li>
                            <a href="#blog">Blog</a>
                        </li>
                        <li>
                            <a href="#contato">Contato</a>
                        </li>
                    </ul>
                </div>
                <!--  Menu Cta  -->
                
                <!--  END Menu Cta  -->
                <!--  Hamburger Menu  -->
                <div class="menu-button" data-visible="lg">
                    <div class="icons">
                        <span class="bar bar-1"></span>
                        <span class="bar bar-2"></span>
                        <span class="bar bar-3"></span>
                    </div>
                </div>
                <!--  END: Hamburger Menu  -->
            </div>
            <!--  Mobile Menu  -->
            <!-- <div
                id="mobile-menu"
                data-visible="lg"
                aria-expanded="false"
                role="navigation">

                <div class="mobile-wrap">

                    <div class="main-links--border col-12">
                        <ul>
                            <li
                                class="dropdown-parent--icon"
                                aria-expanded="false"
                            >
                                <a href="javascript:void(0)"
                                    >Home</a
                                >
                                <div class="dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href="{{ route('site.index') }}"
                                                >Home Agência</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="index-saas.html"
                                                >Home Saas</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="index-corporate.html"
                                                >Home Corporativo</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li
                                class="dropdown-parent--icon"
                                aria-expanded="false"
                            >
                                <a href="javascript:void(0)"
                                    >Sobre</a
                                >
                                <div class="dropdown-inner">
                                    <ul>
                                        <li>
                                            <a
                                                href="about-corporate.html"
                                                >Sobre
                                                Corporativo</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="about-agency.html"
                                                >Sobre Agência</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li
                                class="dropdown-parent--icon"
                                aria-expanded="false"
                            >
                                <a href="javascript:void(0)"
                                    >Páginas</a
                                >
                                <div class="dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href="plans.html"
                                                >Planos</a
                                            >
                                        </li>
                                        <li>
                                            <a href="project.html"
                                                >Projeto 1</a
                                            >
                                        </li>
                                        <li>
                                            <a href="project-2.html"
                                                >Projeto 2</a
                                            >
                                        </li>

                                        <li>
                                            <a href="sign-up.html"
                                                >Cadastrar</a
                                            >
                                        </li>
                                        <li>
                                            <a href="sign-in.html"
                                                >Entrar</a
                                            >
                                        </li>
                                        <li>
                                            <a href="privacy.html"
                                                >Política de
                                                Privacidade</a
                                            >
                                        </li>
                                        <li>
                                            <a href="404.html"
                                                >Página Erro</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li
                                class="dropdown-parent--icon"
                                aria-expanded="false"
                            >
                                <a href="javascript:void(0)"
                                    >Blog</a
                                >
                                <div class="dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href="blog.html"
                                                >Blog Classic</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="blog-featured.html"
                                                >Blog Featured</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="portfolio.html"
                                    >Portfólio</a
                                >
                            </li>
                            <li
                                class="dropdown-parent--icon"
                                aria-expanded="false"
                            >
                                <a href="contact.html"
                                    >Contato</a
                                >
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <!--  END Mobile Menu  -->
        </nav>
    </div>
</header>