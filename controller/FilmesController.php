<?php

//session_start();


require "./model/Filme.php";
require "./repository/FilmesRepositoryPDO.php";

class FilmesController{

    public function index(){
        
        $filmesRepository = new FilmesRepositoryPDO();
        return  $filmesRepository->listarTodos();
    }


    public function save($request){
        $filmesRepository = new FilmesRepositoryPDO();
        $filme = (Object) $request;

        $upload = $this->savePoster($_FILES);

        if(gettype($upload) == "string"){
            $filme->poster = $upload;
        }

        if($filmesRepository->salvar($filme))
            $_SESSION["msg"] = "Filme cadastrado com sucesso";
        else
            $_SESSION["msg"] = "Erro ao cadastrar filme";

        header("Location: /");
    }

    public function savePoster($file){
        $posterDir = "imagens/posters/";
        $posterPath = $posterDir . basename($file["poster_file"]["name"]);
        $posterTmp = $file["poster_file"]["tmp_name"];

        if(move_uploaded_file($posterTmp, $posterPath)){
            return $posterPath;
        }else{
            return false;
        }
    }

    public function favorite(int $id){
        $filmesRepository = new FilmesRepositoryPDO();
        $result = ['success' => $filmesRepository->favoritar($id)];
        header('Content-type: application/json');
        echo json_encode($result);
    }
}
?>
