<!--
Bradley Trowbridge
COP3834 Web Application
PHP1
-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            function echoPrimeUpTo ($range)
            {
                echo "Printing prime numbers up tp $range <br>";
                for ($i="1";$i<=$range; $i++){
                    if (isPrime($i)){
                        echo "$i<br>";
                    }

                }
            }
            function isPrime($i)
            {
                    if ($i <= "1")
                        return FALSE;
                    elseif ($i <= "3")
                        return TRUE;
                    elseif (($i % 2 == "0") or ($i % "3" == "0"))
                        return FALSE;
                    $j = "5";
                    while ($j * $j <= $i){
                        if (($i % $j == "0") or ($i % ($j + "2")== "0"))
                            return FALSE;
                        $j = $j + "6";
                    }
                    return TRUE;
            }
            echoPrimeUpTo("1000");
        ?>
    </body>
</html>
