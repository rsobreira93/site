<?php

class Conexao{
    public static function criar():PDO{
        $env = parse_ini_file('.env');
        $databaseType = $env["databasetype"];
        $database = $env["database"];
        $server = $env["server"];
        $pass = $env["pass"];
        $user = $env["user"];
        
        #caso o Banco de dados seja o mysql usaremos esse padrão
        if ($databaseType === "mysql"){
            $database = "host=$server;dbname=$database";
        }

        return new PDO("$databaseType:$database", $user, $pass);
    }
}