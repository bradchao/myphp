<script>
    const xhttp = new XMLHttpRequest();
    var isCheckOK = false;

    function checkAccount(){
        isCheckOK = false;
        let account = document.getElementById('account').value;
        console.log("brad63.php?account=" + account);

        xhttp.onreadystatechange = afterCheck;
        xhttp.open("GET", "brad63.php?account=" + account);
        xhttp.send();
        console.log("check send");
    }

    function afterCheck(){
        if (this.readyState == 4 && this.status == 200) {
                mesg = xhttp.responseText.trim();
                document.getElementById("mesg").innerHTML =
                mesg;
                if (mesg == 0){
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
<form method="post" action="brad64.php" onsubmit="return checkForm();">
    Account: <input type="text" id='account' name="account" onblur="checkAccount()"/> 
    <span id='mesg'></span> <br />
    Password: <input type="password" name="passwd" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" value="Register" />
</form>
<hr />

