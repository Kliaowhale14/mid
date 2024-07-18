<?php

require __DIR__. '/m_db_connect.php';
header('Content-Type: application/json');

$output =[
  'success' => false,
  'bodyData' => $_POST,
  'code'=> 0,
];

$sql = "INSERT INTO `goods_list`(
`p_id`, `p_name`, `p_pic`, `p_type`, `p_price`,
`p_discount`, `p_intro`, `p_weight`, `p_storage`,`p_color`,
`p_loc`, `p_breed`, `p_process`, `p_roast`, `p_flavor`,
`p_sale`, `p_update`) VALUES (
?,?,?,?,?,
?,?,?,?,?,
?,?,?,?,?,?,NOW()
)";

$doublename="SELECT p_id FROM goods_list" ;

  $stmt = $pdo ->prepare($sql);
  $stmt -> execute([
    $_POST['pId'],
    $_POST['pName'],
    $_POST['pPic'],
    $_POST['pType'],
    $_POST['pPrice'],
    $_POST['pDiscount'],
    $_POST['pIntro'],
    $_POST['pWeight'],
    $_POST['pStorage'],
    $_POST['pColor'],
    $_POST['pLoc'],
    $_POST['pBreed'],
    $_POST['pProcess'],
    $_POST['pFla'],
    $_POST['pRoast'],
    $_POST['pSale']
  ]);

  $output['success'] = !!$stmt->rowCount();
  echo json_encode($output);