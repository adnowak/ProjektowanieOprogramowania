<?php 

class Database {

  private $config;
  protected $db;
  protected $sth;

  /**
   * Set the connection
   */
  public function __construct() {
    $this->loadConfig();
    $this->setConnection();
  }

  /**
   * Undocumented function
   *
   * @return void
   */
  private function loadConfig() {
    $this->config = json_decode(file_get_contents(CONFIG . "database.json"), true);
  }

  /**
   * Undocumented function
   *
   * @return void
   */
  private function setConnection() {
    $this->db = new PDO(
      "mysql:host=" . $this->config["host"] . ";dbname=" . $this->config["name"], 
      $this->config["user"],
      $this->config["pass"]
    );
  }

  /**
   * Prepare statement
   *
   * @param string $query
   * @param array $params
   * @return array
   */
  public function getData($query, $params = NULL) {
    $this->sth = $this->db->prepare($query);
    if(isSet($params)) {
      foreach($params as $param => $value) {
        $this->sth->bindValue($param, $value);
      }
    }
    $this->sth->execute();
    $data = $this->sth->fetchAll();
    $this->sth->closeCursor();
    $this->sth = NULL;
    return $data;
  }

  /**
   * Undocumented function
   *
   * @param string $query
   * @param array $params
   * @return void
   */
  public function query($query, $params = NULL) {
    $this->sth = $this->db->prepare($query);
    if(isSet($params)) {
      foreach($params as $param => $value) {
        $this->sth->bindValue($param, $value);
      }
    }
    $this->sth->execute();
    $this->sth->closeCursor();
    $this->sth = NULL;
  }

  /**
   * Undocumented function
   *
   * @param string $table
   * @return array
   */
  public function table($table) {
    return $this->getData("SELECT * FROM {$table}");
  }

  /**
   * Undocumented function
   *
   * @param string $table
   * @param number $id
   * @return array|boolean
   */
  public function getById($table, $id) {
    $data = $this->getData("SELECT * FROM {$table} WHERE id=:id", [
      ":id" => $id
    ]);
    if(array_key_exists(0, $data)) {
      return $data[0];
    } else return false;
  }
  
  /**
   * Undocumented function
   *
   * @param string $table
   * @param array $params
   * @return boolean
   */
  public function insert($table, $params) {
    $string = "(";
    $rows = "(";
    $i = 0;
    foreach($params as $key => $value) {
      $i++;
      $helper = count($params) > $i ? ", " : ")";
      $string .= ":" . $key . $helper;
      $rows .= $key . $helper;
    }
    $query = "INSERT INTO {$table} {$rows} VALUES {$string}";
    if($this->query($query, $params)) {
      return true;
    } else return false;
  }
}