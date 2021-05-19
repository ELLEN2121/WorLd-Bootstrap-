<?php

    function bancoConecta() 
    {
        global $config;

        $host = $config['HOST'];
        $usuario = $config['USUARIO'];
        $senha = $config['SENHA'];
        $banco = $config['BANCO'];

        /* abre a conexão */
        $link = mysqli_connect($host,$usuario,$senha);
        if(!$link)
        {
            /* não conseguiu abrir a conexão */
            echo "Erro de conexao: " . mysqli_connect_error();
            die();
        }

        /* seleciona o banco de dados */
        if(!mysqli_select_db($link, $banco))
        {
            /* erro ao selecionar o banco de dados */
            echo "Erro na selecao do banco: " . mysqli_error($link);
            mysqli_close($link);
            die();
        }

        // register_shutdown_function(mysqli_close,$link);

        register_shutdown_function(function() use ($link) {
            mysqli_close($link);
        });

        return $link;
    }

    function executaSelect($link, $sql)
    {
        /* enviando a consulta para o banco de dados */
	    $resposta = mysqli_query($link, $sql);
	    if($resposta)
	    {
            /* deu certo!! mostar o resultado */
            /* pega a primeira linha */
    		$linha = mysqli_fetch_assoc($resposta);
            while($linha)
            {
                // Faz algo com a linha
                yield $linha;
                $linha = mysqli_fetch_assoc($resposta);
            }
        }
        else
        {
            echo mysqli_error($link);
        }
    } ?> 

    
