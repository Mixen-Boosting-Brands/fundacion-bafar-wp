<?php
/*
    Template Name: Galerías
    */
get_header(); ?>

<section id="jumbotron" class="bg-jumbotron-1">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-5 col-lg-6 my-lg-auto order-lg-2 text-end">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/jumbotron/thumb-galeria.png"
                    alt=""
                    class="img-fluid"
                />
            </div>
            <div
                class="col-lg-5 offset-lg-1 my-lg-auto order-lg-1 text-center text-lg-start"
            >
                <div class="row mb-5">
                    <div class="col-12">
                        <h1 class="fw-bold">Galerías</h1>
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

<section class="after-jumbotron galeria blanco">
    <div class="container mb-4">
        <div class="row">
            <div
                class="col-10 offset-1 col-lg-12 offset-lg-0 text-center"
            >
                <h1 id="titulo-ultima-noticia">
                    <span class="fw-light">Torneo</span>
                    <span class="fw-bold color-secondary comentario"
                        >Úne-t</span
                    >
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="swiper swiper-galeria">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/1.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/1.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/2.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/2.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/3.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/3.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/1.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/1.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/2.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/2.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/3.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/3.png"
                                    ></a>
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
</section>

<section class="galeria azul">
    <div class="container mb-4">
        <div class="row">
            <div
                class="col-10 offset-1 col-lg-12 offset-lg-0 text-center"
            >
                <h1 id="titulo-ultima-noticia">
                    <span class="fw-light">Torneo</span>
                    <span class="fw-bold color-secondary comentario"
                        >Úne-t</span
                    >
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="swiper swiper-galeria">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/1.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/1.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/2.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/2.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/3.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/3.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/1.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/1.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/2.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/2.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/3.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/3.png"
                                    ></a>
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
</section>

<section class="galeria blanco">
    <div class="container mb-4">
        <div class="row">
            <div
                class="col-10 offset-1 col-lg-12 offset-lg-0 text-center"
            >
                <h1 id="titulo-ultima-noticia">
                    <span class="fw-light">Torneo</span>
                    <span class="fw-bold color-secondary comentario"
                        >Úne-t</span
                    >
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="swiper swiper-galeria">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/1.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/1.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/2.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/2.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/3.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/3.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/1.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/1.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/2.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/2.png"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-galeria"
                                style="
                                    background: url(&quot;<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/galerias/3.png&quot;)
                                        no-repeat;
                                "
                            >
                                <div class="overlay">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-image"
                                        data-bs-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/galerias/3.png"
                                    ></a>
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
</section>

<section id="slider-mas-contenido">
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
</section>

<?php get_footer(); ?>
