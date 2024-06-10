<html>
    <body>
        <?php
            // Array com Chave => Valor
            $listaAlunoidade = array(
                "Leonardo" => 31,
                "Gabriella" => 27,
                "Bianca" => 07
            );

            // Array apenas com valor
            $listaCores = array(
                "Vermelho",
                "Amarelo",
                "Verde",
                "Laranja"
            );
            
            // Acesso ao item ao array $listAlunoidade[CHAVE]
            echo $listaAlunoidade["Leonardo"];

            echo "<br />";

            echo $listaCores[2];

            echo "<br />";

            // Exibir em tela todo o conteúdo (chave e valor) de um array var_dump
            var_dump($listaAlunoidade);

            echo "<br />";

            var_dump($listaCores);
        ?>
    </body>
</html>