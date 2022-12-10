<?php

if (!empty($_SESSION)) {
    echo $_SESSION['number'] + $_SESSION['secondNumber'];
}

