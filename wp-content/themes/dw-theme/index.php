<?php get_header(); ?>
<h2>Mes derniers articles</h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="archive">
        <div class="post__content">
            <article class="post">
                <header class="post__head">
                    <h3 class="post__title"><?php the_title(); ?></h3>
                    <p>
                        Publié le
                        <time datetime="c"><?php the_time(); ?></time>
                        par <strong><?php the_author(); ?></strong>
                    </p>
                </header>
            </article>
            <div class="post__content">
                <?php the_excerpt(); ?>
            </div>
            <footer class="post__more">
                <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">Lire cet article</a>
            </footer>
        </div>
        <figure class="post__thumb">
            <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="post__img">
            <?php else: ?>
                <div class="post__noimg">&nbsp;</div>
            <?php endif; ?>
        </figure>
    </div>
<?php endwhile; else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
