<?php get_header(); ?>

<section id="jumbotron" class="bg-jumbotron-1">
    <div class="container-fluid">
        <div class="row">
            <div
                class="col-lg-5 offset-lg-1 my-lg-auto order-lg-1 text-center text-lg-start"
            >
                <div class="row mb-5">
                    <div class="col-12">
                        <h1 class="fw-bold">Error 404: Página no encontrada<?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-secondary" href="<?php echo esc_url(
                            home_url()
                        ); ?>">Regresar al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
