<?php
    if (!isset($_GET['id'])) return;

    include('bradsql.php');
    $id = $_GET['id'];

    $sql = "SELECT * FROM member WHERE id = {$id}";
    $result = $mysqli->query($sql);
    //echo $result->num_rows;
    $member = $result->fetch_object();

    $icon = base64_encode($member->icon); 
?>
<form >
    Account: <input type="text" id='account' value="<?php echo $member->account;?>"/><br /> 
    Email: <input type="text" name="email"  value="<?php echo $member->email;?>"/><br />
    Birthday: <input type="date" name="birthday" value="<?php echo $member->birthday;?>"/><br />
    Like:<br /> 
    <input type="checkbox" name="like[]" value="1" <?php echo strpos($member->habby,'1')===false?'':'checked' ?>>111
    <input type="checkbox" name="like[]" value="2" <?php echo strpos($member->habby,'2')===false?'':'checked' ?>>222
    <input type="checkbox" name="like[]" value="3" <?php echo strpos($member->habby,'3')===false?'':'checked' ?>>333<br />
    <input type="checkbox" name="like[]" value="4" <?php echo strpos($member->habby,'4')===false?'':'checked' ?>>444
    <input type="checkbox" name="like[]" value="5" <?php echo strpos($member->habby,'5')===false?'':'checked' ?>>555
    <input type="checkbox" name="like[]" value="6" <?php echo strpos($member->habby,'6')===false?'':'checked' ?>>666<br />

    <img src="data:image/jpeg;base64, <?php echo $icon; ?>" />

</form>