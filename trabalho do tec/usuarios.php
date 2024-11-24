<?php

$contas = [
"emailUsuario" => ['usuario1@gmail.com', 'usuario2@gmail.com', 'usuario3@gmail.com', 'usuario4@gmail.com', 'usuario5@gmail.com', 
'usuario6@gmail.com', 'usuario7@gmail.com', 'usuario8@gmail.com', 'usuario9@gmail.com', 'usuario10@gmail.com'],
"senha" => ["senha1", "senha2", "senha3", "senha4", "senha5", "senha6", "senha7", "senha8", "senha9", "senha10"]
];

$emailUsuario = $_POST["email"];
$senhaUsuario = $_POST["senha"];

echo "<div class='mensagem-container'>";

$usuarioEncontrado = false;

foreach ($contas["emailUsuario"] as $index => $email) {
    if ($email == $emailUsuario && $contas["senha"][$index] == $senhaUsuario) {
        echo "<img src='feliz.png' alt='Imagem de boas-vindas' class='imagem-bemvindo'>";
        echo "<p class='mensagem sucesso'>Olá, $emailUsuario! Seja bem-vindo :D</p>";
        $usuarioEncontrado = true;
        break;
    }
}

if (!$usuarioEncontrado) {
    echo "<img src='triste.png' alt='Imagem de erro' class='imagem-erro'>";
    echo "<p class='mensagem erro'>Opa! Parece que você não é cadastrado em nosso site :(</p>";
}

echo "</div>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>