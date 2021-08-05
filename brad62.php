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

    // function test0(){
    //     setInterval(test, 1000);
    // }

</script>

Register Form
<hr />
<form method="post" action="brad62.php">
    Account: <input type="text" name="account" /><br />
    Password: <input type="password" name="passwd" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" value="Register" />
</form>
<hr />
<div id='lottery'></div>
<input type="button" value="test" onclick="test()" /><br />
<div id='here'></div>

