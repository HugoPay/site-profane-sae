<?php

require_once 'utils.php';
require_once 'app/model/dataconnection.php';
require_once 'config.php';

$page_title = 'Profane | Accueil';
$doccss_ref = 'public/css/accueil.css';

ob_start();
include 'app/view/beers.view.php';
$content = ob_get_clean();

include 'view/common/layout.php';