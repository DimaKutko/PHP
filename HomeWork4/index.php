<?php

$page = $_GET['page'] ?? 'home';

include_once __DIR__ . '/controllers/' . $page . '_controller.php';
