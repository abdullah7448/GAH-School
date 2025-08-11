<?php get_header(); ?>

<div class="container" style="min-height :60vh;">
    <h1 class="search-title">
        Search Results for: <strong><?php echo esc_html( get_search_query() ); ?></strong>
    </h1>

    <?php if ( have_posts() ) : ?>
        <div class="search-results">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="search-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo wp_trim_words( get_the_excerpt(), 25, '...' ); ?></p>
                </div>
                <hr>
            <?php endwhile; ?>

            <!-- Pagination -->
            <div class="pagination">
                <?php
                the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text' => __('« Prev', 'textdomain'),
                    'next_text' => __('Next »', 'textdomain'),
                ) );
                ?>
            </div>

        </div>
    <?php else : ?>
        <p>No results found for "<strong><?php echo esc_html( get_search_query() ); ?></strong>". Please try again.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
