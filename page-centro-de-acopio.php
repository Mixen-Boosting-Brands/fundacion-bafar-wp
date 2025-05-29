<?php
get_header();

// Custom fields
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

<section id="interna" class="after-jumbotron py-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                    <!-- php the_post_thumbnail("thumb-noticia-grande", [
                        "class" => "img-fluid mb-4",
                    ]); -->
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                <?php
                    endwhile; ?>
                <?php
                else:
                     ?>
                <?php
                endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
