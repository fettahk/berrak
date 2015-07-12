<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

global $post, $product;
?>
<hr style="padding-bottom: 12px;">
<div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<p itemprop="price"><?php echo $product->get_price_html(); ?></p>

	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>