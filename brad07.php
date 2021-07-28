<?php 
    $result = '';
    if (isset($_GET['x']) && isset($_GET['y'])){
        $x = $_GET['x']; $y = $_GET['y'];
        $result = $x + $y;
    }
?>
<meta charset="UTF-8" />
<script>
    function add(){}
</script>
<hr />
<form method="get">
    <input type="number" id="x" name="x" value="<?php echo $x?>" />
    <span>+</span>
    <input type="number" id="y" name="y" value="<?php echo $y?>" />
    <input type="button" onclick="add()" value="=(JS)" />
    <input type="submit" value="=(PHP)" />
    <span><?php echo $result; ?></span>
</form>