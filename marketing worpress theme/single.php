<?php

get_header();

if(have_posts()):
    while (have_posts()): the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p> <?php the_time('F j'); ?> | by <a href="<?php get_author_posts_url(get_the_author_meta('ID'));
        ?>">
        
        <?php the_author(); ?></a>| Posted in <?php get_the_category(); ?>
        </p>
        <p> <?php echo the_content(); ?>
        
        </p>
        

    <?php endwhile;

else:

    echo '<p>No content found</p>';

endif;

get_footer();
?>