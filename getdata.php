<!--
/*
 * 微信小程序VR全景模块 v0.1
 *
 * 服务器端页面
 *
 *
 * 杭州幻镜科技 ©️2018
 * http://720ybf.com
 */
-->
<?php

$panoid = $_GET['id'];
$url='http://720ybf.com/partner/server.php?view='.$panoid;
$html = file_get_contents($url);
echo $html;


?>
