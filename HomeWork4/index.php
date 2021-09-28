<?php

include_once 'utils/page_utils.php';

$page = $_GET['page'] ?? $_POST['page'] ?? 'home';

$parms = array_merge($_POST, $_GET, ['isPost' => !empty($_POST)]);

renderController($page, $parms);
