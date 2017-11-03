<?php

//1.DB接続します
try{
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch (PDOException $e){
    exit('データベースに接続できませんでした。'.$e->getMessage());
}


//2.データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_10_table");
$status = $stmt->execute();


//3.データ表示
$view = "";
if($status==false){
    //execute(SQL実行時)にエラーがある場合
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);//配列index[2]にエラーコメントあり

}else{
    //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
      $view .='<div>';
      
      $view .= $result["client"];
      $view .='<br>';

      $view .= "納品月：".$result["delivery"];
      $view .='<br>';
      
      $view .= "詳細：".$result["naiyou"];
      $view .='<br>';

      $view .= "公開URL：".$result["url"];
      $view .='<br>';
      
      $view .= "CD：".$result["cd"];
      $view .='<br>';
      
      $view .= "Des：".$result["des"];
      $view .='</div>';
  }
}
//$Viewを表示したい場所でechoしましょう！

?>


    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>制作実績一覧</title>
        <link rel="stylesheet" href="css/range.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            div {
                padding: 10px;
                font-size: 16px;
            }

        </style>
    </head>

    <body id="main">
        <!--Head[Start]-->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        制作実績一覧
                    </div>
                </div>
            </nav>
        </header>
        <!--Head[End]-->

        <!--Main[Start]-->
        <div>
            <div class="container jumbotron">
                <?= $view ?>
            </div>
        </div>
        <!--Main[End]-->

        <a href="input_data.php">登録画面に戻る</a>

    </body>

    </html>
