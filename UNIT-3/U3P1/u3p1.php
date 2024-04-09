<html>

<head>
</head>

<body>
   Enter the name <input type="text" onkeyup="pro(this.value)" name="name">
   <div id="res">
   </div>
   <script>
      function pro(x) {
         req = new XMLHttpRequest();
         req.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               document.getElementById("res").innerHTML = this.responseText;
            }
         };
         req.open("GET", "ajax1.php?name=" + x);
         req.send();
      }
   </script>
</body>

</html>