
<table border="1" width="100%" />
    <tr>
        <th>Filename</th>
        <th>File or Dir</th>
        <th>size</th>
        <th>Modify Time</th>
    </tr>
<?php
    $fp = @opendir('/Applications/MAMP/htdocs/myphp') or exit('Server Busy v2');
    if ($fp){
        while ($row = readdir($fp)){
            echo '<tr>';
            echo "<td>{$row}</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo '</tr>';
        }
    }else{
        echo 'XX';
    }
    closedir($fp);
?>
</table>