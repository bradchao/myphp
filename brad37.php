
<table border="1" width="100%">
<?php
    $fp = @fopen("maskdata.csv", "r") or die("Server Busy");

    $line1 = trim(@fgets($fp));
    $headers = explode(",", $line1);
    echo '<tr>';
    echo "<th>$headers[1]</th>";
    echo "<th>$headers[2]</th>";
    echo "<th>$headers[4]</th>";
    echo "<th>$headers[5]</th>";
    echo '</tr>';


    while ( $line = trim(@fgets($fp))){
        $row = explode(",", $line);
        echo '<tr>';
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo '</tr>';
    }

    fclose($fp);

?>
</table>