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
                                <a href="post.html" class="simple--underline" >Ver mais</a
                                >
                            </div>
                        </div>
                        <a href="post.html" class="link"></a>
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