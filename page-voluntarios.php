<?php
/*
    Template Name: Voluntarios
    */
get_header();

// Custom fields (Voluntarios)
$banner = get_field("banner_principal") ?: [];

$texto_superior = $banner["texto_superior"] ?? "";
$texto_inferior = $banner["texto_inferior"] ?? "";
$imagen_de_fondo = $banner["imagen_de_fondo"] ?? "";
$imagen_del_lado_derecho = $banner["imagen_del_lado_derecho"] ?? "";

$voluntarios = get_field("voluntarios") ?: [];

$titulo_normal = $voluntarios["titulo_normal"] ?? "";
$titulo_negritas = $voluntarios["titulo_negritas"] ?? "";
$texto = $voluntarios["texto"] ?? "";
$imagen_derecha = $voluntarios["imagen_del_lado_derecho"] ?? "";
$imagen_izquierda_1 = $voluntarios["imagen_del_lado_izquierdo_1"] ?? "";
$imagen_izquierda_2 = $voluntarios["imagen_del_lado_izquierdo_2"] ?? "";
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

<section
    id="voluntarios"
    class="parallax-window"
    data-parallax="scroll"
    data-image-src="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/images/bg-voluntarios.png"
>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="contenedor-texto">
                    <h1>
                        <?php if ($titulo_normal): ?>
                            <span class="fw-light"><?php echo esc_html(
                                $titulo_normal
                            ); ?></span>
                        <?php endif; ?>
                        <?php if ($titulo_negritas): ?>
                            <span class="fw-bold color-primary comentario"><?php echo esc_html(
                                $titulo_negritas
                            ); ?></span>
                        <?php endif; ?>
                    </h1>
                    <?php if ($texto): ?>
                        <?php echo esc_html($texto); ?>
                    <?php endif; ?>
                    <div class="text-center py-30">
                        <?php if ($imagen_izquierda_1): ?>
                            <img
                                src="<?php echo esc_url(
                                    $imagen_izquierda_1
                                ); ?>"
                                alt=""
                                class="img-fluid"
                            />
                        <?php endif; ?>
                        <?php if ($imagen_izquierda_2): ?>
                            <img
                                src="<?php echo esc_url(
                                    $imagen_izquierda_2
                                ); ?>"
                                alt=""
                                class="img-fluid"
                            />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <?php if ($imagen_derecha): ?>
                    <img
                        src="<?php echo esc_url($imagen_derecha); ?>"
                        alt=""
                        class="img-fluid"
                    />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
