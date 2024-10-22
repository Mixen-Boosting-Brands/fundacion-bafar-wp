<?php get_header(); ?>

<section id="interna" class="py-60">
    <div class="row">
        <div class="col-12">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                <?php the_post_thumbnail("thumb-noticia-grande", [
                    "class" => "img-fluid",
                ]); ?>
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
</section>

<?php get_footer(); ?>
