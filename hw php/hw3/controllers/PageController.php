<?php

require_once 'core/Template.php';
require_once 'models/FarmModel.php';

class PageController {
    private $farmModel;

    public function __construct() {
        $this->farmModel = new FarmModel();
    }

    public function renderIndex() {
        $farms = $this->farmModel->getAll();
        Template::render('index', ['farms' => $farms]);
    }

    public function renderAbout() {
        Template::render('about');
    }
}

?>
