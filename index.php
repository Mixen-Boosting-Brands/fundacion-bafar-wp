<?php
get_header();

// Custom fields (Banner principal)
$banner_principal = get_field("banner_principal", "option");
$logotipo = $banner_principal["logotipo"] ?? "";
$texto_banner = $banner_principal["texto_banner"] ?? "";
$imagen_texto_mejores_mexicanos =
    $banner_principal["imagen_texto_mejores_mexicanos"] ?? "";
$texto_boton = $banner_principal["texto_boton"] ?? "";
$enlace_del_boton = $banner_principal["enlace_del_boton"] ?? "";
$imagen_de_fondo = $banner_principal["imagen_de_fondo"] ?? "";
$imagen_del_lado_derecho = $banner_principal["imagen_del_lado_derecho"] ?? "";
?>

<section id="jumbotron" class="bg-jumbotron-home" style="background: url('<?php echo esc_url(
    $imagen_de_fondo
); ?>') no-repeat;">
    <div class="container-fluid">
        <div class="row">
            <div
                class="col-lg-5 offset-lg-1 my-lg-auto text-center text-lg-start"
            >
                <div class="row mt-5 mt-lg-0">
                    <div class="col-12">
                        <img class="d-block mb-2" src="<?php echo esc_url(
                            $logotipo
                        ); ?>" alt="" style="max-width: 520px;">
                        <p class="d-inline"><?php echo esc_html(
                            $texto_banner
                        ); ?></p>
                        <img
                            src="<?php echo esc_url(
                                $imagen_texto_mejores_mexicanos
                            ); ?>"
                            alt=""
                            id="pmm"
                            class="img-fluid"
                        />
                        <div class="d-block mt-3">
                            <a href="<?php echo esc_url(
                                $enlace_del_boton
                            ); ?>" class="btn btn-primary"><?php echo esc_html(
    $texto_boton
); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-lg-auto text-end">
                <img
                    src="<?php echo esc_url($imagen_del_lado_derecho); ?>"
                    alt=""
                    class="img-fluid mt-3"
                />
            </div>
        </div>
    </div>
</section>

<section id="aliados" class="py-30">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
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
                    <a href="<?php
                    $permalink = get_permalink(262);
                    echo $permalink;
                    ?>"></a>
                    <div class="overlay">
                        <h1>Escuelas Sociodeportivas</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-2">
                <div id="fig-2" class="figura fig-down mb-4 mb-xl-0">
                    <a href="<?php
                    $permalink = get_permalink(266);
                    echo $permalink;
                    ?>"></a>
                    <div class="overlay">
                        <h1>Centro de acopio</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-2">
                <div id="fig-3" class="figura fig-up mb-4 mb-xl-0">
                    <a href="<?php
                    $permalink = get_permalink(272);
                    echo $permalink;
                    ?>"></a>
                    <div class="overlay">
                        <h1>Jornadas médicas</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-2">
                <div id="fig-4" class="figura fig-down mb-4 mb-xl-0">
                    <a href="<?php
                    $permalink = get_permalink(276);
                    echo $permalink;
                    ?>"></a>
                    <div class="overlay">
                        <h1>Voluntariado</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-2">
                <div id="fig-5" class="figura fig-up mb-4 mb-xl-0">
                    <a href="<?php
                    $permalink = get_permalink(280);
                    echo $permalink;
                    ?>"></a>
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
                <div class="swiper swiper-logros" style="z-index: 2;">
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
