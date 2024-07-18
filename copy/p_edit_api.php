<?php


require __DIR__. '/m_db_connect.php';
header('Content-Type: application/json');

$target_dir = "uploads/";
$imageFileType = strtolower(pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION));

$fileName = uniqid() . "." . $imageFileType;

$output =[
  'success' => false,
  'bodyData' => $_POST,
  'code'=> 0,
  'newName'=> $fileName,
];


$p_id = isset($_POST['pId']) ? strval($_POST['pId']) : 0 ;

$newpic= isset($_FILES['avatar']['name']) ? strval($_FILES['avatar']['name']) : $_POST['old_avatar'] ;

if (empty($p_id)) {
  $output['code'] = 400;
  echo json_encode($output);
  exit;
}




$sql =" UPDATE `goods_list` SET

`p_name`=?,
`p_pic`=?,
`p_type`=?,
`p_price`=?,
`p_discount`=?,
`p_intro`=?,
`p_weight`=?,
`p_storage`=?,
`p_color`=?,
`p_loc`=?,
`p_breed`=?,
`p_process`=?,
`p_roast`=?,
`p_sale`=?,
`p_update`=NOW()
WHERE p_id =?";


  $stmt = $pdo ->prepare($sql);
  $stmt -> execute([
    $_POST['pName'],
    $newpic,
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
    $_POST['pRoast'],
    $_POST['pSale'],
    $p_id
  ]);
  $output['success']= !! $stmt->rowCount();
  echo json_encode($output);

