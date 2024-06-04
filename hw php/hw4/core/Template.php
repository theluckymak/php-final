<?php

class Template {
    public static function render($template, $data = []) {
        extract($data);
        include "templates/$template.php";
    }
}

?>
