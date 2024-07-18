<?php
require __DIR__. '/m_db_connect.php';

$p_id = isset($_GET['p_id']) ? ($_GET['p_id']) : 0;

if (!empty($p_id)) {
  $p_id = "DELETE FROM `goods_list` WHERE p_id='$p_id'";
  $pdo->query($p_id);
}
header('Location: p_mainpage.php');
$come_from = "p_mainpage.php";
# 如果有 referer 的 url, 就使用 referer url
if (isset($_SERVER['HTTP_REFERER'])) {
  $come_from = $_SERVER['HTTP_REFERER'];
}