<form method="GET">
    <label>
        <input name="number">
    </label>
    <label>
        <input name="secondNumber">
    </label>
    <input type="submit">
</form>

<?php
session_start();

if (!empty($_GET)) {
    $_SESSION['number'] = $_GET['number'];
    $_SESSION['secondNumber'] = $_GET['secondNumber'];
}
?>