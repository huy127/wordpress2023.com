<?php
global $post;
$product_price = get_post_meta($post->ID, 'product_price', true);
$product_price_sale = get_post_meta($post->ID, 'product_price_sale', true);
$product_stock = get_post_meta($post->ID, 'product_stock', true);

?>

<table class="form-table">
	<tr>
		<th scope="row">
			<label for="blogname">Gia San Pham</label>
		</th>
		<td>
			<input name="product_price" type="text" class="regular-text" value="<?= $product_price ?>">
		</td>
		</input>
	</tr>
	<tr>
		<th scope="row">
			<label for="blogname">Gia Khuyen mai</label>
		</th>
		<td>
			<input name="product_price_sale" type="text" class="regular-text" value="<?= $product_price_sale ?>">
		</td>
		</input>
	</tr>
	<tr>
		<th scope="row">
			<label for="blogname">So luong</label>
		</th>
		<td>
			<input name="product_stock" type="text" class="regular-text" value="<?= $product_stock ?>">
		</td>
		</input>
	</tr>


</table>