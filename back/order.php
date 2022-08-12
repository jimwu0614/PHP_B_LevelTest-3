<style>
    .header> div,.row > div{
        /* width:14%; */
        width:calc(100% / 7);
        text-align: center;
    }
</style>

<h3 class="ct">訂單清單</h3>

<div class="header" style="display:flex;width:100%">
    <div>訂單編號</div>
    <div>電影名稱</div>
    <div>日期</div>
    <div>場次時間</div>
    <div>訂購數量</div>
    <div>訂購位置</div>
    <div>操作</div>
</div>
<div style="overflow:auto;height:450px">
    <?php
    $orders=$Order->all(' order by `no` desc');
    foreach($orders as $ord){
    ?>
    <div class="row" style="display:flex;align-items:center">
        <div><?=$ord['no'];?></div>
        <div><?=$ord['movie'];?></div>
        <div><?=$ord['date'];?></div>
        <div><?=$ord['session'];?></div>
        <div><?=$ord['qt'];?></div>
        <div><?php
            $seats=unserialize($ord['seats']);
            sort($seats);   //排序
            foreach($seats as $seat){
                echo   (floor(($seat/5))+1)."排";
                echo   (($seat%5)+1)."號";
                echo "<br>";
            }
        ?></div>
        <div>
            <button onclick="del('orders',<?=$ord['id'];?>)">刪除</button>
        </div>
    </div>
    <hr>
    <?php
    }
    ?>
</div>

<script>
    function del(table,id){
    $.post('./api/del.php',{table,id},(res)=>{
        console.log(res);
        location.reload();
    })
}

</script> 