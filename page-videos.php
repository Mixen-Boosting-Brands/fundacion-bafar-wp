<?php
/*
    Template Name: Videos
    */
get_header(); ?>

<section id="jumbotron" class="bg-jumbotron-1">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-5 col-lg-6 my-lg-auto order-lg-2 text-end">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/jumbotron/thumb-videos.png"
                    alt=""
                    class="thumb-noticia-grande img-fluid"
                />
            </div>
            <div
                class="col-lg-5 offset-lg-1 my-lg-auto order-lg-1 text-center text-lg-start"
            >
                <div class="row mb-5">
                    <div class="col-12">
                        <h1 class="fw-bold">Videos</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="anchor arrow" href="#videos">
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

<section id="noticias" class="after-jumbotron py-60">
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

<?php
$args = [
    "post_type" => "video",
    "posts_per_page" => -1, // Retrieve all posts
];

$videos_query = new WP_Query($args);

if ($videos_query->have_posts()): ?>
    <section
        id="videos"
        class="parallax-window py-60"
        data-parallax="scroll"
        data-image-src="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/images/bg-videos.png"
    >
        <?php
        while ($videos_query->have_posts()):
            $videos_query->the_post(); ?>
            <div class="container-fluid">
                <div class="row mb-5">
                    <div
                        class="col-10 offset-1 col-lg-12 offset-lg-0 text-center"
                    >
                        <h1 id="titulo-ultima-noticia">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper swiper-videos">
                        <div class="swiper-wrapper">
                            <?php while (have_rows("videos")):

                                the_row();
                                $videoID = get_sub_field("video");
                                ?>
                                <div class="swiper-slide">
                                    <div class="overlay">
                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modal-video"
                                            data-bs-video-src="https://www.youtube.com/embed/<?php echo $videoID; ?>"
                                        ></a>
                                    </div>
                                    <div class="card text-bg-light mb-3 rounded-4">
                                        <div class="card-body">
                                            <div class="ratio ratio-16x9">
                                                <iframe
                                                    src="https://www.youtube.com/embed/<?php echo $videoID; ?>"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile; ?>
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
        <?php
        endwhile;
        wp_reset_postdata();

    // Reset the post data
    ?>
    </section>
<?php else: ?>
    <p>No se encontraron galerías.</p>
<?php endif;
?>

<!-- section id="slider-mas-contenido">
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
</section -->

<?php get_footer(); ?>
