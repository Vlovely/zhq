<?php
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

$news = array(
	array('title'=>'【人物】这可能是本游戏第一个100级','date'=>'2018-01-13'),
	array('title'=>'【趣闻】这个ID的运气怎么会差呢','date'=>'2018-01-04'),
	array('title'=>'【条漫】大王这次又闹幺蛾子了','date'=>'2018-01-05'),
	array('title'=>'【福利】年度资料片狂欢盛典，千万回馈送iPhone X','date'=>'2018-01-06'),
	array('title'=>'【官方首爆】一站浏览年度资料片“鹤鸣九霄”','date'=>'2016-03-24'),
	array('title'=>'【首爆】全新场景“缥缈洲”上线！','date'=>'2016-03-24'),
	array('title'=>'【福利】回馈新老玩家，史上最强年度旗舰福利！','date'=>'2016-03-24'),
	array('title'=>'【爆料】一站看懂资料片大更新！','date'=>'2016-03-24'),
	array('title'=>'【首爆】张一山VS阎煞：最强神之弃子苏醒','date'=>'2016-03-24'),
	array('title'=>'【福利】老玩家荣耀殿堂，内测消费100%返还','date'=>'2016-03-24'),
);

echo json_encode($news);
