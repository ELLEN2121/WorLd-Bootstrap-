<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT

        SELECT 
            c.Name, c.Continent, cl.IsOfficial, cl.Percentage
        FROM 
            country as c,  
            countrylanguage as cl
        WHERE
            c.Code = cl.CountryCode and
            cl.Language = 'Portuguese'
EOT;
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<h1>Países que falam português</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
		<th scope="col">Nome</th>
		<th scope="col">Continente</th>
		<th scope="col">Oficial</th>
		<th scope="col">Percentual</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Continent']?></td>
				<td><?=$linha['IsOfficial']?></td>
				<td><?=$linha['Percentage']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>
