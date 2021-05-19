<?php

	include 'lib/app.php';

	$link = bancoConecta();

    $sql = <<<EOT

    SELECT 
        city.Name , city.Population, city.CountryCode
    FROM
        city
    WHERE
        city.CountryCode='BRA' 

EOT;
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<h1>Cidades</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
		<th scope="col">Nome</th>
		<th scope="col">População</th>
		<th scope="col">Codigo da Cidade</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Population']?></td>
				<td><?=$linha['CountryCode']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>
