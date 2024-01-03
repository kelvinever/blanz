<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label for="">paswword</label>
        <input type="text" name="password" placeholder="password"><br>
        <button type="submit">submit</button>
    </form>
  <?php  echo $name?>

  <form action="post">
  <input type="number" name="kel" placeholder="what your age">
  <input type="number" name="rkel" placeholder="your number">
  <input type="submit" name="real">
</form>
<?php
$name=null;
if(isset($_post['rkel'])){
    $name=$_post["kel"];
    $han=$_post["real"];
    $j=$l+$k;
   
}?>
<?php
echo $j;?c>

</body>
</html>
<?php
if(isset($_post['submit'])){
    $name=$_post['password'];
}
