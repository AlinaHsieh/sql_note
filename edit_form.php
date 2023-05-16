<?php
// echo $_GET['id'];
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');
$sql="select * from `students` where `id` = '{$_GET['id']}'"; //從資料庫選一筆id為GET拿到的資料。因為有中括號，要用大括號包起來，轉成字串
$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC); //從資料庫取一筆欄位名稱資料

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯學生資料</title>
</head>
<body>
<form action="edit.php" method="post">
    
<!-- 用$row['']把從資料庫拿到的某筆id資料的內容，對應欄位顯示在表單上 -->
<div>
    <label for="">學號</label>
    <input type="text" name="uni_id" value="<?=$row['uni_id'];?>">
</div>
<div>
    <label for="">班級座號</label>
    <input type="text" name="seat_num" value="<?=$row['seat_num'];?>">
</div>
<div>
    <label for="">姓名</label>
    <input type="text" name="name" value="<?=$row['name'];?>">
</div>
<div>
    <label for="">出生年月日</label>
    <input type="text" name="birthday" value="<?=$row['birthday'];?>">
</div>
<div>
    <label for="">身份證號碼</label>
    <input type="text" name="national_id" value="<?=$row['national_id'];?>">
</div>
<div>
    <label for="">住址</label>
    <input type="text" name="address" value="<?=$row['address'];?>">
</div>
<div>
    <label for="">家長</label>
    <input type="text" name="parent" value="<?=$row['parent'];?>">
</div>
<div>
    <label for="">電話</label>
    <input type="text" name="telphone" value="<?=$row['telphone'];?>">
</div>
<div>
    <label for="">科別</label>
    <input type="text" name="major" value="<?=$row['major'];?>">
</div>
<div>
    <label for="">畢業國中</label>
    <input type="text" name="secondary" value="<?=$row['secondary'];?>">
</div>

<div>
    <!-- 用隱藏欄位的方式將該筆欄位的id值帶到後端 edit.php ,讓$sql語法“where `id`='{$_POST['id']}'”收得到id值-->
    <input type="hidden" name="id" value="<?=$row['id'];?>"> 
    <input type="submit" value="編輯"><input type="reset" value="重設"> 
</div>


</form>
</body>
</html>