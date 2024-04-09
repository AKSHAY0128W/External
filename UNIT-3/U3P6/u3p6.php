
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> The Fifth Program - PHP </title>
</head>
<body>	
	<input type="text" id="input">
	<button onclick="validate()">validate</button>
	<p id="validationMessage"></p>
</body>
    <script>
        function validate() {
            var input = document.getElementById("input").value;
            var validationMessage = document.getElementById("validationMessage");
            if (input === "") {
                validationMessage.textContent = "Field cannot be blank";
                return;
            }
            if (input.length < 5) {
                validationMessage.textContent = "Field must be at least 5 characters long";
                return;
            }
            validationMessage.textContent = "Validation successful";
        }
    </script>
</body>

</html>