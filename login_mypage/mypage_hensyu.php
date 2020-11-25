<?php
mb_internal_encoding("utf8");
session_start();

if (!($_POST['form_mypage']> 0 && $_POST['form_mypage'] < 11)) {
    header ('Location: login_error.php');
}

?>

<!DOCTYPE html>

<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    
    <body>
        
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="log_out.php">ログアウト</a></div>
        </header>
        
        <main>
        
            <form action="mypage_update.php" method="post">

            <h2>会員情報</h2>
            
            <p>こんにちは！<?php echo $_SESSION['name']; ?>さん</p>
            
            <div class=row><img src="<?PHP echo $_SESSION['picture']; ?>"></div>
            
            <div class="row">
                    <p>氏名：<input type="text" size="35" name="name" value="<?php echo $_SESSION['name']; ?>"></p>
                    <p>メール：<input type="text" size="35" name="mail" value="<?php echo $_SESSION['mail']; ?>"></p>
                    <p>パスワード：<input type="text" size="35" name="password" value="<?php echo $_SESSION['password']; ?>"></p>
            </div>
            
            <div id="border"></div>
            
            <!--<p><?php echo $_POST['comments']; ?></p>-->
            <p id="comment"><textarea cols="35" name="comments" value="<?php echo $_SESSION['comments'] ?>"><?php echo $_SESSION['comments']; ?></textarea></p>
            
            <input type="submit" class="button" size="35" value="この内容に変更する">
            
            </form>

        </main>
        
        <footer>
            © 2018 InterNous.inc. All rights reserved
        </footer>
        
    </body>

</html>
