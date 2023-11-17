<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
    <style>
        body{
            color: #8a0136;
        }
        
        form{
            color: #8a0136;
            background-color: #fc0362;
            font-weight: bold;
            text-align: center;
            padding: 10px;
            margin: 5px;
            width: 15%;
        
        }
        label, input{
            padding: 9px;
            margin: 4px;    
        }
    </style>
</head>
<body>
    <h1>PHP</h1>
    <h2>Exemplo</h2>
    <h3>Utilizando formulários</h3>
    <form action="index.php" method="POST">
        <label for="nome">Nome:</label>
         <input  id="nome" type="text" name="nome"> <br>
        <label for="senha">Senha:</label>
        <input id="senha" type="password" name="senha">    
        <input type="submit"> 
    </form>
</body>
</html>