<?php

session_start();

$_SESSION['flash'] = 'message for user';
header('Location: page.php');
