<?php

use classes\Example;

require_once "classes/Example.php";
$example = new Example();
$example->set_model("im a model");

echo $example->get_model();