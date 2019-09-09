<article class="entry-item-related">
    <?php if (has_post_thumbnail() ):?>
        <figure class="entry-item-thumb">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('fashionclaire-xsmall'); ?>
            </a>
        </figure>
    <?php endif;?>
    <?php if((fashionclaire_get_option('show_related_date'))==1) :  ?>
         <?php fashionclaire_posted_on(); ?>
    <?php endif;?>
    <?php the_title( '<h1 class="entry-item-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
</article>