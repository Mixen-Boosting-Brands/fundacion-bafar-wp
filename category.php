<?php
/*
    Template Name: Noticias
    */
get_header(); ?>

<section id="jumbotron" class="bg-jumbotron-1">
    <div class="container-fluid">
        <div class="row">
            <div
                class="col-lg-5 offset-lg-1 my-lg-auto order-lg-1 text-center text-lg-start"
            >
                <div class="row mb-5">
                    <div class="col-12">
                        <h1 class="fw-bold"><?php
                        $category = get_the_category();
                        if ($category) {
                            echo esc_html($category[0]->name);
                        }
                        ?></h1>
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

<section id="noticias" class="after-jumbotron py-60">
    <div class="container">
        <div
            class="row small mb-5"
            data-masonry='{"percentPosition": true }'
        >
            <?php
            if (have_posts()):
                $counter = 0;
                echo '<div class="row">'; // Start the main row
                while (have_posts()):

                    the_post();
                    $counter++;

                    // Determine the class based on the counter
                    $class = in_array($counter, [1, 4, 5, 8])
                        ? "chico"
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
                <?php echo bootstrap_pagination(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
