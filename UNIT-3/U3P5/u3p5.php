
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0    ">
    <title> The Fifth Program - PHP </title>
</head>

<body>
    <form id="myForm">
        <label for="Gender"> Gender : </label>
        <input type="radio" name="gender" value="Male" onchange="demo(this.value)"> Male </input>
        <input type="radio" name="gender" value="Female" onchange="demo(this.value)"> Female </input><br>
        <br> <br>
        <input type="checkbox" name="check[]" value="Item 1" onclick="demo(this.value)"> Item 1 </input>
        <input type="checkbox" name="check[]" value="Item 2" onclick="demo(this.value)"> Item 2 </input>
        <input type="checkbox" name="check[]" value="Item 3" onclick="demo(this.value)"> Item 3 </input>
        <input type="checkbox" name="check[]" value="Item 4" onclick="demo(this.value)"> Item 4 </input>
    </form>
    <p id="response"></p>
</body>

</html>
<script>
    function demo(str)
    {
        req = new XMLHttpRequest();
        req.onreadystatechange = function() {
            document.getElementById('response').innerHTML = this.responseText;
        }
        frm = document.getElementById('myForm');
        myForm = new FormData(frm);
        req.open("POST", "5.php");
        req.send(myForm);
    }
</script>
</body>

</html>