<div style="height:300px;">
<div class="ct">預告片清單</div>

<div style="width:100%;display:flex;justify-content:space-between">
    <div style="width:24.6%;text-align:center;background:#eee">預告片海報</div>
    <div style="width:24.6%;text-align:center;background:#eee">預告片片名</div>
    <div style="width:24.6%;text-align:center;background:#eee">預告片排序</div>
    <div style="width:24.6%;text-align:center;background:#eee">操作</div>
</div>
<form action="./api/edit_poster.php" method="post">


<div style="width:100%;height:210px;overflow:auto">
<?php
$rows=$Poster->all(" order by rank");
foreach($rows as $row){
?>
<div style="width:100%;display:flex;justify-content:space-between;margin:2px 0">
    <div style="width:24.6%" class="ct">
        <img src="./upload/<?=$row['img'];?>" style="height:70px;">
    </div>
    <div style="width:24.6%" class="ct"><input type="text" name="name[]" value="<?=$row['name'];?>"></div>
    <div style="width:24.6%" class="ct">
        <button type="button">往上</button>
        <button type="button">往下</button>

        <!-- 跟edit 16行搭配 -->
        <!-- <input type="number" name="num[]" value="<  =$row['rank'];?>"> -->
    </div>
    <div style="width:24.6%" class="ct">
                                                                        <!-- 從資料庫抓 若1就預設打勾  下面SELECTED比照辦理 -->
        <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>> 顯示
        <input type="checkbox" name="del[]" value="<?=$row['id'];?>"> 刪除
        <select name="ani[]">
            <option value="1" <?=($row['ani']==1)?'selected':'';?>>淡入淡出</option>
            <option value="2" <?=($row['ani']==2)?'selected':'';?>>滑入滑出</option>
            <option value="3" <?=($row['ani']==3)?'selected':'';?>>縮放</option>
        </select>
        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
    </div>
</div>

<?php  
}

?>
</div>
<div style="width:100%;" class="ct">
<input type="submit" value="編輯確定"><input type="reset" value="重置">
</div>
</form>


</div>



<hr>
<div style="height:180px;">
<div class="ct">新增預告片海報</div>
                                                    <!-- 檔案上傳一定要加的參數 -->
<form action="./api/add_poster.php" method="post" enctype="multipart/form-data">
<table style="width:80%;margin:auto">
    <tr>
        <td>預告片海報</td>
        <td><input type="file" name="img" id=""></td>
        <td>預告片片名</td>
        <td><input type="text" name="name" id=""></td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
</div>
</form>
</div> 