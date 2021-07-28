<?php 
        $x = $_GET['x']; $y = $_GET['y'];
        $result = $x + $y;
        //echo "{$x} + {$y} = {$result}";
?>
<meta charset="UTF-8" />
<script>
    function add(){}
</script>
<hr />
<form method="get">
    <input type="number" id="x" name="x"/>
    <span>+</span>
    <input type="number" id="y" name="y"/>
    <input type="button" onclick="add()" value="=(JS)" />
    <input type="submit" value="=(PHP)" />
    <span><?php echo $result; ?></span>
</form>