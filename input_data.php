<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ポートフォリオ</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }

    </style>
</head>

<body>

    <!--Head[Start]
   <header>
       <nav class="navbar navbar-default">
           <div class="container-fluid">
               <div class="navbar-header"></div>
           </div>
       </nav>
   </header>
    Head[End]-->

    <!--Main[Start]-->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>制作実績を登録する</legend>
                <label>クライアント名：<input type="text" name="client"></label><br>
                <label>業種：<input type="text" name="category"></label><br>
                <label>納品月：<input type="text" name="delivery"></label><br>
                <label>制作内容：<input type="text" name="naiyou"></label><br>
                <label>URL：<input type="text" name="url"></label><br>
                <label>制作会社：<input type="text" name="productioncompany"></label><br>
                <label>PM：<input type="text" name="pm"></label><br>
                <label>Pl：<input type="text" name="pl"></label><br>
                <label>CD：<input type="text" name="cd"></label><br>
                <label>AD：<input type="text" name="ad"></label><br>
                <label>CW：<input type="text" name="cw"></label><br>
                <label>Des：<input type="text" name="des"></label><br>
                <label>その他コメント：<input type="text" name="comment"></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!--Main[End]-->
    <a href="output_date.php">登録一覧へ</a>

</body>

</html>
