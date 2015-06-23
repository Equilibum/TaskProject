<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <title>Document</title>
</head>
<body>
<?php
if(file_exists($name)){
    include_once $name;
}else{
    echo 'Wrong view';
}
?>

</body>
</html>