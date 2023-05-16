<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=coffee";
$pdo=new PDO($dsn,'root',);

$acc=$_POST['acc'];     //之後會碰到做資料清洗的動作，去掉特殊符號避免破壞資料庫(資料隱碼)
$pw=$_POST['pw'];
//早期做法會比對使用者輸入的帳密&資料庫端的，進行驗證$acc==$user['acc'] && $pw==$user['password']
//但此做法會讓帳密有暴露的風險。
//因此比較好的做法是使用者輸入帳密時，到資料庫比對"是否有此筆資料"，若有，會有1筆存在，若無則為0(不存在於資料庫)。
$sql="select count(*) from `members` where `acc`='$acc' && `password`= '$pw' "; //用count數1或0來看資料是否存在
echo $sql;
$check=$pdo->query($sql)->fetchColumn(); //取得第一筆的資料
echo $check;
if($check>0){
    echo "登入成功";
    header("location:index.html");
}else{
    echo "帳號或密碼錯誤，登入失敗!";
    header("location:login_form.php?error=1"); //導到login_form並帶error的值;error=數字，數字可以設定顯示不同的登入失敗
}