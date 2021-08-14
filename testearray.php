<?php
	$pessoas = array(

		0 => array("nome"=>"Christian", "idade"=>41),
		1 => array("nome"=>"Gislaine", "idade"=>37),
		2 => array("nome"=>"Gabriele", "idade"=>18),
		3 => array("nome"=>"João", "idade"=>62)
		

	);

foreach ($pessoas as $key => $pessoa) {
	echo " <br>Nome = " .$pessoa["nome"]." <br>Idade = ". $pessoa["idade"];

}

?>


	<table border="1">
		<th>Item</th>
		<th>Nome</th>
		<th>Idade</th>
		<?php foreach ($pessoas as $key => $pessoa){


			?>
			<tr>

				<td><?php echo  $key;?></td>
				<td><?php echo  $pessoa["nome"]; ?></td>
				<td><?php echo  $pessoa["idade"];  ?></td>
			</tr>


		<?php  

}
		?>
</table>


