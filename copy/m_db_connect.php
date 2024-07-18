<?php
include __DIR__ . '/m_connect_settings.php';
#= require __DIR.'/connect-setting.php' 
$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";
$pdo_options = [
  
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);

// if (!isset($_SESSION)){
//   //如果尚未啟動session的功能，就啟動
//   session_start();
// }

$stmt = $pdo->query("SELECT* FROM goods_list LIMIT 3");

$theflavor = $pdo->query("SELECT
goods_list.p_id,
goods_list.p_name,
goods_list.p_pic,
goods_list.p_type,
goods_list.p_price,
goods_list.p_discount,
goods_list.p_intro,
goods_list.p_weight,
goods_list.p_storage,
goods_list.p_color,
goods_list.p_loc,
goods_list.p_breed,
goods_list.p_process,
goods_list.p_roast,
goods_list.p_sale,
goods_list.p_update,
GROUP_CONCAT(flavor_list.f_name SEPARATOR ', ') AS flavors
FROM
goods_list
JOIN coffee_mix_flavor ON goods_list.p_id = coffee_mix_flavor.p_id
JOIN flavor_list ON flavor_list.f_id = coffee_mix_flavor.f_id
GROUP BY
goods_list.p_id,
goods_list.p_name
ORDER BY 1;");
// $test = $pdo->query("SELECT* FROM goods_list WHERE p_roast LIKE '%中%'");

// #若有設PDO_options可在這調整要用什麼模式檢視ex.both/assoc/num
$row = $stmt->fetchall();
// $newrow= $test->fetchAll();