<?php

require_once 'core/Template.php';

class PageController {
    public function renderIndex() {
        Template::render('index');
    }

    public function renderAbout() {
        Template::render('about');
    }
}

?>
