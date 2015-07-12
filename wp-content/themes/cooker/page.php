<?php 
    /**
     * Template Name: Page + Sidebar
     */
    get_header();
?>
<div class="content  full-content clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="breadcrumbs">
			<ul>
			  <li><a href="#">Home</a></li>
			  <li> <?php the_title() ?></li>
			</ul>
		</div>
		
			<?php the_content() ?>
		
	<?php endwhile; ?>
 	
</div>

<?php
    get_footer();
?>