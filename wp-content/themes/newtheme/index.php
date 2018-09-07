<!-- <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet"> -->

<?php get_header() ?>
<section class="pages">
    <a class="blog-nav-item active" href="/">Start</a>
    <?php wp_list_pages( '&title_li=' ); ?>
</section>
<section class="main">
    <article class="main-content">
        <!-- <nav>
            <ul class="pager">
                <li><?php next_posts_link( 'Previous' ); ?></li>
                <li><?php previous_posts_link( 'Next' ); ?></li>
            </ul>
        </nav> -->
        <?php 
	    if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
		    get_template_part( 'content', get_post_format() );
  
        endwhile; endif; ?>
    </article>
    <?php get_sidebar() ?>
</section>
<?php get_footer() ?>