<?php
    function calcMedia($n1, $n2){
        $media = ($n1+$n2)/2;
        return $media;
    }
    //calculaMedia.php?note1=8.0&nota2=7.0
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];

    if( (trim($n1) == "") || (trim($n2)== "")){
        echo "<span id = 'warning'>Informe as duas notas!</span>";
    }else{
        $media = calcMedia($n1 , $n2);
        echo "média = " . $media . "<br>";
    }
   /* if((!isset($n1)) || (!isset($n2)) ){
        echo "<span id = 'warning'>Informe as duas notas!</span>"
    }else{
    $media calcuMedia($n1 , $n2);

    echo "média = " . $média ."<br>";
    }*/

    if($media >= 6.0){
        echo "<span id='aprovado'>APROVADO</span>";
    }else{
        echo "<span id='reprovado'>reprovado</span>";
    }
?>