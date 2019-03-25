
<?php
$operacao = $_GET["operacao"];
echo "<strong>Resultado: </strong>";
switch ($operacao){
    case "soma":
        print $_GET["n1"]+$_GET["n2"]+$_GET["n3"]+$_GET["n4"];
        break;
    case "multiplicacao":
        print $_GET["n1"]*$_GET["n2"]*$_GET["n3"]*$_GET["n4"];
        break;
    case "subtracao":
        print $_GET["n1"]-$_GET["n2"]-$_GET["n3"]-$_GET["n4"];
        break;
    case "divisao":
        print $_GET["n1"]/$_GET["n2"];
        break;
}
?>
