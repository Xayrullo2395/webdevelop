<html>
<head>
     <title>Document</title>
</head>
<body>
    <h1>Hello </h1>
 <form action="index.php" method="get">

 Name:<input type ="text" name = "name"><br>
<input type="submit" name="ok"><br><br>

Age: <input type="text" name="age"><br>
<input type="submit" name="ok">

</form>
<?php echo $_GIT["age"]; ?>
</body>
</html>