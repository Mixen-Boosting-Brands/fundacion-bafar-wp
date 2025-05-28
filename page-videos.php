<?php
/*
    Template Name: Videos
    */
get_header();

// Custom fields (Videos)
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

<section
    id="videos"
    class="parallax-window py-60"
    data-parallax="scroll"
    data-image-src="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/images/bg-videos.png"
>
    <div class="container">
        <div
            class="row small mb-5"

        >
            <?php
            // Custom query to get all posts from "video" post type
            $args = [
                "post_type" => "video",
                "posts_per_page" => -1, // Retrieve all posts
            ];

            $videos_query = new WP_Query($args);

            if ($videos_query->have_posts()):
                $counter = 0;
                echo '<div class="row">'; // Start the main row
                while ($videos_query->have_posts()):

                    $videos_query->the_post();
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
                                    <?php while (have_rows("videos")):

                                        the_row();
                                        $videoID = get_sub_field("video");
                                        ?>
                                        <div class="ratio ratio-16x9">
                                            <iframe
                                                src="https://www.youtube.com/embed/<?php echo $videoID; ?>"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen
                                            ></iframe>
                                        </div>
                                    <?php
                                    endwhile; ?>
                                </div>
                                <div class="col-8">
                            <?php else: ?>
                                <div class="col-12 mb-3">
                                    <?php while (have_rows("videos")):

                                        the_row();
                                        $videoID = get_sub_field("video");
                                        ?>
                                        <div class="ratio ratio-16x9">
                                            <iframe
                                                src="https://www.youtube.com/embed/<?php echo $videoID; ?>"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen
                                            ></iframe>
                                        </div>
                                    <?php
                                    endwhile; ?>
                                </div>
                                <div class="col-12">
                            <?php endif; ?>
                                <h2><?php the_title(); ?></h2>
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
    </div>
</section>

<?php get_footer(); ?>
