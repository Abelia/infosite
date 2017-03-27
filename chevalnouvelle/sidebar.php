<aside>
    <?php get_search_form(); ?>
       <div class="articles-recent">
        <h3>Articles récents</h3>
        <ul>
            <?php $args = array(
                'type'            => 'postbypost',
                'limit'           => '4',
                'format'          => 'html',
                'before'          => '',
                'after'           => '',
                'show_post_count' => false,
                'echo'            => 1,
                'order'           => 'DESC',
                'post_type'     => 'post'
            );
            wp_get_archives( $args ); ?>
        <h3>info</h3>
        <p>Un truc à raconter? <br> On est pas très regardant:</p>
        <a href="mailto:
chevalnouvelles@gmail.com">
            chevalnouvelles@gmail.com</a>
    </div>
</aside>