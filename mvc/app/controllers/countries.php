<?php

class countries extends Controller {
    public function __construct() {
       $this->countryModel = $this->model('Country');
    }
    public function index() {
        $countrie = $this->countryModel->getCountries();
        $data = [
       'title' => 'Home page',
       'countrie' => $countrie
        ];
        $this->view('countries/index', $data);
    
    }
}
?>