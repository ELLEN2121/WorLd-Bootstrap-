<?php


    function MeuGerador() 
    {
        $i = 0;
        while(true)
        {
            yield $i;
            $i++;
        }
    }


    foreach(MeuGerador() as $valor)
    {
        echo "<p>$valor</p>";
        if($valor == 100)
        {
            break;
        }
    }