<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="article-wrapper">
        <article class="article">
            <header class="article__head" style="background:url('<?php the_post_thumbnail_url('full'); ?>') no-repeat">
                <h3 class="article__title"><?php the_title(); ?></h3>
                <p>
                    Publié le
                    <time datetime="c"><?php the_time(); ?></time>
                    par <strong><?php the_author(); ?></strong>
                </p>
            </header>
        </article>
        <div class="article__content">
            <?php the_content(); ?>
        </div>
        <footer class="article__more">
            <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">Lire cet article</a>
        </footer>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>