<?php get_header(); ?>
<?php get_sidebar(); ?>
    <!--------DEBUT DE BOUCLE--------->
    <?php
    while ( have_posts() ) : the_post();?>
    <!--------DEBUT DE BOUCLE--------->

<article>
    <div class="content-article">
        <h2>
            <a href="<?php the_permalink();?>">
                <?php the_title();?>
            </a>
        </h2>
        <p class="info-article"><?php echo get_the_date(); ?> à <?php the_time('g:i a'); ?> | <a href="<?php comments_link(); ?> "><?php comments_number( 'aucun commentaire', '1 commentaire', '% commentaires' ); ?></a></p>
        <?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'kev-feature'); ?>
        <a href="<?php the_permalink();?>">
        <img src="<?php echo $img_url[0];?>"/>
        </a>
        <div>
            <?php
            the_excerpt();
            ?>
        </div>
        <p class="suite"><a href="<?php the_permalink();?>">lire la suite</a></p>
    </div>
    <footer class="article-info">
        <p><?php echo get_the_date(); ?> à <?php the_time('g:i a'); ?> | <a href="<?php comments_link(); ?> "><?php comments_number( 'aucun commentaire', '1 commentaire', '% commentaires' ); ?></a></p>
    </footer>
</article>

    <!--------FIN DE BOUCLE--------->
    <?endwhile;?>
    <!--------FIN DE BOUCLE--------->
<nav>
    <p><?php posts_nav_link(''); ?></p>
</nav>

<?php get_footer(); ?>