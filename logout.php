<?php
require_once 'core/config.php';
unset($_SESSION['customer']);
header('Location:third.php');