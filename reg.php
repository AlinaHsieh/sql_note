<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
</head>
<body>
    <h1>會員註冊</h1>
    <form action="add_user.php" method="post">
        <p>
            <!-- label 的 for是對應id -->
            <label for="">姓名：</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="">帳號：</label>
            <input type="text" name="acc" id="acc">
        </p>
        <p>
            <label for="">密碼：</label>
            <input type="password" name="password" id="password">
        </p>
        <p>
            <label for="">電子郵件：</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label for="">電話：</label>
            <input type="text" name="tel" id="tel">
        </p>
        <p>
            <input type="submit" value="註冊">
            <!-- 重置不是清除，只是還原成原本的樣子(如果原本有內容就會還原成那個樣子) -->
            <input type="reset" value="重置">
        </p>


    </form>    


</body>
</html>