<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT
		select 
			cargo,
			sexo,
			etnia,
			count(*) as total
		from 
			dados
		WHERE
			cargo like '%Info%'
		GROUP BY
			cargo,
			sexo,
			etnia
EOT;
?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head> 
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
		<th scope="col">Cargo</th>
		<th scope="col">Sexo</th>
		<th scope="col">Etnia</th>
		<th scope="col">Total</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['cargo']?></td>
				<td><?=$linha['sexo']?></td>
				<td><?=$linha['etnia']?></td>
				<td><?=$linha['total']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>
