<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <script>
       function showHint(str) {
           if (str.length == 0) {
               document.getElementById("txtHint").innerHTML = "";
               return;
           } else {
               var xmlhttp = new XMLHttpRequest();
                 xmlhttp.onreadystatechange = function() {
                     if (this.readyState == 4 && this.status == 200) {
                         document.getElementById("textHint").innerHTML=this.responseText;
                     }
                 }
            xmlhttp.open("GET" , "sub.php?q="+str, true;
            xmlhttp.send();
                
           }
       }
    
    </script>
    
</body>
</html>



Ajax는 나중에 독학하도록 하자.