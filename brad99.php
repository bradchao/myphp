<h1>九九乘法表</h1>
<hr />
<table border="1" width="100%">
    <?php
    define("ROW", 4);
    define("COL", 4);
    define("START", 2);

    for ($k = 0; $k < ROW; $k++) {
        echo '<tr>';
        for ($j = START; $j < START + COL; $j++) {
            $newj = $j + $k * COL;

            if (($j+$k) % 2 == 0){
                echo '<td bgcolor="yellow">';
            }else{
                echo '<td bgcolor="pink">';
            }
            
            for ($i = 1; $i <= 9; $i++) {
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br />\n";
            }
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>