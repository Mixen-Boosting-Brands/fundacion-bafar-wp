<?php
/*
    Template Name: Noticias
    */
get_header();

// Custom fields (Noticias)
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

<section id="noticias" class="after-jumbotron py-60">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 overflow-hidden">
                <h1 id="titulo-ultima-noticia">
                    <span class="fw-light">Última</span>
                    <span class="fw-bold color-primary comentario"
                        >Noticia</span
                    >
                </h1>
                <?php
                // Custom query to get the newest post from "Noticias" category
                $args = [
                    "post_type" => "post",
                    "posts_per_page" => 1,
                    "category_name" => "Noticias",
                    "orderby" => "date",
                    "order" => "DESC",
                ];

                $noticias_query = new WP_Query($args);

                if ($noticias_query->have_posts()):
                    while ($noticias_query->have_posts()):
                        $noticias_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail("thumb-noticia-grande", [
                            "class" => "img-fluid",
                        ]); ?>
                    </a>
                    <a href="<?php the_permalink(); ?>">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                    </a>
                    <div class="row">
                        <div class="col-8">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        <div class="col-4 my-auto text-end">
                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Leer más</a>
                        </div>
                    </div>
                <?php
                    endwhile; ?>
                <?php
                else:
                     ?>
                <?php
                endif;
                wp_reset_postdata();

// Reset post data
?>
            </div>
        </div>
        <div
            class="row small mb-5"

        >
            <?php
            // Custom query to get the next 8 posts from "Noticias" category
            $args = [
                "post_type" => "post",
                "posts_per_page" => 8,
                "category_name" => "Noticias",
                "offset" => 1,
                "orderby" => "date",
                "order" => "DESC",
            ];

            $noticias_query_below = new WP_Query($args);

            if ($noticias_query_below->have_posts()):
                $counter = 0;
                echo '<div class="row">'; // Start the main row
                while ($noticias_query_below->have_posts()):

                    $noticias_query_below->the_post();
                    $counter++;

                    // Determine the class based on the counter
                    $class = in_array($counter, [1, 4, 5, 8])
                        ? "grande" // originalmente era "chico"
                        : "grande";

                    // Open a new row for every two posts
                    if ($counter % 2 == 1) {
                        echo '<div class="row">';
                    }
                    ?>

                    <div class="col-lg-6 <?php echo $class; ?>">
                        <hr />
                        <div class="row">
                            <?php if ($class == "chico"): ?>
                                <div class="col-4 my-auto">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(
                                            "thumb-noticia-chico",
                                            ["class" => "img-fluid"]
                                        ); ?>
                                    </a>
                                </div>
                                <div class="col-8">
                            <?php else: ?>
                                <div class="col-12 mb-3">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(
                                            "thumb-noticia-grande",
                                            ["class" => "img-fluid"]
                                        ); ?>
                                    </a>
                                </div>
                                <div class="col-12">
                            <?php endif; ?>
                                <a href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>

                    <?php // Close the row after every two posts

                    if ($counter % 2 == 0) {
                        echo "</div>"; // Close the inner row
                    }
                endwhile;

                // Close the last row if there's an odd number of posts
                if ($counter % 2 != 0) {
                    echo "</div>";
                }

                echo "</div>"; // Close the main row
                // No posts found
            else:
                echo "<p>No posts found.</p>";
            endif;

            wp_reset_postdata();
            ?>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a class="btn btn-primary" href="<?php
                $category = get_category_by_slug("noticias");
                if ($category) {
                    echo esc_url(get_category_link($category->term_id));
                }
                ?>">Ver más</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
