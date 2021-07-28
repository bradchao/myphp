<?php 
    $result =  $op = '';
    if (isset($_GET['x']) && isset($_GET['y'])){
        $op = $_GET['op'];
        $x = $_GET['x']; $y = $_GET['y'];

        if ($op == 1){
            $result = $x + $y;
        }else if ($op == 2){
            $result = $x - $y;
        }else if ($op == 3){
            $result = $x * $y;
        }else if ($op == 4){
            $result = (int)($x / $y) . ' ...... ' . ($x % $y);
        }else{
            $result = "";
        }
    }
?>
<meta charset="UTF-8" />
<script>
    function add(){}
</script>
<hr />
<!-- %2B + , %2F / => URL編碼 -->
<form method="get">
    <input type="number" id="x" name="x" value="<?php echo $x?>" />
    <select name="op">
        <option value="1" <?php echo $op==1?'selected':''; ?>>+</option>
        <option value="2" <?php echo $op==2?'selected':''; ?>>-</option>
        <option value="3" <?php echo $op==3?'selected':''; ?>>x</option>
        <option value="4" <?php echo $op==4?'selected':''; ?>>/</option>
    </select>
    <input type="number" id="y" name="y" value="<?php echo $y?>" />
    <input type="button" onclick="add()" value="=(JS)" />
    <input type="submit" value="=(PHP)" />
    <span><?php echo $result; ?></span>
</form>