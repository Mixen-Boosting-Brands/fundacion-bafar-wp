<?php get_header(); ?>

<section id="jumbotron" class="bg-jumbotron-home">
    <div class="container-fluid">
        <div class="row">
            <div
                class="col-lg-5 offset-lg-1 my-lg-auto text-center text-lg-start"
            >
                <div class="row mt-5 mt-lg-0">
                    <div class="col-12">
                        <h2 class="mb-0">Fundación</h2>
                        <h1 class="fw-bold">Grupo Bafar</h1>
                        <p>Una institución orientada a la formación de los mejores mexicanos.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/jumbotron/thumb-por-mejores-mexicanos.png"
                            alt=""
                            id="pmm"
                            class="img-fluid"
                        />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-lg-auto text-end">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/jumbotron/thumb-jumbotron-home.png"
                    alt=""
                    class="img-fluid"
                />
            </div>
        </div>
    </div>
</section>

<section id="aliados" class="py-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Nuestros Aliados Sociales</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid no-padding">
        <div class="row">
            <div class="col-12">
                <div class="container-aliados">
                    <!-- Slider main container -->
                    <div class="swiper swiper-aliados">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 41; $i++): ?>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/aliados/<?php echo $i; ?>.png" alt="" class="img-fluid">
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="figuras" class="py-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-2 offset-xl-1">
                <div id="fig-1" class="figura fig-up mb-4 mb-xl-0">
                    <div class="overlay">
                        <h1>Escuelas Sociodeportivas</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-2">
                <div id="fig-2" class="figura fig-down mb-4 mb-xl-0">
                    <div class="overlay">
                        <h1>Centro de acopio</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-2">
                <div id="fig-3" class="figura fig-up mb-4 mb-xl-0">
                    <div class="overlay">
                        <h1>Jornadas médicas</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-2">
                <div id="fig-4" class="figura fig-down mb-4 mb-xl-0">
                    <div class="overlay">
                        <h1>Voluntariado</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-2">
                <div id="fig-5" class="figura fig-up mb-4 mb-xl-0">
                    <div class="overlay">
                        <h1>Guardería</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="logros" class="m-v">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-4">
            <div
                class="col-10 offset-1 col-lg-12 offset-lg-0"
            >
                <h1>
                    <span class="fw-light">Explora</span><br>
                    <span class="fw-bold">Nuestros logros</span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper swiper-logros">
                    <div class="swiper-wrapper">
                        <?php
                        $args = [
                            "post_type" => "logro",
                            "posts_per_page" => -1, // Retrieve all posts
                        ];

                        $logros_query = new WP_Query($args);

                        if ($logros_query->have_posts()):
                            while ($logros_query->have_posts()):
                                $logros_query->the_post(); ?>
                            <div class="swiper-slide">
                                <div
                                    class="card mb-3"
                                >
                                    <!-- a href="<?php the_permalink(); ?>"></a -->
                                    <div class="card-body">
                                        <h2 class="card-title"><span><?php the_title(); ?></span> <i class="fa-solid fa-circle-arrow-right"></i></h2>
                                        <p class="card-text"><?php the_excerpt(); ?></p>
                                    </div>
                                    <?php the_post_thumbnail("thumb-logro", [
                                        "class" =>
                                            "thumb-logro card-img-bottom",
                                    ]); ?>
                                </div>
                            </div>
                        <?php
                            endwhile;
                            wp_reset_postdata(); // Reset the post data
                        else:
                             ?>
                            <p>No se encontraron logros.</p>
                        <?php
                        endif;
                        ?>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-button-next">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
