<?php
		$shop = array(
						array(
								"name" => "Ayam",
								"price" => "35000",
								"number" => 1
							),

						array(
								"name" => "Sapi",
								"price" => "75000",
								"number" => 2
							),
						array(
								"name" => "boyo",
								"price" => "100000",
								"number" => 3
							)
			);
?>
<?php
		if(count $shop > 0):
?>
<table>
	<thead>
		<tr>
			<th>
					<?php
							echo implode('</th><th>', array_key(current($shop)));
					?>
			</th>
		</tr>
	</thead>
<tbody>
<?php
	endforeach;
?>
</tbody>
</table>
<?php
	endif;
?>
