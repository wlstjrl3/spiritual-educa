<?php require_once './component/header.php'; ?>
<?php require_once './component/navi.php'; ?>
<div class="contents-body" style="max-width:1200px; margin:0 auto;border:1px solid #999; min-height:400px;">
<?php
    if($_REQUEST["sub"]=='intro02'){
        require_once './component/intro02.php';
    }else if($_REQUEST["sub"]=='intro03'){
        require_once './component/intro03.php';
    }else{
        require_once './component/intro01.php';
    }
?>
</div>
<?php require_once './component/footer.php';?>