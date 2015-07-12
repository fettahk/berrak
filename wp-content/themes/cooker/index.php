<?php get_header(); ?>
<div class="content clearfix">
		<?php		
			$table_name = $wpdb->prefix . "sliders_options";
			$args = "SELECT * FROM ". $table_name ." WHERE slider = 2 ORDER BY `position`";
			$meals_slider_result = $wpdb->get_results($args);
		?>
		<div class="main4Boxes">
			<div class="box1">	
				<a href="<?php echo get_site_url(); ?>/makarnayi-nasil-pisirmeliyim/"><img src="./wp-content/themes/cooker/images/box1.png" /></a>
			</div>
			<div class="box2">
				<a href="<?php echo get_site_url(); ?>/nicin-makarna-yemeliyim/"><img src="./wp-content/themes/cooker/images/box2.png" /></a>
			</div>
			<div class="box3">
				<a href="<?php echo get_site_url(); ?>/urun-kategori/pasta-rino/"><img src="./wp-content/themes/cooker/images/box3.png" /></a>
			</div>
		</div>
			<?php if ($meals_slider_result) :	?>	
			<div id="meals-of-the-day">
				<h3 class="title-separator"><span class="title">Meals of the day</span><span class="sep"></span></h3>
				<ul>
			<?php foreach ( $meals_slider_result as $slider ): ?>
				<?php $slider_post = get_post($slider->product_id);?>
				<?php $slide_link = get_permalink( $slider->product_id); ?>
                                <?php if($slider_post->post_type == 'product'): ?>
                                    <?php $product = wc_setup_product_data( $slider_post );//$product = new WC_Product($slider->product_id); ?>
                                    <?php $price = $product->get_price_html();?>
                                <?php else: ?>
                                    <?php $price = '';?>
                                <?php endif; ?>
					<li class="meal">
						<div class="img-holder">
							<a href="<?php echo $slide_link; ?>">
							<?php 
								$slide_img = get_post_meta($slider->product_id, '_daymeals-slider-input', true);	
								if($slide_img != '') {
									echo "<img src='$slide_img' alt='' />";
								}else {
									echo get_the_post_thumbnail($slider->product_id, 'slider');
								}
							?>
							</a>
						</div>
						<a href="<?php echo $slide_link ?>" class="desc-holder">
							<span class='title'><?php echo $slider_post->post_title; ?></span>
							<span class='txt'><?php $short_descr= $slider_post->post_excerpt;
								if(strlen($short_descr) > 300){
											echo substr($short_descr, 0,300).'...';
								}else{
									echo $short_descr;
								}
							?></span> 

							<span class="price"><?php echo $price; ?></span>
							<span class="button-ckr right">View</span>
						</a>
					</li>
			<?php endforeach; ?>
				</ul>
			</div>

    <?php endif ?>
			
			<?php if ( is_active_sidebar( 'front-page-sidebar-ckrw' ) ) {
						dynamic_sidebar('front-page-sidebar-ckrw'); 
					}?>
  


</div>


<?php get_footer(); ?>