<?php  
$title = "商品列表";
$pageName = "p_list";
$perPage = 4; # 表示一頁最多有 4 筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

if ($page < 1) {
  header('Location: ./'); # 跳轉頁面
  exit; # 結束程式, die()
}

require __DIR__ . '/m_db_connect.php';

$t_sql = "SELECT COUNT(1) FROM goods_list ";
# 取得總筆數

$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = 0;
$rows = [];
if ($totalRows) {
  # 計算總頁數
  $totalPages = ceil($totalRows / $perPage);
  if ($page > $totalPages) {
    header('Location: ?page=' . $totalPages); # 跳轉頁面到最後一頁
    exit; # 結束程式
  }
 # 取得該頁的資料
 $sql = sprintf(
  "SELECT 
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
GROUP_CONCAT(flavor_list.f_name SEPARATOR '， ') AS flavors
FROM
  goods_list
LEFT JOIN coffee_mix_flavor ON goods_list.p_id = coffee_mix_flavor.p_id
LEFT JOIN flavor_list ON flavor_list.f_id = coffee_mix_flavor.f_id
GROUP BY p_id
ORDER BY p_id
LIMIT %s, %s;",
  ($page - 1) * $perPage,
  $perPage
);
$rows = $pdo->query($sql)->fetchAll();
}
?>
<?php

 include __DIR__ . "/segs/header.php"; 
 include __DIR__ . "/segs/navbar.php"; ?>

<div class="container">
<div class="row">
<nav aria-label="Page navigation example">
  <ul class="pagination">
  
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for ($i = $page - 5; $i <= $page + 5; $i++) :
            if ($i >= 1 && $i <= $totalPages) :
          ?>
      <li class="page-item <?= $i==$page ? 'active' : '' ?>">
      <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
      <?php
            endif;
          endfor; ?>
  </li>
    
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    
  </ul>
</nav>
    <div class="col">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
          <th>刪除<i class="fa-solid fa-trash"></i></th>
          <th>編輯<i class="fa-solid fa-pen-to-square"></i></th>
          <th>序號</th>
            <th>名稱</th>
            <th>照片</th>
            <th>類別</th>
            <th>價格</th>
            <th>折扣後價格</th>
            <th>介紹</th>
            <th>重量</th>
            <th>庫存</th>
            <th>顏色</th>
            <th>產地</th>
            <th>品種</th>
            <th>處理法</th>
            <th>烘焙程度</th>
            <th>風味</th>
            <th>適用優惠</th>
            <th>最後更新時間</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r) : ?>
            <tr>
            <td>
            <a href="p_del.php?p_id=<?= $r['p_id'] ?>" onclick="return confirm(`是否要刪除編號為 <?= $r['p_id'] ?> 的資料?`)">
                  <i class="fa-solid fa-trash"></i>
                </a>
              </td>
              <td>
                <a href="p_edit.php?p_id=<?= $r['p_id'] ?>">
                  <i class="fa-solid fa-pen-to-square"></i>
                </a>
              </td>
              <td><?= $r['p_id'] ?></td>
              <td><?= $r['p_name'] ?></td>
              <td><img src="uploads/<?= $r['p_pic'] ?>" alt=""></td>
              
              <td><?= $r['p_type'] ?></td>
              <td><?= $r['p_price'] ?></td>
              <td><?= htmlentities($r['p_discount']) ?></td>
              <td><?= $r['p_intro'] ?></td>
              <td><?= $r['p_weight'] ?></td>
              <td><?= $r['p_storage'] ?></td>
              <td><?= $r['p_color'] ?></td>
              <td><?= $r['p_loc'] ?></td>
              <td><?= $r['p_breed'] ?></td>
              <td><?= $r['p_process'] ?></td>
              <td><?= $r['p_roast'] ?></td>
              <td><?= $r['flavors'] ?></td>
              <td><?= $r['p_sale'] ?></td>
              <td><?= $r['p_update'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include __DIR__ . "/segs/scripts.php"; ?>
<script>
  const data = <?= json_encode($rows)  ?>;
  const deleteOne = (p_id) => {
    if (confirm(`是否要刪除編號為 ${p_id} 的資料??`)) {
      location.href = `p_del.php?p_id=${p_id}`;
    }
  };
</script>
<?php include __DIR__ . "/segs/footer.php"; ?>