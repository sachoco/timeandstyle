<a id="variation" class="tas-select" data-src="#variable-variations" data-options='{ "touch": false}' href="javascript:;">
	<span class="label">Variation:</span>
	<span class="title">Choose an option</span>
</a>

<div style="display: none;" id="variable-variations">
<div class="content-wrapper">
	<div class="page-title">
		<h2>SELECT VARIATION</h2>
	</div>

	<div class="variation-groups">
		<?php
			global $product;
			$swatch_type_options = $product->get_meta('_swatch_type_options', true);

				echo '<div class="variation-group"><ul class="flex-grid align-left">';
				foreach ($variations_options as $value) {
					$current_attribute_image_id = $swatch_type_options[md5( sanitize_title( strtolower( "Variation" ) ) )]["attributes"][md5( sanitize_title( strtolower( $value ) ) )]["image"];

					echo '<li class="flex-item" data-variation="'.$value.'" data-variation-title="'.$value.'">
				<div class="image"><img src="'.wp_get_attachment_image_src( $current_attribute_image_id, "full" )[0].'" alt="'.$value.'"></div>';
					//echo '<div class="title">'.$value.'</div>';
					echo '</li>';					}
				echo '</ul></div>';

		?>
	</div>
</div>
</div>
