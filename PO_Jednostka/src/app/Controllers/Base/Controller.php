<?php 

abstract class Controller {

  protected $dbh;

  /**
   * Setup db connection
   *
   * @return void
   */
  public function setupConnection() {
    $this->model("Database");
    $this->db = new Database();
  }

  /**
   * load view class
   *
   * @return void
   */
  public function view($view, ...$args) {
    if (is_file(APP . 'View' . DIRECTORY_SEPARATOR . $view . '.php')) {
      require_once APP . 'View' . DIRECTORY_SEPARATOR . $view . '.php';
      return new $view(...$args);
    } else return false;
  }

  public function slug($text)
  {
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }

    return $text;
  }

  public function model($model) {
    if(is_file(APP . "Model" . DIRECTORY_SEPARATOR . $model . ".php")) {
      require_once APP . "Model" . DIRECTORY_SEPARATOR . $model . ".php";
      return $model;
    } else return false;
  }


  public function modelEntity($entity) {
    if(is_file(APP . "Model" . DIRECTORY_SEPARATOR . 'Entities' . DIRECTORY_SEPARATOR . $entity . ".php")) {
      require_once APP . "Model" . DIRECTORY_SEPARATOR . 'Entities' . DIRECTORY_SEPARATOR . $entity . ".php";
      return new $entity;
    } else return false;
  }

}