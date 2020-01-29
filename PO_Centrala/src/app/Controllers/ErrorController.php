<?php 

class ErrorController extends Controller {

  /**
   * Not Found
   *
   * @return void
   */
  public function error404() {
    echo "404";
    http_response_code(404);
  }

}