<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $num = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $resultado = $num + $num2;
        echo "o resultado da adiçao e : $resultado";
}else{
    echo "erro";
}
}
?>