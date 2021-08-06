<script>
    const xhttp = new XMLHttpRequest();

    function checkAccount(){
        var account = document.getElementById('account').value;
        xhttp.onreadystatechange = afterCheck;
        xhttp.open("GET", "checkAccount.php?account=" + account);
        xhttp.send();
    }
</script>
Register Form
<hr />
<form method="post" action="newAccount.php" onsubmit="return checkForm();">
    Account: <input type="text" id='account' name="account" onblur="checkAccount()"/> 
    <span id='mesg'></span> <br />
    Password: <input type="password" name="passwd" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" value="Register" />
</form>
<hr />