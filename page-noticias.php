<?php
/*
    Template Name: Noticias
    */
get_header(); ?>

<section id="jumbotron" class="bg-jumbotron-1">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-5 col-lg-6 my-lg-auto order-lg-2 text-end">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/jumbotron/thumb-noticias.png"
                    alt=""
                    class="img-fluid"
                />
            </div>
            <div
                class="col-lg-5 offset-lg-1 my-lg-auto order-lg-1 text-center text-lg-start"
            >
                <div class="row mb-5">
                    <div class="col-12">
                        <h1 class="fw-bold">Noticias</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="anchor arrow" href=".after-jumbotron">
                            <i
                                class="fa-solid fa-arrow-down-long moveUpDown"
                            ></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="noticias" class="after-jumbotron py-60">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 overflow-hidden">
                <h1 id="titulo-ultima-noticia">
                    <span class="fw-light">Última</span>
                    <span class="fw-bold color-primary comentario"
                        >Noticia</span
                    >
                </h1>
                <?php
                // Custom query to get the newest post from "Noticias" category
                $args = [
                    "post_type" => "post",
                    "posts_per_page" => 1,
                    "category_name" => "Noticias",
                    "orderby" => "date",
                    "order" => "DESC",
                ];

                $noticias_query = new WP_Query($args);

                if ($noticias_query->have_posts()):
                    while ($noticias_query->have_posts()):
                        $noticias_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail("thumb-noticia-grande", [
                            "class" => "img-fluid",
                        ]); ?>
                    </a>
                    <a href="<?php the_permalink(); ?>">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                    </a>
                    <div class="row">
                        <div class="col-8">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        <div class="col-4 my-auto text-end">
                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Leer más</a>
                        </div>
                    </div>
                <?php
                    endwhile; ?>
                <?php
                else:
                     ?>
                <?php
                endif;
                wp_reset_postdata();

// Reset post data
?>
            </div>
        </div>
        <div
            class="row small mb-5"
            data-masonry='{"percentPosition": true }'
        >
            <div class="col-lg-6 chico">
                <hr />
                <div class="row">
                    <div class="col-4 my-auto">
                        <a href="#">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/noticias/thumb-noticia-small.png"
                                alt=""
                                class="img-fluid"
                            />
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="#">
                            <h2>
                                Inicia programa Escuelas Sociodeportivas
                                en Camargo
                            </h2>
                        </a>
                        <p>
                            Worem ipsum dolor sit amet,
                            consecteturadipiscing elit. Nunc vulputate
                            libero et velit interdum, ac aliquet odio
                            mattis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grande">
                <hr />
                <div class="row">
                    <div class="col-12 mb-3">
                        <a href="#">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/noticias/thumb-noticia-big.png"
                                alt=""
                                class="img-fluid"
                            />
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="#">
                            <h2>
                                Inicia programa Escuelas Sociodeportivas
                                en Camargo
                            </h2>
                        </a>
                        <p>
                            Worem ipsum dolor sit amet,
                            consecteturadipiscing elit. Nunc vulputate
                            libero et velit interdum, ac aliquet odio
                            mattis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grande">
                <hr />
                <div class="row">
                    <div class="col-12 mb-3">
                        <a href="#">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/noticias/thumb-noticia-big.png"
                                alt=""
                                class="img-fluid"
                            />
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="#">
                            <h2>
                                Inicia programa Escuelas Sociodeportivas
                                en Camargo
                            </h2>
                        </a>
                        <p>
                            Worem ipsum dolor sit amet,
                            consecteturadipiscing elit. Nunc vulputate
                            libero et velit interdum, ac aliquet odio
                            mattis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 chico">
                <hr />
                <div class="row">
                    <div class="col-4 my-auto">
                        <a href="#">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/noticias/thumb-noticia-small.png"
                                alt=""
                                class="img-fluid"
                            />
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="#">
                            <h2>
                                Inicia programa Escuelas Sociodeportivas
                                en Camargo
                            </h2>
                        </a>
                        <p>
                            Worem ipsum dolor sit amet,
                            consecteturadipiscing elit. Nunc vulputate
                            libero et velit interdum, ac aliquet odio
                            mattis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 chico">
                <hr />
                <div class="row">
                    <div class="col-4 my-auto">
                        <a href="#">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/noticias/thumb-noticia-small.png"
                                alt=""
                                class="img-fluid"
                            />
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="#">
                            <h2>
                                Inicia programa Escuelas Sociodeportivas
                                en Camargo
                            </h2>
                        </a>
                        <p>
                            Worem ipsum dolor sit amet,
                            consecteturadipiscing elit. Nunc vulputate
                            libero et velit interdum, ac aliquet odio
                            mattis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grande">
                <hr />
                <div class="row">
                    <div class="col-12 mb-3">
                        <a href="#">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/noticias/thumb-noticia-big.png"
                                alt=""
                                class="img-fluid"
                            />
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="#">
                            <h2>
                                Inicia programa Escuelas Sociodeportivas
                                en Camargo
                            </h2>
                        </a>
                        <p>
                            Worem ipsum dolor sit amet,
                            consecteturadipiscing elit. Nunc vulputate
                            libero et velit interdum, ac aliquet odio
                            mattis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grande">
                <hr />
                <div class="row">
                    <div class="col-12 mb-3">
                        <a href="#">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/noticias/thumb-noticia-big.png"
                                alt=""
                                class="img-fluid"
                            />
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="#">
                            <h2>
                                Inicia programa Escuelas Sociodeportivas
                                en Camargo
                            </h2>
                        </a>
                        <p>
                            Worem ipsum dolor sit amet,
                            consecteturadipiscing elit. Nunc vulputate
                            libero et velit interdum, ac aliquet odio
                            mattis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 chico">
                <hr />
                <div class="row">
                    <div class="col-4 my-auto">
                        <a href="#">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/noticias/thumb-noticia-small.png"
                                alt=""
                                class="img-fluid"
                            />
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="#">
                            <h2>
                                Inicia programa Escuelas Sociodeportivas
                                en Camargo
                            </h2>
                        </a>
                        <p>
                            Worem ipsum dolor sit amet,
                            consecteturadipiscing elit. Nunc vulputate
                            libero et velit interdum, ac aliquet odio
                            mattis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a class="btn btn-primary" href="#">Ver más</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
