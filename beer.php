<?php

require_once 'utils.php';
require_once 'app/model/dataconnection.php';
require_once 'config.php';

$page_title = 'Profane | Bières';
$doccss_ref = 'public/css/beers.css';

ob_start();
include 'app/view/beers.view.php';
$content = ob_get_clean();

include 'view/common/layout.php';