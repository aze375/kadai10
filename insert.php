<?php
//入力チェック(受信確認処理追加)
if(
    !isset($_POST["client"]) || $_POST["client"]=="" ||
    !isset($_POST["category"]) || $_POST["category"]=="" ||
    !isset($_POST["delivery"]) || $_POST["delivery"]=="" ||
    !isset($_POST["naiyou"]) || $_POST["naiyou"]=="" ||
    !isset($_POST["url"]) || $_POST["url"]=="" ||
    !isset($_POST["productioncompany"]) || $_POST["productioncompany"]=="" ||
    !isset($_POST["pm"]) || $_POST["pm"]=="" ||
    !isset($_POST["pl"]) || $_POST["pl"]=="" ||
    !isset($_POST["cd"]) || $_POST["cd"]=="" ||
    !isset($_POST["ad"]) || $_POST["ad"]=="" ||
    !isset($_POST["cw"]) || $_POST["cw"]=="" ||
    !isset($_POST["des"]) || $_POST["des"]=="" ||
    !isset($_POST["comment"]) || $_POST["comment"]==""
){
    exit('ParamError');
}
//まだ何も送られていない場合にエラーを表示をしない記述。
//POSTがSETされて無くて空っぽだったらexit('ParamError')を実行。


//1.POSTデータ取得
$client = $_POST["client"];
$category = $_POST["category"];
$delivery = $_POST["delivery"];
$naiyou = $_POST["naiyou"];
$url = $_POST["url"];
$productioncompany = $_POST["productioncompany"];
$pm = $_POST["pm"];
$pl = $_POST["pl"];
$cd = $_POST["cd"];
$ad = $_POST["ad"];
$cw = $_POST["cw"];
$des = $_POST["des"];
$comment = $_POST["comment"];


//2.DB接続します(エラー処理追加)
try{
  $pdo=new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
    exit('DbConnectError:'.$e->getMessage());
}
//データベース接続時はこのまま使う。
//PDOを実行するのは以下の一文
//$pdo=new PDO('SQLの種類:dbname=DB名;charset=utf8;host=IPアドレス','ID','PW');
//それ以外はエラーを取得するための記述。これがないとエラーがわからない。


//3.データ登録SQL作成
$sql="INSERT INTO gs_10_table(id, client, category, delivery, naiyou, url, productioncompany, pm, pl, cd, ad, cw, des, comment, indate )
VALUES(NULL, :a1, :a2, :a3, :a4, :a5, :a6, :a7, :a8, :a9, :a10, :a11, :a12, :a13, sysdate())";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':a1', $client, PDO::PARAM_STR);  
//Integer(文字列の場合 PDO::PARAM_STR 数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $category, PDO::PARAM_STR);
$stmt->bindValue(':a3', $delivery, PDO::PARAM_STR);
$stmt->bindValue(':a4', $naiyou, PDO::PARAM_STR);
$stmt->bindValue(':a5', $url, PDO::PARAM_STR);
$stmt->bindValue(':a6', $productioncompany, PDO::PARAM_STR);
$stmt->bindValue(':a7', $pm, PDO::PARAM_STR);
$stmt->bindValue(':a8', $pl, PDO::PARAM_STR);
$stmt->bindValue(':a9', $cd, PDO::PARAM_STR);
$stmt->bindValue(':a10', $ad, PDO::PARAM_STR);
$stmt->bindValue(':a11', $cw, PDO::PARAM_STR);
$stmt->bindValue(':a12', $des, PDO::PARAM_STR);
$stmt->bindValue(':a13', $comment, PDO::PARAM_STR);

//SQL実行
$status = $stmt->execute();


//4.データ登録処理
if($status==false){
    //SQL実行時にエラーがある場合(エラーオブジェクト取得して表示)
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
    
}else{
 //5.入力画面へのリダイレクト
  header("Location: input_data.php");
  exit;
}

//実行した結果、エラーがあれば処理を止めて、その内容を表示する。
//$error[2]に読める文字列が入るらしい。
//エラーがなければ指示の場所に戻る(この場合はindex.php)
//:の後ろに半角スペースがないとエラーになるので注意。



//最初は全文コピペして必要なところだけ変更するのが良い
?>