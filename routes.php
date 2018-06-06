<?php

class Route {
  private function formatUrl(
  ){
    //localhost:8888/tasks/
    if (isset($_SERVER["PATH_INFO"])){
    //localhost:8888/tasks/filter
      $url = $_SERVER["PATH_INFO"];
    }
    else {
      $url="/";
    }

    $urlTrim= trim($url,"/");


    $urlTab=explode ("/", $url);

    return $urlTab;

  }


  public function getController(){

   $controller= $this->formatUrl()[1];
   echo $controller;
   
   
   
      $controllerPath = "controllers/".$controller.".php";

     // On teste si le fichier existe avant de l'inclure pour eviter une erreur
   if(file_exists($controllerPath)){
    require_once $controllerPath;
  }
}
}

?>
