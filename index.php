<?php

use Owner\VKbot\EventsHandler;

require_once 'vendor/autoload.php';
include 'src/TroublesMenu.php';

$handler = new EventsHandler;
$handler->sendComplain();

?>