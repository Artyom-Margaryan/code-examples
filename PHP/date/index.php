<?php

$orgDate = "2019-09-15";
$newDate = date("d-m-Y", strtotime($orgDate));
echo "New date format is: " . $newDate . " (MM-DD-YYYY)";

$date = "2019-02-26";
$newDate = date("m-d-Y", strtotime($date));
echo "New date format is: " . $newDate . " (MM-DD-YYYY)";

$orgDate = "17-07-2012";
$newDate = date("Y-m-d", strtotime($orgDate));
echo "New date format is: " . $newDate . " (YYYY-MM-DD)";

$dateOld = "17-07-2012";
$date = str_replace('-"', '/', $dateOld);
$newDate = date("Y/m/d", strtotime($date));
echo "New date format is: " . $newDate . " (YYYY/MM/DD)";

$date = "06/13/2019 5:35 PM";
//converts date and time to seconds
$sec = strtotime($date);
//converts seconds into a specific format
$newdate = date("Y/d/m H:i", $sec);
//Appends seconds with the time
$newdate = $newdate . ":00";
// display converted date and time
echo "New date time format is: " . $newDate;
