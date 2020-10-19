<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/css/style.css"/>
    <title>Employee Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&family=Piazzolla:wght@100&display=swap" rel="stylesheet">     
    
    <script>
      function validateusername(str){ 
        if(str.length>4){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {            
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("demo").innerHTML = this.responseText;
            }
          };
          var query = "validateuser.php?username="+str;
          xhttp.open("GET",query , true);
          xhttp.send();
        }
      }
    </script>
  </head>
<body>
<span id="demo"></span>