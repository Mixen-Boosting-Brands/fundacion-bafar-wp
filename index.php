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
                    <img src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/aliados/aliados.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="figuras" class="py-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 offset-lg-1">
                <div id="fig-1" class="figura fig-up">
                    <div class="overlay">
                        <h1>Centro de acopio</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div id="fig-2" class="figura fig-down">
                    <div class="overlay">
                        <h1>Centro de acopio</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div id="fig-3" class="figura fig-up">
                    <div class="overlay">
                        <h1>Centro de acopio</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div id="fig-4" class="figura fig-down">
                    <div class="overlay">
                        <h1>Centro de acopio</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div id="fig-5" class="figura fig-up">
                    <div class="overlay">
                        <h1>Centro de acopio</h1>
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
                        <div class="swiper-slide">
                            <div
                                class="card text-bg-light mb-3 rounded-4"
                            >
                                <div class="card-body">
                                    <h2 class="card-title">Galería</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis? Fuga accusantium eius ad? Ipsa non doloremque quas provident, eum error!</p>
                                </div>
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/thumb-logro.png" class="card-img-bottom" alt="...">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="card text-bg-light mb-3 rounded-4"
                            >
                                <div class="card-body">
                                    <h2 class="card-title">Videos</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis? Fuga accusantium eius ad? Ipsa non doloremque quas provident, eum error!</p>
                                </div>
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/thumb-logro.png" class="card-img-bottom" alt="...">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="card text-bg-light mb-3 rounded-4"
                            >
                                <div class="card-body">
                                    <h2 class="card-title">Noticias</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis? Fuga accusantium eius ad? Ipsa non doloremque quas provident, eum error!</p>
                                </div>
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/thumb-logro.png" class="card-img-bottom" alt="...">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="card text-bg-light mb-3 rounded-4"
                            >
                                <div class="card-body">
                                    <h2 class="card-title">Voluntariado</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis? Fuga accusantium eius ad? Ipsa non doloremque quas provident, eum error!</p>
                                </div>
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/thumb-logro.png" class="card-img-bottom" alt="...">
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
