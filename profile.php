<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <form>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200">
    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name']?></h2>
    <a href="#"><? $_SESSION['user']['email']?></a>
    <a href="vender/logout.php" class="logout">Выход</a>  
  </form>
    
</body>
</html>