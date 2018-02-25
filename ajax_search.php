<?php
session_start();

//0.外部ファイル読み込み
include("functions.php");


    
//POST
if(!isset($_POST["search"]) && $_POST["search"]==""){
    $s = "";
}else{
    $s = $_POST["search"];
}

//1.  DB接続します
$pdo = db_con();

//２．データ登録SQL作成
if($s!=""){
    $stmt = $pdo->prepare("SELECT * FROM gs_code_table WHERE subject LIKE :s");
    $stmt->bindValue(":s", "%".$s."%", PDO::PARAM_STR);
}else{
    $stmt = $pdo->prepare("SELECT * FROM gs_code_table"); 
}
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
    echo "false";
}else{
    //Selectデータの数だけ自動でループしてくれる
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        // $view .= '<p>';
        // $view .= '<a href="detail.php?id='.$result["id"].'">';
        // $view .= h($result["name"])."[".h($result["indate"])."]";
        // $view .= '</a>　';
        // $view .= '<a href="delete.php?id='.$result["id"].'">';
        // $view .= '[削除]';
        // $view .= '</a>';
        // $view .= '</p>';
    $view .='<ul>';
    $view .= "<li>".$result["date"]."</li>"; 
    $view .= '<li><a href="detail.php?id='.$result["id"].'">'.$result["name"]."</a></li>";
    $view .= "<li>".$result["spec"]."</li>";
    $view .= "<li>".$result["subject"]."</li>";
    $view .= '<li id='.'$result["id"]'.'>'.$result["source"]."</li>";
    $view .= '<li><a href="'.$result["link"].'">'.$result["link"].'</a></li>';
    
    //  $view .= "<li>".$result["link"]."</li>";
    $view .='<button> <a href="delete.php?id='.$result["id"].'">'.'<img src="trash.jpeg" alt="">'.'</a></button>';
    // $view .='<button>'.'Copy'.'</button>';
    $view .='</ul>';
    }
    echo $view;
}


?>
