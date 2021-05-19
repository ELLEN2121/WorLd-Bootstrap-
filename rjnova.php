<?php

	include 'lib/app.php';

	$link = bancoConecta();

    $sql = <<<EOT
        SELECT
    	city.Name,country.GNP, country.GovernmentForm, country.Capital
    FROM
    	city, country
    WHERE
    	city.name='RIO DE JANEIRO'
    ORDER BY 
    	country.GNP DESC; 

EOT;
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<h1>Cidades</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
		<th scope="col">Nome</th>
		<th scope="col">PIB</th>
		<th scope="col">Governo</th>
        <th scope="col">Capital</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
                <td><?=$linha['GNP']?></td>
				<td><?=$linha['GovernmentForm']?></td>
				<td><?=$linha['Capital']?></td>
                
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>
