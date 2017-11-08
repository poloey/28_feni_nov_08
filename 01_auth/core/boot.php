<?php
require 'core/Db.php';
require 'config.php';
require 'core/Query.php';
$db = Db::connection($config);
$connection = new  Query($db);



