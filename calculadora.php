<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <style>
        body{
            font-family: Arial;
            text-align:center;
            background:#f4f4f4;
        }

        .contenedor{
            width:400px;
            margin:auto;
            background:white;
            padding:20px;
            margin-top:50px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }

        input, select{
            padding:10px;
            margin:5px;
            width:80%;
        }

        button{
            padding:10px 20px;
            background:#0d6efd;
            color:white;
            border:none;
            border-radius:5px;
        }
    </style>
</head>
<body>

<div class="contenedor">

<h2>Calculadora PHP</h2>

<form method="post">
    <input type="number" name="num1" placeholder="Número 1" required><br>

    <input type="number" name="num2" placeholder="Número 2" required><br>

    <select name="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    <br><br>

    <button type="submit">Calcular</button>
</form>

<?php
if($_POST){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    switch($operacion){

        case "sumar":
            $resultado = $num1 + $num2;
            break;

        case "restar":
            $resultado = $num1 - $num2;
            break;

        case "multiplicar":
            $resultado = $num1 * $num2;
            break;

        case "dividir":
            if($num2 != 0){
                $resultado = $num1 / $num2;
            }else{
                $resultado = "No se puede dividir para cero";
            }
            break;
    }

    echo "<h3>Resultado: $resultado</h3>";
}
?>

<br>
<a href="indext.html">Volver a la página principal</a>

</div>

</body>
</html>