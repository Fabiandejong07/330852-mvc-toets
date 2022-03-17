<?php

class Pages extends Controller {
    public function __construct() {
       $this->userModel = $this->model('User');
    }
    public function index() {
        $users = $this->userModel->getUSers();
        $data = [
       'title' => 'Home page',
       'users' => $users
        ];
        $this->view('pages/index', $data);
    
    }
}
?>