
<?php

get_header();

?>

<main class="flex-1">
    <div class="container mx-auto p-5">

        <h2></h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="bg-white shadow-md rounded-lg p-5">
                    <h2 class="text-xl font-semibold mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="text-gray-700"><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
    </div>

</main>

<?php
get_footer();
?>