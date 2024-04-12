<?php 
$paragraph =$_GET['paragraph'];
$word= $_GET['word'];
$paragraphLength= strlen($paragraph);

$censoredString= str_replace($word , '***' , $paragraph);
$censoredStringLength= strlen($censoredString);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php  echo "$paragraph  $paragraphLength"?></h3>
    <h3><?php echo "$censoredString  $censoredStringLength"?></h3>

</body>
</html>