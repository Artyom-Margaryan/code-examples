<?php

$msg = '';

if (isset($_POST['import'])) {

    //get file extension
    $getfile = basename($_FILES["file"]["name"]);
    $extention = @end(explode('.', $getfile));
    $lover_extention = strtolower($extention);


    $filename = $_FILES["file"]["tmp_name"];

    // check only file accepted
    $allowTypes = array('csv');
    if (in_array($lover_extention, $allowTypes)) {
        if ($_FILES["file"]["size"] > 0) {

            //open file and read
            $file = fopen($filename, "r");
            $i = 0;
            while (($col = fgetcsv($file, 10000, ",")) !== FALSE) {
                if ($i > 0 && $col[0] != '') {
                    $insert = "INSERT INTO excel_detail (name,phone,email)values('" . $col[0] . "','" . $col[1] . "','" . $col[2] . "')";
                    mysqli_query($con, $insert);
                }
                $i++;
            }
            $msg = '<p style="color: green;"> CSV Data inserted successfully</p>';

        }
    } else {
        $msg = '<p style="color: red;">File extension should be .csv format</p>';
    }

}

