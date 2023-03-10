<?php
    $n =1;
    $tabuada= 7;

    while ($n<= 10){
        echo $n. "x" .$tabuada. "=". ($n * $tabuada). "<br>";
        $n++; 

    }

    $cores = array("Branco", "Verde", "Vermelho");
    
        foreach($cores as $cor){
            echo $cor."<br>";
        }

    $valores = array (55.00, 10.99, 20.00);
    $total = 0;
        foreach($valores as $valor){
            $total = $total + $valor;
        }

        $n =1;
        $tabuada= 7;
    //Break
        do{
            echo $n. "x" .$tabuada. "=". ($n * $tabuada). "<br>";
            if ($n==7) break;
            $n ++;
        } while  ($n<=10);
   

        //
        function calMedia($n1, $n2){
            $media =($n1+ $n2)/2;
            return $media;

        }

        function calMedia()($n1, $n2){
            $media =($n1+ $n2)/2;
            return $media;
        }
        //Calculando media 
        $n1 =$_GET["Nota 1"];
        $n2 =$_GET["Nota 2"];
        $media = calMedia($n1,$n2);
            echo "Media =" .$media. "<br>";
                if ($media >= 6.0){
                    echo "<span id = 'aprovado '>APROVADO< /span>";

                }else {
                echo "<span id = 'reprovado'>REPROVADO</span>";
                }

?>