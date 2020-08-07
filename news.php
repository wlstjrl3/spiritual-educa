<?php require_once './component/header.php'; ?>
<?php require_once './component/navi.php'; ?>
<div class="contents-body" style="max-width:1200px; margin:0 auto;border:1px solid #999; min-height:400px;">
<?php
    if($_REQUEST["sub"]=='news02'){
        require_once './component/news02.php';
    }else if($_REQUEST["sub"]=='news03'){
        require_once './component/news03.php';
    }else{
        require_once './component/news01.php';
    }
?>
</div>
<?php require_once './component/footer.php';?>