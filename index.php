<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <style>
        body{
            background: rgb(129, 129, 129);
            color: white;
        }
        .container{
            width: 400px;
            height: 150px;
            border: 1px solid white;
            margin: 150px auto;
            padding: 30px;
            background: #607848;
        }
        form input{
            margin-left: 150px;
            text-align: center;
            width:80px;
            height:30px;
            border-radius: 50px;
            
        }
    </style>
</head>
<body>
<div class="container">
    <form action="atividade2.php" method="post">
        <h2>Informe um número para uma lista:</h2>
        <input type="number" name="n" id="n">
        <input type="submit" value="Calcular" name="btn">
    </form>
    </div>
</body>
</html>