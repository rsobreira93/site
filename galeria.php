<?php include "cabecalho.php" ?>

<?php

$filme1 = [
    "titulo"=>"Vingadores: Ultimato",
    "nota"=> 9.5,
    "sinopse"=>"Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
    "poster"=>"https://image.tmdb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];

$filme2 = [
    "titulo"=>"Mulher-Maravilha 1984",
    "nota"=> 10.0,
    "sinopse"=>"Em 1984, Diana Prince entra em conflito com dois inimigos formidáveis, Maxwell Lord e a Mulher-Leopardo, enquanto reencontra misteriosamente com seu antigo interesse amoroso Steve Trevor.",
    "poster"=>"https://image.tmdb.org/t/p/w300/pBHYbehxaSSMc0X5m5iKBvqWzCi.jpg"
];

$filme3 = [
    "titulo"=>"Invasão Zumbi 2: Península",
    "nota"=> 6.0,
    "sinopse"=>"A península coreana ficou devastada após o surto de zumbis que atingiu os passageiros de um trem-bala com destino a Busan há quatro anos. Com isso, um ex-soldado que conseguiu fugir do país, Jung-seok, tem a missão de retornar e acaba encontrando alguns sobreviventes.",
    "poster"=>"https://image.tmdb.org/t/p/w300/dGVUiqnahQ4ZZRchGRpO2SyhtQY.jpg"
];

$filme4 = [
    "titulo"=>"Tenet",
    "nota"=> 7.9,
    "sinopse"=>"Armado com apenas uma palavra – Tenet – e lutando pela sobrevivência do mundo inteiro, o Protagonista viaja através de um mundo crepuscular de espionagem internacional em uma missão que irá desenrolar em algo para além do tempo real.",
    "poster"=>"https://image.tmdb.org/t/p/w300/jutsxphSGbnpxpGr23xzbf2ziQZ.jpg"
];

$filmes = [$filme1, $filme2, $filme3, $filme4];
?>
<body>
    
  <nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
      <div class="nav-header center">
        <h1>Filmes 4u</h1>
      </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent purple darken-1">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>
        
    <div class="row">
        <?php foreach ($filmes as $filme) :  ?>
            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                    <!-- imagem do site https://www.themoviedb.org  procura filme e vai em posters-->
                        <img src="<?=$filme["poster"]?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                    </div>
                        <div class="card-content">
                            <p class="valign-wrapper"><i class="material-icons amber-text">star</i> <?=$filme["nota"]?></p>
                            <span class="card-title"><?= $filme["titulo"]?></span>
                            <p><?= $filme["sinopse"] ?></p>
                        </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    
</body>
</html>