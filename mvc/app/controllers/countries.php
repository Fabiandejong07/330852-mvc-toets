<?php

class countries extends Controller {
    public function __construct() {
       $this->countryModel = $this->model('country');
    }
    public function index() {
        $countrie = $this->countryModel->getCountries();
        $data = [
       'title' => 'Home page',
       'country' => $countrie
        ];
        $this->view('countries/index', $data);
    
    }
}
?>