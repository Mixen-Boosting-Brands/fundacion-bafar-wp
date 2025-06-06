<?php
/*
    Template Name: Galerías
    */
get_header();

// Custom fields (Galerías)
$banner = get_field("banner_principal") ?: [];

$texto_superior = $banner["texto_superior"] ?? "";
$texto_inferior = $banner["texto_inferior"] ?? "";
$imagen_de_fondo = $banner["imagen_de_fondo"] ?? "";
$imagen_del_lado_derecho = $banner["imagen_del_lado_derecho"] ?? "";
?>

<section id="jumbotron" class="bg-jumbotron-1"
    <?php if ($imagen_de_fondo): ?>
        style="background-image: url('<?php echo esc_url(
            $imagen_de_fondo
        ); ?>'); background-size: cover; background-repeat: no-repeat;"
    <?php endif; ?>
>
    <div class="container-fluid">
        <div class="row">
            <div class="mb-5 col-lg-6 my-lg-auto order-lg-2 text-end">
                <?php if ($imagen_del_lado_derecho): ?>
                    <img
                        src="<?php echo esc_url($imagen_del_lado_derecho); ?>"
                        alt=""
                        class="thumb-noticia-grande img-fluid"
                    />
                <?php endif; ?>
            </div>
            <div class="col-lg-5 offset-lg-1 my-lg-auto order-lg-1 text-center text-lg-start">
                <div class="row mb-5">
                    <div class="col-12">
                        <?php if ($texto_superior): ?>
                            <h2><?php echo esc_html($texto_superior); ?></h2>
                        <?php endif; ?>
                        <?php if ($texto_inferior): ?>
                            <h1 class="fw-bold"><?php echo esc_html(
                                $texto_inferior
                            ); ?></h1>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="anchor arrow" href=".after-jumbotron">
                            <i class="fa-solid fa-arrow-down-long moveUpDown"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$args = [
    "post_type" => "galeria",
    "posts_per_page" => -1, // Retrieve all posts
];

$galerias_query = new WP_Query($args);

if ($galerias_query->have_posts()):
    $counter = 0;
    while ($galerias_query->have_posts()):

        $galerias_query->the_post();
        $counter++;

        // Determine the classes for the section
        if ($counter === 1) {
            $section_classes = "after-jumbotron galeria blanco";
        } else {
            $section_classes =
                "galeria " . ($counter % 2 === 0 ? "azul" : "blanco");
        }
        ?>
    <section class="<?php echo esc_attr($section_classes); ?>">
        <div class="container mb-4">
            <div class="row">
                <div
                    class="col-10 offset-1 col-lg-12 offset-lg-0 text-center"
                >
                    <h1 id="titulo-ultima-noticia">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
        <?php if (have_rows("galeria")): ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper swiper-galeria">
                            <div class="swiper-wrapper">
                                <?php while (have_rows("galeria")):

                                    the_row();
                                    $imagen = get_sub_field("imagen");
                                    $imagen_url = $imagen;

                                    // Since the return format is set to URL, directly use it
                                    ?>
                                    <div class="swiper-slide">
                                        <div
                                            class="bg-galeria"
                                            style=" background: url('<?php echo esc_url(
                                                $imagen_url
                                            ); ?>') no-repeat;"
                                        >
                                            <div class="overlay">
                                                <a
                                                    href="javascript:void(0)"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modal-image"
                                                    data-bs-image="<?php echo esc_url(
                                                        $imagen_url
                                                    ); ?>"
                                                ></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile; ?>
                            </div>
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
        <?php endif; ?>
    </section>
<?php
    endwhile;
    wp_reset_postdata(); // Reset the post data
else:
     ?>
    <p>No se encontraron galerías.</p>
<?php
endif;
?>

<!-- section id="slider-mas-contenido">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper swiper-mas-contenido">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="card text-bg-light mb-3 rounded-4"
                            >
                                <div class="card-body">
                                    <div class="overlay">
                                        <a href="#">
                                            <h1>
                                                Este es el título del
                                                post
                                            </h1>
                                        </a>
                                    </div>
                                    <div
                                        class="thumbnail"
                                        style="
                                            background: url(&quot;<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/galerias/3.png&quot;)
                                                no-repeat;
                                        "
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="card text-bg-light mb-3 rounded-4"
                            >
                                <div class="card-body">
                                    <div class="overlay">
                                        <a href="#">
                                            <h1>
                                                Este es el título del
                                                post
                                            </h1>
                                        </a>
                                    </div>
                                    <div
                                        class="thumbnail"
                                        style="
                                            background: url(&quot;<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/galerias/3.png&quot;)
                                                no-repeat;
                                        "
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="card text-bg-light mb-3 rounded-4"
                            >
                                <div class="card-body">
                                    <div class="overlay">
                                        <a href="#">
                                            <h1>
                                                Este es el título del
                                                post
                                            </h1>
                                        </a>
                                    </div>
                                    <div
                                        class="thumbnail"
                                        style="
                                            background: url(&quot;<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/galerias/3.png&quot;)
                                                no-repeat;
                                        "
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="card text-bg-light mb-3 rounded-4"
                            >
                                <div class="card-body">
                                    <div class="overlay">
                                        <a href="#">
                                            <h1>
                                                Este es el título del
                                                post
                                            </h1>
                                        </a>
                                    </div>
                                    <div
                                        class="thumbnail"
                                        style="
                                            background: url(&quot;<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/galerias/3.png&quot;)
                                                no-repeat;
                                        "
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="card text-bg-light mb-3 rounded-4"
                            >
                                <div class="card-body">
                                    <div class="overlay">
                                        <a href="#">
                                            <h1>
                                                Este es el título del
                                                post
                                            </h1>
                                        </a>
                                    </div>
                                    <div
                                        class="thumbnail"
                                        style="
                                            background: url(&quot;<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/galerias/3.png&quot;)
                                                no-repeat;
                                        "
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="card text-bg-light mb-3 rounded-4"
                            >
                                <div class="card-body">
                                    <div class="overlay">
                                        <a href="#">
                                            <h1>
                                                Este es el título del
                                                post
                                            </h1>
                                        </a>
                                    </div>
                                    <div
                                        class="thumbnail"
                                        style="
                                            background: url(&quot;<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/galerias/3.png&quot;)
                                                no-repeat;
                                        "
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
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
</section -->

<?php get_footer(); ?>
