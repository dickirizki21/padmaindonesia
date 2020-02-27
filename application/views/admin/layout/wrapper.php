<?php
// proteksi halaman admin dengan library SIMPLE_LOGIN.php
$this->simple_login->check_login();
// Gabungkan semua layout
require_once('head.php');
require_once('header.php');
require_once('nav.php');
require_once('content.php');
require_once('footer.php');