<!-- <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet"> -->

<?php get_header(); ?>
<section class="pages">
    <a class="start-link" href="/">Start</a>
    <?php wp_list_pages( '&title_li=' ); ?>
</section>
<section class="main">
	<article class="main-content">
		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
			    get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
		?>
	</article>
</section>

<?php get_footer(); ?>