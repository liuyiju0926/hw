<table border='1' width="100%">

    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo '<tr>';

        $newi = ($i - 1) * 10;

        for ($j = 1; $j <= 10; $j++) {
            $r =  $newi + $j;
            if ($r == 1) {//1不為質數
                echo '<td>';
            } else if ($r == 2) {//2為質數
                echo '<td bgcolor="gray">';
            } else if ($r == 3) {//3為質數
                echo '<td bgcolor="gray">';
            } else if ($r == 5) {//5為質數
                echo '<td bgcolor="gray">';
            } else if ($r == 7) {//7為質數
                echo '<td bgcolor="gray">';
            } else if ($r % 2  == 0) {//被2整除不為質數
                echo '<td>';
            } else if ($r % 3 == 0) {//被3整除不為質數
                echo '<td>';
            } else if ($r % 5 == 0) {//被5整除不為質數
                echo '<td>';
            } else if ($r % 7 == 0) {//被7整除不為質數
                echo '<td>';
            } else {
                echo '<td bgcolor="gray">';
            }
            echo $r;
        }
        echo '</td>';
    }

    echo '</tr>';

    ?>


</table>