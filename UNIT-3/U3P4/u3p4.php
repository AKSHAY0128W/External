<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> The Page Covert The Entered String Into The Uppercase </title>
</head>

<body>

   <form action="" method="post" onkeyup="process()" id="frm">
	<select name="option_selector" onchange="demo()">
		<option value="1">ITem1</option>
		<option value="2">Item2</option>
		<option value="3">Item3</option>
		<option value="4">Item4</option>
	</select>
   </form>
   <p id="result"></p>
</body>

<script>
function demo() {
   let req = new XMLHttpRequest();
   req.onreadystatechange = function() {
      document.getElementById("result").innerHTML = this.responseText;
   };
   
   frm = document.getElementById("frm");
   fd = new FormData(frm);
   req.open("POST", "4.php");
   req.send(fd);
}
</script>

</html>
