<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Joe"=>"43","Ben"=>"37","Peter"=>"35");
asort($age);

foreach($age as $kay => $value) {
    echo "name = " . $kay . ", age = " . $value . "; ";
}
?>

</body>
</html>