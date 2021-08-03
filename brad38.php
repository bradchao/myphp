<table border="1" width="100%">
<?php
    $rows = file("maskdata.csv");
    foreach( $rows as $k => $row){
        $data = explode(",", $row);
        if ($k == 0){
            echo '<tr>';
            echo "<th>$data[1]</th>";
            echo "<th>$data[2]</th>";
            echo "<th>$data[4]</th>";
            echo "<th>$data[5]</th>";
            echo '</tr>';
        }else{
            echo '<tr>';
            echo "<td>$data[1]</td>";
            echo "<td>$data[2]</td>";
            echo "<td>$data[4]</td>";
            echo "<td>$data[5]</td>";
            echo '</tr>';
        }

    }
?>
</table>