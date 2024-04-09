
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> The Fifth Program - PHP </title>
</head>
<body>	
	<input type="email" id="email">
	<button onclick="validate()">validate</button>
	<p id="validationMessage"></p>
</body>
    <script>
        function validate() {
            var email = document.getElementById("email").value;
            var validationMessage = document.getElementById("validationMessage");
			var emailRegex = /^\S+@\S+\.\S+$/;
            if (!emailRegex.test(email)) {
                validationMessage.textContent = "enter valid email";
				validationMessage.style.color = "red";
            }
            else
			{
                validationMessage.textContent = "email validate";
				validationMessage.style.color = "green";
            }
        }
		
		/^\S+@\S+\.\S+$/
    </script>
</body>

</html>