<?php get_header(); ?>
<section class="pages">
    <a class="start-link" href="/">Start</a>
    <?php wp_list_pages( '&title_li=' ); ?>
</section>
<section class="main">
	<article class="main-content">
		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
                get_template_part( 'content-single', get_post_format() );
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                  endif;
  
			endwhile; endif; 
		?>
	</article>
</section>

<?php get_footer(); ?>