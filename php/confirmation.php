<?php 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ確認</title>
</head>
<body>
    <div class="confimation">
        <h2>お問い合わせ内容</h2>

        <form action="mailto.php" method="POST"> 
            <table border="1">
                <tr>
                    <td>名前</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>メッセージ</td>
                    <td><?php echo $message; ?></td>
                </tr>
            </table>

            <input type="submit" value="送信" />
        </form>
    </div><!-- /.confimation -->
</body>
</html>