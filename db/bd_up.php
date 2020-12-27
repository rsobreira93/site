<?php

$bd = new SQLite3("filmes.db");

$sql ="DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql))
     echo "\nTabela filmes apagada\n";

$sql = "CREATE TABLE filmes(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(2,1)
    )
";

if ($bd->exec($sql))
     echo "\nTabela filmes criada\n";
else
    echo "\nErro ao criar tabela filmes\n";

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    0,
    'Vingadores',
    'https://image.tmdb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
    'Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.',
    9.5)";

if ($bd->exec($sql))
     echo "\nFilmes inseridos com sucesso\n";
else
    echo "\nErro ao inserir filmes\n";

    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        1,
        'Mulher-Maravilha 1984',
        'https://image.tmdb.org/t/p/w300/pBHYbehxaSSMc0X5m5iKBvqWzCi.jpg',
        'Em 1984, Diana Prince entra em conflito com dois inimigos formidáveis, Maxwell Lord e a Mulher-Leopardo, enquanto reencontra misteriosamente com seu antigo interesse amoroso Steve Trevor.',
        10.0)";

    
if ($bd->exec($sql))
    echo "\nFilmes inseridos com sucesso\n";
    else
    echo "\nErro ao inserir filmes\n"; 

?>