<?php
require __DIR__ . '/m_db_connect.php';


$p_id = isset($_GET['p_id']) ? ($_GET['p_id']) : 0;
if (empty($p_id)) {
  header('Location: p_mainpage.php'); exit;
}
$sql = "SELECT * FROM goods_list WHERE p_id='$p_id'";




$r = $pdo->query($sql)->fetch();
if (empty($r)) {
  header('Location: p_mainpage.php'); exit;
}


# header('Content-Type: application/json'); # 告訴瀏覽器內容為 JSON
# echo json_encode($r);
?>
<?php include __DIR__ . "/segs/header.php"; ?>
<style>
  form .mb-3 .form-text {
    color: red;
  }
</style>


<?php include __DIR__ ."/segs/navbar.php";?>
<div class="container mt-3">
  <div class="row">
    <div class="col-6">
    <div class="card">
  <div class="card-body mt-3">
    <h5 class="card-title">編輯產品資訊</h5>
    <form name="form1" onsubmit="sendData(event)" novalidate>
    <div class="mb-3">
    <label for="pId" class="form-label">商品編號</label>
    <p><?= $r['p_id'] ?></p>
    <input type="hidden" class="form-control" name="pId" id="pId" value="<?= $r['p_id'] ?>" >
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pName" class="form-label">商品名稱</label>
    <input type="text" class="form-control" name="pName" id="pName" value="<?= $r['p_name'] ?>">
    <div  class="form-text">
    </div>
  </div>
 
  <div class="mb-3">
    <label for="pPic" class="form-label">圖片</label>
    <input type="file" name="avatar" accept="image/*">
    <div><img src="" alt="" id="avatar" width="300px"></div>
    <div class="form-text">先前照片<span><?= $r['p_pic'] ?></span><img width="100px" src="uploads/<?= $r['p_pic'] ?>" alt="">
    <input type="text" hidden name="old_avatar" value="<?= $r['p_pic'] ?>">
    </div>
</div>
<div class="mb-3">
    <label for="pType" class="form-label">類型</label>
    <input type="text" class="form-control" name="pType" id="pType" value="<?= $r['p_type'] ?>">
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pPrice" class="form-label">價格</label>
    <input type="text" class="form-control" name="pPrice" id="pPrice" value="<?= $r['p_price'] ?>">
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pDiscount" class="form-label">折扣後價格</label>
    <input type="text" class="form-control" name="pDiscount" id="pDiscount" value="<?= $r['p_discount'] ?>">
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pIntro" class="form-label">介紹</label>
    <textarea class="form-control" name="pIntro" id="pIntro" rows="3"><?= $r['p_intro'] ?></textarea>
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pWeight" class="form-label">重量</label>
    <input type="text" class="form-control" name="pWeight" id="pWeight" value="<?= $r['p_weight'] ?>">
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pStorage" class="form-label">庫存</label>
    <input type="text" class="form-control" name="pStorage" id="pStorage" value="<?= $r['p_storage'] ?>">
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pColor" class="form-label">顏色</label>
    <input type="text" class="form-control" name="pColor" id="pColor" value="<?= $r['p_color'] ?>">
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pLoc" class="form-label">產地</label>
    <input type="text" class="form-control" name="pLoc" id="pLoc" value="<?= $r['p_loc'] ?>">
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pBreed" class="form-label">品種</label>
    <input type="text" class="form-control" name="pBreed" id="pBreed" value="<?= $r['p_breed'] ?>">
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pProcess" class="form-label">處理法</label>
    <input type="text" class="form-control" name="pProcess" id="pProcess" value="<?= $r['p_process'] ?>">
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pRoast" class="form-label">烘焙程度</label>
    <input type="text" class="form-control" name="pRoast" id="pRoast" value="<?= $r['p_roast'] ?>">
    <div  class="form-text">
    </div>
  </div>
  
  <div class="mb-3">
    <label for="pSale" class="form-label">套用優惠</label>
    <select name="pSale">
    <option>s_000</option>
    <option>s_001</option>
    <option>s_002</option>
</select>
    <div  class="form-text">
    </div>
  </div>
  <div class="mb-3">
    <label for="pUpdate" class="form-label">最新日期</label>
    <input type="hidden" class="form-control" name="pUpdate" id="pUpdate" value="<?= $r['p_update'] ?>">
    <div  class="form-text">
    </div>
  <button type="submit" class="btn btn-primary">新增</button>
</form>
  </div>
</div>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">編輯結果</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-success" role="alert">
          編輯成功
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
        <a href="p_mainpage.php" class="btn btn-primary">到列表頁</a>
      </div>
    </div>
  </div>
</div>
<?php include __DIR__ ."/segs/scripts.php";?>
<script>
  const pnameField = document.form1.pName;
  const pidField = document.form1.pId;  
  const ppriceField = document.form1.pPrice;
  const pstorageField = document.form1.pStorage;


 
  const pdiscountField = document.querySelector("#pDiscount");
  const modal = new bootstrap.Modal('#exampleModal');
  const modalBody = document.querySelector('#exampleModal .modal-body');

  const field = document.forms[0].avatar;
    field.addEventListener('change', (e)=>{
console.log(field.files[0]);
const url = URL.createObjectURL(field.files[0]);
avatar.src = url;
    });
  const sendData = e => {
  e.preventDefault();
  pidField.nextElementSibling.innerHTML='';
  pidField.style.border='1px solid #CCC';
  pnameField.nextElementSibling.innerHTML='';
  pnameField.style.border='1px solid #CCC';
  ppriceField.nextElementSibling.innerHTML='';
  ppriceField.style.border='1px solid #CCC';
  pstorageField.nextElementSibling.innerHTML='';
  pstorageField.style.border='1px solid #CCC';
 


  let isPass = true;
 
  if(pnameField.value.length < 1){
    isPass = false;
    pnameField.nextElementSibling.innerHTML='請輸入商品名稱';
    pnameField.style.border = '1px solid red';
  }


  


  if(ppriceField.value.length < 1){
    isPass = false;
    ppriceField.nextElementSibling.innerHTML='請輸入商品價格';
    ppriceField.style.border = '1px solid red';
  }


  if(ppriceField.value < 0){
    isPass = false;
    ppriceField.nextElementSibling.innerHTML='商品價格最低為0';
    ppriceField.style.border = '1px solid red';
  }


  if(pstorageField.value < 0){
    isPass = false;
    pstorageField.nextElementSibling.innerHTML='商品庫存最少為0';
    pstorageField.style.border = '1px solid red';
  }


  if(pstorageField.value.length < 1){
    isPass = false;
    pstorageField.nextElementSibling.innerHTML='請輸入商品庫存數量';
    pstorageField.style.border = '1px solid red';
  }


  if(pdiscountField.value == ""){
    pdiscountField.value = ppriceField.value;
  }




  if(isPass){
    const fd = new FormData(document.form1);


    fetch('p_edit_api.php',{
    method:'POST',
    body: fd,
  }).then(r =>r.json())
   .then(result=>{
    console.log(result);


    if(result.success){
      modalBody.innerHTML = `
            <div class="alert alert-success" role="alert">
              新增成功
            </div>`;
    }else {modalBody.innerHTML = `
            <div class="alert alert-danger" role="alert">
              沒有新增
            </div>`;
            }
             modal.show();
   })
   .catch(ex => console.log(ex))
  }
};
</script>
<?php include __DIR__ ."/segs/footer.php";?>

