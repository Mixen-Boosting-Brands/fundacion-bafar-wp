<?php get_header(); ?>

<section id="jumbotron" class="bg-jumbotron-home">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-5 col-lg-6 my-lg-auto order-lg-2 text-end">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/jumbotron/thumb-nosotros.png"
                    alt=""
                    class="img-fluid"
                />
            </div>
            <div
                class="col-lg-5 offset-lg-1 my-lg-auto order-lg-1 text-center text-lg-start"
            >
                <div class="row mb-5">
                    <div class="col-12">
                        <h2>Fundación</h2>
                        <h1 class="fw-bold">Grupo Bafar</h1>
                        <p>Una institución</p>
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

<?php get_footer(); ?>
