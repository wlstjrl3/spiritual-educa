<?php
$request_uri = $_SERVER['REQUEST_URI'];
?>
<div class="bg-secondary row no-gutters top-navi">
    <ul style="width:100%;">
        <li><a class="<?php if(substr($request_uri,0,15)=="/spiritual/intr"){echo 'bg-dark';}?> text-light" href="intro.php?sub=intro01"><p>영성교육원 소개</p></a></li>
        <li><a class="<?php if(substr($request_uri,0,15)=="/spiritual/prog"){echo 'bg-dark';}?> text-light" href="program.php?sub=program01"><p>교육/프로그램</p></a></li>
        <li><a class="<?php if(substr($request_uri,0,15)=="/spiritual/faci"){echo 'bg-dark';}?> text-light" href="facility.php?sub=facility01"><p>시설안내</p></a></li>
        <li><a class="<?php if(substr($request_uri,0,15)=="/spiritual/news"){echo 'bg-dark';}?> text-light"href="news.php?sub=news01"><p>소식</p></a></li>
    </ul>
</div>
<div class="row no-gutters sub-navi" style="<?php if(substr($request_uri,0,15)=="/spiritual/intr"){echo 'display:inline-block;width:100%;';}?>">
    <ul style="width:100%;">
        <li><a href="/spiritual/intro.php?sub=intro01"><p style="<?php if($_REQUEST['sub']=='intro01'){echo 'border-bottom:2px solid;color:#555;';}?>">인사말</p></a></li>
        <li><a href="/spiritual/intro.php?sub=intro02"><p style="<?php if($_REQUEST['sub']=='intro02'){echo 'border-bottom:2px solid;color:#555;';}?>">오시는 길</p></a></li>
        <li><a href="/spiritual/intro.php?sub=intro03"><p style="<?php if($_REQUEST['sub']=='intro03'){echo 'border-bottom:2px solid;color:#555;';}?>">테스트</p></a></li>
    </ul> 
</div>
<div class="row no-gutters sub-navi" style="<?php if(substr($request_uri,0,15)=="/spiritual/prog"){echo 'display:inline-block;width:100%;';}?>">
    <ul style="width:100%;">
        <li><a href="/spiritual/program.php?sub=program01"><p style="<?php if($_REQUEST['sub']=='program01'){echo 'border-bottom:2px solid;color:#555;';}?>">미사</p></a></li>
        <li><a href="/spiritual/program.php?sub=program02"><p style="<?php if($_REQUEST['sub']=='program02'){echo 'border-bottom:2px solid;color:#555;';}?>">피정</p></a></li>
        <li><a href="/spiritual/program.php?sub=program03"><p style="<?php if($_REQUEST['sub']=='program03'){echo 'border-bottom:2px solid;color:#555;';}?>">테스트</p></a></li>
    </ul> 
</div>
<div class="row no-gutters sub-navi" style="<?php if(substr($request_uri,0,15)=="/spiritual/faci"){echo 'display:inline-block;width:100%;';}?>">
    <ul style="width:100%;">
        <li><a href="/spiritual/facility.php?sub=facility01"><p style="<?php if($_REQUEST['sub']=='facility01'){echo 'border-bottom:2px solid;color:#555;';}?>">교육동</p></a></li>
        <li><a href="/spiritual/facility.php?sub=facility02"><p style="<?php if($_REQUEST['sub']=='facility02'){echo 'border-bottom:2px solid;color:#555;';}?>">숙소동</p></a></li>
        <li><a href="/spiritual/facility.php?sub=facility03"><p style="<?php if($_REQUEST['sub']=='facility03'){echo 'border-bottom:2px solid;color:#555;';}?>">기타시설</p></a></li>
        <li><a href="/spiritual/facility.php?sub=facility04"><p style="<?php if($_REQUEST['sub']=='facility04'){echo 'border-bottom:2px solid;color:#555;';}?>">대관규정 및 사용료</p></a></li>
    </ul> 
</div>
<div class="row no-gutters sub-navi" style="<?php if(substr($request_uri,0,15)=="/spiritual/news"){echo 'display:inline-block;width:100%;';}?>">
    <ul style="width:100%;">
        <li><a href="/spiritual/news.php?sub=news01"><p style="<?php if($_REQUEST['sub']=='news01'){echo 'border-bottom:2px solid;color:#555;';}?>">공지사항</p></a></li>
        <li><a href="/spiritual/news.php?sub=news02"><p style="<?php if($_REQUEST['sub']=='news02'){echo 'border-bottom:2px solid;color:#555;';}?>">자유게시판</p></a></li>
        <li><a href="/spiritual/news.php?sub=news03"><p style="<?php if($_REQUEST['sub']=='news03'){echo 'border-bottom:2px solid;color:#555;';}?>">테스트</p></a></li>
    </ul> 
</div>