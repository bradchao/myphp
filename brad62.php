<script>
    const xhttp = new XMLHttpRequest();

    function test(){
        xhttp.onreadystatechange = callback;
        xhttp.open("GET", "ajax.php");
        xhttp.send();
    }

    function callback(){
        if (this.readyState == 4 && this.status == 200) {
                document.getElementById("here").innerHTML =
                xhttp.responseText;
        }
    }

    function checkAccount(){
        let account = document.getElementById('account').value;
        console.log("brad63.php?account=" + account);

        xhttp.onreadystatechange = afterCheck;
        xhttp.open("GET", "brad63.php?account=" + account);
        xhttp.send();
    }

    function afterCheck(){
        if (this.readyState == 4 && this.status == 200) {
                document.getElementById("mesg").innerHTML =
                xhttp.responseText;
        }
    }

    function test2(){
        return true;
    }

</script>

Register Form
<hr />
<form method="post" action="brad64.php" onsubmit="return test2();">
    Account: <input type="text" id='account' name="account" onblur="checkAccount()"/> 
    <span id='mesg'></span> <br />
    Password: <input type="password" name="passwd" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" value="Register" />
</form>
<hr />

