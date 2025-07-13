<?php
//共通に使う関数を記述
//XSS対策（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str,ENT_QUOTES);
}

//DB接続関数：db_conn() 

function db_conn() {
    try {


        // ここは非表示


        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}

//リダイレクト関数: redirect($file_name)
function redirect($file_name){

    header('Location: ' . $file_name);
    exit();
}