<?php
$fruits = [
    [
        "photo" => "ananas.png",
        "name" => "Ananas Jaune",
        "stock" => 13
    ],
    [
        "photo" => "tomate.png",
        "name" => "Tomate rouge",
        "stock" => 18
    ],
    [
        "photo" => "banana.png",
        "name" => "Banane Jaune",
        "stock" => 5
    ],
];
var_dump($fruits[0]["name"]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Exemple</h2>
    <p><?= $fruits[0]["name"] ?></p>
    <img src="<?= $fruits[0]["photo"] ?>" alt="">
    
</body>
</html>