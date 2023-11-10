<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    <h2>primeiro exemplo de php</h2>
    <h1>aqui ainda é html</h1>
    <?php
    $texto = "texto do botao";
    echo "<p style='color:pink;'>aqui já é php!</p>";
    echo "<button>" . $texto . "</button>";
    ?>
</body>
</html>