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
    echo $urlTab[1];
    return $urlTab;

  }


  public function getController(){
 echo "methode getController de route ";

    $controller= $this->formatUrl() [1];
    


    require_once "controllers/".$controller. ".php";
  }
}

 ?>
