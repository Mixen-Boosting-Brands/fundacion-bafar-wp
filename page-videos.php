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
                    class="img-fluid"
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
        <p>Test</p>
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
