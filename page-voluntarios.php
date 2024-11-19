<?php
/*
    Template Name: Voluntarios
    */
get_header(); ?>

<section id="jumbotron" class="bg-jumbotron-1">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-5 col-lg-6 my-lg-auto order-lg-2 text-end">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/jumbotron/thumb-voluntarios.png"
                    alt=""
                    class="thumb-noticia-grande img-fluid"
                />
            </div>
            <div
                class="col-lg-5 offset-lg-1 my-lg-auto order-lg-1 text-center text-lg-start"
            >
                <div class="row mb-5">
                    <div class="col-12">
                        <h2>Somos inspiración</h2>
                        <h1 class="fw-bold">En acción</h1>
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
                    <h1>Voluntariado</h1>
                    <p>
                        En Fundación Grupo Bafar estamos conscientes de
                        que la reconstrucción del tejido social es tarea
                        ardua y que nos involucra a todos, gobierno,
                        sector privado y sociedad.
                    </p>
                    <p>
                        Para la realización de nuestros programas es
                        sumamente importante la labor generosa de
                        mujeres y hombres que se entregan como
                        voluntarios, uniendo sus talentos y energías
                        para la formación de mejores mexicanos.
                    </p>
                    <p>
                        El grupo más numeroso de voluntarios se
                        encuentra en las y los colaboradores de Grupo
                        Bafar, quienes además de contribuir al éxito de
                        la empresa en las áreas que les corresponden,
                        destinan parte de su tiempo libre a participar
                        con entusiasmo en nuestras actividades.
                    </p>
                    <p>
                        Destaca el grupo de mamás voluntarias, cuyos
                        hijos son beneficiarios de las Escuelas Socio
                        Deportivas. Ellas participan en la elaboración
                        diaria de los alimentos, así como en otros de
                        los programas que FGB desarrolla.
                    </p>
                    <div class="text-center py-30">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/juntos-hacemos-mas.png"
                            alt=""
                            class="img-fluid"
                        />
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/yo-soy-voluntari@.png"
                            alt=""
                            class="img-fluid"
                        />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/thumb-voluntarios.png"
                    alt=""
                    class="img-fluid"
                />
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
