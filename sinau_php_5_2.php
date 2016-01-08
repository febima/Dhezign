<?php
		$a= array(
				1=>"saya",
				2=>"kamu",
				3=>"dia"
		);
		foreach($a as $b => $c){
			echo"$b => $c";
			echo"<br>";
		}
?>



<?php
		$nama= array( 
						"Bima" => 85,
						"Ilham" => 90,
						"Kris" => 95,
						"Zahru" => 92,
						"Zain" => 87
			);
		foreach($nama as $c => $d){
?>
	<table style="border:1px solid #000;">
		<tr>
		<?php
			echo"<td>$c</td>";
			echo"<td>$d</td>";
		?>
		</tr>
	</table>
<?php
		}
?>



<?php
    function build_table($array){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . $key . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . $value2 . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}

$array = array(
    array('first'=>'tom', 'last'=>'smith', 'email'=>'tom@example.org', 'company'=>'example ltd'),
    array('first'=>'hugh', 'last'=>'blogs', 'email'=>'hugh@example.org', 'company'=>'example ltd'),
    array('first'=>'steph', 'last'=>'brown', 'email'=>'steph@example.org', 'company'=>'example ltd')
);

echo build_table($array);
?>

<?php
		$bag= array(
						array(
							$nama = "Bima",
							$buku = 3,
							$bolpoint = 3,
							$saku = 10000
						),
						array(
							$nama = "pujo",
							$buku = 2,
							$bolpoint = 2,
							$saku = 20000
						),
						array(
							$nama = "Kris",
							$buku = 1,
							$bolpoint = 1,
							$saku = 30000
						)
		);

		echo "Nama : "$bag[0][0]"Bawa buku = "$bag[0][1]"Bawa Bolpoint = "[0][2]"Bawa Uang = "$bag[0][3]"</b>";
		
?>

