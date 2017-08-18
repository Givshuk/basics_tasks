<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
</head>
<body>
<br>
<br>
<form action ""  method="post">
<label>Новая категория</label>
<input type=text" name="name"><br>
<br>
<br>
<input type = "submit" name="send">
</form>
<br>
<br>
<form action ""  method="post">
<?
echo 'Выбрать Категорию <select name="cat">';
   foreach (getMenuItems('menu.txt') as $menuItem){
    echo '<option  value ='.$menuItem['id'].'>'.$menuItem['name'].'</option>';
    }
    echo '</select>';
?>
<br>
<br>
<label>Имя товара</label>
<input type=text" name="nametovar"><br>
<br>
<label>Описание </label>
<input type=text" name="descriptiontovar"><br>
<br>
<input type = "submit" name="subtovar">
</form>



</body>
