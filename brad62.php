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

    function test1(){
        console.log("OK1");
    }
    function test2(){
        console.log("OK2");
        return true;
    }

</script>

Register Form
<hr />
<form method="post" action="brad63.php" onsubmit="return test2();">
    Account: <input type="text" name="account" onblur="test1()"/><br />
    Password: <input type="password" name="passwd" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" value="Register" />
</form>
<hr />

