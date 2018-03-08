<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<section class="site__main row">
	<div class="container">

		<main id="primary" class="content block__left">

			<h1 class="title--page--searchresults"><?php printf( __( 'Search Results for: %s', 'blm_basic' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				
			<?php if ( have_posts() ) : ?>	
				
				<?php while (have_posts()) : the_post(); 
			
					get_template_part( 'content' );
					
				endwhile; ?>
		   
		   		<?php blm_basic_paging_nav(); ?>
		   
		  	 	<?php else: ?>

			   	<div class="content__area-noresults">
		
				   <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
				   
				   <?php get_search_form(); ?>
				   
			   </div>
	
	  	 <?php endif; ?>

		</main><!-- #primary -->

		<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</section><!-- .site__main -->
<?php get_footer(); ?>