<?php

	include 'lib/app.php';

	$link = bancoConecta();

    $sql = <<<EOT
    SELECT DISTINCT
         country.SurfaceArea, country.IndepYear, country.Name, countrylanguage.Language
    FROM
        country,countrylanguage 
    WHERE
        countrylanguage.Language='English'


EOT;
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<h1>Cidades</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
		<th scope="col">Area de Superfice</th>
		<th scope="col">Ano de independência</th>
		<th scope="col">Nome</th>
        <th scope="col">Idioma</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['SurfaceArea']?></td>
                <td><?=$linha['IndepYear']?></td>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Language']?></td>
                
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>
