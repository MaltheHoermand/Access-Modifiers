<?php

namespace classes;

class Example {
    private $model;

    public function set_model($model) {
        $this->model = $model;
    }
    public function get_model() {
        return $this->model;
    }

}