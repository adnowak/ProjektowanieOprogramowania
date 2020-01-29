<?php

class MainController extends Controller{

  /**
   * IndexView
   *
   * @return void
   */
  public function indexView(Request $request) {
    $this->view('MainPage', 'CHUJ', 'CIPKA', 'WARIAT');
  }

}