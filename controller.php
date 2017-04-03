<?php

require './View/View.php';
$view = new View();
require './Model/Actor.php';
$actors = new Actor();

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

<?php echo $view->showActors($actors->getActors()) ?>

</body>
</html>
