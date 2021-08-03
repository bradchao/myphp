
<?php
    date_default_timezone_set('Asia/Taipei');
?>
<table border="1" width="100%" />
    <tr>
        <th>Filename</th>
        <th>File or Dir</th>
        <th>size</th>
        <th>Modify Time</th>
    </tr>
<?php
    $dir = '.';
    $fp = @opendir($dir) or exit('Server Busy v2');
    if ($fp){
        while ($row = readdir($fp)){
            $mtime = date('Y-m-d H:i:s' ,filemtime("{$dir}/{$row}"));
            echo '<tr>';
            echo "<td>{$dir}/{$row}</td>";
            
            if (is_dir("{$dir}/{$row}")){
                echo "<td>Directory</td>";
            }else if (is_file("{$dir}/{$row}")){
                echo "<td>File</td>";
            }else{
                echo "<td></td>";
            }

            echo '<td align="right">' . filesize("{$dir}/{$row}"). ' bytes </td>';
            echo "<td>{$mtime}</td>";
            echo '</tr>';
        }
    }else{
        echo 'XX';
    }
    closedir($fp);
?>
</table>