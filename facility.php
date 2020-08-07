<?php require_once './component/header.php'; ?>
<?php require_once './component/navi.php'; ?>
<div class="contents-body" style="max-width:1200px; margin:0 auto;border:1px solid #999; min-height:400px;">
<?php
    if($_REQUEST["sub"]=='facility02'){
        require_once './component/facility02.php';
    }else if($_REQUEST["sub"]=='facility03'){
        require_once './component/facility03.php';
    }else if($_REQUEST["sub"]=='facility04'){
        require_once './component/facility04.php';
    }else{
        require_once './component/facility01.php';
    }
?>
</div>
<?php require_once './component/footer.php';?>
