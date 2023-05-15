<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=student";
$pdo = new PDO($dsn, 'root', '');
?>
<style>
    table {
        border-collapse: collapse;
        width: 70%;
        min-width: 800px;

    }

    td {
        border: 1px solid lightblue;
        padding: 5px 8px;
    }
</style>
<!-- 用php＋html刻出一個school資料庫的資料表格 (義大利麵條式寫法>php跟html穿插) -->
<h1>學生列表</h1>
<table>
    <tr>
        <td>序號</td>
        <td>學號</td>
        <td>班級座號</td>
        <td>姓名</td>
        <td>出生年月日</td>
        <td>身分證號碼</td>
        <td>住址</td>
        <td>家長</td>
        <td>電話</td>
        <td>科別</td>
        <td>畢業國中</td>
    </tr>

    <?php //用php抓資料，並使用迴圈print每一筆資料
        $sql="select * from students";//選擇students資料表的全部資料
        $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC); //因為fetch一次只拿一筆資料，太慢太麻煩，改下fetchAll指令
        foreach($rows as $row){ //把變數$rows裡面的每一筆資料都會指定給變數$row(本身也是陣列，透過FETCH_ASSOC取得帶有key的資料)
    ?>
    <tr>
        <!-- $row['']的key對應資料表的id -->
        <!-- 用$row不用$rows?因為加了迴圈 -->
        <td><?=$row['id'];?></td>
        <td><?=$row['uni_id'];?></td>
        <td><?=$row['seat_num'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['birthday'];?></td>
        <td><?=$row['national_id'];?></td>
        <td><?=$row['address'];?></td>
        <td><?=$row['parent'];?></td>
        <td><?=$row['telphone'];?></td>
        <td><?=$row['major'];?></td>
        <td><?=$row['secondary'];?></td>
    </tr>
    <?php
    }
    ?>

</table>