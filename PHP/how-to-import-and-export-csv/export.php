<?php

if (isset($_POST['export'])) {
    $users = @$_POST['userid'];
    if (sizeof($users) > 0) {
        $content = '<table><tr><th>Name</th><th>Email</th><th>Phone</th></tr>';
        for ($j = 0; $j < sizeof($users); $j++) {
            $result = mysqli_query($con, "SELECT * FROM excel_detail where id = '" . $users[$j] . "' ");
            while ($row = mysqli_fetch_array($result)) {
                $content .= '<tr>';
                $content .= '<td>' . $row['name'] . '</td>';
                $content .= '<td>' . $row['phone'] . '</td>';
                $content .= '<td>' . $row['email'] . '</td>';
                $content .= '</tr>';
            }
        }
        $content .= '</table>';

        header('Content-Type:application/xls');
        header('Content-Disposition: attachment; filename=users.xls');

        echo $content;
        exit();
    }
}

