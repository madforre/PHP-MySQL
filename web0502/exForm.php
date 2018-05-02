<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    form{
        border : 5px solid #aaa;
        width : 300px;
        height : 200px;
        padding : 30px;
        box-sizing: border-box;        
    }
    form input.button{
        display: block;        
        width : 100px;
        height : 30px;
        margin : 0 auto;
        margin-top : 20px;
        background: #;
    }
    
</style>
<body>
   <form action="insert.php" method="POST">
      <label for="last_name"> 성 :　  </label><input type="text" name="last_name"><br>
      <label for="first_name"> 이름 :  </label><input type="text" name="first_name"><br>
      <label for="age"> 나이 :  </label><input type="text" name="age"><br>
      <input type="submit" value="전송" class="button">
   </form>
</body>
</html>