<?php

 $vetor= array();
    $vetor[] = $_GET["v1"];
    $vetor[] = $_GET["v2"];
    $vetor[] = $_GET["v3"];
    $vetor[] = $_GET["v4"];
    $vetor[] = $_GET["v5"];
    
    $vetorpar = array();
    $vetormultiplo = array();
    
    $maior=0;
    for($i=0;$i<=4;$i++){
        if($vetor[$i]>$maior){
            $maior=$vetor[$i];
        } 
        if($vetor[$i]%2==0){
            $vetorpar[]=$vetor[$i];
        }
        if(($vetor[$i]%3==0)&&($vetor[$i]%5==0)){
            $vetormultiplo[]=$vetor[$i];
        }
    }
    
    echo"O maior valor é: ".$maior."<br>";
    
    echo"Os números pares informados são: <br>";
    for($j=0;$j<count($vetorpar);$j++){
        echo $vetorpar[$j]."<br>";
    }
    
    echo"Os números múltiplos de 3 e 5  são: <br>";
    for($l=0;$l<count($vetormultiplo);$l++){
        echo $vetormultiplo[$l]."<br>";
    }   
?>