<a id="wood" class="tas-select" data-fancybox data-src="#variable-wood" data-options='{ "touch": false}' href="javascript:;">
	<span class="label">Wood:</span>
	<span class="title">Choose an option</span>
</a>
<?php
	$wood = array(
		"Wood" => array()
	);
	if(in_array("oak", $wood_options)){
		if(in_array("oak-soap", $wood_finishing_options)){
			$wood["Wood"]["OAK"]["Oak - Soap"] = array(
						"id" => "oak-soap",
						"category" => "oak",
						"image" => "wood/Oak_SO.jpg"
					);
		}
		if(in_array("oak-beeswax", $wood_finishing_options)){
			$wood["Wood"]["OAK"]["Oak - Beeswax"] = array(
						"id" => "oak-beeswax",
						"category" => "oak",
						"image" => "wood/Oak_BW.jpg"
					);
		}
		if(in_array("oak-tannin-black", $wood_options)){
			$wood["Wood"]["OAK"]["Oak - Tannin black"] = array(
						"id" => "oak-tannin-black",
						"category" => "oak-tannin-black",
						"image" => "wood/Oak_TE.jpg"
					);
		}
	}
	if(in_array("wildcherry", $wood_options)){
		$wood["Wood"]["WILDCHERRY"] = array(
					"Wildcherry - Beeswax" => array(
						"id" => "wildcherry-beeswax",
						"category" => "wildcherry",
						"image" => "wood/Wildcherry_Beeswax.jpg"
					)
				);
	}
	if(in_array("walnut", $wood_options)){
		$wood["Wood"]["WALNUT"] = array(
					"Walnut - Beeswax" => array(
						"id" => "walnut-beeswax",
						"category" => "walnut",
						"image" => "wood/Walnut_Beeswax.jpg"
					)
				);
		if(!in_array("walnut-beeswax", $wood_finishing_options)){
			unset($wood['Wood']['WALNUT']['Walnut - Beeswax']);
		}
		if(in_array("walnut-gold-leaf", $wood_finishing_options)){
			$wood["Wood"]["WALNUT"]["Walnut - Gold leaf"] = array(
						"id" => "walnut-gold-leaf",
						"category" => "walnut",
						"image" => "wood/Walnut_GD.jpg"
					);
		}
	}
	if(in_array("beech", $wood_options)){
		$wood["Wood"]["BEECH"] = array(
					"Beech - Soap" => array(
						"id" => "beech-soap",
						"category" => "beech",
						"image" => "wood/Beech_SO.jpg"
					),
					"Beech - Beeswax" => array(
						"id" => "beech-beeswax",
						"category" => "beech",
						"image" => "wood/Beech_BW.jpg"
					),
					"Beech - Clear" => array(
						"id" => "beech-clear",
						"category" => "beech",
						"image" => "wood/Beech_CL.jpg"
					),
					"Beech - Black" => array(
						"id" => "beech-black",
						"category" => "beech",
						"image" => "wood/Beech_BK.jpg"
					),
					"Beech - Charcoal grey" => array(
						"id" => "beech-charcoal-grey",
						"category" => "beech",
						"image" => "wood/Beech_CG.jpg"
					),
					"Beech - Snow white" => array(
						"id" => "beech-snow-white",
						"category" => "beech",
						"image" => "wood/Beech_SW.jpg"
					),
					"Beech - Dark wenge" => array(
						"id" => "beech-dark-wenge",
						"category" => "beech",
						"image" => "wood/Beech_DW.jpg"
					)
				);
		if(!in_array("beech-soap", $wood_finishing_options)){
			unset($wood['Wood']['BEECH']['Beech - Soap']);
		}
		if(!in_array("beech-beeswax", $wood_finishing_options)){
			unset($wood['Wood']['BEECH']['Beech - Beeswax']);
		}
		if(!in_array("beech-clear", $wood_finishing_options)){
			unset($wood['Wood']['BEECH']['Beech - Clear']);
		}
		if(!in_array("beech-black", $wood_finishing_options)){
			unset($wood['Wood']['BEECH']['Beech - Black']);
		}
		if(!in_array("beech-charcoal-grey", $wood_finishing_options)){
			unset($wood['Wood']['BEECH']['Beech - Charcoal grey']);
		}
		if(!in_array("beech-snow-white", $wood_finishing_options)){
			unset($wood['Wood']['BEECH']['Beech - Snow white']);
		}
		if(!in_array("beech-dark-wenge", $wood_finishing_options)){
			unset($wood['Wood']['BEECH']['Beech - Dark wenge']);
		}
	}
	if(in_array("ash", $wood_options)){
		$wood["Wood"]["ASH"] = array(
					"Ash - Clear" => array(
						"id" => "ash-clear",
						"category" => "ash",
						"image" => "wood/Ash_CL.jpg"
					),
					"Ash - Black" => array(
						"id" => "ash-black",
						"category" => "ash",
						"image" => "wood/Ash_BK.jpg"
					),
					"Ash - Charcoal grey" => array(
						"id" => "ash-charcoal-grey",
						"category" => "ash",
						"image" => "wood/Ash_CG.jpg"
					),
					"Ash - Snow white" => array(
						"id" => "ash-snow-white",
						"category" => "ash",
						"image" => "wood/Ash_SW.jpg"
					),
					"Ash - Dark wenge" => array(
						"id" => "ash-dark-wenge",
						"category" => "ash",
						"image" => "wood/Ash_DW.jpg"
					)
				);
		if(!in_array("ash-clear", $wood_finishing_options)){
			unset($wood['Wood']['ASH']['Ash - Clear']);
		}
		if(!in_array("ash-black", $wood_finishing_options)){
			unset($wood['Wood']['ASH']['Ash - Black']);
		}
		if(!in_array("ash-charcoal-grey", $wood_finishing_options)){
			unset($wood['Wood']['ASH']['Ash - Charcoal grey']);
		}
		if(!in_array("ash-snow-white", $wood_finishing_options)){
			unset($wood['Wood']['ASH']['Ash - Snow white']);
		}
		if(!in_array("ash-dark-wenge", $wood_finishing_options)){
			unset($wood['Wood']['ASH']['Ash - Dark wenge']);
		}
		if(in_array("ash-silver-leaf", $wood_finishing_options)){
			$wood["Wood"]["ASH"]["Ash - Silver leaf"] = array(
						"id" => "ash-silver-leaf",
						"category" => "ash",
						"image" => "wood/Ash_SV.jpg"
					);
		}
	}
	if(in_array("mdf", $wood_options)){
		$wood["Wood"]["MDF"] = array(
					"MDF - Glossy warm white" => array(
						"id" => "mdf-glossy-warm-white",
						"category" => "mdf",
						"image" => "wood/MDF_GWW.jpg"
					),
					"MDF - Glossy beige" => array(
						"id" => "mdf-glossy-beige",
						"category" => "mdf",
						"image" => "wood/MDF_GBE.jpg"
					),
					"MDF - Glossy light grey" => array(
						"id" => "mdf-glossy-light-grey",
						"category" => "mdf",
						"image" => "wood/MDF_GLG.jpg"
					),
					"MDF - Glossy grey" => array(
						"id" => "mdf-glossy-grey",
						"category" => "mdf",
						"image" => "wood/MDF_GGY.jpg"
					)
				);
	}

?>
<div style="display: none;" id="variable-wood">
<div class="content-wrapper">
	<div class="page-title">
		<h2>SELECT WOOD</h2>
	</div>

	<div class="variation-groups">
		<?php 
			$filter_value;
			foreach ($wood as $key => $value) {
				$filter_value = $key;
				foreach ($value as $key => $value) {
					echo '<div class="variation-group" data-filter-values="'.$filter_value.'" data-category-filter-values="'.str_replace(' ', '-', strtolower($key)).'">
					<h2 class="headline">'.$key.'</h2>
					<ul class="flex-grid align-left">';
					foreach ($value as $key => $value) {
						echo '<li class="flex-item" data-wood="'.$value["id"].'" data-wood-category="'.$value["category"].'" data-wood-title="'.$key.'">
					<div class="image"><img src="'.get_template_directory_uri().'/images/materials/'.$value["image"].'" alt="'.$key.'"></div>';
						echo '<div class="title">'.$key.'</div>';
						if($value["desc"]) echo '<div class="desc">'.$value["desc"].'</div>';
						echo '</li>';					}
					echo '</ul></div>';
				}


			}
		?>	
	</div>
</div>
</div>
