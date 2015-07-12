<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibilty
if ( ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;
?>
<li class="meal-details <?php
	if ( $woocommerce_loop['loop'] % $woocommerce_loop['columns'] == 0 )
		echo 'last';
	elseif ( ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] == 0 )
		echo 'first';
	?>" itemtype="http://schema.org/Product" itemscope="">

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>



		<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */?>
			<div class="image" style="text-align:center">
					<a href="<?php the_permalink(); ?>" itemprop="image"><?php	do_action( 'woocommerce_before_shop_loop_item_title' ); ?>	</a>
					<h4 itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</div>
		
	
</li>
