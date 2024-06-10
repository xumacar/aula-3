<!DOCTYPE html>
<html>
    <body>
        <?php
            $a = 1;      // A variavel $a é igual a 1
            $a += 2;     // Somamos 2 ao valor da $a
            echo $a;
        ?>

        <?php
            $a -= 2;     // Subtraimos 2 ao valor da variavel $a
            $a *= 2;     // Multiplicamos valor da variavel $a por 2
            $a /= 2;     // Dividimos o valor da variavel $a por 2
        ?>

        <?php
            $a = 1;
            echo ++$a;   // Incrementamos 1 e retornamos o valor
            echo $a++;   // Retornamos o valor e incrementamos 1
            echo --$a;   // Descrementamos 1 e retornamos o valor
            echo $a--;   // Retornamos o valor e descrementamos 1
        ?>
    </body>
</html>