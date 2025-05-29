<?php
/*
    Template Name: Home
    */
get_header();

// Custom fields (Banner principal)
$banner_principal = get_field("banner_principal") ?: [];
$logotipo = $banner_principal["logotipo"] ?? "";
$texto_banner = $banner_principal["texto_banner"] ?? "";
$imagen_texto_mejores_mexicanos =
    $banner_principal["imagen_texto_mejores_mexicanos"] ?? "";
$texto_boton = $banner_principal["texto_boton"] ?? "";
$enlace_del_boton = $banner_principal["enlace_del_boton"] ?? "";
$imagen_de_fondo = $banner_principal["imagen_de_fondo"] ?? "";
$imagen_del_lado_derecho = $banner_principal["imagen_del_lado_derecho"] ?? "";

// Custom fields (Aliados)
$aliados = get_field("aliados") ?: [];
$titulo_seccion = $aliados["titulo_seccion"] ?? "";
$logotipos = $aliados["logotipos"] ?? "";

// Custom fields (Logros)
$logros = get_field("logros") ?: [];
$titulo_normal = $logros["titulo_normal"] ?? "";
$titulo_negritas = $logros["titulo_negritas"] ?? "";
$imagen_de_fondo_logros = $logros["imagen_de_fondo"] ?? "";
?>

<section id="jumbotron" class="bg-jumbotron-home" style="background: url('<?php echo esc_url(
    $imagen_de_fondo
); ?>') center center / cover no-repeat;">
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
                            <?php if ($enlace_del_boton && $texto_boton): ?>
                                <a href="<?php echo esc_url(
                                    $enlace_del_boton
                                ); ?>" class="btn btn-primary">
                                    <?php echo esc_html($texto_boton); ?>
                                </a>
                            <?php endif; ?>
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
                <h1><?php echo esc_html($titulo_seccion); ?></h1>
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
                            <?php if (!empty($logotipos)): ?>
                                <?php foreach ($logotipos as $logo): ?>
                                    <?php
                                    $logo_url = $logo["logotipo"] ?? "";
                                    if ($logo_url): ?>
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <img src="<?php echo esc_url(
                                                $logo_url
                                            ); ?>" alt="" class="img-fluid">
                                        </div>
                                    <?php endif;
                                    ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
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
            <?php
            $secciones = get_field("secciones") ?: [];

            $index = 1;
            foreach ($secciones as $item):

                $seccion = $item["seccion"] ?? [];
                $titulo = $seccion["titulo_de_la_seccion"] ?? "";
                $imagen_fondo = $seccion["imagen_de_fondo_del_boton"] ?? "";
                $enlace = $seccion["enlace_del_boton"] ?? "#";

                // Alternancia para fig-up / fig-down
                $fig_clase = $index % 2 === 0 ? "fig-down" : "fig-up";
                ?>
                <div class="col-md-6 col-xl-2 <?php echo $index === 1
                    ? "offset-xl-1"
                    : ""; ?>">
                    <div id="fig-<?php echo esc_attr(
                        $index
                    ); ?>" class="figura <?php echo $fig_clase; ?> mb-4 mb-xl-0" style="background-image: url('<?php echo esc_url(
     $imagen_fondo
 ); ?>'); background-size: cover;">
                        <a href="<?php echo esc_url($enlace); ?>"></a>
                        <div class="overlay">
                            <h1><?php echo esc_html($titulo); ?></h1>
                        </div>
                    </div>
                </div>
            <?php $index++;
            endforeach;
            ?>
        </div>
    </div>
</section>

<section id="logros" class="m-v" style="background: url('<?php echo esc_url(
    $imagen_de_fondo_logros
); ?>') center center / cover no-repeat;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-4">
            <div
                class="col-10 offset-1 col-lg-12 offset-lg-0"
            >
                <h1>
                    <span class="fw-light"><?php echo esc_html(
                        $titulo_normal
                    ); ?></span><br>
                    <span class="fw-bold"><?php echo esc_html(
                        $titulo_negritas
                    ); ?></span>
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
