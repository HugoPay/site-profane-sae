<?php

require_once 'utils.php';
require_once 'app/model/dataconnection.php';
require_once 'config.php';

$page_title = 'Fabrication | Profane';
$css = 'gb.css';

ob_start();
include 'view/gb.view.php';
$content = ob_get_clean();

include 'view/common/layout.php';
