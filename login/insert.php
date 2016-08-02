<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["email"]) || $_POST["email"]=="" ||
  !isset($_POST["pass"]) || $_POST["pass"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得(okであればうけとる)
$name   = $_POST["name"];
$email  = $_POST["email"];
$pass   = $_POST["pass"];

//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=mystylist;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO user_login(id, name, email, pass,
indate )VALUES(NULL, :a1, :a2, :a3, sysdate())");
$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $email);
$stmt->bindValue(':a3', $pass);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: ../index.php");
  exit;
}
?>