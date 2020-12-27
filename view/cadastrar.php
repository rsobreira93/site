<?php include "cabecalho.php" ?>
<body>
    
  <nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
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
    <form  method="POST" enctype="multipart/form-data">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar filme</span>

                    <!-- Input do titulo -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" name="titulo" required>
                            <label for="titulo">Título do filme</label>
                        </div>
                    </div>
                
                    <!-- Textarea da sinopse-->
                    <div class="row">
                          <div class="row">
                               <div class="input-field col s12">
                                   <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                                   <label for="sinopse">Sinopse</label>
                              </div>
                          </div>
                    </div>

                    <!-- input da nota-->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" required>
                            <label for="nota">Nota</label>
                        </div>
                    </div>
            
                    <!-- Input da capa do filme-->
                    <div class="file-field input-field">
                        <div class="btn  purple lighten-2">
                            <span>Capa</span>
                            <input type="file" name="poster_file">
                        </div>
                        <div class="file-path-wrapper">
                            <input name="poster" class="file-path validate" type="text">
                        </div>
                    </div>                
                    <div class="card-action">
                        <a class="btn waves-effect waves-light grey" href="/">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light btn purple">Confirmar</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
  </div>
    
</body>
</html>