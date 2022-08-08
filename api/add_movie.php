<?php 
include_once "../base.php";

//處理檔案
if(isset($_FILES['trailer']['tmp_name'])){
    $_POST['trailer']=$_FILES['trailer']['name'];
    move_uploaded_file($_FILES['trailer']['tmp_name'],'../upload/'.$_FILES['trailer']['name']);
}
if(isset($_FILES['poster']['tmp_name'])){

    $_POST['poster']=$_FILES['poster']['name'];
    move_uploaded_file($_FILES['poster']['tmp_name'],'../upload/'.$_FILES['poster']['name']);
}

//把三欄合成一欄
$_POST['ondate']=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
//把不用的三欄清除
unset($_POST['year'],$_POST['month'],$_POST['day']);
$_POST['sh']=1;
$_POST['rank']=$Movie->math('max','id')+1;

$Movie->save($_POST);

to("../back.php?do=movie");
?>