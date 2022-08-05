<?php
include "../base.php";
    if(isset($_FILES['img']['tmp_name'])){
        $poster['img']=$_FILES['img']['name'];
        //把暫存檔案移動到真正的資料夾
                            //從哪                      到          
        move_uploaded_file($_FILES['img']['tmp_name'],'../upload/'.$_FILES['img']['name']);
    }

    $poster['name']=$_POST['name'];
    $poster['sh']=1;
    $poster['ani']=rand(1,3);
    //排序  以id為準  都+1
    $poster['rank']=$Poster->math('max','id')+1;
    
    $Poster->save($poster);
    to("../back.php?do=poster");
    ?> 