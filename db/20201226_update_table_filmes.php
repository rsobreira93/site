<?php

$bd = new SQLite3("filmes.db");

$sql ="ALTER TABLE filmes ADD COLUMN favorito INT DEFAULT 0";

if ($bd->exec($sql))
     echo "\nTabela filmes foi alterada com sucesso\n";
else
     echo "\nErro ao alterar tabela filmes\n";
