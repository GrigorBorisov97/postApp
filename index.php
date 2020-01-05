<?php

require 'classes/Db.php';
require 'classes/Model.php';

$model = new Model;
$data = $model->open();

include "blade/lib/BladeOne.php";
use eftec\bladeone;

$views = __DIR__ . '/views'; // folder where is located the templates
$compiledFolder = __DIR__ . '/compiled';
$blade=new bladeone\BladeOne($views,$compiledFolder);
echo $blade->run("app", ["data" => $data]);
