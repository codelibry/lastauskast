<?php get_header(); ?>
    <section class="search-block">
        <div class="container">
            <div class="search-block__wrap">
                <div class="search-block__title">
                    <h1>
                        <?php printf( __( 'Search results for: %s', 'lastauskast' ), get_search_query() ); ?>
                    </h1>
                </div>
    
                <?php if ( have_posts() ) : ?>
                    <ul class="search-block__list">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <li class="search-block__list-item">
                                <h3 class="list-item__title" ><?php the_title(); ?></h3>
                                <a class="list-item__link" href="<?php the_permalink(); ?>"><?php _e('Read More','lastauskast'); ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else : ?>
                    <div class="search-block__not-found">
                        <?php _e('Search results not found');?>
                    </div>
                <?php endif; ?>
            </div>
            
        </div>
        
    </section>
<?php get_footer(); ?>