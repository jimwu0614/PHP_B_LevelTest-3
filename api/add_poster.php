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
    //動畫效果亂數
    $poster['ani']=rand(1,3);
    //排序  以id為準  都+1  因為會修改   所以不能直接用ID
    $poster['rank']=$Poster->math('max','id')+1;
    
    $Poster->save($poster);
    to("../back.php?do=poster");
    ?> 