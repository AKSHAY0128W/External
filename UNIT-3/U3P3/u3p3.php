<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> The Page Covert The Entered String Into The Uppercase </title>
</head>

<body>

   <form action="" method="post" onkeyup="process()" id="frm">
      <label for="Enter String"> Enter The String </label>
      <input type="text" id="input_string" name="input_string" placeholder="Enter The String">
      <br>
   </form>
   <p id="result"></p>
</body>

<script>
function process(x) {
   let fd = new FormData(document.getElementById("frm"));
   let req = new XMLHttpRequest();
   req.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200)
      {
         document.getElementById("result").innerHTML = this.responseText;
      }
   };
   req.open("POST", "convert.php");
   req.send(fd);
}
</script>

</html>
