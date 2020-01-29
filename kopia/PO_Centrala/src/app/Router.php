<?php 

class Router {

  private $routes;
  private $route;
  public $request;
  /**
   * Construct
   *
   * @param [array] $params
   */
  public function __construct($params, $request) {
    $this->request = $request;
    $this->readRoutes();
    $this->matchRoute($params);
    $this->loadSources();

    $instance = new $this->route["controller"];
    session_start();
    $instance->setupConnection();
    $this->request->setUrlParams($this->route["arguments"]);
    $instance->{$this->route["method"]}($this->request);
  }

  /**
   * Read Routes
   *
   * @return void
   */
  private function readRoutes() {
    $this->routes = json_decode(file_get_contents(CONFIG . "routes.json"), true)[0];
  }

  /**
   * Load Sources
   *
   * @return void
   */
  private function loadSources() {
    require_once APP . "Controllers" . DIRECTORY_SEPARATOR . "Base" . DIRECTORY_SEPARATOR . "Controller.php";
    require_once APP . "Controllers" . DIRECTORY_SEPARATOR . $this->route["controller"] . ".php";
  }

  /**
   * Match route
   *
   * @param [array] $params
   * @return boolean
   */
  private function matchRoute($params) {
    foreach($this->routes as $route => $controller) {
      $matched = FALSE;
      $arguments = array();
      $current = explode("/", $route);
      if(count($current) == count($params)) {
        for($i = 0; $i < count($params); $i++) {
          if($params[$i] == $current[$i] || $current[$i] == "{param}") {
            $matched = $this->routes[$route];
            if($current[$i] == "{param}") {
              $arguments[] = $params[$i];
            }
          } else {
            $matched = FALSE;
            $arguments = NULL;
            break;
          }
        }
      }
      if($matched) {
        $this->route = array(
          "controller" => $matched[0],
          "method" => $matched[1],
          "arguments" => $arguments
        );
        return TRUE;
      } 
    }
    if(!$matched) { 
      $this->route = array(
        "controller" => "ErrorController",
        "method" => "error404",
        "arguments" => []
      );
      return TRUE;
    }
  }

}