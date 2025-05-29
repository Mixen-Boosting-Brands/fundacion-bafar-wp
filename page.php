<?php get_header(); ?>

<section id="jumbotron" class="bg-jumbotron-1">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-5 col-lg-6 my-lg-auto order-lg-2 text-end">
                <?php the_post_thumbnail("thumb-noticia-grande", [
                    "class" => "thumb-noticia-grande img-fluid",
                ]); ?>
            </div>
            <div
                class="col-lg-5 offset-lg-1 my-lg-auto order-lg-1 text-center text-lg-start"
            >
                <div class="row mb-5">
                    <div class="col-12">
                        <h1 class="fw-bold"><?php the_title(); ?></h1>
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
                    <h1 style="position: relative; z-index: 1;">
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
