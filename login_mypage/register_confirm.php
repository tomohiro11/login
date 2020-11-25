<?php

mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];
$original_pic_name = $_FILES['picture']['name'];
$path_filename ='./image/'.$original_pic_name;

move_uploaded_file($temp_pic_name, './image/'.$original_pic_name);

?>

<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>
    
    <body>
        
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        
        <main>
            <form action="register_insert.php" method="post">
            <h2>会員登録 確認</h2>
            
            <p style="{text-align: center;}">こちらの内容で登録しても宜しいでしょうか？</p>
            
            <p class="left">氏名：<?php echo $_POST['name']; ?></p>
            <p class="left">メール：<?php echo $_POST['mail']; ?></p>
            <p class="left">パスワード：<?php echo $_POST['password']; ?></p>
            <p class="left">プロフィール写真：<?php echo $original_pic_name; ?></p>
            <p class="left">コメント：<?php echo $_POST['comments'] ?></p>
            
            <div id="buttons">
                <a href="register.php" class="button" id="back">戻って修正する</a>
                <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
                <input type="hidden" name="mail" value="<?php echo $_POST['mail']; ?>">
                <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">
                <input type="hidden" name="picture" value="<?php echo $path_filename; ?>">
                <input type="hidden" name="comments" value="<?php echo $_POST['comments'] ?>">
                <input type="submit" class="button" size="35" value="登録する">
            </div>
            </form>
        </main>
        
        <footer>
            © 2018 InterNous.inc. All rights reserved
        </footer>
        
    </body>

</html>
