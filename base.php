
<?php
session_start();
date_default_timezone_set("Asia/Taipei");


function dd($array){
echo "<pre>";
print_r($array);
echo "</pre>";
}


function to($url){
    header("location:$url");
}
class DB{

protected $dsn = "mysql:host=localhost;charset=utf8;dbname=b_quiz_3";
protected $user = "root";
protected $pw = "";
protected $table;
protected $pdo;

function __construct($table)
{
    $this->table=$table;
    $this->pdo=new PDO($this->dsn,$this->user,$this->pw);
}

function all(...$arg){
    $sql = "SELECT * FROM $this->table ";
    if (isset($arg[0])) {
        if (is_array($arg[0])) {
            foreach ($arg[0] as $key => $value) {
                $tmp[]= "`$key` = '$value'";
            }
            $sql.=" WHERE ".join(" AND ",$tmp);
        }else{
            $sql.=$arg[0];
        }
    }

    if (isset($arg[1])) {
        $sql.=$arg[1];
    }

    // echo $sql;
    return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

}

function find($id){
    $sql = "SELECT * FROM $this->table WHERE ";

        if (is_array($id)) {
            foreach ($id as $key => $value) {
                $tmp[]= "`$key` = '$value'";
            }
            $sql.=join(" AND ",$tmp);
        }else{
            $sql.="`id` =".$id;
        }


    echo $sql;
    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

}

function del($id){
    $sql = "DELETE FROM $this->table ";

        if (is_array($id)) {
            foreach ($id as $key => $value) {
                $tmp[]= "`$key` = '$value'";
            }
            $sql.=" WHERE ".join(" AND ",$tmp);
        }else{
            $sql.=$id;
        }


    echo $sql;
    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

}

function save($array){

    if (isset($array['id'])) {

            foreach ($array as $key => $value) {
                $tmp[]= "`$key` = '$value'";
            }
            
            //UPDATE `b_quiz_1_title` SET `text` = 'hgffyukykjkh01', `sh` = '01' WHERE `b_quiz_1_title`.`id` = 11
            $sql="UPDATE $this->table SET ".join(", ",$tmp)." WHERE `id` = ".$array['id'];
        }else{

            // INSERT INTO `users` (`id`, `acc`, `pw`) VALUES (NULL, '123', '321')
            $key = join("`, `",array_keys($array));
            $value = join("', '",$array);
            $sql = "INSERT INTO `$this->table` (`$key`) VALUES ('$value')";
        }
            // echo $sql;
    return $this->pdo->exec($sql);
    }





function math($math,$col,...$arg){
    $sql = "SELECT $math($col) FROM $this->table ";
    if (isset($arg[0])) {
        if (is_array($arg[0])) {
            foreach ($arg[0] as $key => $value) {
                $tmp[]= "`$key` = '$value'";
            }
            
            $sql.=" WHERE ".join(" AND ",$tmp);
        }else{
            $sql.=$arg[0];
        }
    }

    if (isset($arg[1])) {
        $sql.=$arg[1];
    }

    // echo $sql;
    return $this->pdo->query($sql)->fetchColumn();
}



}


$Poster = new DB('poster');
// $add = $User->math("count","acc");
// dd($add);
$Movie=new DB('movie');


?>