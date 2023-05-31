<?php

require_once 'utils.php';
require_once 'app/model/dataconnection.php';
require_once 'config.php';

$page_title = "Accueil | Profane";
$css = "accueil.css";

ob_start();
include 'view/accueil.view.php';
$content = ob_get_clean();

include 'view/common/layout.php';