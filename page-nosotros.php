<?php
/*
    Template Name: Nosotros
    */
get_header();

// Custom fields (Nosotros)
$banner = get_field("banner_principal") ?: [];

$texto_superior = $banner["texto_superior"] ?? "";
$texto_inferior = $banner["texto_inferior"] ?? "";
$imagen_de_fondo = $banner["imagen_de_fondo"] ?? "";
$imagen_del_lado_derecho = $banner["imagen_del_lado_derecho"] ?? "";

$qs = get_field("quienes_somos") ?: [];

$titulo_normal = $qs["titulo_normal"] ?? "";
$titulo_negritas = $qs["titulo_negritas"] ?? "";
$texto_1 = $qs["texto_1"] ?? "";
$imagen_izquierda = $qs["imagen_del_lado_izquierdo"] ?? "";
$texto_2 = $qs["texto_2"] ?? "";
$imagen_derecha = $qs["imagen_del_lado_derecho"] ?? "";

$myv = get_field("mision_y_vision") ?: [];

$titulo_mision = $myv["titulo_mision"] ?? "";
$texto_mision = $myv["texto_mision"] ?? "";
$fondo_mision = $myv["imagen_de_fondo_mision"] ?? "";

$titulo_vision = $myv["titulo_vision"] ?? "";
$texto_vision = $myv["texto_vision"] ?? "";
$fondo_vision = $myv["imagen_de_fondo_vision"] ?? "";
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
    id="quienes-somos"
    class="after-jumbotron parallax-window py-60"
    data-parallax="scroll"
    data-image-src="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/images/bg-quienes-somos.png"
>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 my-lg-auto text-center">
                <?php if ($imagen_izquierda): ?>
                    <img
                        src="<?php echo esc_url($imagen_izquierda); ?>"
                        alt=""
                        class="rounded img-fluid"
                    />
                <?php endif; ?>
            </div>
            <div class="col-lg-6 my-auto">
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
                <?php if ($texto_1): ?>
                    <p><?php echo esc_html($texto_1); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-4 my-lg-auto">
                <?php if ($texto_2): ?>
                    <p><?php echo esc_html($texto_2); ?></p>
                <?php endif; ?>
                <h6>
                    Fundación Grupo Bafar: Comprometidos por formar <strong>mejores mexicanos</strong>
                </h6>
            </div>
            <div class="col-lg-4 my-auto text-center">
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

<section
    id="mision"
    class="m-v"
    style="background-image: url('<?php echo esc_url(
        $fondo_mision
    ); ?>'); background-size: cover; background-position: center;"
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-4">
            <div class="col-10 offset-1 col-lg-12 offset-lg-0 text-center">
                <h1>
                    <span class="fw-bold"><?php echo esc_html(
                        $titulo_mision
                    ); ?></span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1 col-lg-12 offset-lg-0 text-center">
                <p><?php echo esc_html($texto_mision); ?></p>
            </div>
        </div>
    </div>
</section>

<section
    id="vision"
    class="m-v"
    style="background-image: url('<?php echo esc_url(
        $fondo_vision
    ); ?>'); background-size: cover; background-position: center;"
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-4">
            <div class="col-10 offset-1 col-lg-12 offset-lg-0 text-center">
                <h1>
                    <span class="fw-bold"><?php echo esc_html(
                        $titulo_vision
                    ); ?></span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1 col-lg-12 offset-lg-0 text-center">
                <p><?php echo esc_html($texto_vision); ?></p>
            </div>
        </div>
    </div>
</section>

<section
    id="nuestros-valores"
    class="parallax-window"
    data-parallax="scroll"
    data-image-src="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/images/bg-nuestros-valores.png"
>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>
                    <span class="fw-light">Nuestros</span>
                    <span class="fw-bold color-primary bigger"
                        >Valores</span
                    >
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="contenedor-valores">
                    <div class="valor bg-valor-1">
                        <div class="overlay"></div>
                        <h1>
                            <span class="fw-bold bigger">B</span
                            ><span class="fw-light">ondad</span>
                        </h1>
                    </div>
                    <div class="valor bg-valor-2">
                        <div class="overlay"></div>
                        <h1>
                            <span class="fw-bold bigger">A</span
                            ><span class="fw-light">mistad</span>
                        </h1>
                    </div>
                    <div class="valor bg-valor-3">
                        <div class="overlay"></div>
                        <h1>
                            <span class="fw-bold bigger">F</span
                            ><span class="fw-light">ortaleza</span>
                        </h1>
                    </div>
                    <div class="valor bg-valor-4">
                        <div class="overlay"></div>
                        <h1>
                            <span class="fw-bold bigger">A</span
                            ><span class="fw-light">udacia</span>
                        </h1>
                    </div>
                    <div class="valor bg-valor-5">
                        <div class="overlay"></div>
                        <h1>
                            <span class="fw-bold bigger">R</span
                            ><span class="fw-light">espeto</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
