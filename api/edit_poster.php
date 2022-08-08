<?php
include_once "../base.php";

if(isset($_POST['id'])){
    foreach($_POST['id'] as $key => $id){
        //如果傳來的資料有del 而且id 在裡面  表示是要刪除的資料
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $Poster->del($id);
        }else{  //更新
            $row=$Poster->find($id);
            $row['name']=$_POST['name'][$key];
            $row['ani']=$_POST['ani'][$key];
            $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;

            $Poster->save($row);

        }



    }
}
to("../back.php?do=poster")
?>