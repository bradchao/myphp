<script>
    const xhttp = new XMLHttpRequest();
    var isCheckOK = false;
    function checkAccount(){
        isCheckOK = false;
        let account = document.getElementById('account').value;
        
        xhttp.onreadystatechange = afterCheck;
        xhttp.open("GET", "checkAccount.php?account=" + account);
        xhttp.send();
    }

    // callback 回呼機制 => 不是我們去呼叫執行的方法
    function afterCheck(){
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText);
            mesg = xhttp.responseText.trim();
            document.getElementById("mesg").innerHTML =
            mesg;
            if (mesg.length == 0){
                isCheckOK = true;
            }
            console.log("check back:" + mesg.length);
        }
    }
    function checkForm(){
        console.log("checkForm..." + isCheckOK);
        return isCheckOK;
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