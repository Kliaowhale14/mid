<?php
require __DIR__ . '/m_db_connect.php';


$target_dir = "uploads/";
$output = [
    'success' => false,
    'bodyData' => $_POST,
    'code' => 0,
];


if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
    $imageFileType = strtolower(pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION));


    // Check file size
    if ($_FILES["avatar"]["size"] > 500000) {
        $output['message'] = "Sorry, your file is too large.";
        $uploadOk = 0;
    }


    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $output['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }


    // Generate a unique file name to prevent overwrites
    $fileName = uniqid() . "." . $imageFileType;
    $targetFile = $target_dir . $fileName;


    // Create upload directory if it doesn't exist
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }else{}


    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
        // Insert file path into database
        $sql = "INSERT INTO `goods_list` (
            `p_id`, `p_name`, `p_pic`, `p_type`, `p_price`,
            `p_discount`, `p_intro`, `p_weight`, `p_storage`, `p_color`,
            `p_loc`, `p_breed`, `p_process`, `p_roast`, `p_flavor`,
            `p_sale`, `p_update`
        ) VALUES (
            ?,?,?,?,?,
            ?,?,?,?,?,
            ?,?,?,?,?,?, NOW()
        )";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $_POST['pId'],
            $_POST['pName'],
            $fileName, // Store the file name
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


        $output['success'] = true;
        $output['message'] = "The file " . htmlspecialchars($fileName) . " has been uploaded.";
    } else {
        $output['success'] = false;
        $output['message'] = "Sorry, there was an error uploading your file.";
    }
} else {
    $sql = "INSERT INTO `goods_list` (
        `p_id`, `p_name`, `p_pic`, `p_type`, `p_price`,
        `p_discount`, `p_intro`, `p_weight`, `p_storage`, `p_color`,
        `p_loc`, `p_breed`, `p_process`, `p_roast`, `p_flavor`,
        `p_sale`, `p_update`
    ) VALUES (
        ?,?,?,?,?,
        ?,?,?,?,?,
        ?,?,?,?,?,?, NOW()
    )";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['pId'],
        $_POST['pName'],
        null, // Store the file name
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
    $output['success'] = true;
    $output['message'] = "No file uploaded";
}


echo json_encode($output);

